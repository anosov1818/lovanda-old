<?php

class Controller_Registration extends Controller {
    function __construct() {
        $this->model = new Model_Registration();
        $this->view = new View();
    }
	
	function action_index() {

        $data['spoken_languages'] = $this->model->get_data();
        $data['my-gender'] = $this->clean_var($_POST['my-gender']);
        $data['search-for-gender'] = $this->clean_var($_POST['search-for-gender']);
        $data['lastname'] = $this->clean_var($_POST['lastname']);
        $data['email'] = $this->clean_var($_POST['email']);
        $data['password'] = $this->clean_var($_POST['password']);

        $this->view->generate('registration_view.php', 'template_view.php', $data);
	}

	function action_registration() {
        //TODO take vars from reg page
    }
}
