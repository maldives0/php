<? 
include_once "db.php";

$query = "create table admin(
num int(11) auto_increment,
id varchar(50),
pw varchar(150),
primary key(num)
)";
sql($query);

$id = $_POST['id'];
$pw = $_POST['pw'];

$query = "insert into admin(id,pw) values('$id','$pw')";
sql($query);



echo "<script>location.href = 'admin.php';</script>";
?>