<?php
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$calender=$_POST["calender"];
$gender=$_POST["gender"];
$Input = $_POST["select"];
$file=$_FILES["Document"]["name"];
$filesize=$_FILES["Document"]["size"];
$filetype=pathinfo($file,PATHINFO_EXTENSION);
$file_tmp=$_FILES["Document"]["tmp_name"];

if ($filetype == "pdf") {
    if ($filesize < 200000) {
        if ($Input == "Aadhar Card") {
            $actual_path = "Adhaar/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
        if ($Input == "License") {
            $actual_path = "License/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
        if ($Input == "Voter Id") {
            $actual_path = "Voter/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
        if ($Input == "Pan") {
            $actual_path = "Pan/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
    } else {
        echo "File Size Exceeds!<br>";
    }
} else {
    echo "Only pdf's are allowed!<br>";
}

$file_name=$_FILES["uploadfile"]["name"];
$file_size=$_FILES["uploadfile"]["size"];
$file_type=pathinfo($file_name,PATHINFO_EXTENSION);
$tmp=$_FILES["uploadfile"]["tmp_name"];
$actualImg_path = "Image/" . $file_name;
if ($file_type == "jpeg" || $file_type== "png" || $file_type == "jpg") {
    if ($file_size < 10000000) {
        move_uploaded_file($tmp, $actualImg_path);
    } else {
        echo "Image Size Exceeds!<br>";
    }
} else {
    echo "Wrong File Selected";
}

if ($file_type == "jpeg") {
    echo '<img src="Image/" alt="Image" width="200px" height="200px" ><br>';
}
if ($file_type == "jpg") {
    echo '<img src="Image/" alt="Image" width="200px" height="200px"><br>';
}
if ($file_type == "png") {
    echo '<img src="Image/" alt="Image" width="200px" height="200px"><br>';
}
echo "Name:-".$firstname." ".$lastname."<br>";
echo "DOB:-".$calender."<br>";
echo "Gender:-".$gender."<br>";
echo "ID Proof Selected:-".$file."</br>";
if ($Input == "Aadhar Card") {
    echo '<a href="Adhaar/"><input type="submit" value="Download" /></a><br>';
}
if ($Input == "License") {
    echo '<a href="License/"><input type="submit" value="Download" /></a><br>';
}
if ($Input == "Voter Id") {

    echo '<a href="Voter/"><input type="submit" value="Download" /></a><br>';
}
if ($Input == "Pan") {
    echo '<a href="Pan/"><input type="submit" value="Download" /></a><br>';
}
?>
