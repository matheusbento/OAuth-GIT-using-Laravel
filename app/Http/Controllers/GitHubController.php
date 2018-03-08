<?php
 
namespace App\Http\Controllers;
 
class GitHubController extends Controller
{
 
    public function redirectToProvider()
	{
		return Socialize::with('github')->redirect();
	}

	public function handleProviderCallback()
	{
		$user = Socialize::with('github')->user();

		// $user->token;
	}
 
}