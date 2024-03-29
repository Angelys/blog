<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins(array(
        'sfDoctrinePlugin'
        ));
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('mpRealityAdminPlugin');
    $this->enablePlugins('sfDoctrineActAsTaggablePlugin');
    $this->enablePlugins('sfFormExtraPlugin');
  }
}
