<?php include "cabecalho.php"?>
<?php
//Busca os dados no banco de dados



require "./util/Mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();


?>

<body>
    <nav class="nav-extended #212121 grey darken-4">
        <!-- COR DA BARRA DE NAVEGACAO -->
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li>
                    <a href="/">Galeria</a>
                </li>
                <li>
                    <a href="/novo">Cadastrar</a>
                </li>
            </ul>
        </div>
        <div class="nav-reader center">
            <!-- COR e centralizacao do CINEMIX -->
            <h1><span class="preto">Cine</span>Mix</h1>

        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent #b71c1c red escurecer-4">
                <!-- COR DA BARRA DE TABS -->
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="row">

            <?php foreach ($filmes as $filme) : ?>
             <div class="col s12 m6 l3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?php echo $filme->poster ?>">
                        <button class="btn-fav btn-floating halfway-fab waves-effect waves-light red" data-id="<?= $filme->id ?>">
                            <i class="material-icons"><?= ($filme->favorito)? "favorite" : "favorite_border" ?></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <!-- ALINHA NA VERTICAL O ICONE DA ESTRELA COM A AVALICAO DO FILME  -->
                            <i class="material-icons amber-text">star</i><?php echo $filme->nota ?>
                            <!-- ICONE DA ESTRELA E A COR -->
                        </p>
                        <span class="card-title"><?php echo $filme->titulo ?></span>
                        <p><?php echo $filme->sinopse ?></p>
                    </div>
                </div>
             </div>
            <?php endforeach ?>
    </div>



    <?= Mensagem::mostrar(); ?>

    <script>
        document.querySelectorAll(".btn-fav").forEach(btn => {
            btn.addEventListener("click", e => {
                const id = btn.getAttribute("data-id")
                fetch(`/favoritar/${id}`)
                .then(response => response.json())
                .then(response => {
                    if(response.success === "ok"){
                        if(btn.querySelector("i").innerHTML === "favorite"){
                            btn.querySelector("i").innerHTML = "favorite_border"
                        }else{
                            btn.querySelector("i").innerHTML = "favorite"
                        }

                    }
                })
                .catch( error => {
                    M.toast({html: 'Erro ao favoritar'})
                })
                

            });
        });



    </script>

</body>


</html>