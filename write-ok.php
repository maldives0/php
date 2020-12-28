  
<?php
    
    include_once "db.php";

    $name = $_GET['name'];
    $contents = $_GET['contents'];
    $date = date('y-m-d');
    
    $query = "insert into test(name,contents,date) values (
        '$name','$contents','$date'
    );";

    mysqli_query($db,$query);

    echo "<script>location.href = 'index.php';</script>";

?>










