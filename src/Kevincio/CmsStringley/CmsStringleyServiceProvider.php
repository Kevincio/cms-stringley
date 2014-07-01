<?php namespace Kevincio\CmsStringley;

use Illuminate\Support\ServiceProvider;
use Route;

class CmsStringleyServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public $debug;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('kevincio/cms-stringley');

		Route::get('/cms-stringley',					array('uses' =>	'Stringley::StringleyController@adminHome',		'as'	=>	'stringleyHome'));

		//$this->debug = Config::get('cms-stringley::debug');
/*
		// Define Stringley Routes
		// Stringley Home
		Route::get('/cms-stringley',					array('uses' =>	'StringleyController@adminHome',		'as'	=>	'stringleyHome'));
		// Add a new Stringley
		Route::get('/cms-stringley/add',				array('uses' =>	'StringleyController@adminAdd',			'as'	=>	'stringleyAdd'));
		Route::post('/cms-stringley/add',				array('uses' =>	'StringleyController@adminAddSubmit',	'as'	=>	'stringleyAddSubmit'));
		// Edit an existing Stringley
		Route::get('/cms-stringley/edit/{id}',			array('uses' =>	'StringleyController@adminEdit',		'as'	=>	'stringleyEdit'));
		Route::post('/cms-stringley/edit/{id}',			array('uses' =>	'StringleyController@adminEditSubmit',  'as'	=>	'stringleyEditSubmit'));
		// Delete an existing Stringley
		Route::get('/cms-stringley/delete/{id}',		array('uses' =>	'StringleyController@adminDelete',		'as'	=>	'stringleyDelete'));
*/
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['stringley'] = $this->app->share(function($app)
		{
			return new Stringley;
		});

		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Stringley', 'Kevincio\cms-stringley\Facades\Stringley');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('Stringley');
	}

}
