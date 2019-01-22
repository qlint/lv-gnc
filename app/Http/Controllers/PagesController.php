<?php

namespace App\Http\Controllers;
use App\Data4page;

class PagesController extends Controller {

	public function getIndex(){
		return view('pages.welcome');
	}

	public function getFree(){
		$data4pages = Data4page::all()->where('content', 'free');
		return view('pages.free')->withData4pages($data4pages);
	}

	public function getTv(){
		return view('pages.tv');
	}

	public function getMovies(){
		return view('pages.movies');
	}

	public function getMusic(){
		return view('pages.music');
	}

	public function getGames(){
		return view('pages.games');
	}

	public function getCloud(){
		return view('pages.cloud');
	}

	public function getContacts(){
		return view('pages.contacts');
	}

	public function getFaqs(){
		return view('pages.faqs');
	}

	public function getLogin(){
		return view('pages.login');
	}

	public function getSchedule(){
		return view('pages.schedule');
	}

	public function getPortal(){
		return view('pages.portal');
	}

	public function getMorefrom(){
		return view('pages.morefrom');
	}

	public function getDiscover(){
		return view('pages.discover');
	}

	public function getContentdesc(){
		return view('pages.contentdesc');
	}

}
