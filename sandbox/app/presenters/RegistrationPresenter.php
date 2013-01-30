<?php

/**
 * Homepage presenter.
 */

use Nette\Application\UI\Form;

class RegistrationPresenter extends BasePresenter
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
        
        protected function createComponentRegistrationForm($name)
        {
            $form = new Form($this, $name);
            $form->addText('user', 'Username:', 20, 20)
                    ->addRule(Form::FILLED, 'It is compulsory to write your username!');
            $form->addPassword('pass', 'Password', 20, 20)
                    ->addRule(Form::FILLED, 'It is compulsory to write your password!');
            $form->addSubmit('Register', 'Register');
            $form->onSuccess[] = callback($this, 'registrationFormSubmitted');
        }
        
        public function registrationFormSubmitted(Form $form)
        {
            $this->userRepository->insertUser($form->values->user, $form->values->pass);
        }
}

?>
