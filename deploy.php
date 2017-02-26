<?php

namespace Deployer;

require 'recipe/common.php';

set('repository', 'git@github.com:luklewluk/php-docker-deployment-test.git');
set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);

serverList('servers.yml');

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:symlink',
    'cleanup',
])->desc('Deploy your project');

after('deploy', 'success');
