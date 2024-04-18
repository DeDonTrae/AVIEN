<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5"><?= $title; ?></h2>

            <div class="card md-4  bg-dark">

                <form class="card-body cardbody-dark p-lg-5 ">

                <div class="col-sm-6 offset-sm-3 mb-3 text-light text-center">
                        <img src="/AVIEN/assets/images/LOGO_1" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                    </div>
                    <div class="form-group col-sm-6 offset-sm-3 mb-3 text-light text-center">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-sm-6 offset-sm-3 mb-3 text-light text-center">
                        <label>Zipcode</label>
                        <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
                    </div>
                    <div class="form-group col-sm-6 offset-sm-3 mb-3 text-light text-center">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group col-sm-6 offset-sm-3 mb-3 text-light text-center">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="email@example.com">
                    </div>
                    <div class="form-group col-sm-6 offset-sm-3 mb-3 text-light text-center">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group col-sm-6 offset-sm-3 mb-3 text-light text-center">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Confirm Password">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <br><br>
                </form>
            </div>

        </div>
    </div>
</div>


<?php echo form_close(); ?>