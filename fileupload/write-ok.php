  <?php
    
include_once "db.php";

$table = "create table gallery(
num int(11) auto_increment,
name varchar(100)not null,
file varchar(200) not null,
contents text not null,
primary key(num)
)";
mysqli_query($db,$table);

@mkdir( 'image');

   $name = $_POST['name'];
    $file = $_FILES['file'];
    $contents = $_POST['contents'];
    $email = $_POST['email'];

$fileType=explode('/',$file['type']);
$tmp=$file['tmp_name'];
$fileUrl = 'image/'.$file['name'];

                  var_dump($email);
                  
if($fileType[0] === 'image'){
    move_uploaded_file($tmp,$fileUrl);
}else{
    echo "이미지 형식을 확인하세요.";
}

$query = "insert into gallery(name,file,contents,email) values ('$name','$fileUrl','$contents','$email')";
mysqli_query($db,$query);

echo "<script>location.href='index.php'</script>";


?>
