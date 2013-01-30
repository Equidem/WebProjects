<?php

/**
 * Homepage presenter.
 */

use Nette\Application\UI\Form;

class HomepagePresenter extends BasePresenter
{
        protected $userRepository;
	
        protected function startup()
        {
            parent::startup();
            $this->userRepository = $this->context->userRepository;
        }
          
        public function renderDefault()
	{
		
	}
        
        protected function createComponentLoginForm($name)
        {
            $form = new Form($this, $name);
            $form->addText('user', 'Username:', 20, 20)
                    ->addRule(Form::FILLED, 'It is compulsory to write your username!');
            $form->addPassword('pass', 'Password', 20, 20)
                    ->addRule(Form::FILLED, 'It is compulsory to write your password!');
            $form->addSubmit('login', 'Login');
            $form->onSuccess[] = callback($this, 'loginFormSubmitted');
        }
        
        public function loginFormSubmitted(Form $form)
        {
            $user = $this->context->userRepository->authUser($form->values->user, $form->values->pass);
            if($user === FALSE)$this->flashMessage('Wrong username or password!', 'bad_login');
        }
}
