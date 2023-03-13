<?php $tile = "acceuil";?>

<?php ob_start(); ?>
           
<?php require_once('header_session.php');?>
            <section class="presentation">
                <div class="abstract-presentation">
                    <h1>Build your blog in few minutes.</h1>
                    <a href="index.php?action=inscription"><button  class="btn_create">Create Your Website</button></a> 
                    <!-- <p>
                        Join the community shay your stories on your blog.
                    </p> -->
                </div>

            </section>
          <?php  require_once('posts.php');?>
        <?php $content = ob_get_clean(); ?>

<?php require_once('layout.php');?>