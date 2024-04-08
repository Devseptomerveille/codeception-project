<?php


namespace App\Tests\Acceptance;

use App\Tests\AcceptanceTester;

class FirstCest
{
    
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see(text: "Bienvenue sur l'application Symfony Demo");
        $I->see(text: "Parcourir la section publique de l'application de démonstration.");
        $I->see(text: "Parcourir l'interface d'administration de l'application de démonstration.");
        $I->retryClick( "Naviguer sur l'application");
        $I->see(text: "Alena");

    }
}
