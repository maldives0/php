<?
    include_once "db.php";
    

    if(isset($_GET['num'])){
        $num = $_GET['num'];        
        $query = "delete from test where num = $num";
    }else{
        $query = "delete from test";
    }
    $result = mysqli_query($db,$query);

    echo "<script>location.href = 'index.php';</script>";
?>


