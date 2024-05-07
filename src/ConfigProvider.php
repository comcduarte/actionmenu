<?php
declare(strict_types=1);

namespace comcduarte\ActionMenu;

class ConfigProvider
{
    /**
     * Return general-purpose configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
        ];
    }
    
    public function getDependencyConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'actionmenu' => View\Helper\ActionMenu::class,
                ],
                'factories' => [
                    View\Helper\ActionMenu::class => \Laminas\ServiceManager\Factory\InvokableFactory::class,
                ],
            ],
        ];
    }
}