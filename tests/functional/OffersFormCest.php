<?php

class OffersFormCest 
{
    public function _before(\FunctionalTester $I)
    {
        $I->amOnPage(['site/index']);
    }

    public function openOffersPage(\FunctionalTester $I)
    {
        $I->see('Always we have deals!, Just Book!', 'h3');        
    }

    public function submitEmptyForm(\FunctionalTester $I)
    {
        $I->submitForm('#offers-form', []);
        $I->dontSee('see validations errors');
        $I->dontSee('No results found.');
        $I->dontSeeElement('.empty');
    }

    public function submitFormWithIncorrectCity(\FunctionalTester $I)
    {
        $I->submitForm('#offers-form', [
            'OffersSearch[destinationCity]' => 1111,
        ]);
        $I->see('No results found.');
    }

    public function submitFormSuccessfully(\FunctionalTester $I)
    {
        $I->submitForm('#offers-form', [
            'OffersSearch[lengthOfStay]' => 3,
        ]);
        $I->dontSeeElement('.empty');
        $I->dontSee('No results found.');
    }
}