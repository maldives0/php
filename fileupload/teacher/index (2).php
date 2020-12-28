<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<?
    include_once "db.php";
    $query = "select * from gallery order by num desc";
    $result = mysqli_query($db,$query);
?>

<table>
    <thead>
        <tr>
            <th>번호</th>
            <th>제목</th>
        </tr>
    </thead>
    <tbody>
       
        <?  while($row = mysqli_fetch_array($result) ){  ?>
        <tr>
            <td><?=$row['num']?></td>
            <td>
                <a href="view.php?num=<?=$row['num']?>">
                    <?
                            $imgSrc = explode('/',$row['file']);    //image/01.jpg
//                            var_dump($imgSrc);
                            if($imgSrc[1] != ''){                     
                                echo "<img src=".$row['file'].">";
                            }
                    ?>
                    <?=$row['name']?>
                </a>
            </td>
        </tr>
        <? } ?>
        
    </tbody>
</table>


<a href="write.php">글쓰기</a>


<style>
    table{border-collapse: collapse; width:50%; margin:0 auto;}
    th{background:#eee;}
    th,td{padding:15px 0; border-top:1px solid #ddd;}
    img{width:100px; vertical-align: middle;}
</style>







</body>

</html>
