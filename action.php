<?php 
    session_start();
    
    $user = 'root';
    $passwd = 'root123';

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '' ;
    $senha = (isset($_POST['password'])) ? $_POST['password'] : '' ;

    if (empty($usuario) || empty($senha)){
        $retorno = array('codigo' => '', 'mensagem' => "Preencha todos os campos!");
        echo json_encode($retorno);
        exit();
    }
     
    if ($senha == $passwd && $usuario == $user){
        $_SESSION['nome'] = $user;
        $_SESSION['logado'] = 'SIM';
    } else {
        $_SESSION['logado'] = 'NAO';
    }

    if ($_SESSION['logado'] == 'SIM'){
        $retorno = array('codigo' => true, 'mensagem' => "Logado com sucesso! ");
        echo json_encode($retorno);
        exit();
    } else {
        $retorno = array('codigo' => false, 'mensagem' => "Usuário não autorizado");
        echo json_encode($retorno);
        exit();
    }