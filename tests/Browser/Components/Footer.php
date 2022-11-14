<?php

namespace Tests\Browser\Components;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Component as BaseComponent;
use Facebook\WebDriver\WebDriverBy;

class Footer extends BaseComponent
{
    /**
     * Get the root selector for the component.
     *
     * @return string
     */
    public function selector()
    {
        return '.footer-container';
    }

    /**
     * Assert that the browser page contains the component.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertVisible($this->selector());
    }

    /**
     * Get the element shortcuts for the component.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@companyLink' => '[href="https://www.betterrx.com/about-us/"]',
        ];
    }

     /**
     * Click the given link.
     * 
     * The 'a' link itself has zero size here and not interactable,
     * so have to go up to the containing parent li element
     * 
     * Note that a code change would probably be preferable to make
     * it interactable, or a more specific selector on the li, but
     * that's not an option for this example
     *
     * @param  \Laravel\Dusk\Browser  $browser
     * @param  string  $selector
     * @return void
     */
    public function clickFooterLink(Browser $browser, $selector)
    {
        // For simplicity for this example, just going to put this
        // scrolling functionality in this one spot. Note that it's
        // needed because the built in scrolling behavior doesn't work
        // as expected, and initial searches gave limited results and 
        // doing a custom scrolling implementation seems to be a general
        // fix I could find, so I took that approach, especially considering
        // this was mostly a throw away example anyway with an imperfect selector
        $formattedSelector = addslashes($browser->resolver->format($selector));
        $browser->script("document.querySelector('$formattedSelector').parentElement.scrollIntoView({block: 'end'});");
        $browser->pause(2000); // Quick approach for the example, greatly prefer targeted waits if possible

        $browser->element($selector)
                ->findElement(WebDriverBy::xpath('..'))
                ->click();
    }
}
