Feature: Login with username and password
	In order to access my Vagabonder account
	As a user
	I want a page to display login instructions

	Scenario: I can navigate to login
		Given I am on homepage
		And I follow "Log In"
		Then I should be on "/login"

	Scenario: I can log in to my account
		Given I am on "/login"
		Then I should see "Username"
		And I should see "Email"
		And I should see "Password"
		And I should see "Remember Me"
		And I should see "Forgot username"
		And I should see "Forgot password"