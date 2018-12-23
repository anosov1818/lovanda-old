<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 23.12.2018
 * Time: 23:04
 */

class Controller_Profile extends Controller {
    function action_index() {
        $this->view->generate('profile_view.php', 'template_view.php');
    }
}