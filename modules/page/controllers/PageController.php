<?php

class PageController extends Controller {

	/**
	 * Retrieve a page.
	 *
	 * @param  string  $slug
	 * @return void
	 */
	public function page($slug)
	{
		$page = Page::where('slug', '=', $slug)->firstOrFail();

		$this->page->layout  = 'layouts.'.$page->layout;

		$this->page->addBreadcrumb($page->title);
		$this->page->setContent('page::home', compact('page'));
	}
}