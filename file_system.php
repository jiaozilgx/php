<?php
/**
 * Created by PhpStorm.
 * User: LGX
 * Date: 2017/12/5 0005
 * Time: 下午 7:12
 */
if(!is_dir("test/haha")){
    mkdir("test/");
    mkdir("test/haha");
}

if(!is_dir("demo/ppp")){
    mkdir("demo/ppp",0777,true);
}