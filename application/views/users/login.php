<?php echo form_open('users/login'); ?>
    <h2> <?=$title; ?> </h2>

    <div class="mb-3 col-md-offset-4">
    <label  class="form-label">Username</label>
        <input type="text"  class="form-control" name="username" placeholder="Username" required autofocus ></input>
    </div>
    <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required autofocus></input>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
    <div class="mb-3">
<?php echo form_close(); ?> 