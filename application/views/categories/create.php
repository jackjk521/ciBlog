<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?> // to open files 
<!-- <form action="" method="post"> -->
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name" >
    </div>
    <!-- <div class="mb-3">
    <label  class="form-label">Title</label>
        <textarea class="form-control" name="body" placeholder="Add Body" ></textarea>
    </div>
    <div class="mb-3">
        <label  class="form-label">Categories</label>
        <select name="category_id" class="form-control">
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label  class="form-label">Upload Image</label>
            <input type="file" name="userfile"></input>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>