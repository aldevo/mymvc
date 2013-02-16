<?php

//
// PHASE: BOOTSTRAP
//
define('MyMVC_INSTALL_PATH', dirname(__FILE__));
define('MyMVC_SITE_PATH', MyMVC_INSTALL_PATH . '/site');

require(MyMVC_INSTALL_PATH.'/src/CMyMVC/bootstrap.php');

$my = CMyMVC::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//

$my->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//

$my->ThemeEngineRender();

