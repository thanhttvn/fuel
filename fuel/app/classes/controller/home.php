<?php

class Controller_Home extends Controller{
public function action_index(){
    //tao layout view
    $view = View::forge('layout');

    //global variables, tat ca view co the truy cap
    $view -> set_global('username', 'thanhtt');
    $view -> set_global('title', 'Home');
    $view -> set_global('site_title', 'My Web');

    //tao variables voi mot view
    $view->head = View::forge('head');
    $view->header = View::forge('header');
    $view->content = View::forge('content');
    $view->footer = View::forge('footer');

    //tra view object to request
    return $view;
}
}
 ?>
