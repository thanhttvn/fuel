<<?php
/**
 *
 */
class Controller_Login extends Controller_Template
{

  public function action_showLogin()
  {
    $data = array();
    $this->template->title = 'Controller Posts Index';
    $this->template->content = View::forge('login/login',$data);

  }


}

 ?>
