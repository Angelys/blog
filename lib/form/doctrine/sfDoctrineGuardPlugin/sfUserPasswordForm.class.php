<?php

/**
 * sfGuardUser form.
 *
 * @package    blog
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfUserPasswordForm extends BasesfGuardUserForm
{
  public function configure()
  {
        $this->setWidgets(array(
            'oldpassword' => new sfWidgetFormInput(array('type' => 'password')),
            'newpassword' => new sfWidgetFormInput(array('type' => 'password')),
            'repeatnewpassword' => new sfWidgetFormInput(array('type' => 'password')),
        ));

        $this->widgetSchema->setLabels(array(
            'oldpassword'        => "old password",
            'newpassword'        => "New password",
            'repeatnewpassword'    => "Repeat new password",
        ));

        $this->setValidators(array(
            'oldpassword' => new OldPasswordValidator(array(), array('invalid' => 'Old password is wrong')),
            'newpassword' => new sfValidatorString(),
            'repeatnewpassword' => new sfValidatorString(),
        ));

        $this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('newpassword', sfValidatorSchemaCompare::EQUAL, 'repeatnewpassword', array(), array('invalid' => 'passwords are different')));

        $this->widgetSchema->setNameFormat('changepassword[%s]');
        
      
  }
}
