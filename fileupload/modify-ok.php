  <?php
    
include_once "db.php";
//input의 name값[]
 $num = $_POST['num'];
   $name = $_POST['name'];
    $file = $_FILES['file'];
    $contents = $_POST['contents'];
 $email = $_POST['email'];

//파일정보
$fileType=explode('/',$file['type']);
$tmp=$file['tmp_name'];
$fileUrl = 'image/'.$file['name'];

                


if(!empty($file['name'])){
    
    //이미지등록                  
if($fileType[0] === 'image'){
    move_uploaded_file($tmp,$fileUrl);
}else{
    echo "이미지 형식을 확인하세요.";
}
    $query = "update gallery set file= '$fileUrl' where num='$num'";
    mysqli_query($db,$query);
}

//db저장
$query = "update gallery set name= '$name', contents='$contents', email='$email' where num='$num'";

mysqli_query($db,$query);

echo "<script>location.href='index.php'</script>";


?>
