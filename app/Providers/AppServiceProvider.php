<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Match generated asset/link URLs to the current request scheme.
     * HTTPS pages must not emit http:// CSS, or the browser blocks them.
     */
    private function forcePublicRoot(): void
    {
        if ($this->app->runningInConsole() && ! $this->app->runningUnitTests()) {
            return;
        }

        $configured = rtrim((string) config('app.url'), '/');
        $parts = $configured !== '' ? parse_url($configured) : [];
        $host = $parts['host'] ?? request()->getHost();
        $port = $parts['port'] ?? null;

        $forwarded = strtolower((string) request()->headers->get('X-Forwarded-Proto', ''));
        $hostLooksLive = in_array(strtolower((string) $host), ['premiumhomes.casa', 'www.premiumhomes.casa'], true);
        $https = $hostLooksLive
            || request()->isSecure()
            || $forwarded === 'https'
            || strtolower((string) request()->server('HTTPS')) === 'on'
            || (string) request()->getPort() === '443';

        $scheme = $https ? 'https' : 'http';
        $root = $scheme.'://'.$host;
        if ($port && ! in_array((int) $port, [80, 443], true)) {
            $root .= ':'.$port;
        }

        URL::forceRootUrl($root);
        URL::forceScheme($scheme);

        $generator = $this->app['url'];
        $assetRoot = new \ReflectionProperty($generator, 'assetRoot');
        $assetRoot->setAccessible(true);
        $assetRoot->setValue($generator, $root);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('vendor.pagination.bootstrap-4');

        $this->forcePublicRoot();
    }
}

