<?php
/**
 * Created by PhpStorm.
 * User: 001164
 * Date: 2016/9/5
 * Time: 16:14
 */
class myAdmin{
    public function init(){
        echo 11;

    }
}

add_action('init',array('myAdmin','init'));