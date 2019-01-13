<?php 

class PrimaryClass
{
    public static function staticFunction()
    {
        return true;
    }
}

class ChildClass extends PrimaryClass
{
    public function staticFunction()
    {
        return false;
    }
}
