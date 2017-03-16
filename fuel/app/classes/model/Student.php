<?php

class Model_Student extends Orm\Model
{
    protected static $_table_name = "Posts";
    protected static $_properties = array('id', 'name', 'age', 'address', 'tel');

}

?>