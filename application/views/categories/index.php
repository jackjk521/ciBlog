<h2> <?= $title ?> </h2>

<?php foreach($categories as $category) : ?>
    <div class="row">
        <div class="mb-3">
            <h3> 
                <a href="<?php echo site_url('/categories/posts/'.$category['id']);?>" > 
                    <?php echo $category['name']; ?>
                </a>    
            </h3>
        </div>
    </div>


   
<?php endforeach; ?>