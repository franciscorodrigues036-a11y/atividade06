<?php
// Definindo os dados de conexão com o banco MySQL
// TROQUE pelos dados do InfinityFree (menu MySQL Databases)
$host = "sql303.infinityfree.com"; // MySQL Hostname
$banco = "if0_43168544_meu_banco"; // MySQL DB Name
$usuario = "if0_43168544"; // MySQL Username
$senha = "siudZ1nfFvXFQ"; // MySQL Password
try {
// Criando uma instância PDO para conectar ao banco MySQL
$conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
// Definindo o modo de erro para exceções
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $e) {
// Exibindo a mensagem de erro em caso de falha na conexão
echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>