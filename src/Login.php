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
                        <div class="form-group col-1"></div>
                        <div class="form-group col-5">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Primeiro nome">
                        </div>
                        <div class="form-group col-5">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome completo">
                        </div>
                        <div class="form-group col-1"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-1"></div>
                        <div class="form-group col-10">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="SeuEmail@Email.com">
                        </div>
                        <div class="form-group col-1"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-1"></div>
                        <div class="form-group col-10">
                            <label for="password">Senha:</label>
                            <div class="conjunto">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Preencha sua senha">
                            <div class="Caps position-absolute" style="bottom:9px;left:100%;">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-capslock" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path  fill-rule="evenodd" d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5L8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z"/>
                            </svg>
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-1"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-1"></div>
                        <div class="form-group col-10">
                            <label for="conf">Confirme a senha:</label>
                            <div class="conjunto">
                            <input type="password" class="form-control" id="conf" name="conf" placeholder="Digite sua senha novamente">
                            <div class="Caps position-absolute" style="bottom:9px;left:100%;">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-capslock" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path  fill-rule="evenodd" d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5L8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z"/>
                            </svg>
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-1"></div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                        <div class="form-group col-1"></div>
                        <legend class="col-form-label col-3 pt-0">Eu sou:</legend>
                        <div class="col-7">
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
                        <div class="form-group col-1"></div>
                        </div>
                    </fieldset>

                    <div class="form-row">
                        <div class="col-1"></div>
                        <div id="groupSup" class="form-group col-10" style="display:none;">
                            <label for="sup">E-mail do supervisor:</label>
                            <input type="email" class="form-control" id="sup" name="sup" placeholder="Campo desativado"  disabled>
                        </div>
                        <div class="col-1"></div>
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
                   <div class="form-group col-1 col-md-2"></div>
                    <div class="form-group col-10 col-md-8">
                        <label for="lemail" class="mt-md-5">E-mail:</label>
                        <input type="email" class="form-control" id="lemail" name="lemail" placeholder="EmailDeLogin@Email.com">
                    </div>
                    <div class="form-group col-1 col-md-2"></div>
                   </div>
                   <div class="form-row"> 
                   <div class="form-group col-1 col-md-2"></div>
                    <div class="form-group col-10 col-md-8">
                        <label for="lpassword" class="mt-md-3">Senha:</label>
                        <div class="conjunto">
                        <input type="password" class="form-control control-pass" id="lpassword" name="lpassword" placeholder="Insira sua senha">
                        <div class="Caps position-absolute" style="bottom:9px;left:100%;">
                        <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-capslock" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path  fill-rule="evenodd" d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5L8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z"/>
                        </svg>
                        </div>
                        </div>
                    </div>
                    <div class="form-group col-1 col-md-2"></div>
                   </div>

                   <div class="form-row"> 
                   <div class="form-group col-1 col-md-2"></div>
                    <div class="form-group col-10 col-md-8">
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Lebrar de mim
                            </label>
                        </div>

                    </div>
                    <div class="form-group col-1 col-md-2"></div>
                   </div>

                   <div class="form-row"> 
                   <div class="form-group col-1 col-md-2"></div>
                    <div class="form-group col-10 col-md-8">
                        
                    <div class="alert alert-danger" role="alert">
                        E-mail ou senha inválidos!
                    </div>

                    </div>
                    <div class="form-group col-1 col-md-2"></div>
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