<?php
/**
 * Created by PhpStorm.
 * User: chane
 * Date: 31/08/2020
 * Time: 12:08
 */
use Behat\Behat\Context\Context;

class ShowInterestContext implements Context
{
    /**
     * @Then /^My applicat ion is on pending$/
     */
    public function myApplicatIonIsOnPending()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}