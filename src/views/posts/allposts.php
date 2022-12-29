<?php
?>

<?php require "elements/html/header.php" ?>

<!-- START NAVBAR -->

<?php require "elements/navbar.php" ?>

<!-- ENDE NAVBAR -->





<br>
<br>
<h1 class="container col-6"> Meine Posts</h1>
<br>
<br>



<!-- START POSTS -->



<?php foreach ( $posts as $post): ?>
    <div class="container col-6 card">
        <div class="card-header">
            Blogeintrag <?php echo $post->postid ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $post["title"] ?></h5>
            <p class="card-text"><?php echo $post->showShortContent() ?></p>
            <a href="/blog/index/post?postid=<?php echo $post->postid ?>" class="btn btn-warning">Zum Eintrag</a>
        </div>
    </div>
    <br>
<?php endforeach; ?>





<?php require "elements/html/footer.php" ?>
