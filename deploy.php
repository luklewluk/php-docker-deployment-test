<?php

namespace Deployer;

require 'recipe/common.php';

set('ssh_type', 'native');
set('ssh_multiplexing', true);
set('repository', 'git@github.com:luklewluk/php-docker-deployment-test.git');
set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);

serverList('servers.yml');

task('docker:deploy:vendors', function () {
    run('cd {{release_path}}; docker run --rm -v $(pwd):/app composer/composer {{composer_options}}');
})->desc('Deploy vendors via Docker composer');

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'docker:deploy:vendors',
    'deploy:symlink',
    'cleanup',
])->desc('Deploy your project');

after('deploy', 'success');
