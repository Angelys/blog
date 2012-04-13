<div class="content">
    <?php foreach($posts->getActivePosts(sfConfig::get('app_max_posts_on_page')) as $i => $post):?>
        <h1><a href="<?php echo url_for('show_post',$post)?>"><?php echo $post->getTitle() ?></a></h1>
        <div class="descr"><?php echo $post->getCreatedAt() ?></div>
        <p><?php echo $post->getPost() ?></p>
    <?php endforeach;?>
    <a href="<?php echo url_for('post_new') ?>">Create new Post</a>
</div>    
