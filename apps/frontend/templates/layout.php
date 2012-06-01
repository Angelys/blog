<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?> 
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
        <title><?php include_slot('title','Blog')?></title>
    </head>
<body>
    <div class="outer-container">
        <div class="inner-container">
            <div class="header">
                <div class="title"> <span class="sitename"> <a href="<?php echo url_for('/')?>">Blog</a></span>
                    <div class="slogan">some slogan</div>
                </div>
            </div>
            <div class="user_login">
                <?php if (!$sf_user->isAuthenticated()):?>
                <?php echo link_to('signin','sf_guard_signin')?>
                <?php echo link_to('register','sf_guard_register')?>
                <?php echo link_to('forget password','sf_guard_forgot_password')?>
                <?php else: ?>
                <?php echo "Hello,".$sf_user->getName()?>
                <?php echo link_to('my profile','@profile?id='.$sf_user->getGuardUser()->getId())?>
                <?php echo link_to('signout','sf_guard_signout')?>
                <?php endif ?>
            </div>
            <div class="main">
                <?php echo $sf_content ?>
                <div class="footer"> 
                    <div class="clearer"></div>
                </div>
            </div>
        </div>
    </div>
</body>
