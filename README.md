# David Rosevear's Laravel Dusk Example for BetterRX

## How to run the example

Pull down the repo and install dependencies, including the ChromeDriver.

Run `php artisan dusk --filter BetterRXTest`.

Note that the headless option is not used, in order to see the test run through the browser.

## Purpose

This example is intended to be a very small project to show to BetterRX. The purpose was to install, setup, and implement a very basic example usage of Laravel's Dusk UI automation framework.

### Why Dusk?

I chose Dusk for a few reasons:
- I wanted to do something related to the Selenium Python assessment, which involved questions around setting up and using Selenium with Python specific syntax
- Since BetterRX is a PHP shop with Laravel, I wanted to use a tool related to Selenium and UI automation within that stack
- It gives me a chance to learn something new

## Notes

A few things to keep in mind when reviewing this example:
- This is a very basic example showing some functionality of Dusk
- It is not aiming to be the most polished implementation
- Not being against an actual app, using sites that aren't mine, there were some limitations, but it is sufficient for its purpose
- The BetterRXTest and connected files are the main content of what I put together, besides misc setup pieces

## Things I like about the framework and stack

There are things I really liked so far as I looked into the stack and started to learn.
- PHP:
  - Has a lot of similarities to JavaScript, such as being loosely typed, with notable differences too
  - Also has similarities to other languages that I find interesting, such as how it handles OOP with aspects like abstraction and interfaces
- Laravel:
  - A lot of different tools created by Laravel to help with development
  - Built in support for testing
- Dusk:
  - The concept of Pages and Components are built in to the framework
  - Provides for some interesting implementation possibilities, including around pages and components
  - A built-in approach for selectors specific to Dusk testing
  - How easy it is to install it after you already have Laravel