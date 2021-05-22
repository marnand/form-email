
<a href="?page=create_user">Cadastrar</a> usuário

<h2>Página Inicial</h2>

<?= get('message'); ?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $users = getAll('users');
            foreach ($users as $user):
        ?>
        <tr>
            <td><?= $user->Id; ?></td>
            <td><?= $user->name; ?></td>
            <td><?= $user->email; ?></td>
            <td>
                <a href="?page=edit_user&id=<?=$user->Id;?>">Editar</a>
            </td>
            <td>
                <a href="?page=delete_user&id=<?=$user->Id;?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>