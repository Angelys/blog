<?php slot('title',sprintf('%s',$post->getTitle()))?>
<div class="content">
    <h1><?php echo $post->getTitle() ?></h1>
    <div class="descr" ><?php echo $post->getCreatedAt() ?></div>
    <div class="tag">
        <?php foreach ($post->getTags() as $tag) {
            echo link_to($tag,'@tag?tag='.$tag);
            echo ' ';
        } ?>
    </div>
    <p><?php echo $post->getPost() ?></p>
    <?php if($sf_user->isAuthenticated() && ($sf_user->hasCredential('moderator') || $sf_user->hasCredential('admin'))):?>
        <a href="<?php echo url_for('post_edit',$post)?>">Edit</a>
    <?php endif;?>    
    <a href="<?php echo url_for('post') ?>">List</a>
<?php include_component('comment', 'formComment', array('object' => $post)) ?>
<?php include_component('comment', 'list', array('object' => $comments)) ?>
</div>

