<?php
// auto-generated by sfViewConfigHandler
// date: 2010/02/27 13:08:41
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!is_null($layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout')))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (is_null($this->getDecoratorTemplate()) && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('default', '', array ());
  $response->addStylesheet('prettyPhoto', '', array ());
  $response->addStylesheet('main', '', array ());
  $response->addJavascript('jquery', '', array ());
  $response->addJavascript('cookie', '', array ());
  $response->addJavascript('prettyPhoto', '', array ());
  $response->addJavascript('main', '', array ());


