<?php

require_once dirname(__FILE__) . '/../lib/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{

    public function setup()
    {
        $this->enablePlugins('sfPropelPlugin');
        $this->enablePlugins('symfonitePlugin');
        $this->enablePlugins('themesPlugin');
        $this->enablePlugins('sfGuardPlugin');
        $this->enablePlugins('sftGuardPlugin');
        $this->enablePlugins('sfJqueryReloadedPlugin');
        $this->enablePlugins('sfBreadNav2Plugin');
        $this->enablePlugins('sftSAMLPlugin');
        $this->enablePlugins('sftPAPIPlugin');
        $this->enablePlugins('sftFedIdentMapperPlugin');
  }

}
