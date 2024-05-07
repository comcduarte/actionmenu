<?php
declare(strict_types=1);

namespace comcduarte\ActionMenu;

use Laminas\ServiceManager\Factory\InvokableFactory;

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
                    'actionmenu' => ActionMenu::class,
                ],
                'factories' => [
                    ActionMenu::class => InvokableFactory::class,
                ],
            ],
        ];
    }
}