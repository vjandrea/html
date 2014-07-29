<?php namespace Vjandrea\Html;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class HtmlServiceProvider extends IlluminateServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;
    
    /**
    * Boot the service provider
    *
    * @ return void
    */
    public function boot()
    {
        $this->package("vjandrea/html");
    }
    
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
        $this->registerHtmlBuilder();
	}
    
    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app['html'] = $this->app->share(function ($app) {
            return new HtmlBuilder($app['url']);
        });
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('html');
	}

}
