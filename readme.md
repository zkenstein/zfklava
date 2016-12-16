## Zfklava - Bootstrapper for Laravel Content Management System.

This is an implementation of Content Management System based on [Laravel 5.2](http://laravel.com/) and [Twitter Bootstrap 3](http://getbootstrap.com/)

## Documentation
Visit [Readme](https://zfklava.readme.io) for documentation

## System Requirements

Zfklava is designed to run on a  machine with PHP 5.5.9 and MySQL 5.5.

* PHP >= 5.5.9 with
    * OpenSSL PHP Extension
    * PDO PHP Extension
    * Mbstring PHP Extension
    * Tokenizer PHP Extension
* [Composer](https://getcomposer.org) installed to load the dependencies of Zfklava.

## Installation

Please check the system requirements before installing Zfklava.

1. You may install by cloning from github, or via composer.
  * Github:
    * `git clone git@github.com:LavaLite/cms.git`
    * From a command line open in the folder, run `composer install`.
  * Composer:
    * `composer create-project LavaLite/cms --prefer-dist website`
2. Enter your database details in `.env` file on root folder.
3. Publish and seed
  * `php artisan vendor:publish`  to publish package files.
  * After publishing run `composer dumpautoload` to update class map.
  * `php artisan migrate --seed` to setup your database.
4. You can contigure mail server details in `config/mail.php`.
5. You can configure the site in the config folder before production.
6. Finally, setup an [Apache VirtualHost](http://httpd.apache.org/docs/current/vhosts/examples.html) to point to the "public" folder.
  * For development, you can simply run `php artisan serve`

####Permissions
Zfklava may require one set of permissions to be configured: folders within `storage` require write access by the web server.
For more detals on installation check laravel installation giude
http://laravel.com/docs/5.1/installation

## Admin login details
- Url: sites-public-url/admin
- Superuser : superuser@superuser.com - superuser@superuser

## Demo
- Public [http://demo.zfklava.org](http://demo.zfklava.org)
- Admin [http://demo.zfklava.org/admin](http://demo.zfklava.org/admin)
- Superuser : superuser@superuser.com - superuser@superuser

##Frameworks/Libraries

### PHP Libraries
* [laravel/laravel](https://github.com/laravel/laravel) - A PHP Framework For Web Artisans

### Javascript Libraries
* Updating

## License

The Zfklava CMS is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
