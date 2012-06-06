<?php

class commentComponents extends sfComponents
{
    public function executeFormComment(sfWebRequest $request) {
        $this->form = new CommentForm();
        $this->form->setDefault('post_id', $this->object->get('id'));
        if($request->isMethod('post'))
        {
            $formValues = $request->getParameter($this->form->getName());
            $formValues = array_merge( $formValues, array('user_id' => $this->getUser()->getGuardUser()->getId(),'user_name' => $this->getUser()->getGuardUser()->getUserName()  )  );
            $this->form->bind($formValues);
            if($this->form->isValid()){
                $this->form->save();
                $this->getContext()->getController()->redirect($request->getUri());
            }
        }
    }
    
    public function executeList(sfWebRequest $request)
    {
    }
}

?>
