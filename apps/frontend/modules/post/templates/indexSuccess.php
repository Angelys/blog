<div class="content">
    <?php foreach($posts as $post):?>
        <h1><a href="<?php echo url_for('post/show?id='.$post->getId().'&title='.$post->getTitle())?>"><?php echo $post->getTitle() ?></a></h1>
        <div class="descr"><?php echo $post->getCreatedAt() ?></div>
        <p><?php echo $post->getPost() ?></p>
    <?php endforeach;?>
    <a href="<?php echo url_for('post/new') ?>">Create new Post</a>
</div>    
