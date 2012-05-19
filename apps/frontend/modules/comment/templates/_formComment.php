<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php if($sf_user->isAuthenticated()):?>
<form action="<?php echo url_for($sf_request->getUri())?>" method="post" name="<?php echo $form->getName()?>">
  <table id="comment_form">
    <tfoot>
      <tr>
        <td colspan="2">
          <input type="submit" value="Comment" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
<?php else:?>
<p>You must log in to comment</p>
<?php endif; ?>

