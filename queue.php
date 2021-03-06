<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Default Queue Driver
    |--------------------------------------------------------------------------
    |
    | The Laravel queue API supports a variety of back-ends via an unified
    | API, giving you convenient access to each back-end using the same
    | syntax for each one. Here you may set the default queue driver.
    |
    | Supported: "sync", "beanstalkd", "sqs", "iron"
    |
    */

    'default' => 'sync',

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    | Please read the documentation on GitHub for more details.
    |
    */

    'connections' => array(

        'sync' => array(
            'driver' => 'sync'
        ),

        'beanstalkd' => array(
            'driver' => 'beanstalkd',
            'host'   => 'localhost',
            'queue'  => 'laravel-jobs',
            'mail'   => 'laravel-mail',
            'cron'   => 'laravel-cron',
            'ttr'    => 60
        ),

        'sqs' => array(
            'driver' => 'sqs',
            'key'    => 'your-public-key',
            'secret' => 'your-secret-key',
            'region' => 'eu-west-1',
            'queue'  => 'laravel-jobs',
            'mail'   => 'laravel-mail',
            'cron'   => 'laravel-cron'
        ),

        'iron' => array(
            'driver'  => 'iron',
            'host'    => 'mq-aws-eu-west-1.iron.io',
            'token'   => 'your-token',
            'project' => 'your-project',
            'queue'   => 'laravel-jobs',
            'mail'    => 'laravel-mail',
            'cron'    => 'laravel-cron'
        )

    ),

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behaviour of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => array(

        'database' => 'mysql', 'table' => 'failed_jobs'

    )

);
