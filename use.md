### install

version: 
"laravel/framework": "^6.0",
"php": "^7.2",


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

- ？？某个表只添加了一个字段，不要删除原来的记录，怎么通过命令更新？？


//create model
php artisan make:model OperationLog


//create middleware
php artisan make:middleware OperationLog

-- kenel 里加上  \App\Http\Middleware\OperationLog::class,


//route ??

//controller ??


//model 


//request response ??


//auth

//middleware


// rest api
- https://www.toptal.com/laravel/restful-laravel-api-tutorial
- https://cloud.tencent.com/developer/article/1344312
- https://www.toptal.com/laravel/restful-laravel-api-tutorial
