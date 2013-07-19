Feature: Sign up for a Vagabonder account
	In order to create a Vagabonder account
	As a user
	I want to fill out a sing up form with my basic information

	Scenario: I can navigate to sign up
		Given I am on homepage
		And I follow "Sign Up"
		Then I should be on "/register/"

	Scenario: I can sign up for a Vagabonder account
		Given I am on "/register/"
		Then I should see "Email"
		And I should see "Username"
		And I should see "Password"
		And I should see "Password Confirmation"
		And I should see "First Name"
		And I should see "Last Name"
		And I should see "Date of Birth"
		And I should see "Gender"
		And I should see "Currently living in:"