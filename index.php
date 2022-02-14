<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    <title>Projeto de cadastro Oliveira Trade</title>
</head>
    <body>
        <div class="l-form container col-11 col-9" id="form-container">
           <div class="row align-items-center gx-5">
               <div class="col-md-6 order-md-2">
                    <h2>Login Oliveira Trade</h2>
                    <form action="valida_login.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail">
                            <label for="email" class="form-label">Digite o seu e-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="psenha" name="senha" placeholder="Digite sua senha">
                            <label for="senha" class="form-label">Digite sua senha</label>
                        </div>

                        <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?> 
                            <div class="text-danger"> 
                                Dados inválidos
                            </div> 
                       <?php } ?>
                        <input type="submit" class="btn btn-primary" value="entrar">
                    </form>
               </div>

               <div class="col-md-6 order-md-1">
                    <div class="col-12">
                        <img src="img/security_SVG.svg" alt="Entrar no sistema" class="img-fluid">
                    </div>
                    <div class="col-12" id="link-container">
                        <a href="regristro.php">Ainda não tenho conta</a>
                    </div>
               </div>

           </div>
        </div>
    </body>
</html>