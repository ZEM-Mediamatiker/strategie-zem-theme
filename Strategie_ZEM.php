<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class Strategie_ZEM extends Theme
{

    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0]
        ];
    }

    public function onThemeInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }

    public function onTwigSiteVariables()
    {
        $this->grav['assets']
            ->addCss('plugin://css/strategie_zem-core.css')
            ->addCss('plugin://css/strategie_zem-custom.css');

        $this->grav['assets']
            ->add('jquery', 101)
            ->addJs('theme://js/jquery.strategize_zem.min.js');
    }
}
