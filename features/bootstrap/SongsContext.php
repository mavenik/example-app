<?php
use Behat\Behat\Hook\Scope\AfterStepScope;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Driver\Selenium2Driver;
use Behat\MinkExtension\Context\MinkContext;
/**
 * Defines application features from the specific context.
 */
class SongsContext extends MinkContext implements Context, SnippetAcceptingContext
{
  public function __construct()
  {
  }

  public static function getAcceptedSnippetType()
  {
    return 'regex';
  }

  /**
   * @Given I visit the static songs page
   */
  public function iVisitTheStaticSongsPage()
  {
    $this->visit('/songs_static');
  }

  /**
   * @Then I should see :arg1 as the title
   */
  public function iShouldSeeAsTheTitle($arg1)
  {
  }

}
?>
