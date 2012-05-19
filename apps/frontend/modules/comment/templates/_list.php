<?php foreach ($object as $comment) :?>
<table name="comment">
    <tr>
        <td>
            <b><?php echo $comment->getUserName() ?></b>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $comment->getCommentBody(ESC_RAW)?>
        </td> 
    </tr>
    <tr>
        <td>
            <?php echo $comment->getCreatedAt()?>
        </td> 
    </tr>
    <?php if($sf_user->hasCredential('moderator') || $sf_user->hasCredential('admin')):?>
    <tr>
        <td>
            <?php echo link_to('Delete', '@comment_delete?post_id='.$comment->getPostId().'&comment_id='.$comment->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?'))?>
        </td>
    </tr>
    <?php endif ?>
</table>    
<?php endforeach; ?>

