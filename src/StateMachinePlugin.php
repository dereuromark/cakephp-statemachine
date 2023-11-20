<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the License Agreement. See LICENSE file.
 */

namespace StateMachine;

use Cake\Console\CommandCollection;
use Cake\Core\BasePlugin;
use Cake\Routing\RouteBuilder;

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
        $commandList = $commands->discoverPlugin($this->getName());

        return $commands->addMany($commandList);
    }
}
