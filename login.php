<?php
session_start();
if(!isset($_SESSION['uname'])){
if(isset($_REQUEST['username'])&&isset($_REQUEST['pass'])){
    $_SESSION['uname']=$_REQUEST['username'];
    $_SESSION['pass']=$_REQUEST['pass'];
    echo "<script type='text/javascript'>location.href = 'welcome.php';</script>";
}
}else{
    echo "<script type='text/javascript'>location.href = 'welcome.php';</script>";
}


?>
<html>
    <head>
        <style>
        .input{
            background-color:black;
            color:white;
            font-family:cursive;
            border:1px solid white;
            border-radius:4px;
            padding:5px;
        }
        ::placeholder{
            color:white;
        }
        div,h1{
            margin:4rem;
            text-align:center;
        }
        </style>
</head>
<body>

  <h1>Hello ,welcome <br/>Login Here</h1>
  <div>
  <form action= "login.php">
      <input type="text" name="username" placeholder="Enter username" class="input"/><br/><br/>
      <input type="text" name="pass" placeholder="Enter password" class="input"/><br/><br/>
      <input type="submit" name="submit" class="input"/>
  </form>
    </div>

</body>

</html>

