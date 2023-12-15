<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Substitua os valores de exemplo pelos seus próprios dados de usuário
    $username = "1";
    $password = "1";

    // Obtém os dados do formulário
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Verifica se os dados do formulário correspondem aos dados esperados
    if ($inputUsername === $username && $inputPassword === $password) {
        // Login bem-sucedido
        header("Location: index.html"); // Redireciona para a página principal após o login
        exit();
    } else {
        // Login falhou
        echo "Login falhou. Verifique suas credenciais.";
    }
} else {
    // Acesso direto ao script, redireciona para o formulário de login
    header("Location: index.html");
    exit();
}
?>