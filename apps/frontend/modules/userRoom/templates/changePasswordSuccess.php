<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<div class="content">
<form action="<?php echo url_for('@profile_change_password?id='.$form->getObject()->getId())?>" method="post" >
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('@profile_show?id='.$form->getObject()->getId()) ?>">Back to profile</a>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
</div>