<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);

    $destino = "isabellybrt77@gmail.com";
    $assunto = "Fala Comigo - Dev IB";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$celular;

    $topo = "From: isacreeper10@gmail.com"."\n"."Reply-to: ".$email."\n"."x=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$topo)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("Houve um erro ao enviar o email!");
    }
