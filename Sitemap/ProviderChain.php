<?php

namespace Avalanche\Bundle\SitemapBundle\Sitemap;

use Avalanche\Bundle\SitemapBundle\Sitemap;

class ProviderChain implements Provider
{
    private $providers = array();

    public function add(Provider $provider)
    {
        var_dump(\get_class($provider));
        $this->providers[] = $provider;
    }

    public function populate(Sitemap $sitemap)
    {
        foreach ($this->providers as $provider) {
            $provider->populate($sitemap);
        }
    }
}
