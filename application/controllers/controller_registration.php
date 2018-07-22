<?php

class Controller_Registration extends Controller {
    private $data;

    function __construct() {
        $this->model = new Model_Registration();
        $this->view = new View();
    }

    function take_post_vars(){
        //clean and assign post vars
        if(isset($_POST)){
            foreach ($_POST as $k => $v){
                $this->data["$k"] = $this->clean_var($v);
            }
        }
    }
	
	function action_index() {

        $this->data['spoken_languages'] = $this->model->get_data();
        $this->data['my-gender'] = $this->clean_var($_POST['my-gender']);
        $this->data['search-for-gender'] = $this->clean_var($_POST['search-for-gender']);
        $this->data['lastname'] = $this->clean_var($_POST['lastname']);
        $this->data['email'] = $this->clean_var($_POST['email']);
        $this->data['password'] = $this->clean_var($_POST['password']);

        $this->take_post_vars();

        $this->view->generate('registration_view.php', 'template_view.php', $this->data);
	}

	function action_submit() {
        $this->take_post_vars();
        print_r($this->data); die;
    }
}
