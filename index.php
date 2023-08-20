<?php

require 'my_exec.php';

my_background_exec('A::jack', array('hello', 'jack'), 'require "my_exec.php"; require "a_class.php";', 5);

?>