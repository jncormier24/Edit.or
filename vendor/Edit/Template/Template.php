<?php
/**
 * Template.php is the template class for the Edit.or webapp
 * **/

require_once '/var/www/Edit.or/vendor/smarty/Smarty.class.php';

class Template extends Smarty{
    function __construct(){
        parent::__construct();

        //$this->setTemplateDir( './templates/' );	
        $this->setCompileDir( '/var/www/Edit.or/vendor/smarty/templates_c/' );	
        $this->setCacheDir( '/var/www/Edit.or/vendor/smarty/cache/' );	
        $this->setConfigDir( '/var/www/Edit.or/vendor/smarty/configs/' );	

        $this->assign( 'title' , 'Emporium' );
    }
}
