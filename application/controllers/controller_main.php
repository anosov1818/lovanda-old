<?php

class Controller_Main extends Controller {

	function action_index() {
	    $name = '';
        $username = '';
        $email = '';
        $password = '';
        $repeat_password = '';

        if($password !== $repeat_password){
            print "passwords are different";
            return false;
        }

        $user = new User();
        $user->username = $username;
        $user->password = sha1($password);
        $user->name = $name;
        $user->email = $email;


		$this->view->generate('main_view.php', 'template_view.php');
	}
}