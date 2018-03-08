<?php

namespace App\Http\Controllers\Socialogin; 
 
use Illuminate\Http\Request; 
 
use Socialite;
use View;
use App\Http\Requests; 
use App\Http\Controllers\Controller; 
 
use Illuminate\Contracts\View\Factory as ViewFactory; 
use Laravel\Socialite\Contracts\Factory as SocialiteFactory; 

class SocialoginController extends Controller
{
    /** 
     * @var ViewFactory 
     */ 
    private $viewFactory; 
 
    /** 
     * Construct 
     * 
     * @param ViewFactory $viewFactory 
     */ 
    public function __construct(ViewFactory $viewFactory) 
    { 
        $this->viewFactory = $viewFactory; 
    }
	/** 
     * @return mixed 
     */ 
    public function redirectToProvider() 
    { 
		// REDIRECT TO GITGUB LOGIN PAGE
		return Socialite::driver('github')->redirect(); 
    } 
	/** 
     * @return mixed 
     */ 
    public function handleProviderCallback() 
    { 
		// CAPTURE THE INFORMATIONS
        $user = Socialite::driver('github')->user(); 
		// REDIRECT TO INFORMATION PAGE AND RETURN DATA
		return view('show-info')->with(compact('user'));
    }
}
