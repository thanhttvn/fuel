<?php

class Controller_HomeForcedRend extends Controller
{
  public function action_index(){
    //tao Bien
    $data = array();
    $data['title'] = 'Home';
    $data['site_title'] = 'My Website';
    $data['username'] = 'trung thanh';
    //tao bien tuong ung 1 view, forced render
    $views = array();
    $views['head'] = View::forge('head', $data)->render();
    $views['header'] = View::forge('header', $data)->render();
    $views['content'] = View::forge('content', $data)->render();
    $views['footer'] = View::forge('footer', $data)->render();
    //tra ve html da duoc render to request
    return View::forge('layout', $views)->render();
  }
}

 ?>
