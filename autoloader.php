<?php
function my_autoloader($class){
    $classFile=__DIR__."/$class.php";
    if(file_exists($classFile) && is_readable($classFile)){
        include $classFile;
    }else{
        die("file $classFile not found");
    }
}
spl_autoload_register('my_autoloader');