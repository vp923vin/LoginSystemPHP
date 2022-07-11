<?= $this->extend('layout/base') ?>
<?= $this->section('content')?> 

<div class="container mt-5">
    <h2>Welcome to the Data Centre to Manipulate the Data.</h2>
    <div class="alert alert-warning"> If you don't want to perform any action then you can stay or 
    Logout with the help below logout button</div>
    <a href="<?= base_url()?>/data/logout" class="btn btn-primary btn-lg">LogOut</a>
<?php 
    if (session()->getFlashdata('status')) {
        echo "<h3>" . session()->getFlashdata('status') . "</h3>";
        
    }
    ?> 
    <div class="card">
        <div class="card-header">
            <h3>Database and Home Page</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sno = 1; foreach($register as $row):?>
                            <tr>
                               <td><?=  $sno++; ?></td>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['first_name'] ?></td>
                                <td><?= $row['last_name'] ?></td>
                                <td><?= $row['phone'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['created_at'] ?></td>
                                <td><a href="<?= base_url('/data/edit/'.$row['id'])?>" class="btn btn-primary btn-sm">Edit</a>
                                    <button type="button" value="<?= $row['id'] ?>" class="confirm_del_btn btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                           <?php endforeach; ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>        
</div>

<?= $this->endSection('content')?>

<?= $this->section('scripts')?>
<script>
   $(document).ready(function()
   {
        $('.confirm_del_btn').click(function(e)
        {
            e.preventDefault();
            var id = $(this).val(); 
            if(confirm("Are you sure to delete this data ?"))
            {
                // alert(id);
                $.ajax({
                    url: "/LOGIN/data/delete/"+id,
                    success: function(response){
                        window.location.reload();
                        alert("Data Deleted");
                    }

                });
            }
        });

   });
</script>
    

<?= $this->endSection('scripts') ?>