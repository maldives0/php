
<!--delete.php-->

<?
    include_once "db.php";
    $num = $_GET['num'];
    $query = "delete from gallery where num = '$num'";
    mysqli_query($db,$query);

    echo "<script>location.href = 'index.php';</script>";
?>



