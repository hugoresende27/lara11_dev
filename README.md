1. publish config files
 - php artisan config:publish 
2. create a provider 
 - php artisan make:provider TestingServiceProvider
 - laravel auto add's provider to bootstrap/providers.php and app/Providers
3. create a middleware
 - php artisan make:middleware LogRequestEndpoint