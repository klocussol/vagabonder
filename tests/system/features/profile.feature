Feature: I can see my profile
	In order to see the activity on my account
	As a user
	I want my profile to display my personal information and activity

	Scenario: I can see my personal profile
		Given I am logged in as "kyoko.locussol@gmail.com" with "kyoko"
		Then I should see "Kyoko Locussol"
		And I should see "Bonds"
		And I should see "Upcoming Trips"