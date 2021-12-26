## About this project

This project is a simple book store api with laravel and passport

# Install and using

1. for this step clone the project
2. run composer install to root directory
3. make bookstore database
4. run php artisan migrate to create tables
5. run the project with php artisan serve
6. open postman and use routes in api.php
7. change http methods for using every actions

### Notice

For Unauthenticated error you need send this url with Get http method (http://127.0.0.1:8000/oauth/token) and copy access_token value
and paste it in Authorization Headers value in needed url after Bearer keyword
and resend your request
