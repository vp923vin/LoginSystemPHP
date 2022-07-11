<?= $this->extend('layout/base')?>

<?= $this->section('content')?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Edit Registration</h4>   
                </div>
                <div class="card-body">
                    <form action="<?= base_url('/data/update/'.$register['id']) ?>" method="post">
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="first_name"  class="form-label" >Edit First Name</label>
                                    <input type="text" id="first_name" name="first_name" value="<?= $register['first_name']?>" class="form-control"  placeholder="Enter First Name">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="last_name"  class="form-label">Edit Last Name</label>
                                    <input type="text" name="last_name"  class="form-control" value="<?= $register['last_name']?>" id="last_name" placeholder="Enter Last Name">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="phone"  class="form-label">Edit Phone</label>
                                    <input type="text" name="phone"  class="form-control" value="<?= $register['phone']?>" id="phone" placeholder="Enter Phone">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="email"  class="form-label">Edit Email</label>
                                    <input type="text" name="email"  class="form-control" value="<?= $register['email']?>" id="email" placeholder="Enter Email">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="password"  class="form-label">Edit Password</label>
                                    <input type="password" name="password" class="form-control" value="<?= $register['password']?>" id="password" placeholder="Enter Password">
                                   
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="confirm_password"  class="form-label">Edit Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control" value="<?= $register['password']?>" id="confirm_password" placeholder="Confirm Password">
                                   
                                </div>    
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content')?>

