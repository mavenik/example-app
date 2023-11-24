Feature: Static Songs Page
  Scenario: See a static songs page
    Given I visit the static songs page
    Then I should see "Playlist App" as the title
