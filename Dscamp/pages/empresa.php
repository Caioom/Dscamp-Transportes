<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Empresa - Dscamp</title>
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
        background-color: #2956a8;
        padding: 5px;
        font-size: 25px;
        color: #ffd25a;
        cursor: pointer;
        border: none;
        width: 150px;
    }

    .btnEnv:hover{
        background-color: #ffd25a;
        color: #2956a8;
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

    .d-pc{
        display: none;
    }

    .d-seg-m{
        margin-left: 15%;
    }

    .d-seg-p{
        display:none;
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

        .imgL{
            margin-left: 100px;
        }

    }

    @media screen and (min-width: 1024px){
        .txt{
            padding-top: 150px;
        }

        .d-pc{
            display: block;
        }

        .d-mb{
            display:none;
        }

        .d-seg-m{
            display: none;
        }

        .d-seg-p{
            display: block;
        }

        .display{
            display: none;
        }

        .display-1{
            display: block;
        }

        .bg-banner{
            background: url('../imgs/bg-empresa.jpg') no-repeat fixed;
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
                <h1 class="text-center">Dscamp Transportes</h1>
                <br>
                <!-- <h3 class="text-center display">
                    Transportadora Rodoviária atuando no mercado
                    de cargas.
                </h3> -->
                <p class="text-center display-1" style="font-size:30px; ">
                    Transportadora Rodoviária atuando no mercado <br>
                    de cargas, trabalhando com Agentes de cargas, <br>
                    Importadores e Exportadores, com Profissionais <br>
                    altamente qualificados.
                <p>
            </div>
        <!------------- Fim Menu ---------->
        </div>
    </div>
    <div class="container-fluid mt-5">
    <!-- row di, dta exportacao -->
        <div class="row">
            <div class="col-sm-2">
            
            </div>
            <div class="col-sm-10 bg-info p-0 m-0">
                <div class="row p-0 m-0">
                    <div class="col-sm-3 p-0 m-0">
                        <img src="../imgs/exportacao-mobile.jpg" alt="" class="img">
                    </div>
                    <div class="col-sm-9 p-0 m-0 txt-mb">
                       <p class="text-center mt-3 tt">di - dta - exportação</p>
                        Oferecemos soluções em logística e distribuição para o TRANSPORTE ADUANEIRO e para TRANSPORTES <br> NACIONAIS. Somos especialistas em DI, DTA e Exportação.
                    </div>
                </div>                    
            </div>
        </div>
    <!-- row segurança -->
        <div class="row mt-5 txt-mb">
            <div class="col-sm-10 bg-info p-0 m-0">
                <div class="row p-0 m-0 ">
                    <div class="col-sm-10 p-0 m-0 txt-mb">
                       <p class="text-center mt-3 tt">segurança</p>
                       <p class="m-4 text-center">Para a segurança da sua mercadoria, possuímos apólices de seguros que fazem cobertura desde a coleta até a 
                       entrega da carga. Realizamos ações preventivas e fazemos o acompanhamento do transporte,
                       mantendo nossos clientes informados sobre todos os acontecimentos durante o trajeto.</p>
                    </div>
                    <div class="col-sm-2 p-0 m-0">
                        <img src="../imgs/seguranca.jpg" alt="" height="195px" width="207px" class="img ml-5 d-pc">
                        <img src="../imgs/seguranca.jpg" alt="" height="150px" width="200px" class="pb-2 d-mb" style="margin-left: 15px;">
                    </div>
                </div>                    
            </div>
            <div class="col-sm-2">
            
            </div>
        </div>
    <!-- row missao  -->
        <div class="row mt-5">
            <div class="col-sm-2">
            
            </div>
            <div class="col-sm-10 bg-info p-0 m-0">
                <div class="row p-0 m-0">
                    <div class="col-sm-3 p-0 m-0">
                        <img src="../imgs/missao.jpg" alt="" height="150px" width="200px" class="img">
                    </div>
                    <div class="col-sm-9 p-0 m-0 txt-mb">
                       <p class="text-center mt-3 tt">Missão</p>
                       <p class="m-4 text-center">Poder atender e satisfazer a necessidade do nosso cliente de
                        uma forma personalizada conforme cada solicitação.</p>
                    </div>
                </div>                    
            </div>
        </div>
    <!-- row visão -->
        <div class="row mt-5 txt-mb">
            <div class="col-sm-10 bg-info p-0 m-0">
                <div class="row p-0 m-0">
                    <div class="col-sm-10 p-0 m-0 txt-mb">
                       <p class="text-center mt-3 tt">Visão</p>
                       <p class="m-4 text-center">Ser uma Empresa referência no mercado, com compromisso e
                        profissionalismo.</p>
                    </div>
                    <div class="col-sm-2 p-0 m-0">
                        <img src="../imgs/visao.jpg" alt="" height="150px" width="207px" class="img ml-5 d-pc">
                        <img src="../imgs/visao.jpg" alt="" height="150px" width="200px" class="pb-2 d-mb" style="margin-left: 15px;">
                    </div>
                </div>                    
            </div>
            <div class="col-sm-2">
            
            </div>
        </div>
    <!-- row valores -->
        <div class="row mt-5">
            <div class="col-sm-2">
            
            </div>
            <div class="col-sm-10 bg-info p-0 m-0">
                <div class="row p-0 m-0">
                    <div class="col-sm-3 p-0 m-0">
                        <img src="../imgs/valores.jpg" alt="" height="150px" width="200px" class="img">
                    </div>
                    <div class="col-sm-9 p-0 m-0 txt-mb">
                       <p class="text-center mt-3 tt">Valores</p>
                       <p class="m-4 text-center">Comprometimento com a excelência nos serviços prestados, valorização dos funcionários, 
                       responsabilidade e qualidade no atendimento.</P>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5" style="background-color: #342e37;">
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