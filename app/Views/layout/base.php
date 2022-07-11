<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/bootstrap.min.css">
    <title>LogIn System</title>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url()?>/">LogIn System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   
                <?php if(!session()->has('loggedIn')):?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>/register">Register</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>/login">LogIn</a>
                    </li>
                    <?php else:?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>/data">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url()?>/data/logout">LogOut</a>
                    </li>
                <?php endif; ?>
                  
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>
    



    <div class="container-fluid mt-5 bg-dark">
        <footer class="text-center text-light pt-4 pb-3">
            Copyright @ Vipin Patel | All rights are reserved.
        </footer>
    </div>

    <script src="<?= base_url() ?>/public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>/public/assets/js/jquery.js"></script>
    
    <?= $this->renderSection('scripts')?>
</body>

</html>