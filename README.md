# Simple Task App using Laravel 5.3 and Vuejs 2


## Installation

Configure you db in .env file.

```
git clone https://github.com/rogerfernandezv/laravel-vuejs-simpletaskapp
npm install
composer install
php artisan key:generate
php artisan migrate 
```

If you have problems with composer that no generates the "vendor" folder try to install php-mbstring.
On ubuntu:
sudo apt-get install php-mbstring