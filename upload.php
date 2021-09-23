<?php
session_start();
include('Myconnect.php');
$type=$_GET['type'];

if (isset($_POST['submit']))
{
    if($type=="image")
    {
        upload_image();
    }
    elseif($type=="file")
    {
        upload_resume();
    }
    elseif ($type=="logo") {
         upload_logo();
    }
}

function upload_image(){
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.jpg','.JPG');

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
    {
        // Rename file
        $newfilename = $_SESSION['sid'] . $file_ext;
        if (file_exists("uploads/images/" . $newfilename))
        {
            // file already exists error
            unlink("uploads/images/".$newfilename);
        }
            $imageInformation = getimagesize($_FILES['file']['tmp_name']);
            //print_r($imageInformation);

            $imageWidth = $imageInformation[0]; //Contains the Width of the Image

            $imageHeight = $imageInformation[1]; //Contains the Height of the Image

            if ($imageWidth <= 700 && $imageHeight <= 700) {
                move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/images/" . $newfilename);
                header('location:jobseeker/profile.php?msg=suc-img');
            } else{
                echo "image size is too large";
            }

    }
    elseif (empty($file_basename))
    {
        // file selection error
        echo "Please select a file to upload.";
    }
    elseif ($filesize > 200000)
    {
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }
}

/* function upload image ends here */

function upload_logo()
{
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.jpg','.JPG');

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
    {
        // Rename file
        $newfilename = $_SESSION['companyname']. $file_ext;
        if (file_exists("uploads/logo/" . $newfilename))
        {
            // file already exists error
            unlink("uploads/logo/".$newfilename);
        }    
            $imageInformation = getimagesize($_FILES['file']['tmp_name']);
            //print_r($imageInformation);

            $imageWidth = $imageInformation[0]; //Contains the Width of the Image

            $imageHeight = $imageInformation[1]; //Contains the Height of the Image

            if ($imageWidth <= 3000 && $imageHeight <= 3000) {

                move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/logo/" . $newfilename);
                header('location:employer/profile.php?msg=suc-logo');
            } 
            else{
                echo "image size is too large";
            }

    }
    elseif (empty($file_basename))
    {
        // file selection error
        echo "Please select a file to upload.";
    }
    elseif ($filesize > 200000)
    {
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }
}

/* function upload_logo ends here */

function upload_resume()
{
    include('Myconnect.php');
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["file"]["size"];
    $allowed_file_types = array('.doc','.docx','.jpg','.pdf');

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
    {
        // Rename file
        $newfilename = $_SESSION['sid']. $file_ext;
        if (file_exists("uploads/resume/" . $newfilename))
        {
            // file already exists error
            unlink("uploads/resume/".$newfilename);
        }
            move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/resume/" . $newfilename);
            $resumesid=$_SESSION['sid'];
            $upquery= "update jobseeker set resume=$resumesid WHERE sid=$resumesid";
            $cmd=mysqli_query($conn,$upquery);
            if (!$cmd)
            {
                echo("Error description: " . mysqli_error($conn));
            }
            else{
               //echo "File uploaded succesfully ; <a href='jobseeker/profile.php'> Go back to profile </a>";
               header('location:jobseeker/profile.php?msg=suc-res');
            }

    }
    elseif (empty($file_basename))
    {
        // file selection error
        echo "Please select a file to upload.";
    }
    elseif ($filesize > 500000)
    {
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["file"]["tmp_name"]);
    }
}
?>