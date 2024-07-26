<?php
// dsn => Data Source Name, contém as informações para 
// conectar ao banco de dados.
$dsn = 'pgsql:host=db;port=5432;dbname=mydatabase;';
$user = 'user';
$password = 'password';

try {
    // PDO => PHP Data Objects, extensão para acessar 
    // bancos de dados em PHP.
    $pdo = new PDO($dsn, $user, $password);

    echo "Conexão com o banco de dados PostgreSQL estabelecida com sucesso!";
} catch (PDOException $e) {
    echo 'Falha na conexão: ' . $e->getMessage();
}
