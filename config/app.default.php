<?php

use StateMachine\Graph\Adapter\PhpDocumentorGraphAdapter;
use StateMachine\Illuminator\Task\StateTask;

return [
    'StateMachine' => [
        'handlers' => [],
        'graphAdapter' => PhpDocumentorGraphAdapter::class,
        'maxEventRepeats' => 10,
        'maxLookupInPersistence' => false, // @deprecated: Deprecated, not functional
        'eventRepeatAction' => 0, // Modulo value for triggering this action, e.g. 20 ( => every 20)
        'pathToXml' => null,
    ],
    'IdeHelper' => [
        'illuminatorTasks' => [
            StateTask::class,
        ],
    ],
];
