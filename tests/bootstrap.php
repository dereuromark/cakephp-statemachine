<?php
/**
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Configure;
use Tools\View\Icon\BootstrapIcon;

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
define('ROOT', dirname(__DIR__));
define('APP_DIR', 'src');

define('APP', rtrim(sys_get_temp_dir(), DS) . DS . APP_DIR . DS);
if (!is_dir(APP)) {
    mkdir(APP, 0770, true);
}

define('TMP', ROOT . DS . 'tmp' . DS);
if (!is_dir(TMP)) {
    mkdir(TMP, 0770, true);
}
define('TESTS', ROOT . DS . 'tests' . DS);
define('CONFIG', TESTS . 'config' . DS);

define('LOGS', TMP . 'logs' . DS);
define('CACHE', TMP . 'cache' . DS);

define('CAKE_CORE_INCLUDE_PATH', ROOT . '/vendor/cakephp/cakephp');
define('CORE_PATH', CAKE_CORE_INCLUDE_PATH . DS);
define('CAKE', CORE_PATH . APP_DIR . DS);

define('WWW_ROOT', TMP . 'webroot' . DS);

require dirname(__DIR__) . '/vendor/autoload.php';
require CORE_PATH . 'config/bootstrap.php';
require CAKE . 'functions.php';

Cake\Core\Configure::write('debug', true);

Cake\Core\Configure::write('App', [
    'namespace' => 'TestApp',
    'encoding' => 'UTF-8',
    'paths' => [
        'templates' => [TESTS . 'test_app' . DS . 'templates' . DS],
    ],
]);

Cake\Core\Configure::write('debug', true);

Cake\Core\Configure::write('Yandex.key', env('YANDEX_KEY'));
Cake\Core\Configure::write('Transltr.live', env('TRANSLTR_LIVE'));

$cache = [
    'default' => [
        'className' => 'File',
    ],
    '_cake_core_' => [
        'className' => 'File',
        'prefix' => 'crud_myapp_cake_core_',
        'path' => CACHE . 'persistent/',
        'serialize' => true,
        'duration' => '+10 seconds',
    ],
    '_cake_model_' => [
        'className' => 'File',
        'prefix' => 'crud_my_app_cake_model_',
        'path' => CACHE . 'models/',
        'serialize' => 'File',
        'duration' => '+10 seconds',
    ],
];

Cake\Cache\Cache::setConfig($cache);

Configure::write('Icon', [
    'sets' => [
        'bs' => BootstrapIcon::class,
    ],
]);

class_alias(TestApp\Controller\AppController::class, 'App\Controller\AppController');
class_alias(Cake\View\View::class, 'App\View\AppView');
class_alias(TestApp\Application::class, 'App\Application');

Cake\Core\Plugin::getCollection()->add(new \StateMachine\StateMachinePlugin());
Cake\Core\Plugin::getCollection()->add(new \Tools\ToolsPlugin());

// Ensure default test connection is defined
if (!getenv('db_class')) {
    putenv('db_class=Cake\Database\Driver\Sqlite');
    putenv('db_dsn=sqlite::memory:');
}

Cake\Datasource\ConnectionManager::setConfig('test', [
    'className' => 'Cake\Database\Connection',
    'driver' => getenv('db_class') ?: null,
    'dsn' => getenv('db_dsn') ?: null,
    'timezone' => 'UTC',
    'quoteIdentifiers' => true,
    'cacheMetadata' => true,
]);

Cake\Datasource\ConnectionManager::setConfig('test_database_log', [
    'className' => 'Cake\Database\Connection',
    'driver' => getenv('db_class') ?: null,
    'dsn' => getenv('db_dsn') ?: null,
    'timezone' => 'UTC',
    'quoteIdentifiers' => true,
    'cacheMetadata' => true,
]);

if (env('FIXTURE_SCHEMA_METADATA')) {
    $loader = new Cake\TestSuite\Fixture\SchemaLoader();
    $loader->loadInternalFile(env('FIXTURE_SCHEMA_METADATA'));
}
