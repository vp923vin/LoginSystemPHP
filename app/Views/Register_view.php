<?= $this->extend('layout/base')?>

<?= $this->section('content')?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php 
                if (session()->getFlashdata('status')) {
                    echo "<h3>" . session()->getFlashdata('status') . "</h3>";
                    echo '<a href="http://localhost/LOGIN/login" class="btn btn-primary">Login</a>';
                }
            ?>  
            
    
            <div class="card">
                <div class="card-header">
                    <h4>REGISTRATION</h4>   
                </div>
                <div class="card-body">
                    <?= form_open();?>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <!-- <label for="first_name"  class="form-label" >First Name</label> -->
                                    <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name">
                                    <span class="text-danger"><?= display_error($validation, 'first_name')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <!-- <label for="last_name"  class="form-label">Last Name</label> -->
                                    <input type="text" name="last_name"  class="form-control" id="last_name" placeholder="Enter Last Name">
                                    <span class="text-danger"><?= display_error($validation, 'last_name')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <!-- <label for="phone"  class="form-label">Phone</label> -->
                                    <input type="text" name="phone"  class="form-control" id="phone" placeholder="Enter Phone">
                                    <span class="text-danger"><?= display_error($validation, 'phone')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <!-- <label for="email"  class="form-label">Email</label> -->
                                    <input type="text" name="email"  class="form-control" id="email" placeholder="Enter Email">
                                    <span class="text-danger"><?= display_error($validation, 'email')?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <!-- <label for="password"  class="form-label">Password</label> -->
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                                    <span class="text-danger"><?= display_error($validation, 'password')?></span>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <!-- <label for="confirm_password"  class="form-label">Confirm Password</label> -->
                                    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
                                    <span class="text-danger"><?= display_error($validation, 'confirm_password')?></span>
                                </div>    
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    <?= form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content')?>

