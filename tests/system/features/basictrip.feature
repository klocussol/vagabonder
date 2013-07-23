Feature: I can create a trip itinerary
    In order to find other users with similar trip itineraries
    As a user
    I want to create my personal trip itinerary

    Scenario: I can create a trip itinerary
        Given I am logged in as 'kyoko.locussol@ymail.com' with 'kyoko'
        And I hover over "Trip"
        And I follow "New"
        And I fill in "tripname" with "Nicaragua 2013"
        And I fill in "startdate" with "2013-08-14"
        And I fill in "enddate" with "2013-09-05"
        And I fill in "description" with "Visiting Nicaragua with roommates"
        When I follow "submit"
        Then I should see "Your trip has been saved, see who you could meet up with below!"
        And I should see "Nicaragua 2013"