# XAMPP, Composer, and Laravel Installation Guide

## XAMPP Installation:

1. Download XAMPP for OS X from the [Apache Friends website](https://www.apachefriends.org/index.html).
2. Open the downloaded `.dmg` file and follow the installation instructions.
3. Start the XAMPP Control Panel and ensure that Apache and MySQL are running.

## Composer Installation:

Install Composer by following the [installation guide](https://getcomposer.org/doc/00-intro.md) on the Composer website.

## Laravel Installation:

1. Open a terminal and run the following command to install Laravel: `composer global require laravel/installer`.
2. Make sure to add Composer's global bin directory to your `$PATH` to access the Laravel executable.

## Create a Laravel Project:

1. Navigate to the XAMPP `htdocs` directory in the terminal.
2. Run `laravel new backend_challenge` to create a new Laravel project.

## Configure the XAMPP Server:

1. Open the XAMPP Control Panel and start the Apache and MySQL services.
2. Navigate to http://localhost/phpmyadmin in your browser to access the PHPMyAdmin dashboard.

## Run the Laravel Development Server:

1. Navigate to your Laravel project directory in the terminal.
2. Run `php artisan serve` to start the Laravel development server.

## Access the Laravel Application:

1. Open your web browser and navigate to http://localhost:8000 to access the Laravel application.

## Viewing Combined Data, GitHub Data, and Recent Commits:

- To view the data, visit: [http://localhost/backend_challenge/public/api/progress/history](http://localhost/backend_challenge/public/api/progress/history).

