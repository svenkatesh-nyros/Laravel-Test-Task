

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Backup database using Laravel

This is a sample laravel application which backups multiple databases on single click.

## Getting started Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

## Configure

Go to this file `/app/Http/Controllers/BackupController.php`
This is database names array `$databases=array("users", "students", "books");`.
Modify this array with your database names which you want to take backup.
This is the stored path of backup files `/home/Desktop/bak/`.
Change this to your desired location  

## Install

Install and run using `composer` and using this command `php artisan serve`.
It will run on port `http://127.0.0.1:8000`


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
