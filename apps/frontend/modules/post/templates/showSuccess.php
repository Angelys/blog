<?php slot('title',sprintf('%s',$post->getTitle()))?>
<div class="content">
    <h1><?php echo $post->getTitle() ?></h1>
    <div class="descr" ><?php echo $post->getCreatedAt() ?></div>
    <p><?php echo $post->getPost() ?></p>
    <a href="<?php echo url_for('post_edit',$post)?>">Edit</a>
    <a href="<?php echo url_for('post') ?>">List</a>
</div>


