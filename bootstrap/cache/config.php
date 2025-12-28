<?php return array (
  'concurrency' => 
  array (
    'default' => 'process',
  ),
  'api' => 
  array (
    'rate_limit' => 200,
  ),
  'app' => 
  array (
    'name' => 'Coolify',
    'env' => 'production',
    'debug' => false,
    'url' => 'http://34.124.150.231:8000',
    'frontend_url' => 'http://localhost:3000',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'cipher' => 'AES-256-CBC',
    'key' => 'base64:RGM7UYnSHGmy+7p6XtqTQMHXmduXHsltwJk2Qt5wahs=',
    'previous_keys' => 
    array (
    ),
    'maintenance' => 
    array (
      'driver' => 'cache',
      'store' => 'redis',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'SocialiteProviders\\Manager\\ServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\FortifyServiceProvider',
      25 => 'App\\Providers\\AuthServiceProvider',
      26 => 'App\\Providers\\BroadcastServiceProvider',
      27 => 'App\\Providers\\EventServiceProvider',
      28 => 'App\\Providers\\HorizonServiceProvider',
      29 => 'App\\Providers\\RouteServiceProvider',
      30 => 'App\\Providers\\ConfigurationServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Concurrency' => 'Illuminate\\Support\\Facades\\Concurrency',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Context' => 'Illuminate\\Support\\Facades\\Context',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Number' => 'Illuminate\\Support\\Number',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schedule' => 'Illuminate\\Support\\Facades\\Schedule',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Uri' => 'Illuminate\\Support\\Uri',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
    ),
    'id' => 'cdf8ea400077c4a885b90959bd0881f4',
    'port' => 8000,
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_reset_tokens',
        'expire' => 10,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'reverb' => 
      array (
        'driver' => 'reverb',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => NULL,
          'port' => 443,
          'scheme' => 'https',
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => 'd751c804af593be30518e03a3e487adbaa38fb58e4c8cf1b3fe6fb4f97092cd9',
        'secret' => '27278203c93526d1d35727d7b3bbab2335e73a2c1deec552786ea403adf9a805',
        'app_id' => '2acf3879924efc415fc90b1a4ef078448a09debcdc013f8e0bd520f2b1abe96f',
        'options' => 
        array (
          'host' => 'coolify-realtime',
          'port' => '6001',
          'scheme' => 'http',
          'encrypted' => true,
          'useTLS' => false,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'redis',
    'stores' => 
    array (
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/html/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
      'apc' => 
      array (
        'driver' => 'apc',
      ),
    ),
    'prefix' => 'coolify_cache_',
  ),
  'chunk-upload' => 
  array (
    'storage' => 
    array (
      'chunks' => 'chunks',
      'disk' => 'local',
    ),
    'clear' => 
    array (
      'timestamp' => '-1 HOURS',
      'schedule' => 
      array (
        'enabled' => false,
        'cron' => '25 * * * *',
      ),
    ),
    'chunk' => 
    array (
      'name' => 
      array (
        'use' => 
        array (
          'session' => true,
          'browser' => false,
        ),
      ),
    ),
    'handlers' => 
    array (
      'custom' => 
      array (
      ),
      'override' => 
      array (
      ),
    ),
  ),
  'constants' => 
  array (
    'coolify' => 
    array (
      'version' => '4.0.0-beta.459',
      'helper_version' => '1.0.12',
      'realtime_version' => '1.0.10',
      'self_hosted' => true,
      'autoupdate' => NULL,
      'base_config_path' => '/data/coolify',
      'registry_url' => 'ghcr.io',
      'helper_image' => 'ghcr.io/coollabsio/coolify-helper',
      'realtime_image' => 'ghcr.io/coollabsio/coolify-realtime',
      'is_windows_docker_desktop' => false,
      'cdn_url' => 'https://cdn.coollabs.io',
      'versions_url' => 'https://cdn.coollabs.io/coolify/versions.json',
      'upgrade_script_url' => 'https://cdn.coollabs.io/coolify/upgrade.sh',
      'releases_url' => 'https://cdn.coolify.io/releases.json',
    ),
    'urls' => 
    array (
      'docs' => 'https://coolify.io/docs',
      'contact' => 'https://coolify.io/docs/contact',
    ),
    'services' => 
    array (
      'official' => 'https://raw.githubusercontent.com/coollabsio/coolify/v4.x/templates/service-templates-latest.json',
      'file_name' => 'service-templates-latest.json',
    ),
    'terminal' => 
    array (
      'protocol' => NULL,
      'host' => NULL,
      'port' => NULL,
    ),
    'pusher' => 
    array (
      'host' => '34.124.150.231',
      'port' => '6001',
      'app_key' => 'd751c804af593be30518e03a3e487adbaa38fb58e4c8cf1b3fe6fb4f97092cd9',
    ),
    'migration' => 
    array (
      'is_migration_enabled' => true,
    ),
    'seeder' => 
    array (
      'is_seeder_enabled' => true,
    ),
    'horizon' => 
    array (
      'is_horizon_enabled' => true,
      'is_scheduler_enabled' => true,
    ),
    'docker' => 
    array (
      'minimum_required_version' => '24.0',
    ),
    'ssh' => 
    array (
      'mux_enabled' => true,
      'mux_persist_time' => 3600,
      'mux_health_check_enabled' => true,
      'mux_health_check_timeout' => 5,
      'mux_max_age' => 1800,
      'connection_timeout' => 10,
      'server_interval' => 20,
      'command_timeout' => 3600,
      'max_retries' => 3,
      'retry_base_delay' => 2,
      'retry_max_delay' => 30,
      'retry_multiplier' => 2,
    ),
    'invitation' => 
    array (
      'link' => 
      array (
        'base_url' => '/invitations/',
        'expiration_days' => 3,
      ),
    ),
    'email_change' => 
    array (
      'verification_code_expiry_minutes' => 10,
    ),
    'sentry' => 
    array (
      'sentry_dsn' => NULL,
    ),
    'webhooks' => 
    array (
      'feedback_discord_webhook' => NULL,
      'dev_webhook' => NULL,
    ),
    'bunny' => 
    array (
      'storage_api_key' => NULL,
      'api_key' => NULL,
    ),
    'server_checks' => 
    array (
      'notification_delay_min' => 120,
      'notification_delay_max' => 300,
      'notification_delay_scaling' => 0.2,
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'pgsql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => '/var/www/html/database/database.sqlite',
        'prefix' => '',
        'prefix_indexes' => NULL,
        'foreign_key_constraints' => true,
        'busy_timeout' => NULL,
        'journal_mode' => NULL,
        'synchronous' => NULL,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravel',
        'username' => 'coolify',
        'password' => 'pqa8T5+q1kvW55Yq8CVrmgIAtoOZ0AJZ5REMtMsBOs4=',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'mariadb' => 
      array (
        'driver' => 'mariadb',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravel',
        'username' => 'coolify',
        'password' => 'pqa8T5+q1kvW55Yq8CVrmgIAtoOZ0AJZ5REMtMsBOs4=',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'coolify-db',
        'port' => '5432',
        'database' => 'coolify',
        'username' => 'coolify',
        'password' => 'pqa8T5+q1kvW55Yq8CVrmgIAtoOZ0AJZ5REMtMsBOs4=',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '1433',
        'database' => 'laravel',
        'username' => 'coolify',
        'password' => 'pqa8T5+q1kvW55Yq8CVrmgIAtoOZ0AJZ5REMtMsBOs4=',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
      'testing' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'postgres',
        'port' => '5432',
        'database' => 'coolify_test',
        'username' => 'coolify',
        'password' => 'password',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'coolify_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => 'coolify-redis',
        'username' => NULL,
        'password' => 'mGVmGSqLerTuSnMWO7qWZ+8VyVYEqrzMVDQ6WJ2f/Fo=',
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => 'coolify-redis',
        'username' => NULL,
        'password' => 'mGVmGSqLerTuSnMWO7qWZ+8VyVYEqrzMVDQ6WJ2f/Fo=',
        'port' => '6379',
        'database' => '1',
      ),
      'horizon' => 
      array (
        'url' => NULL,
        'host' => 'coolify-redis',
        'username' => NULL,
        'password' => 'mGVmGSqLerTuSnMWO7qWZ+8VyVYEqrzMVDQ6WJ2f/Fo=',
        'port' => '6379',
        'database' => '0',
        'options' => 
        array (
          'prefix' => 'coolify_horizon:',
        ),
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
      2 => 'api*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'open' => NULL,
      'driver' => 'file',
      'path' => '/var/www/html/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => NULL,
    'local_sites_path' => NULL,
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'ajax_handler_auto_show' => true,
    'ajax_handler_enable_tab' => true,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
      'jobs' => false,
    ),
    'options' => 
    array (
      'time' => 
      array (
        'memory_usage' => false,
      ),
      'messages' => 
      array (
        'trace' => true,
      ),
      'memory' => 
      array (
        'reset_peak' => false,
        'with_baseline' => false,
        'precision' => 0,
      ),
      'auth' => 
      array (
        'show_name' => true,
        'show_guards' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'duration_background' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
        'slow_threshold' => false,
        'memory_usage' => false,
        'soft_limit' => 100,
        'hard_limit' => 500,
      ),
      'mail' => 
      array (
        'timeline' => false,
        'show_body' => true,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
        'group' => 50,
        'exclude_paths' => 
        array (
          0 => 'vendor/filament',
        ),
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'session' => 
      array (
        'hiddens' => 
        array (
        ),
      ),
      'symfony_request' => 
      array (
        'hiddens' => 
        array (
        ),
      ),
      'events' => 
      array (
        'data' => false,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_middleware' => 
    array (
    ),
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app',
        'throw' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/public',
        'url' => 'http://34.124.150.231:8000/storage',
        'visibility' => 'public',
        'throw' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
      'ssh-mux' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/ssh/mux',
        'visibility' => 'private',
        'throw' => false,
      ),
      'ssh-keys' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/ssh/keys',
        'visibility' => 'private',
        'throw' => false,
      ),
      'deployments' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/deployments',
        'visibility' => 'private',
        'throw' => false,
      ),
      'backups' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/backups',
        'visibility' => 'private',
        'throw' => false,
      ),
    ),
    'links' => 
    array (
      '/var/www/html/public/storage' => '/var/www/html/storage/app/public',
    ),
  ),
  'fortify-options' => 
  array (
    'two-factor-authentication' => 
    array (
      'confirm' => true,
      'confirmPassword' => true,
    ),
  ),
  'fortify' => 
  array (
    'guard' => 'web',
    'middleware' => 
    array (
      0 => 'web',
    ),
    'auth_middleware' => 'auth',
    'passwords' => 'users',
    'username' => 'email',
    'email' => 'email',
    'views' => true,
    'home' => '/',
    'prefix' => '',
    'domain' => NULL,
    'lowercase_usernames' => false,
    'limiters' => 
    array (
      'login' => 'login',
      'two-factor' => 'two-factor',
      'forgot-password' => 'forgot-password',
    ),
    'paths' => 
    array (
      'login' => NULL,
      'logout' => NULL,
      'password' => 
      array (
        'request' => NULL,
        'reset' => NULL,
        'email' => NULL,
        'update' => NULL,
        'confirm' => NULL,
        'confirmation' => NULL,
      ),
      'register' => NULL,
      'verification' => 
      array (
        'notice' => NULL,
        'verify' => NULL,
        'send' => NULL,
      ),
      'user-profile-information' => 
      array (
        'update' => NULL,
      ),
      'user-password' => 
      array (
        'update' => NULL,
      ),
      'two-factor' => 
      array (
        'login' => NULL,
        'enable' => NULL,
        'confirm' => NULL,
        'disable' => NULL,
        'qr-code' => NULL,
        'secret-key' => NULL,
        'recovery-codes' => NULL,
      ),
    ),
    'redirects' => 
    array (
      'login' => NULL,
      'logout' => NULL,
      'password-confirmation' => NULL,
      'register' => NULL,
      'email-verification' => NULL,
      'password-reset' => NULL,
    ),
    'features' => 
    array (
      0 => 'registration',
      1 => 'reset-passwords',
      2 => 'update-profile-information',
      3 => 'update-passwords',
      4 => 'two-factor-authentication',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
    'rehash_on_login' => true,
  ),
  'horizon' => 
  array (
    'domain' => NULL,
    'path' => 'horizon',
    'use' => 'default',
    'prefix' => 'coolify_horizon:',
    'middleware' => 
    array (
      0 => 'web',
    ),
    'waits' => 
    array (
      'redis:default' => 60,
    ),
    'trim' => 
    array (
      'recent' => 60,
      'pending' => 60,
      'completed' => 60,
      'recent_failed' => 10080,
      'failed' => 10080,
      'monitored' => 10080,
    ),
    'silenced' => 
    array (
    ),
    'metrics' => 
    array (
      'trim_snapshots' => 
      array (
        'job' => 24,
        'queue' => 24,
      ),
    ),
    'fast_termination' => false,
    'memory_limit' => 64,
    'defaults' => 
    array (
      's6' => 
      array (
        'connection' => 'redis',
        'balance' => 'false',
        'queue' => 'high,default',
        'maxTime' => 3600,
        'maxJobs' => 400,
        'memory' => 128,
        'tries' => 1,
        'nice' => 0,
        'sleep' => 3,
        'timeout' => 3600,
      ),
    ),
    'environments' => 
    array (
      'production' => 
      array (
        's6' => 
        array (
          'autoScalingStrategy' => 'size',
          'minProcesses' => 1,
          'maxProcesses' => 4,
          'balanceMaxShift' => 1,
          'balanceCooldown' => 1,
        ),
      ),
      'local' => 
      array (
        's6' => 
        array (
          'autoScalingStrategy' => 'size',
          'minProcesses' => 1,
          'maxProcesses' => 4,
          'balanceMaxShift' => 1,
          'balanceCooldown' => 1,
        ),
      ),
    ),
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Livewire',
    'view_path' => '/var/www/html/resources/views/livewire',
    'layout' => 'components.layout',
    'lazy_placeholder' => 'components.page-loading',
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => 
      array (
        0 => 'file',
        1 => 'max:256000',
      ),
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'render_on_redirect' => false,
    'legacy_model_binding' => false,
    'inject_assets' => true,
    'navigate' => 
    array (
      'show_progress_bar' => true,
      'progress_bar_color' => '#ffff00',
    ),
    'inject_morph_markers' => true,
    'pagination_theme' => 'tailwind',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => 'null',
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
        'facility' => 8,
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/var/www/html/storage/logs/laravel.log',
      ),
      'scheduled' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/scheduled.log',
        'level' => 'debug',
        'days' => 1,
      ),
      'scheduled-errors' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/scheduled-errors.log',
        'level' => 'warning',
        'days' => 14,
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'array',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.mailgun.org',
        'port' => 587,
        'encryption' => 'tls',
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'local_domain' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'resend' => 
      array (
        'transport' => 'resend',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
      'roundrobin' => 
      array (
        'transport' => 'roundrobin',
        'mailers' => 
        array (
          0 => 'ses',
          1 => 'postmark',
        ),
        'retry_after' => 60,
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/html/resources/views/vendor/mail',
      ),
    ),
  ),
  'purify' => 
  array (
    'default' => 'default',
    'configs' => 
    array (
      'default' => 
      array (
        'Core.Encoding' => 'utf-8',
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'h1,h2,h3,h4,h5,h6,b,u,strong,i,em,s,del,a[href|title],ul,ol,li,p[style],br,span,img[width|height|alt|src],blockquote',
        'HTML.ForbiddenElements' => '',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => false,
        'AutoFormat.RemoveEmpty' => false,
      ),
    ),
    'definitions' => 'Stevebauman\\Purify\\Definitions\\Html5Definition',
    'css-definitions' => NULL,
    'serializer' => 
    array (
      'driver' => 'file',
      'cache' => 'Stevebauman\\Purify\\Cache\\CacheDefinitionCache',
    ),
  ),
  'queue' => 
  array (
    'default' => 'redis',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 86400,
        'block_for' => NULL,
        'after_commit' => true,
      ),
    ),
    'batching' => 
    array (
      'database' => 'sqlite',
      'table' => 'job_batches',
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'pgsql',
      'table' => 'failed_jobs',
    ),
  ),
  'ray' => 
  array (
    'enable' => true,
    'send_cache_to_ray' => false,
    'send_dumps_to_ray' => true,
    'send_jobs_to_ray' => false,
    'send_log_calls_to_ray' => true,
    'send_queries_to_ray' => false,
    'send_duplicate_queries_to_ray' => false,
    'send_slow_queries_to_ray' => false,
    'slow_query_threshold_in_ms' => 500,
    'send_requests_to_ray' => false,
    'send_http_client_requests_to_ray' => false,
    'send_views_to_ray' => false,
    'send_exceptions_to_ray' => true,
    'send_deprecated_notices_to_ray' => false,
    'host' => 'host.docker.internal',
    'port' => 23517,
    'remote_path' => NULL,
    'local_path' => NULL,
    'always_send_raw_values' => false,
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => '34.124.150.231:8000',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
    array (
      'authenticate_session' => 'Laravel\\Sanctum\\Http\\Middleware\\AuthenticateSession',
      'encrypt_cookies' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
      'validate_csrf_token' => 'Illuminate\\Foundation\\Http\\Middleware\\ValidateCsrfToken',
    ),
  ),
  'sentry' => 
  array (
    'dsn' => NULL,
    'release' => '4.0.0-beta.459',
    'environment' => 'production',
    'sample_rate' => 1.0,
    'traces_sample_rate' => 0.2,
    'profiles_sample_rate' => NULL,
    'enable_logs' => false,
    'send_default_pii' => false,
    'ignore_transactions' => 
    array (
      0 => '/up',
    ),
    'breadcrumbs' => 
    array (
      'logs' => true,
      'cache' => true,
      'livewire' => true,
      'sql_queries' => true,
      'sql_bindings' => true,
      'queue_info' => true,
      'command_info' => true,
      'http_client_requests' => true,
    ),
    'tracing' => 
    array (
      'queue_job_transactions' => false,
      'queue_jobs' => true,
      'sql_queries' => true,
      'sql_origin' => true,
      'views' => true,
      'livewire' => true,
      'http_client_requests' => true,
      'redis_commands' => false,
      'redis_origin' => true,
      'default_integrations' => true,
      'missing_routes' => false,
    ),
    'enable_tracing' => false,
  ),
  'services' => 
  array (
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'resend' => 
    array (
      'key' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'slack' => 
    array (
      'notifications' => 
      array (
        'bot_user_oauth_token' => NULL,
        'channel' => NULL,
      ),
    ),
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'azure' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
      'tenant' => NULL,
      'proxy' => NULL,
    ),
    'authentik' => 
    array (
      'base_url' => NULL,
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'clerk' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
      'base_url' => NULL,
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
      'tenant' => NULL,
    ),
    'zitadel' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
      'base_url' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'database',
    'lifetime' => 10080,
    'expire_on_close' => false,
    'encrypt' => true,
    'files' => '/var/www/html/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'coolify_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,
  ),
  'subscription' => 
  array (
    'provider' => NULL,
    'stripe_api_key' => NULL,
    'stripe_webhook_secret' => NULL,
    'stripe_excluded_plans' => NULL,
    'stripe_price_id_dynamic_monthly' => NULL,
    'stripe_price_id_dynamic_yearly' => NULL,
  ),
  'telescope' => 
  array (
    'enabled' => false,
    'domain' => NULL,
    'path' => 'telescope',
    'driver' => 'database',
    'storage' => 
    array (
      'database' => 
      array (
        'connection' => 'pgsql',
        'chunk' => 1000,
      ),
    ),
    'queue' => 
    array (
      'connection' => 'redis',
      'queue' => 'default',
    ),
    'middleware' => 
    array (
      0 => 'web',
      1 => 'Laravel\\Telescope\\Http\\Middleware\\Authorize',
    ),
    'only_paths' => 
    array (
    ),
    'ignore_paths' => 
    array (
      0 => 'livewire*',
      1 => 'nova-api*',
      2 => 'pulse*',
    ),
    'ignore_commands' => 
    array (
    ),
    'watchers' => 
    array (
      'Laravel\\Telescope\\Watchers\\BatchWatcher' => true,
      'Laravel\\Telescope\\Watchers\\CacheWatcher' => 
      array (
        'enabled' => true,
        'hidden' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\ClientRequestWatcher' => true,
      'Laravel\\Telescope\\Watchers\\CommandWatcher' => 
      array (
        'enabled' => true,
        'ignore' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\DumpWatcher' => 
      array (
        'enabled' => true,
        'always' => false,
      ),
      'Laravel\\Telescope\\Watchers\\EventWatcher' => 
      array (
        'enabled' => true,
        'ignore' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\ExceptionWatcher' => true,
      'Laravel\\Telescope\\Watchers\\GateWatcher' => 
      array (
        'enabled' => true,
        'ignore_abilities' => 
        array (
        ),
        'ignore_packages' => true,
        'ignore_paths' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\JobWatcher' => true,
      'Laravel\\Telescope\\Watchers\\LogWatcher' => 
      array (
        'enabled' => true,
        'level' => 'error',
      ),
      'Laravel\\Telescope\\Watchers\\MailWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ModelWatcher' => 
      array (
        'enabled' => true,
        'events' => 
        array (
          0 => 'eloquent.*',
        ),
        'hydrations' => true,
      ),
      'Laravel\\Telescope\\Watchers\\NotificationWatcher' => true,
      'Laravel\\Telescope\\Watchers\\QueryWatcher' => 
      array (
        'enabled' => true,
        'ignore_packages' => true,
        'ignore_paths' => 
        array (
        ),
        'slow' => 100,
      ),
      'Laravel\\Telescope\\Watchers\\RedisWatcher' => true,
      'Laravel\\Telescope\\Watchers\\RequestWatcher' => 
      array (
        'enabled' => true,
        'size_limit' => 64,
        'ignore_http_methods' => 
        array (
        ),
        'ignore_status_codes' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\ScheduleWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ViewWatcher' => true,
    ),
  ),
  'testing' => 
  array (
    'dusk_test_email' => 'test@example.com',
    'dusk_test_password' => 'password',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/html/resources/views',
    ),
    'compiled' => '/var/www/html/storage/framework/views',
  ),
  'resend' => 
  array (
    'api_key' => NULL,
    'domain' => NULL,
    'path' => 'resend',
    'webhook' => 
    array (
      'secret' => NULL,
      'tolerance' => 300,
    ),
  ),
  'activitylog' => 
  array (
    'enabled' => true,
    'delete_records_older_than_days' => 365,
    'default_log_name' => 'default',
    'default_auth_driver' => NULL,
    'subject_returns_soft_deleted_models' => false,
    'activity_model' => 'Spatie\\Activitylog\\Models\\Activity',
    'table_name' => 'activity_log',
    'database_connection' => NULL,
  ),
  'data' => 
  array (
    'date_format' => 'Y-m-d\\TH:i:sP',
    'date_timezone' => NULL,
    'features' => 
    array (
      'cast_and_transform_iterables' => false,
      'ignore_exception_when_trying_to_set_computed_property_value' => false,
    ),
    'transformers' => 
    array (
      'DateTimeInterface' => 'Spatie\\LaravelData\\Transformers\\DateTimeInterfaceTransformer',
      'Illuminate\\Contracts\\Support\\Arrayable' => 'Spatie\\LaravelData\\Transformers\\ArrayableTransformer',
      'BackedEnum' => 'Spatie\\LaravelData\\Transformers\\EnumTransformer',
    ),
    'casts' => 
    array (
      'DateTimeInterface' => 'Spatie\\LaravelData\\Casts\\DateTimeInterfaceCast',
      'BackedEnum' => 'Spatie\\LaravelData\\Casts\\EnumCast',
    ),
    'rule_inferrers' => 
    array (
      0 => 'Spatie\\LaravelData\\RuleInferrers\\SometimesRuleInferrer',
      1 => 'Spatie\\LaravelData\\RuleInferrers\\NullableRuleInferrer',
      2 => 'Spatie\\LaravelData\\RuleInferrers\\RequiredRuleInferrer',
      3 => 'Spatie\\LaravelData\\RuleInferrers\\BuiltInTypesRuleInferrer',
      4 => 'Spatie\\LaravelData\\RuleInferrers\\AttributesRuleInferrer',
    ),
    'normalizers' => 
    array (
      0 => 'Spatie\\LaravelData\\Normalizers\\ModelNormalizer',
      1 => 'Spatie\\LaravelData\\Normalizers\\ArrayableNormalizer',
      2 => 'Spatie\\LaravelData\\Normalizers\\ObjectNormalizer',
      3 => 'Spatie\\LaravelData\\Normalizers\\ArrayNormalizer',
      4 => 'Spatie\\LaravelData\\Normalizers\\JsonNormalizer',
    ),
    'wrap' => NULL,
    'var_dumper_caster_mode' => 'development',
    'structure_caching' => 
    array (
      'enabled' => true,
      'directories' => 
      array (
        0 => '/var/www/html/app/Data',
      ),
      'cache' => 
      array (
        'store' => 'file',
        'prefix' => 'laravel-data',
        'duration' => NULL,
      ),
      'reflection_discovery' => 
      array (
        'enabled' => true,
        'base_path' => '/var/www/html',
        'root_namespace' => NULL,
      ),
    ),
    'validation_strategy' => 'only_requests',
    'name_mapping_strategy' => 
    array (
      'input' => NULL,
      'output' => NULL,
    ),
    'ignore_invalid_partials' => false,
    'max_transformation_depth' => NULL,
    'throw_when_max_transformation_depth_reached' => true,
    'commands' => 
    array (
      'make' => 
      array (
        'namespace' => 'Data',
        'suffix' => 'Data',
      ),
    ),
    'livewire' => 
    array (
      'enable_synths' => false,
    ),
  ),
  'markdown' => 
  array (
    'code_highlighting' => 
    array (
      'enabled' => true,
      'theme' => 'github-light',
    ),
    'add_anchors_to_headings' => true,
    'render_anchors_as_links' => false,
    'commonmark_options' => 
    array (
    ),
    'cache_store' => NULL,
    'cache_duration' => NULL,
    'renderer_class' => 'Spatie\\LaravelMarkdown\\MarkdownRenderer',
    'extensions' => 
    array (
    ),
    'block_renderers' => 
    array (
    ),
    'inline_renderers' => 
    array (
    ),
    'inline_parsers' => 
    array (
    ),
  ),
  'structure-discoverer' => 
  array (
    'ignored_files' => 
    array (
    ),
    'structure_scout_directories' => 
    array (
      0 => '/var/www/html/app',
    ),
    'cache' => 
    array (
      'driver' => 'Spatie\\StructureDiscoverer\\Cache\\LaravelDiscoverCacheDriver',
      'store' => NULL,
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
