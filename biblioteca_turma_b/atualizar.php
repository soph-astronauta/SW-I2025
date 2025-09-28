<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #4b6da3ff;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .container {
            background: #3e0e50a3;
            max-width: 600px;
            margin: 50px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(187, 0, 87, 0.46);
            text-align: center;
        }

        h2 {
            color: #13092ac8;
            margin-bottom: 25px;
        }

        
        .msg-sucesso {
            color: #1dc623ff;
            background-color: #42247aac;
            border: 3px solid #633d9cff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .msg-erro {
            color: #e71818ff;
            background-color: #42247aac;
            border: 3px solid #633d9cff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

    </style>
</head>


<?php
    require 'conexao.php';
    $id = $_GET['id'];
    $novo_titulo = $_POST['novo_titulo'];
    $novo_autor = $_POST['novo_autor'];
    $novo_genero = $_POST['novo_genero'];
    $novo_ano = $_POST['novo_ano'];
    $novo_paginas = $_POST['novo_paginas'];


    $sql = "UPDATE livros 
    
    SET titulo = :novo_titulo,
        autor = :novo_autor,
        genero = :novo_genero,
        ano = :novo_ano,
        paginas = :novo_paginas
    
    WHERE id = :id";


    $stmt = $pdo->prepare($sql);



    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':novo_titulo', $novo_titulo);
    $stmt->bindParam(':novo_autor', $novo_autor);
    $stmt->bindParam(':novo_genero', $novo_genero);
    $stmt->bindParam(':novo_ano', $novo_ano);
    $stmt->bindParam(':novo_paginas', $novo_paginas);


    if ($stmt->execute()) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar livro.";
    }
?>