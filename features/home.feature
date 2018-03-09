Feature: Home
  In order to navigate all the website
  As a visitor
  I want to navigate the links

  @javascript @wip
  Scenario: I can see multiple links on the home page
    Given I am a visitor
    When I go to the "Home" page    
    Then I should see "Our Work" link
    Then I should see "Services" link
    Then I should see "Labs" link
    Then I should see "Blog" link
    Then I should see "About" link
    Then I should see "Contact" link
    Then I should see "Client Logins" link
    And I should pause
