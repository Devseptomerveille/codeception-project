<?php
namespace App\Tests\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Functional extends \Codeception\Module
{
    use Cleanup;
}
