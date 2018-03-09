<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/phpunit/phpunit/src/Framework/Assert/Functions.php';
 
use Behat\Behat\Context\Context;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class FeatureContext extends Page implements Context, \Behat\Behat\Context\SnippetAcceptingContext
{
    protected $driver;
    protected $session;
    
    public function __construct() {
    }

    /**  @BeforeScenario   */
    public function before( $scope)  {
        $this->driver = new \Behat\Mink\Driver\Selenium2Driver('chrome');
        $this->session = new \Behat\Mink\Session($this->driver);
        $this->session->start();

    }
    /**   @AfterScenario  */
    public function after($scope)
    {
        $this->session->stop();
    }
    /**
     * @Given I am a visitor
     */
    public function iAmAVisitor()
    {
        return true;
    }
    /**
     * @Then I should pause
     */
    public function iShouldPause()
    {
        \Psy\Shell::debug(get_defined_vars(),$this);
    }

}