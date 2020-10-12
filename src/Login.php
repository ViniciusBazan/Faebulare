<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <!-- incluindo head padrão -->
    <?php require_once $head; ?>

  </head>
  <body>
    <!-- Incluindo o menu -->
    <?php require_once $menu; ?>

    <div ></div>

    <div class="container-fluid mt-5  wt-geral text-white">

        <div class="row">

            <!-- Cadastro -->

            <div class="col-12 col-md-6 mt-3 mt-md-0 border-md-right  border-color-red-2 order-2 order-md-1">
                <h2 class="font-antic text-center">Não tem login? Cadastre-se</h2>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-5">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Primeiro nome">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome completo">
                        </div>
                        <div class="form-group col-md-1"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-10">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="SeuEmail@Email.com">
                        </div>
                        <div class="form-group col-md-1"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-10">
                            <label for="password">Senha:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Preencha sua senha">
                        </div>
                        <div class="form-group col-md-1"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-10">
                            <label for="conf">Confirme a senha:</label>
                            <input type="password" class="form-control" id="conf" name="conf" placeholder="Digite sua senha novamente">
                        </div>
                        <div class="form-group col-md-1"></div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                        <div class="form-group col-md-1"></div>
                        <legend class="col-form-label col-sm-3 pt-0">Eu sou:</legend>
                        <div class="col-sm-7">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="1">
                            <label class="form-check-label" for="tipo1">
                                Criança ou adolescente
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo2" value="2">
                            <label class="form-check-label" for="tipo2">
                                Responsável legal ou Psicólogo infantil
                            </label>
                            </div>
                        </div>
                        <div class="form-group col-md-1"></div>
                        </div>
                    </fieldset>

                    <div class="form-row">
                        <div class="col-md-1"></div>
                        <div id="groupSup" class="form-group col-md-10" style="display:none;">
                            <label for="sup">E-mail do supervisor:</label>
                            <input type="password" class="form-control" id="sup" name="sup" placeholder="Campo desativado"  disabled>
                        </div>
                        <div class="col-md-1"></div>
                    </div>

                    <div class="form-group">
                        <center><button type="submit" id="cadastrar\" class="btn btn-color-green-2 mt-3 border border-color-green-1">Cadastrar</button></center>
                    </div>

                </form>
            </div>

            <!-- Login -->

            <div class="col-12 col-md-6 border-sm-bottom order-1 border-color-red-2 order-md-2">
                <h2 class="font-antic text-center mb-md-5">Faça o login</h2>
                <form>
                   <div class="form-row"> 
                   <div class="form-group col-md-2"></div>
                    <div class="form-group col-md-8">
                        <label for="lemail" class="mt-md-5">E-mail:</label>
                        <input type="email" class="form-control" id="lemail" name="lemail" placeholder="EmailDeLogin@Email.com">
                    </div>
                    <div class="form-group col-md-2"></div>
                   </div>
                   <div class="form-row"> 
                   <div class="form-group col-md-2"></div>
                    <div class="form-group col-md-8">
                        <label for="lpassword" class="mt-md-3">Senha:</label>
                        <input type="password" class="form-control" id="lpassword" name="lpassword" placeholder="Insira sua senha">
                    </div>
                    <div class="form-group col-md-2"></div>
                   </div>

                   <div class="form-row"> 
                   <div class="form-group col-md-2"></div>
                    <div class="form-group col-md-8">
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Lebrar de mim
                            </label>
                        </div>

                    </div>
                    <div class="form-group col-md-2"></div>
                   </div>

                   <div class="form-group">
                        <center><button type="submit" id="login" class="btn btn-color-green-2 mt-3 border border-color-green-1">Iniciar sessão</button></center>
                    </div>

            </div>

        </div>

    </div>

    <!-- incluindo scripts -->
    <?php require_once $scriptJs; ?>

  </body>
</html>