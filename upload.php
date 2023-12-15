<?php
// Diretório de upload (certifique-se de que o servidor tem permissão para escrever nele)
$uploadDirectory = "uploads/";

// Verifica se o formulário de upload foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica se há erros durante o upload
    if ($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        // Gera um nome único para o arquivo para evitar substituições
        $fileName = uniqid() . "_" . basename($_FILES["file"]["name"]);
        $targetPath = $uploadDirectory . $fileName;

        // Move o arquivo para o diretório de upload
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
            // Upload bem-sucedido
            echo "Arquivo enviado com sucesso.";
        } else {
            // Falha no upload
            echo "Erro ao enviar o arquivo.";
        }
    } else {
        // Erro durante o upload
        echo "Erro durante o upload do arquivo.";
    }
} else {
    // Acesso direto ao script, redireciona para a página principal
    header("Location: index.html");
    exit();
}
?>