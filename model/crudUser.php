<?php
    include 'conection.php';

    function verificarUser($nome, $senha){
        connect();
        $consulta = query("SELECT nome, senha FROM usuario WHERE '$nome' = nome AND '$senha' = senha;");
        $dados = mysqli_fetch_assoc($consulta);
        close();
        if($dados['senha'] == $senha && $dados['nome'] == $nome){
            session_start();
            $_SESSION['nome'] = $nome;
            header("Location:../view/menu.php");
        }else{
            echo "<script type='text/javascript'>alert('Usuário ou senha incorretos!');</script>";
            echo "<script type='text/javascript'>window.location='../index.php';</script>";
        }
    }

    function cadastrarUsuario($nome, $senha){
        connect();
        $cadastro = query("INSERT INTO usuario (nome, senha) VALUES ('$nome', '$senha')");
        $consulta = query("SELECT nome, senha  FROM usuario WHERE '$nome' = nome AND '$senha' = senha;");
        close();
        if($cadastro){
            session_start();
            $_SESSION['nome'] = $nome;
            header("Location:../view/menu.php");
        }
    }

    function nomeUser(){
        session_start();
        if(isset($_SESSION["nome"])){
            echo $_SESSION["nome"];
        }else{
            header("Location:../index.php");
        }
    }

    function inserirProduto($nomeProduto, $qtd, $preco){
        connect();
        $inserir = query("INSERT INTO itens (nome_item, quant_item, preco) VALUES ('$nomeProduto', '$qtd', '$preco')");
        close();
        header("Location:../view/mostrarProduto.php");
    }

    function buscarProduto(){
        connect();
        $consulta = query("SELECT nome_item, quant_item, preco, codigo FROM itens");
        close();
        return $consulta;
    }
    
    function buscarProdutoEdit($codigo){
        connect();
        $consulta = query("SELECT nome_item, quant_item, preco FROM itens WHERE codigo = $codigo");
        close();
        $result = mysqli_fetch_assoc($consulta);
        return $result;
    }

    function editarProduto($id, $nomeProduto, $qtd, $preco){
        connect();
        query("UPDATE itens SET  nome_item = '$nomeProduto', quant_item = '$qtd', preco = '$preco' WHERE codigo = $id");
        close();
        header("Location:../view/mostrarProduto.php");
    }

    function excluirProduto($id){
        connect();
        query("DELETE FROM itens WHERE codigo = '$id'");
        close();
        header("Location:../view/mostrarProduto.php");
    }
   

?>