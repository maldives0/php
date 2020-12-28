 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="./s282/js/HuskyEZCreator.js" charset="utf-8"></script>
</head>

<body>

    <style>
        article {
            width: 1000px;
            margin: 0 auto;
        }

        h2 {
            font-size: 24px;
            border-bottom: 1px solid #000;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            margin: 0 auto;
        }

        li {
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        li label {
            display: inline-block;
            width: 100px;
        }

        p {
            text-align: center;
        }

        textarea {
            width: 99%;

        }

    </style>

    <!--write.php-->
    <form action="write-ok.php" method="post" enctype="multipart/form-data">
        <article>
            <h2>프로젝트 입력</h2>

            <ul>
                <li><label>제목</label><input type="text" name="name"></li>
                <li><label>종류</label><input type="text" name="type"></li>
                <li><label>사진파일</label><input type="file" name="imgs"></li>
                <li><label>시작일</label><input type="month" name="start"></li>
                 <li><label>마감일</label><input type="month" name="finish"></li>
                <li><label>설명</label><textarea id="ir1" name="txt"></textarea></li>
                 <li><label>Url</label><input type="url" name="url"></li>
            </ul>
            <p><input type="submit" ></p>
            <p><input type="reset" ></p>
        </article>
    </form>

   

</body>

</html>
