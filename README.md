# Laravel Filament Blog

----

#### Quick Overview:



 
In this repo, FilamentPHP is introduced with Laravel for creating a simple Blog system. 

There are multiple relationships between categories, posts and tags. Also, there is a login system for default admin user

Furthermore, Spatie Media Library is used for media files for post resource.

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.x/installation)

Clone the repository

    git clone https://github.com/fahadchy24/laravel-filament-blog.git

Switch to the repo folder

    cd laravel-filament-blog

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

For accessing Admin Panel

    site_url/admin/login

Register with credentials for entering admin panel from next login

**TL;DR command list**

    git clone git@github.com:fahadchy24/laravel-filament-blog.git
    cd laravel-filament-blog
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Storage link


Run the storage link for media files

    php artisan storage:link

***Note*** : It is recommended to set APP_URL acording to your project url for displaying media files.

    
----------


## Environment variables

- `.env` - Environment variables can be set in this file

- `APP_URL` - Make sure to set &nbsp;<b>APP_URL</b> according to site url path.

<br>

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------