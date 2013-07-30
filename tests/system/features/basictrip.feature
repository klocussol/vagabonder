Feature: I can create a trip itinerary
    In order to find other users with similar trip itineraries
    As a user
    I want to create my personal trip itinerary

    Scenario: I can create a trip itinerary
        Given I am logged in as "kyoko.locussol@ymail.com" with "kyoko"
        And I am on "/trip/new"
        And I fill in "trip-name" with "Paris 2013"
        And I fill in "trip-start-date" with "2013-08-14"
        And I fill in "trip-end-date" with "2013-09-05"
        And I fill in "trip-description" with "Visiting Paris"
        When I press "trip-submit"
        Then I should see "Your trip has been saved, see who you could meet up with below!"
        And I should see "Paris 2013"

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

    Scenario: I can see the form to add new trip
        Given I am logged in as "kyoko.locussol@ymail.com" with "kyoko"
        And I go to "/trip/new"
        Then I should see "Add a new trip"
        And I should see "Trip Name"
        And I should see "From"
        And I should see "To"
        And I should see "Spill the beans"