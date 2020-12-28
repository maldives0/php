<?php
    //modify-ok.php

    include_once "db.php";

    $num =  $_POST['num'];
    $name = $_POST['name'];
    $file = $_FILES['file'];
    $contents = $_POST['contents'];

    //파일 정보
    $tmp = $file['tmp_name'];
    $fileUrl = 'image/'.$file['name'];
    $fileType = explode('/',$file['type']);

    
    //이미지 등록
    if(!empty($file['name'])){
        if($fileType[0] === 'image'){
            move_uploaded_file($tmp, $fileUrl);    
        }else{
            echo "이미지 형식이 아닙니다.";
        }
        $query = "update gallery set file='$fileUrl' where num='$num'";
        mysqli_query($db,$query);
    }

    //db 저장
    $query = "update gallery set name='$name',contents='$contents' where num='$num'";
    mysqli_query($db,$query);

    
//    echo "<script>location.href = 'index.php';</script>";

    
/*
    echo "<pre>";
    var_dump($fileType);
*/

/*   
    echo "$name <br> $contents <br>";
    echo $file['name'];

    echo "<pre>";
    var_dump($file);
*/


//image/jpeg
?>
