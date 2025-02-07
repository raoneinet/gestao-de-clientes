<?php
    require "header.php";
    require "config.php";
    require "getData.php";
?>

<div class="container">
    <a href="add.php" class="btn btn-primary add-btn" role="button" aria-disabled="true">Cadastrar Cliente</a>
    <table class="table table-striped">
        <tr class="thead">
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach($sql as $client):?>
            <tr class="tbody">
                <td><?=$client['id'];?></td>
                <td><?=$client['nome'];?></td>
                <td><?=$client['telefone'];?></td>
                <td><?=$client['email'];?></td>
                <td>
                    <a href="edit.php?id=<?=$client['id'];?>"><img src="assets/images/edit-button.svg" width="20px"></a>
                    <a href="delete.php?id=<?=$client['id'];?>" onclick="return confirm('Tem certeza que deseja excluir <?=$client['nome'];?>')"><img src="assets/images/delete-button.svg" width="20px"></a>
                </td>
            </tr>
        <?php endforeach;?>

    </table>
</div>

<?php
    require "footer.php";
?>