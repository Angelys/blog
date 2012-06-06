<?php

/**
 * userRoom actions.
 *
 * @package    blog
 * @subpackage userRoom
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userRoomActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->user =  $this->getUser()->getGuardUser();
    $this->edit = $this->user->getId() == $request->getParameter('id');
            
  }
  
  public function executeEdit(sfWebRequest $request)
  {
    $this->user = $this->getUser()->getGuardUser();
    $this->forward404Unless($this->user->getId() == $request->getParameter('id'));
    if ($request ->isMethod(sfRequest::POST))
    {
        $form = new sfGuardUserForm($this->user);
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
            $user = $form->save();

            $this->redirect('@profile_edit?id='.$user->getId());
        }
    }
    $this->form = new sfGuardUserForm($this->user);
  }
  
  public function executeChangePassword(sfWebRequest $request)
  {
    $this->user = $this->getUser()->getGuardUser();
    $this->forward404Unless($this->user->getId() == $request->getParameter('id'));
    if ($request ->isMethod(sfRequest::POST))
    {
        $form = new sfGuardUserForm($this->user);
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
            $user = $form->save();

            $this->redirect('@profile_edit?id='.$user->getId());
        }
    }
    $this->form = new sfUserPasswordForm($this->user);
  }
  
}    
