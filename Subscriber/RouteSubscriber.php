<?php
namespace CookieSetter\Subscriber;

use Enlight\Event\SubscriberInterface;
use Shopware\Components\Plugin\ConfigReader;


class RouteSubscriber implements SubscriberInterface
{
   private $pluginDirectory;
   private $config;

   public static function getSubscribedEvents()
   {
       return [
           'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'onPostDispatch'
       ];
   }
}