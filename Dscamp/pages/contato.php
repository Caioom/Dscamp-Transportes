<?php
    $usr = "dscamp";
    $pass = "DS05110912";
    $server = "dscamp.mysql.dbaas.com.br";
    $bd = "dscamp";
    $mC = "";
    $mE = "";
    $nome = "";
    $email = "";
    $msg = "";
    $assunto = "";

    $connect = mysqli_connect($server, $usr, $pass, $bd);
    if(!$connect){
        echo "Não foi possivel conectar ao banco de dados, entre em contato com um técnico!";
    }else{
        mysqli_select_db($connect,$bd);
    }

    if($_POST){
        if($_REQUEST["env"]=="ok"){
            $nome = $_REQUEST["nome"];
            $email = $_REQUEST["email"];
            $msg = $_REQUEST["msg"];
            $assunto = $_REQUEST["assunto"];

            $sqlstring = "insert into email(nome,email,assunto,msg)values('".$nome."','".$email."','".$assunto."','".$msg."')";
            $result = mysqli_query($connect, $sqlstring);
            
            if(mysqli_affected_rows($connect) <= 0){
                echo "<script>alert('Algo deu errado, tente novamente!');</script>";
            }else{
                $mC = "Mensagem entregue com sucesso";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Contato - Dscamp</title>
</head>
<style>
    *{
        padding: 0px;
        margin: 0px;
        font-family: "Myriad Pro";
        text-transform: uppercase;
    }

    .bg-banner{
        background: url('../imgs/bg-empresa-mobile.jpg') no-repeat fixed;
        padding-bottom: 90px;
    }

    .txt{
        padding-top: 130px;
        /* padding-bottom: 210px; */
        color: white;
    }

    .teste{
        background-color: white;
        transition: all 0.2s;
    }

    .btnBanner{
        background-color: #ffd25a;
        padding: 5px;
        font-size: 25px;
        color: #342e37;
        cursor: pointer;
        border: none;
    }

    .btnBanner:hover{
        border: solid 1px;
    }

    .txtsec{
        text-align: center;
    }

    .btnEnv{
        background-color: #ffd25a;
        padding: 5px;
        font-size: 25px;
        color: black;
        cursor: pointer;
        border: none;
        width: 150px;
    }

    .btnEnv:hover{
        border: solid 1px;
        transition: 0.9;
    }

    .m-zap{
        margin-left: 20px;
    }

    .txt-zap{
        float: right;
    }

    .bg-aero{
        background: url('./imgs/aeroporto.jpg');
        background-size: cover;
    }

    .bg-contato{
        background: url('./imgs/contato.jpg'); 
        background-size: cover;
    }

    .display-1{
        display: none;
    }    

    .tt{
        font-weight: 650;
        color: white;
        font-size: 24px;
    }

    @media screen and (max-width: 1023px){
        .img{
            margin-left: 28%;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .txt-mb{
            text-align: center;
        }

    }

    @media screen and (min-width: 1024px){
        .txt{
            padding-top: 150px;
        }

        .imgL{
            margin-left: 83px;
        }

        .display{
            display: none;
        }

        .display-1{
            display: block;
        }

        .bg-banner{
            background: url('../imgs/contato.jpg') no-repeat fixed;
            padding-bottom: 90px;
            background-size: cover;
        }

        .m-perso{
            padding-top: 50px;
        }

        .m-zap{
            margin-left: 150px;
        }

        .txt-zap{
            margin-right: 80px;
            padding-top: 20px;
        }

        .padd-100{
            padding-top:100px;
        }

        .bg-contato{
            background: url('./imgs/contatoDesk.jpg');
            background-size: cover;
        }

    }

</style>
<body>
    <div class="container-fluid bg-banner">
        <div class="container">
        <!---------------- Menu -------------------->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top z-index-1 sidebar-wrapper">
                <a class="navbar-brand ml-4" href="#"><img src="../imgs/logo.png" alt="" height="35px"></a>
                <button class="navbar-toggler btnCol" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse font-weight-bold pl-5" id="navbarNav">
                    <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#atuamos">Onde atuamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./empresa.php">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contato.php">Contato</a>
                    </li>
                    </ul>
                </div>
            </nav>
            <div class="lead txt mr-3 ml-3">
                <h1 class="text-center">Nos envie uma mensagem!</h1>
                <br>
                <!-- <h3 class="text-center display">
                    Transportadora Rodoviária atuando no mercado
                    de cargas.
                </h3> -->
                <p class="text-center display-1" style="font-size:30px; ">
                Basta preencher o formulário, com seus dados e o que quer nos dizer
                <p>
            </div>
        <!------------- Fim Menu ---------->
        </div>
    </div>
    <div class="text-success text-center mt-3">
        <?php echo $mC; ?>
    </div>
    <div class="container-fluid pt-4 pb-5 bg-contato">
        <div class="container text-center">
            <h2 class="text-center mt-5 mb-3">Formulário</h2>
            <br>
            <form name="frm" method="POST" action="">
                <div class="form-row">
                    <div class="col">
                    <p class="text-left">Nome:</p>
                    <input type="text" class="form-control" id="nome" name="nome" style="background-color: #4295f1;  border: solid 2px #6e6e6e;">
                    </div>
                    <div class="col">
                    <p class="text-left">Email:</p>
                    <input type="text" class="form-control" id="email" name="email" style="background-color: #4295f1; border: solid 2px #6e6e6e;">
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                        <p class="text-left">Assunto:</p>
                        <input class="form-control" id="assunto" name="assunto" style="background-color: #4295f1; border: solid 2px #6e6e6e;">
                    </div>
                    <div class="col">
                        <p class="text-left">Mensagem:</p>
                        <textarea class="form-control" id="msg" name="msg" rows="5" style="background-color: #4295f1; border: solid 2px #6e6e6e;"></textarea>
                    </div>
                </div>
            </form>
            <br><br>
            <button class="btnEnv mb-5" style="border: solid 2px #6e6e6e;" onclick="env();">Enviar</button>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center mt-5" style="color: #4295f1;">Mais opções de contato</h2>
    </div>
    <div class="container-fluid mt-5" style="background-color: #342e37;">
        <br>
        <div class="row">
            <div class="col-sm mt-3">
                <p class="lead text-center text-light">
                RUA CERQUEIRA CESAR, <br>
                Nº: 439  - Complemento: SALA 05, <br>
                CEP: 13.330-005, CENTRO <br>
                INDAIATUBA - SP. <br><br>

                Aeroporto: <br>
                centro empresarial de viracopos, sala 129.
                </p>
            </div>
            <div class="col-sm mt-3 m-perso">
                    <img src="../imgs/zapMobile.png" alt="" class="m-zap"> 
                    <p class="lead text-light text-left mt-4 txt-zap">
                        Douglas Alves:  (19)98217-3732 <br>
                    </p>
            </div>
        </div><br>
        <p class="text-center text-light mt-5">Copyright &copy 2019 Dscamp - Desenvolvido por caio.ds.2003@gmail.com.</p>
        <br>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        function env(){
            if(document.frm.nome.value==""){
                alert('Preencha o campo nome!');
                document.frm.nome.focus();
                
            }else if(document.frm.email.value==""){
                alert('Preencha o campo email!');
                document.frm.email.focus();

            }else if(document.frm.assunto.value==""){
                alert('Digite seu assunto!');
                document.frm.assunto.focus();
            }else if(document.frm.msg.value==""){
                alert('Digite sua msg!');
                document.frm.msg.focus();
            }else{
                document.frm.action="contato.php?env=ok";
                document.frm.submit();
            }
        }        





      $(function() {
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 50) {
                $(".sidebar-wrapper").addClass("teste");
                } else {
                $(".sidebar-wrapper").removeClass("teste");
                }
            });
        });

    $(".btnCol").on("click", function (){
        $("#navbarNav").addClass("bg-light");
    });
    </script>
</body>
</html>