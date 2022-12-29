<?php
?>

<?php require __DIR__ . "./../../../elements/html/header.php" ?>

<!-- START NAVBAR -->

<?php require __DIR__ . "./../../../elements/navbar.php" ?>

<!-- ENDE NAVBAR -->



<br>
<br>
<h1 class="container col-6"> Meine Posts</h1>
<br>
<br>

<!-- START POSTS -->

<!--<pre>--><?php //var_dump($_GET) ?><!--</pre>-->

<div class="container col-6 card">
    <div class="card-header">
        Blogeintrag <?php echo nl2br($post->postid) ?>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo html(nl2br($post->title)) ?></h5>
        <p class="card-text"><?php echo html(nl2br($post->content)) ?></p>
        <a href="#" class="btn btn-warning">Zum Eintrag</a>
    </div>
</div>
<br>
<br>
<h4 class="container col-6">Kommentare</h4>
<br>

<?php foreach ($comments AS $comment):?>
    <div class="card col-6 container">
        <div class="card-body">
            <h5 class="card-title">KOMMENTAR: <?php echo html(nl2br($comment->commentid )). " - Postid " . $comment->postid  ?></h5>

            <p class="card-text"><?php echo html(nl2br($comment->content))  ?></p>
        </div>
    </div>
    <br>
<?php endforeach; ?>
<br>
<br>


<form id="comments" method="post" action="/blog/index/post?postid=<?php echo $post->postid ?>">
    <div class="container col-6 mb-3">
        <label for="commentArea" class="form-label">Kommentar schreiben</label>
        <textarea name="CommentText" class="form-control" id="commentArea" rows="3"></textarea>
        <br>
        <button name="SendCommentButton" value="send" class="btn btn-warning" id="submit" type="submit">Kommentar Absenden</button>
    </div>
</form>




<?php require __DIR__ . "./../../../elements/html/footer.php" ?>
