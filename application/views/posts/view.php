<h2> <?php echo $post['title']; ?> </h2>
<small> Posted on: <?php echo $post['created_at']; ?> </small> <br>
<img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>">

<div class="post-body">
    <?php echo $post['body']; ?> 

</div>

<a class="btn btn-warning pull-left" href= " <?php echo site_url('/posts/edit/'.$post['slug']); ?>" > Edit </a> 
<a href=" <?php echo site_url('/posts/'.$post['slug']); ?>"></a>
<?php echo form_open('posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger"></input>
</form>

<hr>
<h3>Comments</h3>

<?php if($comments): ?>
    <?php foreach($comments as $comment) : ?>
        <div class="mb-3 well">
            <h5><?php echo $comment['body'];?> [by <strong> <?php echo $comment['name'];?> </strong>]</h5>
        </div>
    <?php endforeach; ?>

<?php else: ?>
    <p>No comments</p>
<?php endif ?>

<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>

<?php echo form_open('comments/create/'.$post['id']); ?> 
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Add Name" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Add Email" >
    </div>
    <div class="mb-3">
    <label  class="form-label">Body</label>
        <textarea class="form-control" name="body" placeholder="Add Body" ></textarea>
    </div>
    <input type="hidden" class="form-control" name="slug"value=<?php echo $post['slug'];?> >

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



