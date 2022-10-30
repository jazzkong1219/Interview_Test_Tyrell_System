<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

Clone the repository
```
git clone https://github.com/jazzkong1219/Interview_Test_Tyrell_System.git
```
Switch to the repo folder
```
cd interview_test
```
Install all the dependencies using composer
```
composer install
```
Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```
Generate a new application key
```
php artisan key:generate
```
Start the local development server
```
php artisan serve
```
You can now access the server at [http://localhost:8000](http://localhost:8000)

## Database

Import the database with local_laravel.sql file provided. This can help you to quickly start testing the sql query improvement logic test and start using it with ready content.

The sql file locate under the database folder:
```
database/local_laravel.sql
```

## Total Time Spent

A) Programming Test - 2 Hours

B) SQL Improvement Logic Test - 4 Hours
