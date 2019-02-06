<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adcionar Ep</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-dark bg-dark col-md-12">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link"  href="view/list.php">Listagem</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link"  href="view/addList.php">Nova Lista</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link"  href="view/addGroup.php">Novo Grupo</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link"  href="view/typeContent.php">Novo Tipo de Conteúdo</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="model/content.php" method="post">
                <div class="form-group">
                    <label for="codList">Selecionar a Lista</label>
                    <select id="codList" name="codList" class="form-control"required>
                         <?php 

                        /* $res = $conn->query("SELECT * FROM listas");
                            while($dados= $res->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value=".$dados['cod'].">".$dados['name_list']."</option>";
                            } */
                        
                                
                        ?> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="codType">Tipo do Conteúdo</label>
                    <select name="codType" id="codType" class="form-control">
                        <?php 
                           /*  $content = $conn->query("SELECT * FROM type_content");
                                while($dados=$content->fetch(PDO::FETCH_ASSOC)){
                                    echo "<option value=".$dados['cod'].">".$dados['name']."</option>";
                                } */
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    
                    <label for="codGroup">Titulo do Grupo</label>
                    
                    <select name="codGroup" id="codGroup" class="form-control">
                        <?php 
                            /* $grupo = $conn->query("SELECT * FROM groupo");
                                while($dados=$grupo->fetch(PDO::FETCH_ASSOC)){
                                    echo "<option value=".$dados['cod'].">".$dados['name']."</option>";
                                } */
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content-title">Titulo do conteúdo</label>
                    <input type="text" class="form-control" name="content-title" id="content-title" placeholder="digite o Nome do Canal ou Filme"required>
                </div>
                <div class="form-group">    
                    <label for="url">URL do Conteúdo</label>
                    <input type="text" class="form-control" name="url" id="url" placeholder ="Digite a URL do Conteúdo EX: http://url.com"required>
                <div>
                <div class="form-group">    
                    <label for="url">URL da Logo</label>
                    <input type="text" class="form-control" name="logo" id="logo" placeholder ="Digite a URL do Conteúdo EX: http://url.com"required>
                <div>
                
                <div class="form-group">
                    <button type="submit"  class="btn btn-primary form-control">Adiconar</button>
                </div>    
                <div class="form-group">
                    <button name="cancel" type="reset" class="btn btn-danger form-control">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>