<?php
    
?>

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
    <title>Projeto de cadastro</title>
</head>
    <body>
        <div class="l-form  container col-11 col-md-9">
            <div class="row gx-5">
                <div class="col-md-6">
                    <h2>Cadastre-se em Oliveira Trade</h2>
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                            <label for="name" class="form-label">Digite o seu nome</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Digite seu sobrenome">
                            <label for="last-name" class="form-label">Digite seu sobrenome</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail">
                            <label for="email" class="form-label">Digite o seu e-mail</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="email" placeholder="Digite sua senha">
                            <label for="password" class="form-label">Digite sua senha</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="confirma-password" name="email" placeholder="Digite novamente sua senha">
                            <label for="confirma-password" class="form-label">Digite novamente sua senha</label>
                        </div>
                        <div class="mb-3">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="check-input" value="" id="agree-form" name="agree-form">
                                <label for="agree-form" class="form-check-label">
                                    você aceita os <a href="#">termos de serviços</a> ?
                                </label>
                            </div>

                            <div class="form-check mb-2">
                                <input type="checkbox" class="check-input" value="" id="newsleeter" name="agree-form">
                                <label for="newsleeter" class="form-check-label">
                                    Deseja receber nossas <a href="#">notícias</a>?
                                </label>
                            </div>
                            <input type="submit" class="btn btn-primary" value="cadastrar">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-12">
                           <img src="img/Business_SVG.svg" alt="Tela de registro" class="img-fluid">
                        </div>

                        <div class="col-12">
                            <a href="index.php">Eu já tenho uma conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>