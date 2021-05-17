<h2>Contato</h2>

<?= get('message'); ?>

<form action="pages/forms/contato.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" name="subject" class="form-control" placeholder="Digite o assunto">
    </div>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>