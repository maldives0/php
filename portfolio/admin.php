<? @session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" text="text/css"> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    
    <? if(!isset($_SESSION['id'])){ ?>
    <div class="login">
      <div class="login-show">
      <form action="login.php" method="post">
      
              <p> <input type="text" placeholder="login" value="dd1" name="id"></p>
         
        
               <p><input type="password" placeholder="password" name="pw" value="dd2"></p>
          
              <p> <input class="loginBtn" type="submit" value="login"></p>
              </form>
         </div>
    </div>
    <? }else{ ?>
   <div class="logout f_c">
      <p><?=$_SESSION['id']?>님 좋은 하루되세요~</p>
       <p><input class="logoutBtn" type="submit" value="logout"></p>
   </div>
   <? } ?>
    <!--index.php-->
   <?
    include_once "db.php";
    $query = "select * from contact order by num desc";
    $result = sql($query);
?>

<div class="contact-result">
   <h1>contact list</h1>
   <div class="list f_c">
    <table>
        <thead>
            <tr>
                <th>num</th>
                <th>name</th>
                <th>email</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>
            <? while($row = mysqli_fetch_array($result)){
             ?>
            <tr>
                <td><?=$row['num'] ?></td>
                <td>
                   <?=$row['name'] ?>
                </td>
                <td>
                    <?=$row['email']?>
                </td>
                 <td>
                    <?=$row['message']?>
                </td>
            </tr>
            <? } ?>

        </tbody>
    </table>
   </div>
   </div>
   
   
    <style>
        .contact-result{
            text-align:center;
            margin-top:3%;
            font-size:1.2em;
        }
        .contact-result h1{
            font-size:2em;
            text-transform:uppercase;
        }
        .list{
            
            margin-top:5%;
        }
        table {
            border-collapse: collapse;
           
            
        }
        table thead{
             text-transform:uppercase;
        }

        th,
        td {
            padding: 15px;
            border: 1px solid #ddd;
            ;
            text-align:center;

        }
        .login{
            position:absolute;
            left:50%; top:50%;
            z-index:100;
            transform:translate(-50%,-50%);
            text-align:center;
          font-size:1.5em;
            background:rgba(0,0,0,0.9);
            width:100%; height:100%;
        }
       .login .login-show{
             margin:10% auto;
           
        }
      .login .login-show  p > input{
             margin:20px;
          padding:1%;
            width:300px;
            height:50px;
           
            
        }
        .logout{
            font-size:1.3em;
            
           justify-content: flex-end;
            margin:3%;
        }
        .logout > p{
            margin-right:1%;
            display:inline-block;
           
            
           
        }
        .logout > p > input{
            padding:5%;
            width:80px;
           
        }
       
      
    </style>

<script>
   if( $('input').hasClass('loginBtn')){
       var loginBtn = $('.loginBtn');
      
       loginBtn.on('click',login);
   }else{
  
       var logoutBtn = $('.logoutBtn');
       logoutBtn.on('click',function(e){
           e.preventDefault();
           
           $.ajax({
               url: 'logout.php',
               success: function(data){
                   location.reload();
                   $('.login').show();
               }
           });
           
       })
   }
    
    
    function login(e){
       e.preventDefault();
        var idVal = $('input[name=id]').val();
        var pwVal = $('input[name=pw]').val();
      
        $.ajax({
            url: 'login-data.php',
            type: 'post',
            data: {
                id:idVal,
                pw:pwVal
            },
            success:function(data){
               
                console.log(data)
                if(data.trim() === 'id_fail'){
                    alert('가입된 정보가 없습니다.');
                }else if(data.trim() === 'pw_fail'){
                    alert('비밀번호를 확인하세요.');
                }else{
                    $('.login').hide();
                    location.reload();
                }
            }
            
        })
    }
    </script>

</body>

</html>
