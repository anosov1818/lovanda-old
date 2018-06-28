<?php

class Controller_Dating extends Controller {

	function action_index() {
		$this->view->generate('dating_view.php', 'template_view.php');
	}
}
