<?php

/*
 * namespace boleh di definisikan lebih dari satu kali dalam 1 file
 */

namespace Namespace1{
    function test(){
	die("test namespace 1");
    }
}

namespace Namespace2{
    function test(){
     	return "testing namespace 2 \n";
    }
}

?>
