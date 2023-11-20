<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the License Agreement. See LICENSE file.
 */

namespace StateMachine\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Core\Configure;
use Cake\Utility\Inflector;
use StateMachine\FacadeAwareTrait;

/**
 * Command class for lock handling.
 */
class StateMachineClearLocksCommand extends Command
{
    use FacadeAwareTrait;

    /**
     * @inheritDoc
     */
    public static function defaultName(): string
    {
        return 'state_machine clear_locks';
    }

    /**
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     *
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    protected function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);
        $parser->setDescription('Clear expired locks from lock table.');

        return $parser;
    }

    /**
     * @param \Cake\Console\Arguments $args
     * @param \Cake\Console\ConsoleIo $io
     *
     * @return int|null|void
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $this->getFacade()->clearLocks();
    }

    /**
     * @param string $stateMachineName
     * @param string $processName
     *
     * @return string
     */
    protected function xml(string $stateMachineName, string $processName): string
    {
        $namespace = Inflector::dasherize(Configure::read('App.namespace'));
        $processSlug = Inflector::dasherize($stateMachineName) . '-01';
        $url = '../../../vendor/spryker/cakephp-statemachine/config/state-machine-01.xsd';

        return <<<XML
<?xml version="1.0"?>
<statemachine xmlns="$namespace:$processSlug" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="$namespace:$processSlug $url">

    <process name="$processName" main="true">
        <states>
            <state name="init" display="initialized"/>
        </states>

        <transitions>
        </transitions>

        <events>
        </events>

    </process>

</statemachine>

XML;
    }

    /**
     * @param string $stateMachineName
     * @param string $processName
     *
     * @return string
     */
    protected function handler(string $stateMachineName, string $processName): string
    {
        return <<<PHP
<?php

namespace App\StateMachine;

use StateMachine\Dependency\StateMachineHandlerInterface;
use StateMachine\Dto\StateMachine\ItemDto;

class {$stateMachineName}StateMachineHandler implements StateMachineHandlerInterface
{
    public const NAME = '$stateMachineName';

    public const STATE_INIT = 'init';

    /**
     * {@inheritDoc]
     *
     * @return string[]
     */
    public function getCommands(): array
    {
        return [
        ];
    }

    /**
     * {@inheritDoc]
     *
     * @return string[]
     */
    public function getConditions(): array
    {
        return [
        ];
    }

    /**
     * {@inheritDoc]
     *
     * @return string
     */
    public function getStateMachineName(): string
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @return string[]
     */
    public function getActiveProcesses(): array
    {
        return [
            '$processName',
        ];
    }

        /**
     * {@inheritDoc]
     *
     * @param string \$processName
     *
     * @return string
     */
    public function getInitialStateForProcess(\$processName): string
    {
        return static::STATE_INIT;
    }

    /**
     * {@inheritDoc]
     *
     * @param \StateMachine\Dto\StateMachine\ItemDto \$itemDto
     *
     * @return bool
     */
    public function itemStateUpdated(ItemDto \$itemDto): bool
    {
        return true;
    }

    /**
     * {@inheritDoc]
     *
     * @param int[] \$stateIds
     *
     * @return \StateMachine\Dto\StateMachine\ItemDto[]
     */
    public function getStateMachineItemsByStateIds(array \$stateIds = []): array
    {
        return [];
    }
}

PHP;
    }
}
