<?php


class commentActions extends sfActions
{
    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($comment = Doctrine_Core::getTable('Comment')->find(array($request->getParameter('comment_id'))), sprintf('Object comment does not exist (%s).', $request->getParameter('comment_id')));
        $comment->delete();

        $this->redirect('@post_show?id='.$request->getParameter('post_id'));
    }
}


?>
