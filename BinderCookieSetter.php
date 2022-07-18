<?php declare(strict_types=1);

namespace BinderCookieSetter;

use Shopware\Bundle\CookieBundle\CookieCollection;
use Shopware\Bundle\CookieBundle\Structs\CookieGroupStruct;
use Shopware\Bundle\CookieBundle\Structs\CookieStruct;
use Shopware\Components\Plugin;

class BinderCookieSetter extends Plugin
{
    public static function getSubscribedEvents(): array
    {
        return [
            'CookieCollector_Collect_Cookies' => 'addComfortCookie'
        ];
    }

    public function addComfortCookie(): CookieCollection
    {
        $collection = new CookieCollection();
        $collection->add(new CookieStruct(
            'bindercookie',
            '/^bindercookie$/',
            'Klassischer Bindercookie',
            CookieGroupStruct::COMFORT
        ));

        return $collection;
    }
}