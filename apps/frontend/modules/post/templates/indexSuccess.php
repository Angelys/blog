<div class="content">
    <?php foreach($pager->getResults() as $post):?>
        <h1><a href="<?php echo url_for('show_post',$post)?>"><?php echo $post->getTitle() ?></a></h1>
        <div class="descr"><?php echo $post->getCreatedAt() ?></div>
        <p><?php echo $post->getPost() ?></p>
    <?php endforeach;?>
    
    <div>
    <?php if($pager->getPage() > 3) echo link_to('First','@homepage?page=1')?>
        
    <?php if ($pager->haveToPaginate()): ?>
        <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
            <?php echo ($page==$pager->getPage())?$page:link_to($page,'@homepage?page='.$page)?>           
        <?php endforeach ?>
    <?php endif ?>    
        
    <?php if($pager->getPage() <= ($pager->getLastPage()-3) ) echo link_to('Last','@homepage?page='.$pager->getLastPage());?>
    </div>
</div>    
