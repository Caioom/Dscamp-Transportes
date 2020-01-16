<?php
    session_start();

    if(!$_SESSION["login"]){
        header("Location: ./admin.php");
        exit();
    }

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
        if($_REQUEST["del"] == "ok"){
            $id = $_REQUEST["id"];
            $sqlstring = "delete from email where id=".$id;
            $result = mysqli_query($con,$sqlstring);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensagens - Dscamp</title>
</head>
<body>
    <h1>Mensagens! <?php echo $_SESSION["login"]; ?></h1>
    <h2><a href="sair.php">Sair</a></h2>
    <br>
    Delete as mensagens pelo número de id, basta digitar o número e apertar o botão!<br><br>
    <form name="frm" method="POST" action="">
    <input type="text" id="id" name="id" placeholder="Digite o número de id...">
    <button onclick="del();">Deletar</button>
    <br><br>
    <?php
        $sqltring = "select * from email";
        $result = mysqli_query($con, $sqltring);
        $ok = 1;
        // $mes=$result->fetch_all(MYSQLI_ASSOC);
        // print_r($mes);

        while($row = $result->fetch_assoc()){
            $registros[] = $row;
            $ok += 1;
         }

        if($ok != 1){
            foreach($registros as $r){
                echo "<h3>Id:".$r["id"]."<br>"."Nome: ".$r["nome"]."&nbsp;&nbsp / email: ".$r["email"]."<br>Mensagem: "."&nbsp;&nbsp;".$r["msg"]."&nbsp;&nbsp;</h3><br><hr>";
            }
        }

    ?>
    </form>
    <script>
        function del(){
            document.frm.action="mensagens.php?del=ok";
            document.frm.submit();
        }
    </script>
</body>
</html>