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
    $this->forwardIf(!$this->getUser()->isAuthenticated(),'sfGuardAuth','signin');
    $this->user =  $this->getUser()->getGuardUser();
    $this->forward404Unless($this->user->getId() == $request->getParameter('id'));
            
  }
}    
