<?php
/**
 * Template.php is the template class for the Edit.or webapp
 * **/

require_once '/Users/jncormier/Sites/git-checkout/Edit.or/vendor/smarty/Smarty.class.php';

class Template extends Smarty{
    function __construct(){
        parent::__construct();

        //$this->setTemplateDir( './templates/' );	
        $this->setCompileDir( '/Users/jncormier/Sites/git-checkout/Edit.or/vendor/smarty/templates_c/' );	
        $this->setCacheDir( '/Users/jncormier/Sites/git-checkout/Edit.or/vendor/smarty/cache/' );	
        $this->setConfigDir( '/Users/jncormier/Sites/git-checkout/Edit.or/vendor/smarty/configs/' );	

        $this->assign( 'title' , 'Emporium' );
    }
}