<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
    <title>portfolio</title>
    <link rel="stylesheet" href="css/style.css" text="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/active.js"></script>

</head>

<body>
    <?
    include_once "db.php";
    $query = "select * from portfolio";
    $result = sql($query);
    ?>

    <header>
        <div class="header f_b">
            <div class="logo">
                <a href="#">Frontend Developer <br>
                    Juyoung Jung</a>
            </div>
            <nav>
                <p>View <a href="#">my work</a>, <a href="#"> about me</a> or<a href="#"> reach
                        out</a>.</p>
            </nav>
        </div>

    </header>
   
    <main role="main">
        
        <div class="lab">
            <ul class="lab_img">
            <? while($row = mysqli_fetch_array($result)){ ?>
                <li>
                    <? 
                       $imgSrc= explode('/',$row['imgs']);
            if($imgSrc[1] != ''){
                echo  "<img src=".$row['imgs'].">";
                }
                        ?>
                </li>
                <?  } ?>
            </ul>
            <ul class="indi">
            </ul>
        </div>

        <div class="intro">
            <div class="hello">
                <h4>hello there</h4>
            </div>
            <div class="intro_msg">
                <h2>Frontend Developer를 꿈꾸는 정주영입니다. </h2>


            </div>

        </div>
          <?
    include_once "db.php";
    $query = "select * from portfolio";
    $result = sql($query);
    ?>
        <div class="content">
            <? while($row = mysqli_fetch_array($result)){ ?>

            <figure class="c_<?=$row['num'] ?>">
                <p>
                    <? 
                       $imgSrc= explode('/',$row['imgs']);
                  if($imgSrc[1] != ''){
                       echo  "<img src=".$row['imgs'].">";
                           }
                        ?>
                </p>
                <figcaption>
                    <div>Web</div>
                    <h4>

                        <a href='<?=$row['url'] ?>'><?=$row['name'] ?></a>

                        <span>:</span>
                        <span>
                     <?
                            echo   "Period(".$row['start']."-".$row['finish'].")"; 
                            ?>
                        </span> 
                        <span>─</span>
                        <span><?=$row['txt']?></span>
                    </h4>
                </figcaption>
            </figure>

            <?  } ?>
        </div>

    </main>
    <footer>
        <div class="me f_a">
            <div class="reach">
                <h2>
                    Contact Me
                </h2>
                <div>
                    <h4>Github</h4>
                    <p>
                        <a href="https://github.com/maldives0">https://github.com/maldives0</a>
                    </p>
                </div>
                <div>
                    <h4>Gmail</h4>
                    <p>
                        maliethy@gamil.com
                    </p>
                </div>
            </div>
            <div class="skills">
                <h2>Using Skills</h2>
                <ul>
                    <li>
                        HTML
                    </li>
                    <li>
                        CSS
                    </li>
                    <li>
                        JavaScript
                    </li>
                    <li>
                        PHP
                    </li>
                </ul>

            </div>
        </div>
        <div class="contact f_c">
            <h2>Say something</h2>
            <form action="contact_request.php" method="post">
                <table>
                    <tbody >
                    <tr>
                        <td>
                            <input type="text" name="name" 
                            placeholder="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" name="email"
                            placeholder="email" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <textarea name="message" placeholder="message"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="send">
                        </td>
                    </tr>
                    </tbody>
                </table>

            </form>
        </div>
    </footer>
</body>

</html>
