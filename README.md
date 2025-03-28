# laravel-web-app

Some experimental Laravel web application

## Repository

https://github.com/schafeld/laravel-web-app

## Starter

https://www.coursera.org/learn/laravel-framework-and-php/

## Installation

```bash
composer install
```

## Usage

```bash
php artisan serve
```

## Start simple PHP server

```bash
php -S localhost:8000

open http://localhost:8000/php-info.php

open http://localhost:8000/?name=Olli
```

## Laravel

### Create new Laravel project

```bash
# composer create-project --prefer-dist laravel/laravel laravel-web-app
# or
laravel new laravel-web-app

```

### Start Laravel server

```bash
# php artisan serve
# or
# php -S localhost:8000 -t public
# or
npm run dev
```

### Create new controller

```bash
php artisan make:controller UserController
```

### Create new model

```bash
php artisan make:model User
```

or with migration

```bash
# php artisan make:model User -m
# or
php artisan migrate
```

### Fill database with data

```bash
# php artisan tinker
# or
php artisan db:seed
```
