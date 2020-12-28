<?php
    //write-ok.php

    include_once "db.php";

    $table = "create table gallery(
        num int(11) auto_increment,
        name varchar(100) not null,
        file varchar(200) not null,
        contents text not null,
        primary key (num)    
    )";

    mysqli_query($db,$table); //테이블 생성
    @mkdir('./image'); //폴더 생성

    $name = $_POST['name'];
    $file = $_FILES['file'];
    $contents = $_POST['contents'];

    //파일 정보
    $tmp = $file['tmp_name'];
    $fileUrl = 'image/'.$file['name'];
    $fileType = explode('/',$file['type']);

    //이미지 등록
    if($fileType[0] === 'image'){
        move_uploaded_file($tmp, $fileUrl);    
    }else{
        echo "이미지 형식이 아닙니다.";
    }

    //db 저장
    $query = "insert into gallery (name,file,contents) values ('$name','$fileUrl','$contents')";
    mysqli_query($db,$query);

    
    echo "<script>location.href = 'index.php';</script>";

    
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
