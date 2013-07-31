Feature: I have successfully logged into my account
	In order to know I have successfully logged into my account
	As a user
	I want the page to display my username

	Scenario: I have logged into my account
		Given I am logged in as "kyoko.locussol@gmail.com" with "kyoko"
		Then I should see "Hi, kyoko.locussol@gmail.com!"
		And I should see "Logout"
		And I should see "Connect"
