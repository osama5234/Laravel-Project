<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'laravel/laravel',
    'dev' => true,
  ),
  'versions' => 
  array (
    'appzcoder/crud-generator' => 
    array (
      'pretty_version' => 'v3.2.2',
      'version' => '3.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '662840d2e69d1523bd19fafb8402d3dc52293e9d',
      'dev-requirement' => false,
    ),
    'appzcoder/laravel-admin' => 
    array (
      'pretty_version' => 'v3.3.3',
      'version' => '3.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb878df8b49fcdda10ad2c0bc751bb74165844f7',
      'dev-requirement' => false,
    ),
    'asm89/stack-cors' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9c31def6a83f84b4d4a40d35996d375755f0e08',
      'dev-requirement' => false,
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.9.2',
      'version' => '0.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
      'dev-requirement' => false,
    ),
    'cordoval/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
      'dev-requirement' => false,
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
      'dev-requirement' => true,
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
      'dev-requirement' => false,
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '65b2d8ee1f10915efb3b55597da3404f096acba2',
      'dev-requirement' => false,
    ),
    'drewm/mailchimp-api' => 
    array (
      'pretty_version' => 'v2.5.4',
      'version' => '2.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6cdfab4ca6ddbc3b260913470bd0a4a5cb84c7a',
      'dev-requirement' => false,
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
      'dev-requirement' => false,
    ),
    'facade/flare-client-php' => 
    array (
      'pretty_version' => '1.8.1',
      'version' => '1.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '47b639dc02bcfdfc4ebb83de703856fa01e35f5f',
      'dev-requirement' => true,
    ),
    'facade/ignition' => 
    array (
      'pretty_version' => '2.10.2',
      'version' => '2.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '43688227bbf27c43bc1ad83af224f135b6ef0ff4',
      'dev-requirement' => true,
    ),
    'facade/ignition-contracts' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
      'dev-requirement' => true,
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '4.4.1',
      'version' => '4.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c073b2bd04d1c90e04dc1b787662b558dd65ade0',
      'dev-requirement' => false,
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.13.0',
      'version' => '2.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2edbc73a4687d9085c8f20f398eebade844e8424',
      'dev-requirement' => true,
    ),
    'fruitcake/laravel-cors' => 
    array (
      'pretty_version' => 'v1.0.6',
      'version' => '1.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d127dbec313e2e227d65e0c483765d8d7559bf6',
      'dev-requirement' => false,
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.9.2',
      'version' => '1.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
      'dev-requirement' => true,
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.5',
      'version' => '6.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
      'dev-requirement' => false,
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e7d04f1f6450fef59366c399cfad4b9383aa30d',
      'dev-requirement' => false,
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc960a912984efb74d0a90222870c72c87f10c91',
      'dev-requirement' => false,
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
      'dev-requirement' => true,
    ),
    'illuminate/auth' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/bus' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/cache' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/config' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/console' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/container' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/database' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/events' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/http' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/log' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/mail' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/queue' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/redis' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/routing' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/session' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/support' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/testing' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/translation' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/validation' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'illuminate/view' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v7.30.4',
      ),
    ),
    'intervention/image' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '2.4.x-dev',
      ),
      'reference' => '032263954ca2a5258fb5fe7492962c1a16ca9f3c',
      'dev-requirement' => false,
    ),
    'kodova/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v7.30.4',
      'version' => '7.30.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '9dd38140dc2924daa1a020a3d7a45f9ceff03df3',
      'dev-requirement' => false,
    ),
    'laravel/helpers' => 
    array (
      'pretty_version' => 'v1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'febb10d8daaf86123825de2cb87f789a3371f0ac',
      'dev-requirement' => false,
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
      'dev-requirement' => false,
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '04ad32c1a3328081097a181875733fa51f402083',
      'dev-requirement' => false,
    ),
    'laravel/ui' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd01a705763c243b07be795e9d1bb47f89260f73d',
      'dev-requirement' => false,
    ),
    'laravelcollective/html' => 
    array (
      'pretty_version' => 'v6.2.1',
      'version' => '6.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ae15b9c4bf918ec3a78f092b8555551dd693fde3',
      'dev-requirement' => false,
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '1.6.4',
      'version' => '1.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c3c8b7217c52572fb42aaf84211abccf75a151b2',
      'dev-requirement' => false,
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9be3b16c877d477357c015cec057548cf9b2a14a',
      'dev-requirement' => false,
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
      'dev-requirement' => false,
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd1339f64479af1bee0e82a0413813fe5345a54ea',
      'dev-requirement' => true,
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
      'dev-requirement' => false,
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.10.2',
      'version' => '1.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '1.10.2',
      ),
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.49.0',
      'version' => '2.49.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '93d9db91c0235c486875d22f1e08b50bdf3e6eee',
      'dev-requirement' => false,
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.10.5',
      'version' => '4.10.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '4432ba399e47c66624bc73c8c0f811e5c109576f',
      'dev-requirement' => false,
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v4.3.0',
      'version' => '4.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7c125dc2463f3e144ddc7e05e63077109508c94e',
      'dev-requirement' => true,
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.6.2',
      'version' => '3.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '06e2ebd25f2869e54a306dda991f7db58066f7f6',
      'dev-requirement' => false,
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
      'dev-requirement' => true,
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bae7c545bef187884426f042434e561ab1ddb182',
      'dev-requirement' => true,
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
      'dev-requirement' => true,
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
      'dev-requirement' => true,
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
      'dev-requirement' => true,
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
      'dev-requirement' => false,
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be1996ed8adc35c3fd795488a653f4b518be70ea',
      'dev-requirement' => true,
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '7.0.14',
      'version' => '7.0.14.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb7c9a210c72e4709cdde67f8b7362f672f2225c',
      'dev-requirement' => true,
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b49fb70f067272b659ef0174ff9ca40fdaa6357',
      'dev-requirement' => true,
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
      'dev-requirement' => true,
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '2.1.3',
      'version' => '2.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '2454ae1765516d20c4ffe103d85a58a9a3bd5662',
      'dev-requirement' => true,
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a853a0e183b9db7eed023d7933a858fa1c8d25a3',
      'dev-requirement' => true,
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '8.5.16',
      'version' => '8.5.16.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc66f2fc61296be66c99931a862200e7456b9a01',
      'dev-requirement' => true,
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
      'dev-requirement' => false,
    ),
    'psr/container-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
      'dev-requirement' => false,
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
      'dev-requirement' => false,
    ),
    'psr/http-message-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
      'dev-requirement' => false,
    ),
    'psr/log-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0.0',
        1 => '1.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
      'dev-requirement' => false,
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.10.8',
      'version' => '0.10.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e4573f47750dd6c92dca5aee543fa77513cbd8d3',
      'dev-requirement' => false,
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
      'dev-requirement' => false,
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
      'dev-requirement' => false,
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.1.1',
      'version' => '4.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd4032040a750077205918c86049aa0f43d22947',
      'dev-requirement' => false,
    ),
    'rhumsaa/uuid' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => '4.1.1',
      ),
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1de8cd5c010cb153fcd68b8d0f64606f523f7619',
      'dev-requirement' => true,
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '1071dfcef776a57013124ff35e1fc41ccd294758',
      'dev-requirement' => true,
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
      'dev-requirement' => true,
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '4.2.4',
      'version' => '4.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
      'dev-requirement' => true,
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.3',
      'version' => '3.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6b853149eab67d4da22291d36f5b0631c0fd856e',
      'dev-requirement' => true,
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '474fb9edb7ab891665d3bfc6317f42a0a150454b',
      'dev-requirement' => true,
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.4',
      'version' => '3.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
      'dev-requirement' => true,
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
      'dev-requirement' => true,
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '367dcba38d6e1977be014dc4b22f47a484dac7fb',
      'dev-requirement' => true,
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '31d35ca87926450c44eae7e2611d45a7a65ea8b3',
      'dev-requirement' => true,
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0150cfbc4495ed2df3872fb31b26781e4e077eb4',
      'dev-requirement' => true,
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
      'dev-requirement' => true,
    ),
    'spatie/laravel-activitylog' => 
    array (
      'pretty_version' => '3.17.0',
      'version' => '3.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bdc44862aaca39ecbd824133b80dbd7c8017ed7f',
      'dev-requirement' => false,
    ),
    'spatie/laravel-newsletter' => 
    array (
      'pretty_version' => '4.10.0',
      'version' => '4.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c3b9061a8410650aeab1416ed76e1afb57adc685',
      'dev-requirement' => false,
    ),
    'stripe/stripe-php' => 
    array (
      'pretty_version' => 'v7.94.0',
      'version' => '7.94.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '03cd6b5c1c4fc9087ddd1dd046457bff274294d6',
      'dev-requirement' => false,
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '15f7faf8508e04471f666633addacf54c0ab5933',
      'dev-requirement' => false,
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '649730483885ff2ca99ca0560ef0e5f6b03f2ac1',
      'dev-requirement' => false,
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fcd0b29a7a0b1bb5bfbedc6231583d77fea04814',
      'dev-requirement' => false,
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
      'dev-requirement' => false,
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0e6768b8c0dcef26df087df2bbbaa143867a59b2',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '67a5f354afa8e2f231081b3fa11a5912f933c3ce',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '69fee1ad2332a7cbab3aca13591953da9cdb7a11',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ae3f047bed4edff6fd35b26a9a6bfdc92c953c6',
      'dev-requirement' => false,
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
      'dev-requirement' => false,
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7b6dd714d95106b831aaa7f3c9c612ab886516bd',
      'dev-requirement' => false,
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e7021165d9dbfb4051296b8de827e92c8a7b5c87',
      'dev-requirement' => false,
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '47dd7912152b82d0d4c8d9040dbc93d6232d472a',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '63b5bb7db83e5673936d6e3b8b3e022ff6474933',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '24b72c6baa32c746a4d0840147c9715e42bb68ab',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '65bd267525e82759e7d8c4e8ceea44f398838e65',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a142215a36a3888e30d0a9eeea9766764e96976',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fba8933c384d6476ab14fb7b8526e5287ca7e010',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eca0bf41ed421bed1b57c4958bab16aa86b757d0',
      'dev-requirement' => false,
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '714b47f9196de61a196d86c4bad5f09201b307df',
      'dev-requirement' => false,
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '368e81376a8e049c37cb80ae87dbfbf411279199',
      'dev-requirement' => false,
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
      'dev-requirement' => false,
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '0732e97e41c0a590f77e231afc16a327375d50b0',
      'dev-requirement' => false,
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e2603bcc598e14804c4d2359d8dc4ee3c40391b',
      'dev-requirement' => false,
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '95c812666f3e91db75385749fe219c5e494c7f95',
      'dev-requirement' => false,
    ),
    'symfony/translation-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '2.3',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '905a22c68b292ffb6f20d7636c36b220d1fba5ae',
      'dev-requirement' => false,
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
      'dev-requirement' => true,
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.3',
      'version' => '2.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b43b05cf43c1b6d849478965062b6ef73e223bb5',
      'dev-requirement' => false,
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v4.2.0',
      'version' => '4.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'da64796370fc4eb03cc277088f6fede9fde88482',
      'dev-requirement' => false,
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '1.5.6',
      'version' => '1.5.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '80953678b19901e5165c56752d087fc11526017c',
      'dev-requirement' => false,
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
      'dev-requirement' => true,
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}










public static function isInstalled($packageName, $includeDevRequirements = true)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return $includeDevRequirements || empty($installed['versions'][$packageName]['dev-requirement']);
}
}

return false;
}













public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
