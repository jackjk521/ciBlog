<h2> <?=$title; ?> </h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?> 
<!-- <form action="" method="post"> -->
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" >
    </div>
    <label  class="form-label">Zip Code</label>
        <input type="text" class="form-control" name="zipcode" placeholder="6014" ></input>
    </div>
    <div class="mb-3">
    <label  class="form-label">Username</label>
        <input type="text"  class="form-control" name="username" placeholder="Username" ></input>
    </div>

    <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" >
    </div>
    <div class="mb-3">
    <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" ></input>
    </div>
    <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Re Enter Password" ></input>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?> 
