<?
    include_once "db.php";

    $query = "select * from test order by num desc limit 0,10";  //asc
    //order by num desc 최신글 순서
    //order by num asc  작성한 글순서
    //limit 0,5  0자리에서 5개의 게시물 선택함

    $result = mysqli_query($db,$query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <!--index.php-->
    <article>
        <h2>cafe 회원 리스트</h2>
        <table>
            <thead>
                <tr><th>순번</th><th>이름</th><th>소개</th><th>날짜</th><th>버튼</th></tr>
            </thead>
            <tbody>
               
                <? while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?=$row['num']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['contents']?></td>
                    <td><?=$row['date']?></td>
                    <td>
                        <a href="delete.php?num=<?=$row['num']?>">[삭제]</a>
                    </td>
                </tr>
                <? } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <a href="write.php">등록하기</a>
                        <a href="delete.php">삭제하기</a>
                    </td>
                </tr>
            </tfoot>
        </table>
        
        
        
    </article>
    <style>
        table{border-collapse: collapse; width:60%; margin:0 auto;}
        table th{background:#eee;}
        table th,td{
            padding:10px 0; text-align:center; border:1px solid #ddd;
        }
    </style>







</body>

</html>
