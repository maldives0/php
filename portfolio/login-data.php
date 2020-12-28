<? 
include_once "db.php";
$id = $_POST['id'];
$pw = $_POST['pw'];
 
$query = "select * from admin where id='$id'";
$result = sql($query);
$row = mysqli_fetch_array($result);

echo "<pre>";
echo var_dump($row) ;
if($row){
    if($row['id'] === $id && $row['pw'] === $pw){
        @session_start();
        $_SESSION['id'] = $row['id'];
        echo "succuess";
        
    }else{
        echo "pw_fail";
    }
   

}else{
    echo "id_fail";
}


?>