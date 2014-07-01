<?php

/**
 * Class StringleyController
 *
 * Controls cms-stringley administration functions
 */
class StringleyController extends BaseController
{

	/**
	 * Home function to view strings
	 */
	public function adminHome()
	{
		return View::make('stringley::stringleyAdminHome');
	}

	/**
	 * Add a new string form
	 */
	public function adminAdd()
	{

	}

	/**
	 * Save new string form submissions to database
	 */
	public function adminAddSubmit()
	{

	}

	/**
	 * Edit an existing string form
	 */
	public function adminEdit()
	{


	}

	/**
	 * Submit edit string form to database
	 */
	public function adminEditSubmit()
	{


	}

	/**
	 * Delete existing string from database
	 */
	public function adminDelete()
	{


	}

}
