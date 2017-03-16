<?php

class Controller_Posts extends Controller_Template
{

    public function action_index()
    {
        $posts = Model_Student::find('all');

        $data = array('posts' => $posts);
        $this->template->title = 'Controller Posts Index';
        $this->template->content = View::forge('posts/add', $data);
    }

    public function action_getLetter()
    {
        $posts = Model_Post::find('all');

        $data = array('posts' => $posts);
        $this->template->title = 'Controller Posts Index';
        $this->template->content = View::forge('posts/add', $data);
    }

    public function action_dbtest()
    {
        $query = DB::select()->from('Student')->execute();
        var_dump($query);
    }

    public function action_add()
    {
        $data = array();
        $this->template->title = 'Bien title';
        $this->template->content = View::forge('posts/add', $data);
    }

    public function action_view($id)
    {
        $posts = Model_Post::find('first', array(
            'where' => array(
                array('id', $id)
            ),
        ));
        $data = array('posts' => $posts);
        $this->template->title = $posts->title;
        $this->template->content = View::forge('posts/view', $data);
    }

}
