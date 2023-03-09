<h2> <?= $title ?> </h2>

<?php foreach($posts as $post) : ?>
    <div class="row">
        <div class="col-3 mb-3">
            <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>">
            <p>"<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>"</p>

        </div>
        <div class="col-9 mb-3">
            <h3> <?php echo $post['title']; ?> </h3>
            <small> Posted on: <?php echo $post['created_at']; ?> in <?php echo $post['name']; ?> </small> <br>
            <?php echo word_limiter($post['body'], 30)?>
            <p><a href=" <?php echo site_url('/posts/'.$post['slug']); ?>">Read More </a></p>
        </div>
    </div>


   
<?php endforeach; ?>
