


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <!--index.php-->
    <? 
    include_once "db.php";
    $num=$_GET['num'];
      $query = "select * from gallery where num = '$num'";
    $result = mysqli_query($db,$query);
     $row=mysqli_fetch_array($result);

    ?>

    <div class="btn">
        <a href="index.php">목록</a>
        <a href="modify.php?num=<?=$num?>">수정</a>
        <a href="delete.php?num=<?=$num?>">삭제</a>
    </div>
    <table>
       <tr>
           <td><?=$row['name']?></td>
       </tr>
       <tr>
        <td>
        
         <?=$row['contents']?>
       </td>
       </tr>
    </table>
    <style>
        .btn{
            text-align:center;
            margin:50px 0;
        }
        table {
            border-collapse: collapse
        }

        th,
        td {
            padding: 15px 0;
            border-top: 1px solid #ddd;
            ;

        }

        img {
            
            vertical-align: middle;
        }

    </style>



</body>

</html>
