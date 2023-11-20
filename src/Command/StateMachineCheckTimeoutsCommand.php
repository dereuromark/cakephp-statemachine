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
use Cake\Utility\Inflector;
use StateMachine\FacadeAwareTrait;

/**
 * Command class for timeouts.
 */
class StateMachineCheckTimeoutsCommand extends Command
{
    use FacadeAwareTrait;

    /**
     * @inheritDoc
     */
    public static function defaultName(): string
    {
        return 'state_machine check_timeouts';
    }

    /**
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     *
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    protected function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);
        $parser->setDescription('Check if any timeouts match.');

        $parser->addArgument('name', [
            'required' => true,
            'help' => 'Name for the state machine.',
        ]);

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
        $stateMachine = (string)$args->getArgumentAt(0);
        $stateMachine = Inflector::camelize($stateMachine);

        if (!$this->getFacade()->stateMachineExists($stateMachine)) {
            $io->abort(sprintf('State machine `%s` was not found.', $stateMachine));
        }

        $affected = $this->getFacade()->checkTimeouts($stateMachine);

        $io->verbose('Affected: ' . $affected);
    }
}
