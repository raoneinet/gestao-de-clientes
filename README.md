# 👥 Gestão de Clientes

Sistema CRUD minimalista para gerenciamento de clientes, desenvolvido com **PHP**, **HTML**, **CSS** e **JavaScript**. Permite cadastrar, listar, editar e excluir clientes de forma simples e funcional.

---

## ⚙️ Funcionalidades

- 📋 Exibição de tabela geral com todos os clientes cadastrados;
- ➕ Cadastro de novos clientes;
- ✏️ Edição de clientes existentes;
- ❌ Exclusão de clientes;
- Interface simples e minimalista para fácil usabilidade.

---

## 🛠 Tecnologias utilizadas

- PHP  
- MySQL (banco de dados)  
- HTML5  
- CSS3  
- JavaScript (opcional para interatividade)

---

## 📦 Requisitos para rodar a aplicação

- PHP instalado na máquina (recomendado PHP 7.4 ou superior);
- Servidor local como **XAMPP**, **LAMPP** ou **WAMP** para rodar o servidor Apache e MySQL;
- Navegador moderno.

---

## 🚀 Como instalar e rodar

1. Faça o clone do repositório:
   ```bash
   git clone https://github.com/seu-usuario/gestao-de-clientes.git
Coloque os arquivos na pasta do servidor local (ex: htdocs do XAMPP);

Crie um banco de dados no MySQL e importe a estrutura da tabela clientes (exemplo abaixo):

sql
Copiar
Editar
CREATE TABLE clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  telefone VARCHAR(20),
  data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Configure a conexão com o banco no arquivo config.php:

php
Copiar
Editar
<?php
$servername = "localhost";
$username = "root"; // usuário padrão do XAMPP/WAMP
$password = "";     // senha padrão, geralmente vazio
$dbname = "nome_do_banco";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
Acesse pelo navegador a URL local do projeto, por exemplo:
http://localhost/gestao-de-clientes/

📂 Estrutura do projeto
bash
Copiar
Editar
gestao-de-clientes/
├── index.php           # Listagem geral dos clientes
├── create.php          # Formulário para adicionar cliente
├── edit.php            # Formulário para editar cliente
├── delete.php          # Script para exclusão
├── config.php          # Configuração do banco de dados
├── style.css           # Estilos CSS
└── script.js           # Scripts JS opcionais

✍️ Autor
Desenvolvido por Raone Ferreira


![home](https://github.com/user-attachments/assets/c543f25f-9dce-4057-9bb4-f872eccdf796)

![cadastrar](https://github.com/user-attachments/assets/eb4ab9c7-b25b-4527-b8eb-788e56790aac)

![editar](https://github.com/user-attachments/assets/61db150a-ff10-4357-96a8-6389b1587121)
