# Requirement

-   PHP 8.1
-   Composer

# Instalation

-   Open Git Bash
    `git clone https://github.com/ikhbaaalll/PatriotKopi.git`
-   Open Directory and git bash
    `composer install`

`php artisan key:generate`

-   Create database 'patriot_kopi'
-   Duplicate file .env.example and rename to .env
-   Change DB_DATABASE to patriot_kopi
    `php artisan migrate --seed`

`php artisan serve`

-   Open [127.0.0.1:8000/](127.0.0.1:8000/) in your browser

## Admin Access

-   Open [127.0.0.1:8000/login](127.0.0.1:8000/login) in your browser
-   email = admin@admin.com, password = password
