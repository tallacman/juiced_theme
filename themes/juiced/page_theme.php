<?php
namespace Concrete\Package\ThemeJuiced\Theme\Juiced;

use Concrete\Core\Page\Theme\Theme;
class PageTheme extends Theme {

// theme does not use bootstrap3

	protected $pThemeGridFrameworkHandle = 'bootstrap3';

	public function registerAssets() {

        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'picturefill');
	}

	public function getThemeBlockClasses()
	    {
	        return array(
	            'social_links'    => array('round'),
	    );
	}

    public function getThemeResponsiveImageMap() {
        return array(
            'xlarge' => '1100px',
            'large' => 	'992px',
            'medium' => '768px',
            'small' => 	'0'
        );
    }


}
