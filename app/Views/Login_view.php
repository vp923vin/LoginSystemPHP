<?= $this->extend('layout/base');?>

<?= $this->section('content')?> 

<div class="container mt-5">
    
    <?php if(session()->getTempdata('error')): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <?= session()->getTempdata('error'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <h3>LOGIN</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <form action="<?= base_url('login')?>" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label" >Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" />
                            <span class="text-danger"><?= display_error($validation, 'email')?></span>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                            <span class="text-danger"><?= display_error($validation, 'password')?></span>
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">Login</button>
                    </form>
                </div>
                <div class="col-md-4 ">
                    <img class="float-end" src="<?= base_url(); ?>/public/img/log.png" width="100%" alt="login" >
                </div>
            </div> 
        </div>
    </div>        
</div>

<?= $this->endSection('content');?>