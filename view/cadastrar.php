<?php include "cabecalho.php"?>

<body>
    <nav class="nav-extended #212121 grey darken-4">
        <!-- COR DA BARRA DE NAVEGACAO -->
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-reader center"> <span class="red-text text-escurecer-4">
                <!-- COR e centralizacao do CINEMIX -->
                <h1>CINEMIX</h1>
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

    <div class="row">
        <form method="POST" >
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>
                    <!-- INPUT DO TITULO -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate " name="titulo" required>
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>

                    <!-- INPUT DO SINOPSE -->
                    <div class="row">
                        
                        <div class="row">
                             <div class="input-field col s12">
                                <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                <label for="sinopse">Sinopse</label>
                            </div>
                        </div>
                        
                    </div>

                    <!-- INPUT NOTA -->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" name="nota" type="number" step=".1" min=0 max=5 class="validate" required>
                            <label for="nota">Nota</label>
                        </div>
                    </div>
                </div>
                    <!--INPUT CAPA -->
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Capa</span>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" name="poster" >
                    </div>
                </div>
                <div class="card-action">
                    <a class="btn waves-effect waves-light grey" href="/">Cancelar</a>
                    <button type="submit" class="waves-effect waves-light btn #b71c1c red darken-4">Confirmar</button>
                    <!-- CONFIG DO BOTAO CONFIRMAR -->
                </div>
            </div>
        </div>
</form>


    </div>


</body>

</html>