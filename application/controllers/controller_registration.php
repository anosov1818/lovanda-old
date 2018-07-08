<?php

class Controller_Registration extends Controller {
	
	function action_index() {

        $data['my-gender'] = $_POST['my-gender'];
        $data['search-for-gender'] = $_POST['search-for-gender'];
        $data['lastname'] = $_POST['lastname'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
		$this->view->generate('registration_view.php', 'template_view.php', $data);
	}
}
