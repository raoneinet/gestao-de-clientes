<?php
require "header.php";
?>

<div class="container">
<h3>Formulário de cadastro de clientes</h3>
    <form method="POST" action="addAction.php">
        <label>
            Nome:
            <input type="text" class="name form-control" name="name">
        </label>
        <label>
            Telefone:
            <input type="number" class="phone form-control" name="phone">
        </label>
        <label>
            Email:
            <input type="email" class="email form-control" name="email">
        </label>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>

<?php
require "footer.php";
?>