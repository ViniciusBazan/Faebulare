<?php

function exibiComentario($post){

    // Faz a conexão

    require_once 'db_conn.php';

    $result  = $conn->query("SELECT tb_usuarios.nome, tb_usuarios.sobrenome, tb_coment.id_coment, tb_coment.conteudo, tb_coment.dt_coment FROM tb_coment INNER JOIN tb_usuarios ON tb_coment.id_user=tb_usuarios.id_user INNER JOIN tb_post ON tb_coment.id_post=tb_post.id_post WHERE tb_coment.id_post = '$post'");
    $result2 = $conn->query("SELECT tb_usuarios.nome, tb_usuarios.sobrenome, tb_coment.id_coment, tb_coment.conteudo, tb_coment.dt_coment FROM tb_coment INNER JOIN tb_usuarios ON tb_coment.id_user=tb_usuarios.id_user INNER JOIN tb_post ON tb_coment.id_post=tb_post.id_post WHERE tb_coment.id_post = '$post' AND tb_coment.reply IS NULL ORDER BY tb_coment.dt_coment DESC");

    if($result->num_rows > 1){
        $comentarios = $result->num_rows." Comentários";
    }else if($result->num_rows == 1){
        $comentarios = $result->num_rows." Comentário";
    }else{
        $comentarios = "Nenhum comentário";
    }

    echo "<h3 class='text-justify mt-5 mb-3 font-antic'>$comentarios</h3>";

    while ($row = $result2->fetch_array()){

        echo "<div class='row mt-1'>
                <div class='col-12 bg-invert rounded mb-3'>
                    <div class='row mt-2'>
                        <div class='col-6 border-right border-invert'>
                            <p class='text-left mb-0 font-s-12'>".$row['nome']." ".$row['sobrenome']."</p>
                        </div>
                        <div class='col-6'>
                            <p class='text-left mb-0 font-s-10'> Comentado em: ".$row['dt_coment']."</p>
                        </div>
                        <div class='col-12'>
                            <hr class='bg-normal'>
                        </div>
                        <div class='col-12 mb-4'>
                            <p class='text-justify mb-0 font-s-10 recuo'>".$row['conteudo']."</p>
                        </div>
                        <div class='col-8 col-md-9'></div>
                        <div class='col-2 mb-3'>";
                        if(isset($_SESSION['id_user'])){
                           echo "<p class='text-justify mb-0 font-s-10'><a href='#opniao' class='alink-invert opaci muda scrollSuave' onclick='addReply(".$row['id_coment'].",`".$row['nome']."`)'>Responder</a></p>";
                        }
                        echo "</div>
                        <div class='col-8 col-md-9'></div>
                    </div>
                </div>";

        $reply   = $row['id_coment'];
        $result3 = $conn->query("SELECT tb_usuarios.nome, tb_usuarios.sobrenome, tb_coment.conteudo, tb_coment.dt_coment FROM tb_coment INNER JOIN tb_usuarios ON tb_coment.id_user=tb_usuarios.id_user INNER JOIN tb_post ON tb_coment.id_post=tb_post.id_post WHERE tb_coment.id_post = '$post' AND tb_coment.reply = '$reply' ORDER BY tb_coment.dt_coment ASC");
        while($row2 = $result3->fetch_array()){

            echo "<div class='col-1'></div>
                    <div class='col-11 bg-invert rounded mb-3'>
                        <div class='row mt-2'>
                            <div class='col-6 border-right border-invert'>
                                <p class='text-left mb-0 font-s-12'>".$row2['nome']." ".$row2['sobrenome']."</p>
                            </div>
                        <div class='col-6'>
                            <p class='text-left mb-0 font-s-10'>Comentado em: ".$row2['dt_coment']."</p>
                        </div>
                        <div class='col-12'>
                            <hr class='bg-normal'>
                        </div>
                        <div class='col-12 mb-4'>
                            <p class='text-justify mb-0 font-s-11 recuo'>".$row2['conteudo']."</p>
                        </div>
                    </div>
                </div>";

        }

        echo "</div>";


        //var_dump($row);
        //echo "<br><br>";
    }


}

?>