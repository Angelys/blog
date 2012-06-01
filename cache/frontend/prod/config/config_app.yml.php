<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2012/05/30 18:46:30
sfConfig::add(array(
  'app_mp_reality_admin_web_dir' => '/mpRealityAdminPlugin',
  'app_mp_reality_admin_image_dir' => '/mpRealityAdminPlugin/images/icondock/',
  'app_mp_reality_admin_use_jquery' => true,
  'app_mp_reality_admin_css_reset' => false,
  'app_mp_reality_admin_site_tile' => 'mpRealityAdminPlugin',
  'app_mp_reality_admin_max_per_page' => array (
  0 => '3',
  1 => '5',
  2 => '10',
  3 => '20',
  4 => '50',
  5 => '100',
  6 => '∞',
),
  'app_mp_reality_admin_categories' => array (
  'Bloc1' => 
  array (
    'label' => 'Moderation',
    'class' => 'medium',
    'items' => 
    array (
      'Articles' => 
      array (
        'url' => 'jobeet_job',
        'image' => 'email.png',
        'badge' => 
        array (
          'model' => 'JobeetJob',
          'table_method' => 'getActiveJobs',
        ),
        'credentials' => 
        array (
          0 => 
          array (
            0 => 'admin',
            1 => 'publisher',
          ),
        ),
      ),
      'Comments' => 
      array (
        'url' => 'product',
        'image' => 'basket.png',
        'badge' => 
        array (
          'model' => 'Product',
          'table_method' => 'findAll',
        ),
        'credentials' => 
        array (
          0 => 'admin',
        ),
      ),
    ),
  ),
  'Bloc2' => 
  array (
    'label' => 'Activity',
    'class' => 'medium',
    'items' => 
    array (
      'Articles1' => 
      array (
        'url' => 'product_test2',
        'image' => 'coins.png',
        'credentials' => 
        array (
          0 => 
          array (
            0 => 'admin',
            1 => 'publisher',
          ),
        ),
      ),
      'Comments1' => 
      array (
        'url' => 'jobeet_category',
        'image' => 'user.png',
        'credentials' => 
        array (
          0 => 'admin',
        ),
      ),
    ),
  ),
  'Bloc3' => 
  array (
    'label' => 'Console 3',
    'class' => 'medium',
    'items' => 
    array (
      'Articles1' => 
      array (
        'url' => 'product_test2',
        'image' => 'coins.png',
        'credentials' => 
        array (
          0 => 
          array (
            0 => 'admin',
            1 => 'publisher',
          ),
        ),
      ),
      'Comments2' => 
      array (
        'url' => 'jobeet_category',
        'image' => 'user.png',
        'credentials' => 
        array (
          0 => 'admin',
        ),
      ),
    ),
  ),
),
  'app_max_posts_on_page' => 5,
  'app_length_of_post_on_main_page' => 25,
));
