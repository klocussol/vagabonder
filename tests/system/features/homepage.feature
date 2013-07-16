Feature: Fancy fresh landing page
	In order to learn more about Vagabonder
	As a user
	I want the homepage to display important information

	Scenario: I can see the homepage
		Given I am on homepage
		Then I should see "Me"
		And I should see "Collect"
		And I should see "Connect"
		And I should see "Coordinate"
		And I should see "Comment"