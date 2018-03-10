<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/phpunit/phpunit/src/Framework/Assert/Functions.php';
    
class HomeContext extends FeatureContext {
    protected $current;
    /**
     * @When I go to the :arg1 page
     */
    public function iGoToThePage($arg1) {
        $this->current = $this->getPage($arg1);
    }
    /**
     * @Then I should see :arg1 link
     */
    public function iShouldSeeLink($arg1)  {
        assertNotNull($this->current->linkExistsWithText($arg1));
    }
    /**
     * @Given I click the :arg1 link
     */
    public function iClickTheLink($arg1)  {
        $this->current->clickLink($arg1);
    }

    /**
     * @Then I should see the :arg1 page
     */
    public function iShouldSeeThePage($arg1)  {
        $this->current = $this->getPage($arg1);
        return assertTrue($this->current->verifyPage());
    }

}
