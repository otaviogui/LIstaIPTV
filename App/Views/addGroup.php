<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adiconar Grupo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>      
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-dark bg-dark col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link"  href="list.php">Listagem</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link"  href="addList.php">Nova Lista</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link"  href="addGroup.php">Novo Grupo</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link"  href="typeContent.php">Novo Tipo de Conteúdo</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link"  href="../index.php">Adicionar Conteúdo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <form action="../model/group.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-12">

                    <label for="name">Nome do Grupo</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o Nome do Grupo"/>

                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary form-control " >
                        Adicionar
                    </button>

                </div>
            </div>
        </form>
    </div>

</body>
</html>