<?php

/**
* $Id$
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
//
include_once("header.php");

include_once(XOOPS_ROOT_PATH . "/modules/smartobject/class/smartobjectabout.php");
$aboutObj = new SmartobjectAbout();
$aboutObj->render();

?>