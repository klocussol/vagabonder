Feature: Fancy fresh landing page
	In order to learn more about Vagabonder
	As a user
	I want the homepage to display important information

	@javascript
	Scenario: I can see the homepage
		Given I am on homepage
		Then I should see "Log In"
		And I should see "Register"
		And I should see "Collect"
		And I should see "Connect"
		And I should see "Coordinate"
		And I should see "Comment"
		And I should not see "Vivamus volutpat nunc eu sem rhoncus, accumsan malesuada nunc bibendum. Aliquam fringilla facilisis purus, sed bibendum eros porttitor non. Nullam vitae tristique quam."

	@javascript
	Scenario: I can reveal the description
		Given I am on homepage
		When I hover over "#coordinate"
		Then I should see "Coordinate"
		And I should see "Vivamus volutpat nunc eu sem rhoncus, accumsan malesuada nunc bibendum. Aliquam fringilla facilisis purus, sed bibendum eros porttitor non. Nullam vitae tristique quam."
