<?php
namespace Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class Home extends Page {
  protected $path = "";
  
  protected $elements = [
    "Our Work" =>
    [
      "xpath" => "//*[@id='menu-primary-1']/li[2]/a"
    ],
    "Services" =>
    [
      "xpath" => "//*[@id='menu-primary-1']/li[4]/a"
    ],
    "Labs" =>
    [
      "xpath" => "//*[@id='menu-primary-1']/li[6]/a"
    ],
    "Blog" =>
    [
      "xpath" => "//*[@id='menu-primary-1']/li[8]/a"
    ],
    "About" =>
    [
      "xpath" => "//*[@id='menu-primary-1']/li[10]/a"
    ],
    "Contact" =>
    [
      "xpath" => "//*[@id='menu-primary-1']/li[12]/a"
    ],
    "Client Logins" =>
    [
      "xpath" => "//*[@id='menu-primary-1']/li[14]/a"
    ]
  ];

    public function linkExistsWithText($text) {
          return $this->hasElement($text);       
    }

    public function clickLink($linkname) {
          $link = $this->getElement($linkname);
          $link->click();       
    }
     /*
     *  Is the browser at the expect url?
     */
    public function verifyPage() {
        return $this->getDriver()->getCurrentUrl()
            ===
            $this->getParameter('base_url') . $this->path;
    }
}
