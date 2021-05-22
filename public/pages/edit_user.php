<?= get('message'); ?>
<?php
    $user = find('users', 'id', $_GET['id']);
?>

<form action="pages/forms/update_user.php" method="POST" role="form">

    <input type="hidden" name="id" value="<?=$user->Id?>">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" value="<?=$user->name?>" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" name="surname" class="form-control" value="<?=$user->surname?>" placeholder="Digite seu sobrenome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="<?=$user->email?>" placeholder="Digite seu email">
    </div>

    <button type="submit" class="btn btn-primary">Editar</button>
</form>