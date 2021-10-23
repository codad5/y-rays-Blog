<?php

if (!isset($_POST['submit'])) {
    # code...
    header('Location:../');
    exit();
}
require "function.inc.php";
require "dbh.inc.php";

foreach ($_POST as $key){
    # code...
    if (empty($key)) {
        # code...
    header('Location:../?error=emptyform');
    exit();

    }
}

$title = $_POST['title'];
$description = $_POST['Description'];
// $tags = $_POST['tags']; 
$Category = $_POST['Category']; 
// $Artstation = $_POST['Artstation'];
// $Instagram = $_POST['Instagram'];
// $Facebook = $_POST['Facebook'];
$file1 = $_FILES['image1'];
$file2 = $_FILES['image2'];
$file3 = $_FILES['image3'];
$file4 = $_FILES['image4'];
$file5 = $_FILES['image5'];
// var_dump($file);

 if (uploadArticle($conn, $title, $description, $Category, $file1, $file2, $file3, $file4, $file5) !== false) {

        header("Location:../index.php?error=uploadsucess");
        exit();
        # code...
    }
;
// CREATE TABLE `ridoxstudio`.`gallerypost` ( `PostId` INT(11) NOT NULL , `titlte` VARCHAR(500) NOT NULL , `description` TEXT NOT NULL , `img` VARCHAR(300) NOT NULL , PRIMARY KEY (`PostId`)) ENGINE = InnoDB;)