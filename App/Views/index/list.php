<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listas</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-dark bg-dark col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link active text-light">Inicio</a>
                    </li>
                    <li class="nav-item"> 
                        <a href="/group" class="nav-link text-light" >Grupo</a>
                    </li>
                    <li class="nav-item"> 
                        <a href="/type-content" class="nav-link text-light" >Tipo de Conteúdo</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-2 offset-md-8">
                <a href="/newList" class="btn btn-primary form-control space-btn">NOVA LISTA</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table bg-white">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                            <th scope="col">Exportar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($this->view->lists as $lista):
                        echo "<tr>
                                <th scope='row'>".$lista['cod']."</th>
                                <td>".$lista['name_list']."</td>
                                <td><a href='/edit?id=".$lista['cod']."'><i class='fas fa-marker'></i>Editar</a></td>
                                <td><a href='/delete?id=".$lista['cod']."'><i class='fas fa-trash'></i>Excluir</a></td>
                                <td><a href='/export?id=".$lista['cod']."'><i class='fas fa-file-download'></i>Exportar</a></td>
                            </tr>";
                        endforeach;
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>