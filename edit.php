<?php
require "config.php";
require "header.php";

$client = [];
$id = filter_input(INPUT_GET, 'id');

if($id){

    $editClient = $pdo -> prepare('SELECT * FROM clients WHERE id = :id');
    $editClient -> bindValue(':id', $id);
    $editClient -> execute();

    if($editClient -> rowCount() > 0){
        $client = $editClient -> fetch(PDO::FETCH_ASSOC);
    }

}else{

    header('location: index.php');
    exit;
}


?>

<div class="container">
    <h3>Editar dados de cliente cadastrado</h3>

    <form method="POST" action="editAction.php">
        <input type="hidden" name="id"value="<?=$client['id'];?>">
        <label>
            Nome:
            <input type="text" class="name form-control" name="name" value="<?=$client['nome'];?>">
        </label>
        <label>
            Telefone:
            <input type="number" class="phone form-control" name="phone" value="<?=$client['telefone']?>">
        </label>
        <label>
            Email:
            <input type="email" class="email form-control" name="email" value="<?=$client['email'];?>">
        </label>
        <input type="submit" class="btn btn-success" value="Salvar">
    </form>
</div>

<?php
require "footer.php";
?>