<?php
namespace Concrete\Package\ThemeJuiced;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

    protected $pkgHandle = 'theme_juiced';
    protected $appVersionRequired = '5.7.4.2';
    protected $pkgVersion = '1.0';
    protected $pkgAllowsFullContentSwap = false;

    public function getPackageName() {
        return t("Juiced Theme");
    }

    public function getPackageDescription() {
        return t("Flexbox. Love.");
    }

    public function install() {
        $pkg = parent::install();
        Theme::add('juiced', $pkg);
    }


}
