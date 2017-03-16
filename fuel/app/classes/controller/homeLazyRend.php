<?php
class Controller_HomeLazyRend extends Controller
{
    public function action_index()
    {
        // create the layout view
        $view = View::forge('layout');
        //local view variables, lazy rendering
        $view->head = View::forge('head', array('title' => 'Home'));
        $view->header = View::forge('header', array('site_title' => 'My Website'));
        $view->content = View::forge('content', array('username' => 'Joe14', 'title' => 'Home'));
        $view->footer = View::forge('footer', array('site_title' => 'My Website'));

        // return the view object to the Request
        return $view;
    }
}
 ?>
