<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\Browser\Pages\GooglePage;
use Tests\Browser\Pages\BetterRXPage;
use Tests\Browser\Components\Footer;

class BetterRXTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new GooglePage)
                    ->searchFor('BetterRX')
                    ->assertSee('BetterRX - Better tools for hospice pharmacy')
                    ->click('@betterRXLink')
                    ->waitForLocation('/')
                    ->on(new BetterRXPage)
                    ->declineCookies()
                    ->within(new Footer, function ($browser) {
                        $browser->clickFooterLink('@companyLink');
                    })
                    ->assertSee('Our story');
        });
    }
}
