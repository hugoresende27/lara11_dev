### [laracasts tutorial](https://laracasts.com/series/whats-new-in-laravel-11/)

1. publish config files
 - `php artisan config:publish` 
2. create a provider 
 - `php artisan make:provider TestingServiceProvider`
 - laravel auto add's provider to bootstrap/providers.php and app/Providers
3. create a middleware
 - `php artisan make:middleware LogRequestEndpoint`
 - middleware configs come in bootstrap/app.php

4. Define commands
 - this is done in routes/console.php now
 - you can schedule a command directly by using for example `->hourly();` in the end 

5. API
 - php artisan install:api

6. Open AI
- [open AI github] (https://github.com/openai-php/laravel)
 - composer require openai-php/laravel

# Side Notes
 - check schedule list with `php artisan schedule:list`
