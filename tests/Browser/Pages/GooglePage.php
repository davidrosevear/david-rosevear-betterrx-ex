<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class GooglePage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return 'https://www.google.com/';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertUrlIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@search' => '[aria-label="Search"]',
            // 'a' was needed here as there was a non-interactable 'link'
            // element first in the dom
            '@betterRXLink' => 'a[href="https://www.betterrx.com/"]'
        ];
    }

    /**
     * Perform a search for the given text.
     *
     * @param  Browser  $browser
     * @param  string  $text
     * @return void
     */
    public function searchFor(Browser $browser, $text)
    {
        $browser->waitFor('@search')
                ->type('@search', $text)
                ->press('Google Search');
    }
}
