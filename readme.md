<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Tasks

-   [x] 1 Auth Scaffolding
-   [x] 2 Create Product Model and populate fillable property
-   [x] 3 Make Migration for products
-   [x] 3 Create Product Controller (resourceful)
-   [x] 4 List Products
-   [x] 4 Edit product
-   [x] 5 Delete Product
-   [x] form validation
-   [x] 7 Separate error message and success flash message
-   [x] 8 Simple refactoring in controller [validated inputs]
-   [x] 9 Route model binding
-   [x] 10 validation via requests
-   [x] 11 Model Factory, Faker, Seeder
-   [x] 12 Pagination
-   [x] 13 N+1 Problem
-   [x] 14 query caching

# Setting up a Local Development environment for laravel on Windows Machine

Steps:

1. [Install XAMPP](#installing-xampp)
2. [Install composer](#settingup-composer)
3. [Install Git-bash](#install-git-ash)
4. [Install Editor](#setup-editor)

## Installing XAMPP

1. Download XAMPP for Windows from their [official site](https://www.apachefriends.org/download.html)
2. As of Laravel 5.8, the minimum requirement of php version if 7.1.3
   (Download latest xampp - for future proof)
3. Run the XAMPP installer and select Apache, MySQL and phpMyAdmin
4. It’s recommended to make the installation in C:\ to avoid issues with Windows User permissions (or the drive where your Windows is installed)

## settingup php to run from commandline

1. Right click on My Open Advanced System Settings (System Properties -> Advanced). [click here](#advanced-System-settings) if you have trouble finding it.
1. Open Environment Variables
1. On the top window select Path and click on Edit
1. In the new window click on New
1. We need to enter the path to XAMPP’s PHP
   `C:\xampp\php`
1. We will also add MySQL’s Path, click on New again and enter
   `C:\xampp\mysql\bin`

## Settingup Composer

1. [Download Composer’s Windows .exe installer](https://getcomposer.org/download/)
1. Install the composer.exe program. Note: Make sure the php's path is set to c:\xampp\php

### Install GIT Bash

1. Download gitbash from [git-scm.com](https://git-scm.com/downloads)
2. choose your OS
3. Install the git program

### Setup Editor

1. I prefer VS code. You can download it from [here](https://code.visualstudio.com/). Or you can choose other editor like sublime Text, Atom

### SETTING ENVIRONMENT VARIABLES

-   Once logged in to Windows, you need to right-click the corner button (the little Windows icon) in the lower left corner of the screen.

-   This should open the Power User Task Menu. Depending on your settings, it may open the Start menu instead. If it opens the Start menu, then type Windows-x on your keyboard instead to open the Power User Task Menu.

![set-environment-variables-in-windows10](https://i2.wp.com/www.techjunkie.com/wp-content/uploads/2016/02/set-environment-variables-in-windows10.jpg?w=690)

-   Click _“System”_ from the Power User Task Menu displaying on screen.

![set-environment-variables-in-windows10](https://i2.wp.com/www.techjunkie.com/wp-content/uploads/2016/02/set-environment-variables-in-windows10-1.jpg?w=690)

-   Under the _“System”_ menu, you need to find _“Advanced System Settings”_.

-   Click on the _“Advanced System Settings”_ link in the left column under “System”. If it does not appear there, then type “advanced system settings” into the search box and hit return and it will come up.

![set-environment-variables-in-windows10](https://i1.wp.com/www.techjunkie.com/wp-content/uploads/2016/02/set-environment-variables-in-windows10.png?w=690)

-   Once the Advanced System Settings are open, click on the _“Advanced Tab”\_followed by the _“Environment Variables”\_ option you will find on the bottom right side.

![set-environment-variables-in-windows10](https://i1.wp.com/www.techjunkie.com/wp-content/uploads/2016/02/set-environment-variables-in-windows10-1.png?w=690)

-   Under the environment variables window, choose or highlight the “_PATH”_ variable in the _“System Variables”_ section shown on window.

![set-environment-variables-in-windows10](https://i1.wp.com/www.techjunkie.com/wp-content/uploads/2016/02/set-environment-variables-in-windows10-2.jpg?w=690)

-   After highlighting PATH variable from _“System Variables”_ click the Edit button.

-   You can add or modify the path lines with the directories you want your computer to look in for executable files.

-   You will find that each different directory is separated with a semicolon, for example:-

_C:\Program Files;C:\Winnt;C:\Winnt\System32_

-   There are other environment variables “System Variables” section which you can examine by clicking Edit.

There are different environment variables, such as PATH, HOME and USER PROFILE, HOME and APP DATA, TERM, PS1, MAIL and TEMP etc. These variables are very useful and can be used in scripts as well as on the command line.
