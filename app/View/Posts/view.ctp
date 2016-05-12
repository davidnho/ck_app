<!-- File: /app/View/Posts/view.ctp -->
<div class="jumbotron">
    <h1><?php echo h($post['Post']['title']); ?></h1>
</div>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>