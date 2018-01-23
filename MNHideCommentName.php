<?php
namespace MNHideCommentName;

use Shopware\Components\Plugin\Context\ActivateContext;


class MNHideCommentName extends \Shopware\Components\Plugin
{

	public function activate(ActivateContext $context)
	{
		$context->scheduleClearCache(ActivateContext::CACHE_LIST_DEFAULT);
	}

  public static function getSubscribedEvents()
  {
  	return [
    	'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'onFrontendPostDispatch'
    ];
  }

  public function onFrontendPostDispatch(\Enlight_Controller_ActionEventArgs $args)
  {
	  /** @var \Enlight_Controller_Action $controller */
	  $controller = $args->get('subject');
	  $view = $controller->View();
	  $this->container->get('Template')->addTemplateDir(
	  $this->getPath() . '/Resources/views/'
	  );
  }
}
