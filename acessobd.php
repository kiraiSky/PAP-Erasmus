<?php
/*Utilização de variáveis locais para autenticação na BD*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_erasmus";

try {
    /*PDO(); função para conexão ao servidor */
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    /*define o tipo de erro com a exceção*/
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*permite que os dados trocados no acesso à base de dados não fique codificado*/
    $conn->query('SET NAMES utf8');
}
catch(PDOException $e)
    {
    /*mensagem que indica erro na conexão */
        echo "Erro na conexão: " . $e->getMessage();
    }

/*função que encerra a conexão à base de dados*/
$conn = null;
?>