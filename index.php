<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dona Benvinda Confeitaria</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.png" type="image/png">
        <script src="js/main.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/bootstrap.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
    </head>
    <body>
        <div class="container" id="content" style="display: none;"><!-- Logo com o nome -->
            <div class="row">
                <div class="col">
                    <nav class="navbar bg-roxo text-brush">
                        <a class="navbar-brand" href="index.php?opcao=1">
                            <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top rounded ms-2" alt="">
                            Dona Benvinda Confeitaria 
                        </a>
                    </nav>
                </div>
            </div>

            <div class="row"><!-- Menu com links e dropdown -->
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-roxo">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link ms-2 active" href="index.php?opcao=1">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Receitas
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="index.php?opcao=2">Bolo de Caçarola</a>
                                    <a class="dropdown-item" href="index.php?opcao=3">Pavê de Chocolate</a>
                                    <a class="dropdown-item" href="index.php?opcao=4">Pastel de Nata</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php?opcao=5">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <?php if(isset($_GET['opcao'])){ ?><!-- Se a variavel do link for verdadeira -->
                <?php if($_GET['opcao'] == 1){ ?><!-- Abrir a pagina principal se clicar no link 1-->
                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"><!--Carousel -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10" aria-label="Slide 11"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="11" aria-label="Slide 12"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                <img src="img/pave-de-chocolate.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Pavê de Chocolate</div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/palha-italiana.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Palha Italiana</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/alfajor.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Alfajor</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/cheesecake.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Cheesecake</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/tiramisu.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Tiramisú</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/torta-holandesa.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Torta Holandesa</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/bolo-branco.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Bolo Branco</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/bolo-cacarola.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Bolo de Caçarola</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/cookie.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Cookie</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/pastel-de-nata.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Pastel de Nata</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/pao-de-mel1.png" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Pão de Mel</div>
                                </div>
                                <div class="carousel-item">
                                <img src="img/panacota-frutas-vermelhas.jpg" class="d-block w-100 img-galeria" alt="...">
                                <div class="legenda transition-top">Panacota com Frutas Vermelhas</div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                        </div>
                    </div>

                    <div class="row"><!-- Espaco --> 
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>

                    <div class="row"><!-- Tres imagens no fundo-->
                        <div class="col" style="text-align: left;">
                            <a href="index.php?opcao=2" style="color: #000;">
                                <figure class="figure img-galeria">
                                    <img src="img/bolo-cacarola.jpg" class="figure-img img-fluid rounde img-galeria" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <div class="legenda transition-left">Bolo de Caçarola</div>
                                    <figcaption>Receita de Bolo de Caçarola</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col" style="text-align: center;">
                            <a href="index.php?opcao=3" style="color: #000;">
                                <figure class="figure img-galeria">
                                    <img src="img/pave-de-chocolate.jpg" class="figure-img img-fluid rounde img-galeria" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <div class="legenda transition-top">Pavê de chocolate</div>
                                    <figcaption>Receita de Pavê de Chocolate</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col" style="text-align: right;">
                            <a href="index.php?opcao=4" style="color: #000;">
                                <figure class="figure img-galeria">
                                    <img src="img/pastel-de-nata.jpg" class="figure-img img-fluid rounded img-galeria" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <div class="legenda transition-right">Pastel de Nata</div>
                                    <figcaption>Receita de Pastel de Nata</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>

                <?php }elseif($_GET['opcao'] == 2){ ?><!-- Se o link 2 for clicado -->
                    <div class="row"><!-- pagina bolo de caçarola -->
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <img src="img/bolo-cacarola.jpg" alt="" class="d-block w-100 img-galeria" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <h3>Receita de Bolo de Caçarola</h3>
                            <h5>Ingredientes:</h5>
                            <p>
                                <ul>
                                <li>
                                    4 ovos
                                </li>
                                <li>
                                    2 e 1/2 xícaras (chá) de açúcar
                                </li>
                                <li>
                                    1/2 xícara de óleo de milho ou canola
                                </li>
                                <li>
                                    1 xícara de leite
                                </li>
                                <li>
                                    4 colheres (sopa) de coco seco ralado
                                </li>
                                <li>
                                    5 colheres (sopa) de queijo parmesão ralado (50 g)
                                </li>
                                <li>
                                    2 e 1/2 xícaras de farinha de trigo
                                </li>
                                <li>
                                    1/2 colher (sopa) de fermento em pó
                                </li>
                                </ul>
                            </p>
                        </div>
                        <div class="col">
                            <h3>Modo de Preparo</h3>
                            <div class="col">
                            &nbsp;
                            </div>
                            <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Passo 1
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Bata os ovos com o açúcar até que fique mais claros e fofos e todo açúcar tenha se dissolvido no creme de ovos.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Passo 2
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Acrescente o óleo em fio e misture.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Passo 3
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Em seguida coloque o leite e misture mais pouco.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quatro" aria-expanded="false" aria-controls="collapseThree">
                                    Passo 4
                                </button>
                                </h2>
                                <div id="quatro" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Agora junte os demais ingredientes e misture bem, mas sem bater muito.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cinco" aria-expanded="false" aria-controls="collapseThree">
                                    Passo 5
                                </button>
                                </h2>
                                <div id="cinco" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Disponha a massa em um forma com furo central untada e enfarinhada e asse em forno a 200º C por cerca de 35 minutos ou até que espetando seu bolo com um palito ele saia limpo (não esqueça de preaquecer o forno por pelo menos 15 minutos).
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seis" aria-expanded="false" aria-controls="collapseThree">
                                    Passo 6
                                </button>
                                </h2>
                                <div id="seis" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Para desenformar, espere esfriar completamente.
                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="col">
                            &nbsp;
                            </div>
                            <h3>Quer colocar sua receita no ar?</h3>
                            <p>Se você tem uma receita que deseja compartilhar, por favor <a href="contato.html">entre em contato</a> e nos envie.</p>
                        </div>
                    </div>
                <?php }elseif($_GET['opcao'] == 3){ ?>
                    <div class="row">
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="img/pave-de-chocolate.jpg" alt="" class="d-block w-100 img-galeria" data-bs-toggle="modal" data-bs-target="#modalPave">
                            <h3>Receita de Pavê de Chocolate</h3>
                            <h5>Ingredientes:</h5>
                            <p>
                                <ul>
                                <li>1 pacote de bolacha maisena
                                <li>1/2 copo de leite
                                <li>1 colher (sobremesa) da chocolate em pó
                                </ul>
                                <h6>Creme Branco</h6>
                                <ul>
                                <li>1 lata de leite condensado
                                <li>1 lata de leite de vaca (use a medida da lata de leite condensado)
                                <li>1 colher (sobremesa) de amido de milho
                                <li>2 gemas</li>
                                </ul>
                                <h6>Cobertura:</h6>
                                <ul>
                                <li>4 claras</li>
                                <li>4 colheres de açúcar</li>
                                <li>1 lata de creme de leite sem soro</li>
                                </ul>
                                
                            </p>
                        </div>
                        <div class="col">
                            <h3>Modo de Preparo</h3>
                            <div class="col">
                                &nbsp;
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Passo 1
                                    </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Em uma tigela, misture o leite e o chocolate em pó até que esteja completamente dissolvido.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Passo 2 - Creme branco:
                                    </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Em uma panela, leve todos os ingredientes ao fogo médio e misture até obter uma consistência grossa e cremosa.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Passo 3 - Creme de chocolate:
                                    </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Em seguida coloque o leite e misture mais pouco.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quatro" aria-expanded="false" aria-controls="collapseThree">
                                        Passo 4
                                    </button>
                                    </h2>
                                    <div id="quatro" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Repita o processo feito no creme branco.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cinco" aria-expanded="false" aria-controls="collapseThree">
                                        Passo 5 - Para a cobertura:
                                    </button>
                                    </h2>
                                    <div id="cinco" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Bata as claras em neve com o açúcar até obter um creme consistente, adicione o creme de leite e misture delicadamente.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seis" aria-expanded="false" aria-controls="collapseThree">
                                        Passo 6 - Montagem:
                                    </button>
                                    </h2>
                                    <div id="seis" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Em um refratário grande, despeje o creme branco, metade das bolachas, creme de chocolate, bolachas e claras em neve.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sete" aria-expanded="false" aria-controls="collapseThree">
                                        Passo 7
                                    </button>
                                    </h2>
                                    <div id="sete" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Em um refratário grande, despeje o creme branco, metade das bolachas, creme de chocolate, bolachas e claras em neve.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            &nbsp;
                        </div>
                        <h3>Quer colocar sua receita no ar?</h3>
                        <p>Se você tem uma receita que deseja compartilhar, por favor <a href="contato.html">entre em contato</a> e nos envie.</p>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            &nbsp;
                        </div>
                    </div>
                <?php }elseif($_GET['opcao'] == 4){ ?>
                    <div class="row">
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="img/pastel-de-nata.jpg" alt="" class="d-block w-100 img-galeria" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <h3>Receita de Pastel de Nata</h3>
                            <h5>Ingredientes:</h5>
                            <p>
                            <ul>
                                <li>
                                    250 g de farinha de trigo
                                </li>
                                <li>
                                    Água com uma pitada de sal
                                </li>
                                <li>
                                    150 g de manteiga ou margarina
                                </li>
                                <li>
                                    1 gema
                                </li>
                                <li>
                                    80 g de maizena
                                </li>
                                <li>
                                    1 litro de creme de leite
                                </li>
                                <li>
                                    12 gemas
                                </li>
                                <li>
                                    300 g de açúcar
                                </li>
                                <li>
                                    Baunilha líquida
                                </li>
                                <li>
                                Casca de limão (raspas)
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="col">
                            <h3>Modo de Preparo</h3>
                            <div class="col">
                                &nbsp;
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Passo 1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Sobre o mármore, faça um monte de farinha. Faça um buraco no meio e coloque uma gema e água o suficiente para obter uma massa maleável. Abra a massa e cubra com com 50 g de manteiga ou margarina. Dobre de tal maneira a obter três camadas de massa (dobre uma parte sobre o meio e a outra por cima). Repita essa operação duas vezes, sempre espalhando 50 gramas de margarina ou manteiga.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Passo 2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Abra novamente, espalhe a manteiga e enrole como se fosse um rocambole. Corte o rocambole em fatias de 2 centímetros de grossura.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Passo 3 - Recheio:
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Numa panela junte a maizena, o creme de leite, as gemas e metade do açúcar. Leve ao fogo até ferver. Adicione o resto do açúcar, a baunilha líquida (algumas gotas) e as raspas de limão. mexa bem e leve à fervura novamente. Desligue e coloque sobre as rodelas de massa.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quatro" aria-expanded="false" aria-controls="collapseThree">
                                    Passo 4
                                    </button>
                                </h2>
                                <div id="quatro" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Leve as forminhas ao forno médio preaquecido até que estejam bem sequinhas.
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                &nbsp;
                            </div>
                            <h3>Quer colocar sua receita no ar?</h3>
                            <p>Se você tem uma receita que deseja compartilhar, por favor <a href="contato.html">entre em contato</a> e nos envie.</p>
                        </div>
                    </div>
                <?php }else{ ?>    
                    <div class="row">
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form class="row g-3 needs-validation" novalidate>
                            <div class="col-12">
                                <h1 class="text-center">Contato</h1>
                            </div>
                                <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Nome" placeholder="Informe Seu Nome" required>
                                    <label for="Nome">Nome</label>
                                    <div class="invalid-feedback">Por favor, informe seu nome.</div>
                                </div>
                                
                                </div>
                                <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="Email" placeholder="name@example.com" required>
                                    <label for="Email">Email</label>
                                    <div class="invalid-feedback">Por favor, informe seu email um email coreto.</div>
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="4" selected>Enviar Receita</option>
                                    <option value="1">Dúvida</option>
                                    <option value="2">Crítica</option>
                                    <option value="3">Sugestão</option>
                                    <option value="1">Outro</option>
                                    </select>
                                    <label for="floatingSelect">Qual o Assunto?</label>
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px" required></textarea>
                                    <label for="floatingTextarea2">Mensagem</label>
                                    <div class="invalid-feedback">Por favor, digite uma mensagem.</div>
                                </div>
                                </div>
                                <div class="col-12">
                                <button type="button" class="btn bg-enviar">Enviar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            <img src="img/contato.svg" alt="" srcset="">
                        </div>
                        </div>
                        
                        <!--Validar Formulario-->
                        <script>
                                (function () {
                                'use strict'
                                
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.querySelectorAll('.needs-validation')
                                
                                // Loop over them and prevent submission
                                Array.prototype.slice.call(forms)
                                    .forEach(function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                        }
                                    
                                        form.classList.add('was-validated')
                                    }, false)
                                    })
                                })()
                        </script>

                    <div class="row">
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                <?php } ?>
            <?php }else{ ?><!-- Se a variavel do link não tiver valor -->
                <div class="row">
                    <div class="col">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"><!-- Abrir home se a variavel não tiver valor-->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10" aria-label="Slide 11"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="11" aria-label="Slide 12"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                            <img src="img/pave-de-chocolate.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Pavê de Chocolate</div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/palha-italiana.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Palha Italiana</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/alfajor.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Alfajor</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/cheesecake.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Cheesecake</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/tiramisu.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Tiramisú</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/torta-holandesa.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Torta Holandesa</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/bolo-branco.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Bolo Branco</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/bolo-cacarola.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Bolo de Caçarola</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/cookie.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Cookie</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/pastel-de-nata.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Pastel de Nata</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/pao-de-mel1.png" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Pão de Mel</div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/panacota-frutas-vermelhas.jpg" class="d-block w-100 img-galeria" alt="...">
                            <div class="legenda transition-top">Panacota com Frutas Vermelhas</div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" style="text-align: left;">
                            <a href="index.php?opcao=2" style="color: #000;">
                                <figure class="figure img-galeria">
                                    <img src="img/bolo-cacarola.jpg" class="figure-img img-fluid rounde img-galeria" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <div class="legenda transition-left">Bolo de Caçarola</div>
                                    <figcaption>Receita de Bolo de Caçarola</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col" style="text-align: center;">
                            <a href="index.php?opcao=3" style="color: #000;">
                                <figure class="figure img-galeria">
                                    <img src="img/pave-de-chocolate.jpg" class="figure-img img-fluid rounde img-galeria" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <div class="legenda transition-top">Pavê de chocolate</div>
                                    <figcaption>Receita de Pavê de Chocolate</figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col" style="text-align: right;">
                            <a href="index.php?opcao=4" style="color: #000;">
                                <figure class="figure img-galeria">
                                    <img src="img/pastel-de-nata.jpg" class="figure-img img-fluid rounded img-galeria" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <div class="legenda transition-right">Pastel de Nata</div>
                                    <figcaption>Receita de Pastel de Nata</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
            <?php } ?>    


            <div class="row">
                <div class="col">
                    &nbsp;
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="text-center p-2 footer">
                        © 2022 Copyright: <a href="index.html" class="text-brush text-footer">Dona Benvinda Confeitaria</w>
                    </div>
                </div>
            </div>  

            <div id="loading" class="loader"><!--Tela de carregamento-->
                <img src="img/logo.png" width="40" height="40" class="d-inline-block img-loading rounded ms-2" alt="">
                <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </body>
</html>