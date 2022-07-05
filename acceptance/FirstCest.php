<?php

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Home');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
