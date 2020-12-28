<? 

include_once "db.php";

$query = "create table contact(
num int(11) auto_increment,
name varchar(100),
email varchar(100),
message text,
primary key(num)
)";

sql($query);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "insert into contact(name,email,message) values('$name','$email','$message')";
sql($query);


echo "<script>location.href='admin.php'</script>";
?>