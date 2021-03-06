Feature: I can create a trip itinerary
    In order to find other users with similar trip itineraries
    As a user
    I want to create my personal trip itinerary

    @javascript
    Scenario: I can create a trip itinerary
        Given I am logged in as "kyoko.locussol@ymail.com" with "kyoko"
        And I am on "/trip/new"
        And I fill in "trip-name" with "French Baguette"
        And I type "tou" in "trip-destination"
        And I click the first item in dropdown
        And I fill in "trip-start-date" with "2013-08-14"
        And I fill in "trip-end-date" with "2013-09-05"
        And I fill in "trip-description" with "I am going to Toulouse to visit friends and family. Most of them will be working during the day so I'd love to hang out with locals or traveleres during when they are busy!"
        When I press "trip-submit"
        And I wait "10" seconds
        Then I should see "Your trip has been saved, see who you could meet up with below!"
        And I should see "Toulon 2013"
        And I should see "Leaving on 08-14-2013"
        And I should see "Returning on 09-05-2013"
        And I should see "I am going to Toulouse to visit friends and family. Most of them will be working during the day so I'd love to hang out with locals or traveleres during when they are busy!"
        And I should see "These vagabonders have similar itineraries. Connect and coordinate with them to create some unforgettable bonds!"

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

    @javascript
    Scenario: I can see autocomplete
        Given I am logged in as "kyoko.locussol@ymail.com" with "kyoko"
        And I go to "/trip/new"
        And I type "tou" in "trip-destination"
        When I wait "3" seconds
        Then I should see "Toulon, FR"
        And I should see "Toulouse, FR"

    @javascript
    Scenario: I can select autocomplete suggestion
        Given I am logged in as "kyoko.locussol@ymail.com" with "kyoko"
        And I go to "/trip/new"
        And I type "tou" in "trip-destination"
        And I wait "1" seconds
        And I click the first item in dropdown
        Then the "trip-destination" field should contain "Toulon, FR"
        And I should not see "Toulouse, FR"
