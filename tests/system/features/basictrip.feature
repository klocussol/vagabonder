Feature: I can create a trip itinerary
    In order to find other users with similar trip itineraries
    As a user
    I want to create my personal trip itinerary

    @javascript
    Scenario: I can create a trip itinerary
        Given I am logged in as "kyoko.locussol@ymail.com" with "kyoko"
        And I hover over "#trip-dropdown"
        And I follow "New"
        And I fill in "tripname" with "Nicaragua 2013"
        And I fill in "startdate" with "2013-08-14"
        And I fill in "enddate" with "2013-09-05"
        And I fill in "description" with "Visiting Nicaragua with roommates"
        When I follow "submit"
        Then I should see "Your trip has been saved, see who you could meet up with below!"
        And I should see "Nicaragua 2013"

    @javascript
    Scenario: I can navigate to the "New Trip" page
        Given I am logged in as "kyoko.locussol@ymail.com" with "kyoko"
        And I hover over "#trip-dropdown"
        When I follow "New"
        Then I should be on "/trip/new"
        And I should see "Add a new trip"

    Scenario: I can browse to the "New Trip" page
        Given I am logged in as "kyoko.locussol@ymail.com" with "kyoko"
        When I go to "/trip/new"
        Then I should see "Add a new trip"