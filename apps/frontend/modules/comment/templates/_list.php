<?php foreach ($object as $comment) :?>
<table name="comment">
    <tr>
        <td>
            <b><?php echo $comment->getUserName() ?></b>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $comment->getCommentBody()?>
        </td> 
    </tr>
    <tr>
        <td>
            <?php echo $comment->getCreatedAt()?>
        </td> 
    </tr>    
</table>    
<?php endforeach; ?>

