<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>Editar Usuario<?= $this->endSection()?>

<?= $this->section('content')?>

<h1 class="title">Editar Usuario</h1>

<?php if(session()->has('errors')): ?>

    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error;?></li>
        <?php endforeach;?>
    </ul>
<?php endif ?> 

<?= form_open("/admin/users/update/" .  $user->id) ?>

    <?= $this->include('Admin/Users/form')?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Guardar</button>
        </div>
        <div class="control">
            <a class="button" href="<?= site_url("/admin/users/show/" .  $user->id) ?>">Cancelar</a>
        </div>
    </div>
</form>

<?= $this->endSection()?>