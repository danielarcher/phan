<?php 
function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}
foo(array('foo','bar'));