<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Seja Bem vindo</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>      
</head>
<body class="bg-light">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 offset-md-4 center-page-form bg-white">
                <form action="../model/login.php" method="POST">
                    <div class="form-group">
                        <label for="e-mail">E-mail</label>
                        <input type="email" id="e-mail" name="email" class="form-control" placeholder="Digite seu E-mail" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Digite sua Senha" required/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary"> ENTRAR</button>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="form-control btn btn-secondary">CANCELAR</button>
                    </div>

                    <hr>
                    <div class="form-group">
                        <a href="reset-password.php">Esqueceu sua senha?</a> <br>   
                        <a href="register.php" class=" text-danger" >Deseja criar uma nova conta?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>