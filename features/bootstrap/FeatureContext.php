<?php
/**
 * Created by PhpStorm.
 * User: chane
 * Date: 31/08/2020
 * Time: 11:30
 */
use Behat\Behat\Context\Context;

class FeatureContext implements Context
{
    /**
     * @When /^I want to send my application$/
     */
    public function iWantToSendMyApplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}