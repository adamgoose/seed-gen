<?php namespace Adamgoose\SeedGen;

use Illuminate\Support\ServiceProvider;

class SeedGenServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
     * Bootstrap the application events.
     *
     * @return void
     */
	public function boot()
    {
        $this->package('adamgoose/seedgen');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['seedgen'] = $this->app->share(function($app)
		{
			return new SeedGen;
		});
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('SeedGen', 'Adamgoose\SeedGen\Facades\SeedGen');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('seedgen');
	}

}
