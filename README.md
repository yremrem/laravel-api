## Versions
PHP Version 8.2.1
Composer Version 2.6.2
Laravel Framework Version 10.23.1

## Reference
https://laravel.com/docs/10.x/passport#passport-or-sanctum

## ENV file
Create .env file
Copy and paste info from .env.example to .env

## Run
php artisan passport:install
php artisan passport:keys
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan serve --port=8080

## Postman CURL this code
curl --location 'http://127.0.0.1:8080/test' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--data '{
    "numbers": [1,2]
}'
