<?php
    include '../model/crudUser.php';
    
    if(isset($_POST['opcao'])){
        $opcao= $_POST['opcao'];
    }else{
        $opcao = $_GET['opcao'];
    }

    switch($opcao){
        case 'entrar':
            $nome = $_POST["nome"];
            $senha = sha1($_POST["senha"]);
            verificarUser($nome, $senha);
            break;

        case 'cadastrar':
            header("Location:../view/cadastrarUser.php");
            break;
    
        case 'cadastrar1':
            $nome = $_POST["nome"];
            $senha = sha1($_POST["senha"]);
            cadastrarUsuario($nome, $senha); 
            break;
        
        case 'sair':
            session_start();
            session_destroy();
            echo "<script>window.location = '../index.php';</script>";
            break;

        case 'cadastrarProduto':
            $nomeProduto = $_POST['nomeProduto'];
            $qtd = $_POST['qtd'];
            $preco = $_POST['preco'];
            inserirProduto($nomeProduto, $qtd, $preco);
            break;

        case 'editar':
                $id = $_GET['id'];
                header("Location:../view/editarProduto.php?id=$id");
                break;
        
        case 'editarProduto':
            $id = $_GET['id'];
            $nomeProduto = $_POST['nomeProduto'];
            $qtd = $_POST['qtd'];
            $preco= $_POST['preco'];
            editarProduto($id, $nomeProduto, $qtd, $preco);
            break;

        case 'excluir':
            $id = $_GET['id'];
            excluirProduto($id);
            break;
    }


?>