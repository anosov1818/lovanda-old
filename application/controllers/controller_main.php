<?php

class Controller_Main extends Controller {

	function action_index() {
	    session_start();

	    $data['logged_in'] = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : "" ;
		$this->view->generate('main_view.php', 'template_view.php', $data);
        unset($_SESSION['logged_in']);
	}

	function form_index() {
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