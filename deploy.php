<?php
namespace Deployer;

require 'recipe/common.php';

// Set configurations
set('repository', 'git@github.com:khromov/amazing-marvin-bookmarklet-backend.git');
set('shared_files', ['config.json']);
set('keep_releases', 3);

//Defaults for all servers
set('timezone', 'Europe/Stockholm');
set('branch', 'master');

// Configure servers
host('s4.khromov.se')
    ->user('root')
    ->identityFile('~/.ssh/id_rsa')
    ->forwardAgent()
    ->set('deploy_path', '/opt/easyengine/sites/amazing-marvin-bookmarklet.khromov.se/app/deployer')
    ->set('environment', 'production');

/**
 * Chown files to correct user
 */
task('deploy:chown', function () {
    run('chown -R www-data:www-data ' . get('deploy_path'));
});

/**
 * Write current Git commit hash to version.txt of current release
 */
task('deploy:write_version', function () {
    cd(get('deploy_path') . '/current/public/');
    run('git rev-parse HEAD > version.txt');
});

/**
 * Display current Git commit hash
 */
task('info:version', function() {

    cd(get('deploy_path') . '/current');
    $version = run('git rev-parse HEAD')->getOutput();

    write("Currently deployed commit: <info>$version</info>");
});

/**
 * Main task
 */
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'deploy:chown',
    'deploy:symlink',
    'deploy:write_version',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');

after('deploy', 'success');