<?php
/**
 * Created by PhpStorm.
 * User: chane
 * Date: 31/08/2020
 * Time: 11:31
 */
use Behat\Behat\Context\Context;

class SendApplicationContext implements Context
{
    /**
     * @Then /^My application is on pending$/
     */
    public function myApplicationIsOnPending()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}