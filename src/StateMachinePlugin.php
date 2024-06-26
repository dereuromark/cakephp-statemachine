<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the License Agreement. See LICENSE file.
 */

namespace StateMachine;

use Cake\Console\CommandCollection;
use Cake\Core\BasePlugin;
use Cake\Routing\RouteBuilder;
use StateMachine\Command\StateMachineCheckConditionsCommand;
use StateMachine\Command\StateMachineCheckTimeoutsCommand;
use StateMachine\Command\StateMachineClearLocksCommand;
use StateMachine\Command\StateMachineInitCommand;

/**
 * Plugin for StateMachine
 */
class StateMachinePlugin extends BasePlugin
{
    /**
     * @var bool
     */
    protected bool $middlewareEnabled = false;

    /**
     * @var bool
     */
    protected bool $bootstrapEnabled = false;

    /**
     * @var array<class-string<\Cake\Console\BaseCommand>>
     */
    protected $stateMachineCommandsList = [
        StateMachineInitCommand::class,
        StateMachineCheckConditionsCommand::class,
        StateMachineCheckTimeoutsCommand::class,
        StateMachineClearLocksCommand::class,
    ];

    /**
     * @param \Cake\Routing\RouteBuilder $routes The route builder to update.
     *
     * @return void
     */
    public function routes(RouteBuilder $routes): void
    {
        $routes->plugin('StateMachine', ['path' => '/state-machine'], function (RouteBuilder $routes): void {
            $routes->connect('/', ['controller' => 'StateMachine', 'action' => 'index']);

            $routes->fallbacks();
        });

        $routes->prefix('Admin', function (RouteBuilder $routes): void {
            $routes->plugin('StateMachine', ['path' => '/state-machine'], function (RouteBuilder $routes): void {
                $routes->connect('/', ['controller' => 'StateMachine', 'action' => 'index']);

                $routes->fallbacks();
            });
        });
    }

    /**
     * @inheritDoc
     */
    public function console(CommandCollection $commands): CommandCollection
    {
        // If require-dev we can just auto add them
        if (class_exists('Bake\Command\SimpleBakeCommand')) {
            $commandList = $commands->discoverPlugin($this->getName());

            return $commands->addMany($commandList);
        }

        $commandList = [];
        foreach ($this->stateMachineCommandsList as $class) {
            $name = $class::defaultName();
            // If the short name has been used, use the full name.
            // This allows app commands to have name preference.
            // and app commands to overwrite migration commands.
            if (!$commands->has($name)) {
                $commandList[$name] = $class;
            }
            // full name
            $commandList['state_machine ' . $name] = $class;
        }

        return $commands->addMany($commandList);
    }
}
