<p align="center"><a href="https://speitssc.org/" target="_blank"><img src="./public/img/logo.png" width="300"></a></p>
<p align="center">
<strong>Last Update</strong> : 04-09-2021 ||
<strong>Last Deploy</strong> : 04-08-2021
</p>

## Technologies

<a href="https://speitssc.org/" target="_blank">SPE ITS Student Chapter</a> Website is built with several technologies, languages, frameworks, and templates. These technologies are as follows.

-   <a href="https://www.w3schools.com/html/default.asp">HTML</a>
-   <a href="https://www.w3schools.com/css/default.asp">CSS</a>
-   <a href="https://sass-lang.com/">SASS</a>
-   <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap v5</a>
-   <a href="https://fontawesome.com/">Fontawesome</a>
-   <a href="https://laravel.com/docs/8.x">Laravel 8</a>
-   <a href="https://adminlte.io/">AdminLTE Bootstrap v4 v3.1.0 Templates</a>

## Repository Requirement

Before cloning this repository, make sure you have these following requirements :

-   PHP 7.4 or higher
-   MySQL
-   Composer 2
-   Gitbash

<strong>RECOMMENDED!</strong> Please use <em>Visual Studio Code</em> for better performence.
Use these extensions in <em>Visual Studio Code</em> to work easier and tidy up lines of code.

-   PHP Intelephense,
-   Laravel Artisan,
-   Laravel Snippets,
-   Laravel Blade Snippets,
-   Laravel Blade Spacer,
-   Laravel Go To View

## Usage

After completely cloning this repository, please do some configuration as below :

-   Setup your database credentials in the .env file

```
APP_ENV=local
APP_DEBUG=true
APP_URL=https://speitssc.org
APP_TIMEZONE=Asia/Jakarta

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=speitssc_2021
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

-   Start Laravel Server
-   Migrate Database and Seeder for Dummy Data

```
php artisan serve
php artisan migrate --seed
```

## SASS Configuration

Before creating your SCSS files, please make sure that you have installed <strong>Live Sass Compiler v3.0.0</strong> extension on Visual Studio Code. Then run the compiler by clicking <strong>Watch SASS</strong> on Visual Studio Code Status Bar.

Please do some configurations in `settings.json` of Live Sass Compiler extension as below :

-   Open Visual Studio Code Settings
-   Type <em>Live Sass compile</em> and click `Edit in settings.json`
-   Change the settings into the following.

```
{
  "liveSassCompile.settings.formats": [
        {
            "format": "expanded",
            "extensionName": ".css",
            "savePath": "public/css"  // Edit this line
        }
    ],
  "liveSassCompile.settings.excludeList": [
        "public/vendor/**",           // Add this line
        "vendor/**",                  // Add this line
        "dist/**",
        ".vscode/**"
    ],
}
```

## Features and Updates

This repository was created for <a href="https://speitssc.org/" target="_blank">SPE ITS Student Chapter 2020/2021</a> that consists of these following features :

##### On Going

-   [ ] Article Management

##### 3 September 2021

-   [x] Main Page
-   [x] Member Points System

##### 30 August 2021

-   [x] Admin Authentication
-   [x] Member Management

##### 28 August 2021

-   [x] SPE ITS SC Short Links

##### 26 August 2021

-   [x] Email Notification for Registration
-   [x] Error State View (404 and Maintenance)

##### 22 August 2021

-   [x] New Member Login and Registration
-   [x] Renewal Member Login and Registration

## Contact Support

If you have problems or need help, and also want to give suggestions and criticisms, you are welcome to contact me by :

-   Line : <a href="http://line.me/ti/p/~daffakurnia11">daffakurnia11</a>
-   Whatsapp : <a href="https://wa.me/6285156317473">0851 5631 7473</a>
-   Instagram : <a href="https://www.instagram.com/daffakurniaf11/">daffakurniaf11</a>
-   Email : <a href="mailto:daffakurniaf11@gmail.com">daffakurniaf11@gmail.com</a>

```

```
