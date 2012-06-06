<?php
class OldPasswordValidator extends sfValidatorBase
{
    public function configure($options = array(), $messages = array())
    {
        $this->setMessage('invalid', 'The old password is invalid.');
    }

    protected function doClean($value)
    {
        $clean = (string) $value;
                             
        // user exists?
        if ($sf_guard_user = sfContext::getInstance()->getUser()->getGuardUser())
        {
            // password is ok?
            if ($sf_guard_user->checkPassword($value))
            {
                return $clean;
            }
        }

        throw new sfValidatorError($this, 'invalid', array('value' => $value)); 
    }
}
?> 