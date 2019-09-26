### install


- git clone xx
- composer update
- error
	- 500 | server error production.ERROR: No application encryption key has been specified
	- "Before using Laravel's encrypter, you must set a key option in your config/app.php configuration file. You should use the php artisan key:generate command to generate this key"
    - .env.example => .env  
    - php artisan key:generate
    - https://stackoverflow.com/questions/44839648/no-application-encryption-key-has-been-specified
    - php artisan config:clear
    - php artisan confg:cache
- ok


create database laravel default character set utf8mb4 default collate utf8mb4_unicode_ci;

//create table 
php artisan make:migration create_opration_log_table
  
php artisan migrate


//create model
php artisan make:model OperationLog


//create middleware
php artisan make:middleware OperationLog

-- kenel 里加上  \App\Http\Middleware\OperationLog::class,


