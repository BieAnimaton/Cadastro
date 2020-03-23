<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["text"] != "" AND $_POST["pass"] != "") {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "restau";

            $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $consulta = $conexao->prepare("INSERT INTO usuarios (login, senha)
            VALUES (?, ?)");

            $consulta->execute( array($_POST["text"], md5($_POST["pass"])) );

            echo "Dados cadastrados!!" . "</br>";
            echo "Bem-vindo(a) $_POST[text]";
        }
    }
?>