<?php

import('lib.pkp.classes.plugins.ThemePlugin');
class JensThemePlugin extends ThemePlugin{

    public function init(){
        $this->addStyle('stylesheet', 'styles/index.less');
    }

    function getDisplayName(){
        return 'Jens Theme';
    }

    function getDescription(){
        return 'Jens theme for testing OJS themes.';
    }

}

?>