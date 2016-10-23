<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;
use App\Http\Requests;

class PagesController extends Controller
{
	/**
	 * this is the content page for the 'terrible parkers' page
	 * @return $data
	 */
	public function terribleParkers()
	{
		$page        = new Page;
		$breadcrumbs = $page->buildBreadCrumbs('terrible-parkers');
		$data        = array(
			'breadcrumbs'   => $breadcrumbs,
			'page_title'    => 'Terrible Parkers',
			'page_subtitle' => 'They really grind my gears man',
		);
		
		return view('interior-pages.terribleparkers', $data);
	}

	/**
	 * this is the content page for the 'notice them' page
	 * @return $data
	 */
	public function noticeThem()
	{
		$page        = new Page;
		$breadcrumbs = $page->buildBreadCrumbs('notice-them');
		$data        = array(
			'breadcrumbs'   => $breadcrumbs,
			'page_title'    => 'Notice Them',
			'page_subtitle' => 'That feeling when you saw a hard parked car',
		);
		return view('interior-pages.default', $data);
	}

	/**
	 * this is the content page for the 'expose them' page
	 * @return $data
	 */
	public function exposeThem()
	{
		$page        = new Page;
		$breadcrumbs = $page->buildBreadCrumbs('expose-them');
		$data        = array(
			'breadcrumbs'   => $breadcrumbs,
			'page_title'    => 'Expose Them',
			'page_subtitle' => 'That feeling when you saw a hard parked car',
		);
		return view('interior-pages.default', $data);
	}

	/**
	 * this is the content page for the 'get them' page
	 * @return $data
	 */
	public function getThem()
	{
		$page        = new Page;
		$breadcrumbs = $page->buildBreadCrumbs('get-them');
		$data        = array(
			'breadcrumbs'   => $breadcrumbs,
			'page_title'    => 'Get Them',
			'page_subtitle' => 'That feeling when you saw a hard parked car',
		);
		return view('interior-pages.default', $data);
	}

	/**
	 * this is the content page for the 'contact us' page
	 * @return $data
	 */
	public function contactUs()
	{
		$page        = new Page;
		$breadcrumbs = $page->buildBreadCrumbs('contact-us');
		$data        = array(
			'breadcrumbs'   => $breadcrumbs,
			'page_title'    => 'Contact Us',
			'page_subtitle' => 'That feeling when you saw a hard parked car',
		);
		return view('interior-pages.contact-us', $data);
	}

    /**
     * page displays card types
     * @return [type]
     */
    public function getCards()
    {
		$page        = new Page;
		$breadcrumbs = $page->buildBreadCrumbs('get-cards');
		$data        = array(
    		'breadcrumbs'   => $breadcrumbs,
			'page_title'    => 'Get Some Cards!',
			'page_subtitle' => "We've spotted them, now let's give it to 'em",
    	);
    	return view('interior-pages.getcards', $data);
    }

    /**
     * page displays a list of frequently asked questions.
     * @return [type]
     */
    public function faqs()
    {
		$page        = new Page;
		$breadcrumbs = $page->buildBreadCrumbs('faqs');
		$data        = array(
    		'breadcrumbs'   => $breadcrumbs,
			'page_title'    => 'Frequently Asked Questions',
			'page_subtitle' => 'All the obvious questions with rhetorical answers are below.'
    	);
    	return view('interior-pages.faqs', $data);
    }
}
