<?php 

    session_start();
    $u = "dscamp";
    $p = "DS05110912";
    $server = "dscamp.mysql.dbaas.com.br";
    $bd = "dscamp";


    $con = mysqli_connect($server, $u, $p, $bd);
    
    if(!$con){
        echo "Falha ao conectar no banco, contate um técnico";
    }else{
        mysqli_select_db($con,$bd);
    }
    if($_POST){
        $user = $_REQUEST["usr"];
        $pass = $_REQUEST["pass"];
        $senha = md5($pass);

        $sqlstring = "select * from login where username = '".$user."' and pass = '".$senha."'";
        echo $sqlstring;

        $result = mysqli_query($con, $sqlstring);

        if(mysqli_affected_rows($con) <= 0){
            unset($_SESSION['login']);
            unset($_SESSION['pass']);
            header("Location: ./admin.php");
        }else{
            $_SESSION['login'] = $user;
            $_SESSION['pass'] = $senha;
            header("Location: ./mensagens.php");
        }

    }
    
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login emails</title>
</head>
<body style="text-align: center;">  
    <h1>Dscamp transportes</h1>
    <form name="frm" method="POST" action="">
        <input type="text" id="usr" name="usr" placeholder="Usuario"> <br><br>
        <input type="password" id="pass" name="pass" placeholder="Senha"> <br><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>