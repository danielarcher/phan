<?php
class FirstException extends \Exception
{

}

class SecondException extends \Exception
{

}

try {

} catch (FirstException | SecondException $e) {
    
}
