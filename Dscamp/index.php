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

    $connect = mysqli_connect($server, $usr, $pass, $bd);
    if(!$connect){
        $m = "Não foi possivel conectar ao banco de dados, entre em contato com um técnico!";
    }else{
        mysqli_select_db($connect,$bd);
    }

    if($_POST){
        if($_REQUEST["env"]=="ok"){
            $nome = $_REQUEST["nome"];
            $email = $_REQUEST["email"];
            $msg = $_REQUEST["msg"];

            $sqlstring = "insert into email(nome,email,msg)values('".$nome."','".$email."','".$msg."')";
            $result = mysqli_query($connect, $sqlstring);
            
            if(mysqli_affected_rows($connect) <= 0){
                $mE = "Algo deu errado, tente novamente!";
            }else{
                $mC = "Mensagem entregue com sucesso";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Dscamp</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<style>

    *{
        padding: 0px;
        margin: 0px;
        font-family: "Myriad Pro";
        text-transform: uppercase;
    }

    body{
        background-color: #4093f0;
    }

    .bg-banner{
        background: url('./imgs/bannerMobile.jpg') no-repeat fixed;
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
        background-color: #2956a8;
        padding: 5px;
        font-size: 25px;
        color: #ffd25a;
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
        background: url('./imgs/contatoDesk.jpg'); 
        background-size: cover;
    }

    a{
        text-decoration: none;
    }

    .d-seg-m{
        margin-left: 15%;
    }

    .d-seg-p{
        display:none;
    }

    @media screen and (min-width: 1024px){
        .txt{
            padding-top: 350px;
            padding-bottom: 410px;
        }

        .d-seg-m{
            display: none;
        }

        .d-seg-p{
            display: block;
        }

        .bg-banner{
            background: url('./imgs/banner.jpg') no-repeat fixed;
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
<body style="overflow-x: hidden;">
    <div class="container-fluid bg-banner" style="margin-bottom: 25px;">
        <div class="container">
        <!---------------- Menu -------------------->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top z-index-1 sidebar-wrapper">
                <a class="navbar-brand ml-4" href="#"><img src="./imgs/logo.png" alt="" height="35px"></a>
                <button class="navbar-toggler btnCol" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse font-weight-bold pl-5" id="navbarNav">
                    <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#atuamos" id="onde">Onde atuamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/empresa.php">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/contato.php">Contato</a>
                    </li>
                    </ul>
                </div>
            </nav>
            <div class="lead txt mr-3 ml-3">
                <div class="mb-5 text-danger text-center font-weight-700">
                    <?php echo $mE; ?>
                </div>
                <div class="mb-5 text-warning text-center font-weight-700">
                    <?php echo $mC; ?>
                </div>
                <h3 class="text-center">
                    Trabalhamos com agentes de cargas,<br> importadores e exportadores, com
                    profissionais <br>altamente qualificados. <br><br>
                    <a href="./pages/empresa.php"><button class="text-center btnBanner">Nos conheça!</button></a>
                </h3>
            </div>
        <!------------- Fim Menu ---------->
        </div>
    </div>
    <div class="container-fluid bg-aero pb-5">
        <div class="container" style="padding-top: 45px;">
            <h1 class="text-center">Serviços</h1>
            <h3 class="text-center">Somos especialistas em di, dta e exportação.</h3>
            <div class="row">
                <div class="col-sm" style="margin-top: 25px;">
                    <!----------- Primeiro card ---------->
                        <div class="card text-white">
                            <img class="card-img" src="./imgs/servicoMobile.jpg" alt="Imagem do card">
                            <div class="card-img-overlay">
                                <h2 class="text-center"><br><br><br>Transporte Aduaneiro</h2>
                            </div>
                        </div>
                    <!------------ Fim primeiro card ------------>
                </div>
                <div class="col-sm" style="margin-top: 25px;">
                    <!------------ Segundo card ------------------->
                        <div class="card text-white">
                            <img class="card-img" src="./imgs/servico2Mobile.jpg" alt="Imagem do card">
                            <div class="card-img-overlay">
                                <h2 class="text-center"> <br><br><br> Transporte Nacional</h2>
                            </div>
                        </div>
                    <!-------------------- Fim seguno card --------------->
                </div>
            </div>
            <!-------------------- Texto  Segurança ----------------------->
            <div class="row padd-100 pb-5">
                <!-------------- Texto ------------------------->
                    <div class="col-sm">
                        <p class="lead" style="padding-top: 35px;">
                            <h2 class="text-center">Sinta-se seguro</h2>
                        </p>
                        <p class="lead txtsec">
                            Para a segurança da sua mercadoria, possuímos apólices
                            de seguros que fazem cobertura desde a coleta até a
                            entrega da carga. Realizamos ações preventivas e
                            fazemos o acompanhamento do transporte, mantendo
                            nossos clientes informados sobre todos os
                            acontecimentos durante o trajeto.
                        </p>
                    </div>
                <!-------------- Fim texto --------------------->

                <!---------------Img -------------------->
                    <div class="col-sm">
                        <img src="./imgs/seguranca-mobile.png" alt="" class="d-seg-m">
                        <img src="./imgs/seguranca.png" alt="" class="d-seg-p">
                    </div>
                <!------------ Fim img ----------------->
            </div>
            <!-------------- Fim texto de segurança --------------->
        </div>
    </div>
    <div class="container-fluid p-3 pb-2" style="background-color: #4b9bef;" id="atuamos">
        <div class="container">
            <div class="row">
                <div class="col-sm text-center">
                    <h2 class="text-center mt-3">Onde atuamos</h2>
                    <br><br>
                    <img src="./imgs/atuacao.png" alt="">
                </div>
                <!-- ------------------------------- -->
                <div class="col-sm text-center d-none d-sm-block">
                    <h2 class="text-center mt-3">Valores</h2>
                    <br><br>
                    <p class="lead">
                        Comprometimento com a excelência nos serviços prestados, valorização dos
                        funcionários, responsabilidade e qualidade no atendimento.
                    </p>
                    <a href="./pages/empresa.php"><button class="text-center btnBanner" style="width: 150px;">Veja mais</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 pb-5 bg-contato">
        <div class="container text-center" id="contato">
            <h2 class="text-center">Contato</h2>
            <br>
            <form name="frm" method="POST" action="">
                <div class="form-row">
                    <div class="col">
                    <p class="text-left">Nome:</p>
                    <input type="text" class="form-control" style="background-color: #ffd25a;" id="nome" name="nome">
                    </div>
                    <div class="col">
                    <p class="text-left">Email:</p>
                    <input type="text" class="form-control" style="background-color: #ffd25a;" id="email" name="email">
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                        <p class="text-left">Digite sua mensagem:</p>
                        <textarea class="form-control" name="msg" id="msg" cols="20" rows="5" style="background-color: #ffd25a;"></textarea>
                    </div>
                </div>
                <br>
                <button class="text-center btnEnv" onclick="env();">Enviar</button>
            </form>

        </div>
    </div>
    <div class="container-fluid" style="background-color: #342e37;">
        <h2 class="text-center pt-4 text-light">Mais opções de contatos</h2>
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
                    <img src="./imgs/zapMobile.png" alt="" class="m-zap"> 
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
    <script src="./js/bootstrap.min.js"></script>
    <script>
        function env(){
            if(document.frm.nome.value==""){
                alert('Preencha o campo nome!');
                document.frm.action="index.php#contato";
                document.frm.submit();
                document.frm.nome.focus();
                
            }else if(document.frm.email.value==""){
                alert('Preencha o campo email!');
                document.frm.action="index.php#contato";
                document.frm.submit();
                document.frm.email.focus();

            }else if(document.frm.msg.value==""){
                alert('Digite sua mensagem!');
                document.frm.action="index.php#contato";
                document.frm.submit();
                document.frm.msg.focus();
            }else{
                document.frm.action="index.php?env=ok";
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