<?php

class Model_Post extends Orm\Model
{
    protected static $_table_name = "Posts";
    protected static $_properties = array('id', 'title', 'category', 'body', 'tags', 'create_date');

}

?>