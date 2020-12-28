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
            <h2>정보입력</h2>

            <ul>
                <li><label>제목</label><input type="text" name="name"></li>
                <li><label>첨부파일</label><input type="file" name="file"></li>
                <li><label>내용</label><textarea id="ir1" name="contents"></textarea></li>
                <li>
                    <label>E-mail</label>
                        <input type="email" name="email">
                   
                </li>
            </ul>
            <p><input type="submit" value="저장"></p>
        </article>
    </form>

    <script type="text/javascript">
        var oEditors = [];

        // 추가 글꼴 목록
        //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "ir1",
            sSkinURI: "./s282/SmartEditor2Skin.html",
            htParams: {
                bUseToolbar: true, // 툴바 사용 여부 (true:사용/ false:사용하지 않음)
                bUseVerticalResizer: true, // 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
                bUseModeChanger: true, // 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
                //bSkipXssFilter : true,		// client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
                //aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
                fOnBeforeUnload: function() {
                    //alert("완료!");
                }
            }, //boolean
            fOnAppLoad: function() {
                //예제 코드
                //oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
            },
            fCreator: "createSEditor2"
        });

        function submitContents(elClickedObj) {
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []); // 에디터의 내용이 textarea에 적용됩니다.

            // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.

            try {
                elClickedObj.form.submit();
            } catch (e) {}
        }
        //editor내용을 textarea에 복사 후 write_ok.php로 이동
        var btnSave = document.querySelector('input[type=submit]');
        btnSave.addEventListener('click',submitContents);

    </script>



</body>

</html>
