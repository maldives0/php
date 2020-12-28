  <?
    
include_once "db.php";

    $table = "create table portfolio(
    num int(11) auto_increment,
    name varchar(100) not null,
    type varchar(100) not null,
    imgs varchar(200) not null,
    url varchar(200) not null,
    start text not null,
    finish text not null,
    txt text not null,
    primary key(num)
    )";

mysqli_query($db,$table);

@mkdir('img');

       $name = $_POST['name'];
        $type = $_POST['type'];
        $file = $_FILES['imgs'];
        $url = $_POST['url'];
        $start = $_POST['start'];
        $finish = $_POST['finish'];
        $txt = $_POST['txt'];

$imgType=explode('/',$file['type']);
$tmp = $file['tmp_name'];
$imgUrl = 'img/'.$file['name'];
if($imgType[0] === 'image'){
    move_uploaded_file($tmp,$imgUrl);
}else{
    echo "이미지 형식을 확인하세요!";
} 

 $query = "insert into portfolio(name,type,imgs,url,start,finish,txt) values ('$name','$type','$imgUrl','$url','$start','$finish','$txt')";
 mysqli_query($db,$query);

echo "<script>location.href='index.php'</script>";


?>
