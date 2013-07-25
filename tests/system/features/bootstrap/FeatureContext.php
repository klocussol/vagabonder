<?php

use Behat\Behat\Context\ClosuredContextInterface;
use Behat\Behat\Context\TranslatedContextInterface;
use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

require_once 'PHPUnit/Framework/Assert/Functions.php';

class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @When /^I hover over "([^"]*)"$/
     */
    public function iHoverOver($cssSelector)
    {
        $element = $this->getSession()->getPage()->find('css', $cssSelector);
        $element->mouseOver();
    }

     /**
     * @Given /^I am logged in as "([^"]*)" with "([^"]*)"$/
     */
    public function iAmLoggedInAsWith($email, $password)
    {
        $this->iAmOnHomepage();
        $this->clickLink('login');
        $this->fillField("_username", $email);
        $this->fillField("_password", $password);
        $this->pressButton("_submit");
    }
}
