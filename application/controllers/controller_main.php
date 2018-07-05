<?php

class Controller_Main extends Controller {

	function action_index() {
		$this->view->generate('main_view.php', 'template_view.php');
	}

	function form_index(){
	    $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeat_password = $_POST['repeat_password'];

        if($password !== $repeat_password){
            print "passwords are different";
            return false;
        }

        //$user = new User();
        //$user->username = $username;
        //$user->password = sha1($password);
        //$user->name = $name;
        //$user->email = $email;

    }
}