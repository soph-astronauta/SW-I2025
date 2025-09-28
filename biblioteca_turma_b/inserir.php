<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #6e9eceff; 
            font-family: Arial, sans-serif;
            padding: 30px;
        }

        .msg-sucesso {
            color: #19c841ff;
            background-color: #0067b0ff;
            border: 1px solid #46428fff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .msg-erro {
            color: #ff0019ff;
            background-color: #131955ff;
            border: 1px solid #5d3cb2ff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>



<?php
    require 'conexao.php';
    $titulo = $_POST['titulo'] ;
    $genero = $_POST['genero'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $paginas = $_POST['paginas'];

    $sql = "INSERT INTO livros (titulo, genero, autor, ano, paginas) VALUES (:titulo, :genero, :autor, :ano, :paginas)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':paginas', $paginas);


    if ($stmt->execute()) {
    echo "Livro inserido com sucesso!";
    } else {
    echo "Erro ao inserir livro.";
    }
?>