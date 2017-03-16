<div class="entry">
    <a class="entry-thumb" href="https://www.lyft.com/" title="Visit Lyft">
        <img src="http://expo.getbootstrap.com/screenshots/creative-tim-presentation.jpg">
        <span class="icon icon-forward entry-icon"></span>
    </a>
</div>
<?php foreach ($posts as $post): ?>
    <h1><?php echo $post->title; ?></h1>
    <?php echo $post->category; ?>
    </br>
    <?php
    echo Str::truncate($post->body, 150);
    ?>
    </br>
    <?php echo $post->tags; ?>
    </br>
    <a class="btn btn-warning" href="/posts/view/<?php echo $post->id; ?>">View More</a>
<?php endforeach; ?>
