<?php 
$tile  = "acceuil";
?>

<?php ob_start(); ?>

    <?php require_once('header_session.php');?>

    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <a href="">
            <i class="fa fa-magnifying-glass"></i>
        </a>
    </div>
    <?php  require_once('posts.php');?>
        <?php $content = ob_get_clean(); ?>

<?php require_once('layout.php');?>