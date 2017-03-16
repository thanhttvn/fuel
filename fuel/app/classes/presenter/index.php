<<?php
  class Presenter_Index extends Presenter
  {
    public function view()
    {
        $this->title = 'Testing this Presenter thing';

        $this->articles = Model_Articles::find('all');
    }
  }
 ?>
