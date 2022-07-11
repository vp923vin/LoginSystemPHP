<?= $this->extend('layout/base');?>

<?= $this->section('content')?> 

<div class="container mt-5 ">
    <div class="alert alert-warning alert-dismissible ">
        <h3>Are you Registered User ?</h3>
        <p>if not please click this button</p>
        <a href="<?= base_url() ?>/register" class="btn btn-primary btn-md">Resgister</a>
        <br>
        <br>
        <h5>If you are registered please click the Login button </h5>
        <a href="<?= base_url() ?>/login" class="btn btn-primary btn-md">login</a>
    </div>
</div>

<?= $this->endSection('content');?>