Feature: Fikstury dla tabeli planets

Scenario: Lista fixtur z tabeli planets
  Given I am on "planets.html"
    Then I should see "Mars"
    And I should see "7835"
    Then I should see "Ziemia"
    And I should see "1943"
    Then I should see "Wenus"
    And I should see "1425"