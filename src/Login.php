<?php require_once 'inc'.DIRECTORY_SEPARATOR.'config.php'; 

if (isset($_SESSION['id_user'])){
    header('Location: index.php');
}

?>
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

    <div class="container-fluid mt-5  wt-geral text-white" style="min-height:82vh;">

    <?php

    if (isset($_GET['cadFail'])){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Esse e-mail já foi cadastrado anteriormente!</strong> Cadastre outro e-mail ou faça login com outra conta.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }

    if (isset($_GET['cadSuc'])){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Cadastro feito com sucesso!</strong> Agora faça login para continuar.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }

    if (isset($_GET['altSuc'])){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Alteração de senha feita com sucesso!</strong> Agora faça login com a nova senha para continuar.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }

    if (isset($_GET['altFail'])){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Houve um erro ao alterar a senha.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }

    if (isset($_GET['logFail'])){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Não foi possível verificar suas credenciais!</strong> E-mail ou senha incorretos.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }

    if (isset($_GET['encSuc'])){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Sua sessão foi encerrada com sucesso!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
    ?>

        <div class="row">

            <!-- Cadastro -->

            <div class="col-12 col-xl-6 mt-5 mt-xl-0 border-xl-right  border-color-red-2 order-2 order-xl-1">
                <h2 class="font-antic text-center">Não tem login? Cadastre-se</h2>
                <form name="formCad" id="formCad" action="inc/db_cad.php" method="post">

                <!-- Campos de Nome e Sobrenome -->

                    <div class="form-row">
                        <div class="form-group col-1"></div>
                        <div class="form-group col-5">
                            <label for="name">Nome:</label><span class="iconInfo" data-toggle="tooltip" data-html="true" title="<strong>Não coloque seu sobrenome aqui. Preencha sem espaços em branco</strong>"><?php echo $info; ?></span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Primeiro nome" required>
                        </div>
                        <div class="form-group col-5">
                            <label for="sobrenome">Sobrenome:</label><span class="iconInfo" data-toggle="tooltip" data-html="true" title="<strong>Preencha apenas com seu Sobrenome. respeite o limite de 60 caracteres.</strong>"><?php echo $info; ?></span>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome completo" required>
                        </div>
                        <div class="form-group col-1"></div>
                    </div>

                <!-- Validação do Nome e Sobrenome -->

                <div id="WarnName" class="form-row" style="display:none;"> 
                   <div class="form-group col-1"></div>
                    <div class="form-group col-10">
                        
                    <div class="alert alert-danger" role="alert">
                        Nome inválido! Deve conter:
                        <hr>
                        <ul>
                            <li>De 3 a 20 caracteres;</li>
                            <li>Nenhum espaço em branco.</li>
                        <ul>
                    </div>

                    </div>
                    <div class="form-group col-1"></div>
                </div>
                <div id="WarnSob" class="form-row" style="display:none;"> 
                <div class="form-group col-1"></div>
                    <div class="form-group col-10">
                        
                    <div class="alert alert-danger" role="alert">
                        Sobrenome inválido! Deve conter:
                        <hr>
                        <ul>
                            <li>De 3 a 60 caracteres;</li>
                        <ul>
                    </div>

                    </div>
                    <div class="form-group col-1"></div>
                </div>

                <!-- Campo de E-mail -->

                    <div class="form-row">
                        <div class="form-group col-1"></div>
                        <div class="form-group col-10">
                            <label for="email">E-mail:</label><span class="iconInfo" data-toggle="tooltip" data-html="true" title="<strong>Preencha com um e-mail valído e que não tenha sido registrado anteriormente.</strong>"><?php echo $info; ?></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="SeuEmail@domínio.com" required>
                        </div>
                        <div class="form-group col-1"></div>
                    </div>

                <!-- Validação de E-mail -->

                <div id="WarnEmail" class="form-row" style="display:none;"> 
                   <div class="form-group col-1"></div>
                    <div class="form-group col-10">
                        
                    <div class="alert alert-danger" role="alert">
                        E-mail inválido! Preencha corretamente.
                    </div>

                    </div>
                    <div class="form-group col-1"></div>
                </div>

                <!-- Campo de Senha -->

                    <div class="form-row">
                        <div class="form-group col-1"></div>
                        <div class="form-group col-10">
                            <label for="password">Senha:</label><span class="iconInfo" data-toggle="tooltip" data-html="true" title='<strong><span class="text-left">Sua senha deve conter no mínimo:<ul><li>8 a 16 caracteres</li><li>1 letra minúscula e 1 letra maiúscula</li><li>1 número</li><li>1 caracter especial</li></ul></span></strong>'><?php echo $info; ?></span>
                            <div class="conjunto">
                            <input type="password" class="form-control control-pass" id="password" name="password" placeholder="Preencha sua senha" required>
                            <div class="Caps position-absolute" style="bottom:9px;left:100%;">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-capslock" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path  fill-rule="evenodd" d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5L8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z"/>
                            </svg>
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-1"></div>
                    </div>

                <!-- Validação de Senha -->

                <div id="WarnPass" class="form-row" style="display:none;"> 
                   <div class="form-group col-1"></div>
                    <div class="form-group col-10">
                        
                    <div class="alert alert-danger" role="alert">
                        Senha inválida! Deve conter:
                        <hr>
                        <ul>
                            <li>Entre 8 e 16 caracteres;</li>
                            <li>No minímo 1 caracter minúsculo;</li>
                            <li>No minímo 1 caracter maiúsculo;</li>
                            <li>No minímo 1 caracter especial (!,@,#,$ entre outros);</li>
                            <li>No minímo 1 caracter númerico.</li>
                        <ul>
                    </div>

                    </div>
                    <div class="form-group col-1"></div>
                </div>

                <!-- Campo de Confirmar a senha -->

                    <div class="form-row">
                        <div class="form-group col-1"></div>
                        <div class="form-group col-10">
                            <label for="conf">Confirme a senha:</label><span class="iconInfo" data-toggle="tooltip" data-html="true" title="<strong>Repita a sua senha do campo anterior.</strong>"><?php echo $info; ?></span>
                            <div class="conjunto">
                            <input type="password" class="form-control control-pass" id="conf" name="conf" placeholder="Digite sua senha novamente" required>
                            <div class="Caps position-absolute" style="bottom:9px;left:100%;">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-capslock" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path  fill-rule="evenodd" d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5L8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z"/>
                            </svg>
                            </div>
                            </div>
                        </div>
                        <div class="form-group col-1"></div>
                    </div>

                <!-- Validação de Confirmar Senha -->

                <div id="WarnConf" class="form-row" style="display:none;"> 
                   <div class="form-group col-1"></div>
                    <div class="form-group col-10">
                        
                    <div class="alert alert-danger" role="alert">
                        As senhas não batem!
                    </div>

                    </div>
                    <div class="form-group col-1"></div>
                </div>

                


                <!-- Botão de cadastrar -->

                    <div class="form-group">
                        <center><button type="button" id="cadastrar" class="btn btn-color-green-2 mt-3 border border-color-green-1" onclick="validCad()">Cadastrar</button></center>
                    </div>

                </form>
            </div>

            <!-- Login -->

            <div class="col-12 col-xl-6 border-lg-bottom order-1 border-color-red-2 order-xl-2 pb-4 pb-xl-0">
                <h2 class="font-antic text-center mb-md-4">Faça o login</h2>
                <form name="formLog" id="formLog" action="inc/db_log.php" method="post">
                   <div class="form-row"> 
                   <div class="form-group col-1 col-md-2"></div>
                    <div class="form-group col-10 col-md-8">
                        <label for="lemail" class="mt-md-5">E-mail:</label>
                        <input type="email" class="form-control" id="lemail" name="lemail" placeholder="EmailDeLogin@domínio.com" required>
                    </div>
                    <div class="form-group col-1 col-md-2"></div>
                   </div>
                   <div class="form-row"> 
                   <div class="form-group col-1 col-md-2"></div>
                    <div class="form-group col-10 col-md-8">
                        <label for="lpassword" class="mt-md-3">Senha:</label>
                        <div class="conjunto">
                        <input type="password" class="form-control control-pass" id="lpassword" name="lpassword" placeholder="Insira sua senha" required>
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
                        <a class="alink muda" target="_blank" href="recuperar.php">Esqueci minha senha</a>
                    </div>
                    <div class="form-group col-1 col-md-2"></div>
                   </div>

                   <div class="form-row" style="display:none;"> 
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

        <div class="row"><div class="col-12">&nbsp;</div></div>

    </div>

    <!-- incluindo o rodapé -->
    <?php require_once $rodape ?>

    <!-- incluindo scripts -->
    <?php require_once $scriptJs; ?>

  </body>
</html>