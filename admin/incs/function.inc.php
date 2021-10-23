<?php

function checkNewsImg($file) {
     $fileName =  $file['name'];
   $fileTmpName =  $file['tmp_name'];
   $fileSize =  $file['size'];
   $fileError =  $file['error'];
   $fileType =  $file['type'];

   $fileExt = explode('.', $fileName);
   $fileActualExt = strtolower(end($fileExt));

   $allowed = array('png', 'jpg', 'svg', 'gif', 'jpeg', 'webp');
   $fileNameNew = "";


    if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
        if ($fileSize < 1000000000) {
            $ImgId = uniqid('Yray`s_ART', true);
          $fileNameNew = $ImgId.".".$fileActualExt;
          $fileDestination = "../../img/".$fileNameNew;

            return array($ImgId, $fileNameNew, $fileDestination, $fileTmpName);
            

        }
        else {
          return false;
          exit();
        }
    }

    else {
     return false;
          exit();

    }
  }
  else {
    
    return false;
    
          exit();

  }
}
function assignImage($img1, $img2, $img3, $img4, $img5){

    if ($img1 !== false) {

        $img1name = $img1[1];
        # code...
    }
    else if ($img1 === false && $img2 !== false) {
        $img1name = $img2[1];
    }
    else if ($img1 === false && $img2 === false && $img3 !== false) {
      $img1name = $img3[1];
    }
    else if ($img4 !== false && $img1 === false && $img2 === false && $img3 === false) {
      $img1name = $img4[1];
    }
    else if ($img5 !== false && $img1 === false && $img2 === false && $img3 === false) {
      $img1name = $img5[1];
    }
    else {
      header("location:../?error=NoImage");
      exit();
    }
    if ($img2 !== false && $img1name != "" ) {

        $img2name = $img2[1];
        # code...
    }
    else if ($img2 === false && $img3 !== false) {
        $img2name = $img3[1];
    }
    else if ($img2 === false && $img4 !== false) {
      $img2name = $img4[1];
    }
    else if ($img2 === false && $img5 !== false) {
      $img2name = $img5[1];
    }
    
    else {
        $img2name = "";
    }
    
    if ($img3 !== false && $img2name != "") {

        $img3name = $img3[1];
        # code...
    }
    else if ($img3 === false && $img4 !== false) {
        $img3name = $img4[1];
    }
    else if ($img3 === false && $img5 !== false) {
      $img3name = $img5[1];
    }
    
    
    else {
        $img3name = "";
    }

    if ($img4 !== false && $img3name != "") {

        $img4name = $img4[1];
        # code...
    }
    else if ($img4 === false && $img5 !== false) {
        $img4name = $img5[1];
    }
   
    
    
    else {
        $img4name = "";
    }

    if ($img5 !== false && $img4name != "") {

        $img5name = $img5[1];
        # code...
    }
    
   
    
    
    else {
        $img5name = "";
    }

    return array($img1name, $img2name, $img3name, $img4name, $img5name);

}
function  uploadArticle($conn, $title, $description, $Category,  $file1, $file2, $file3, $file4, $file5){

    

    
    $img1 = checkNewsImg($file1);
    $img2 = checkNewsImg($file2);
    $img3 = checkNewsImg($file3);
    $img4 = checkNewsImg($file4);
    $img5 = checkNewsImg($file5);
    $assignImage = assignImage($img1, $img2, $img3, $img4, $img5);
    $img1name = $assignImage[0];
    $img2name = $assignImage[1];
    $img3name = $assignImage[2];
    $img4name = $assignImage[3];
    $img5name = $assignImage[4];
        

    $PostId = uniqid("Yray", true);
     $sql = "INSERT INTO post (`postId`, `PostName`, `postText`, `category`, `Photo1`, `Photo2`, `Photo3`, `Photo4`, `Photo5`)
      VALUEs (?, ?, ?, ?, ?, ?, ?, ?, ?);";
          
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location:../?error=stmtfailed");
            exit();
        }
        // $PostId, $title, $description, $Category, $tags, $img1name, $img2name, $img3name, $img4name, $img5name, $Facebook, $Instagram, $Artstation
         mysqli_stmt_bind_param($stmt, "sssssssss", $PostId, $title, $description, $Category, $img1name, $img2name, $img3name, $img4name, $img5name);
         mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

    
        //   move_uploaded_file($fileTmpName, $fileDestination);
        if ($img1 !== false) {

        move_uploaded_file($img1[3], $img1[2]);
        # code...
    }
    if ($img2 !== false) {
        
        move_uploaded_file($img2[3], $img2[2]);
        # code...
    }
    if ($img3 !== false) {
        
        move_uploaded_file($img3[3], $img3[2]);
        # code...
    }
    if ($img4 !== false) {
        
        move_uploaded_file($img4[3], $img4[2]);
        # code...
    }
    if ($img5 !== false) {
        
        move_uploaded_file($img5[3], $img5[2]);
        # code...
    }

}