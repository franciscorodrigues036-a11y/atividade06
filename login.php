<?php
//Incluindo o arquivo de conexão nesse arquivo
include "conecta.php";
// Recebendo os dados do formulário
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
// Consulta SQL SEGURA (com placeholders :cpf e :senha, SEM aspas)
$sql = "SELECT * FROM aluno WHERE cpf = :cpf AND senha = :senha";
try {
// Preparando a consulta
$stmt = $conexao->prepare($sql);
// Ligando os parâmetros
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':senha', $senha);
// Executando a consulta
$stmt->execute();
if ( $linha = $stmt->fetch() ) { // fetch() retorna false se não tiver linhas
echo "<p>Login bem-sucedido! Bem-vindo, " . $linha['nome'] . "!</p>";
} else {
echo "<p>CPF ou senha incorretos.</p>";
}
} catch (PDOException $e) {
echo "Erro ao executar consulta: " . $e->getMessage();
}
?>