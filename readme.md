# Mimi Admin

Description of the project


## Install

### Production Requirements

- PHP >= 5.5.9
- MySQL >= 5.5
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- Apache or Nginx
- GD


### Development Requirements

- PHPUnit >= 4
- npm >= 2.14
- gulp
- bower

### Installation

```bash
xu@calypso:~$ git clone git@bitbucket.org:rutorika/beton-brut.git
xu@calypso:~$ cd beton-brut/
xu@calypso:~$ composer install                       # install project dependencies
xu@calypso:~$ chmod a+rw storage -R                  # folder for logs, cache, etc
xu@calypso:~$ chmod a+rw bootstrap/cache -R          # folder for laravel internal cache
xu@calypso:~$ ln -sr storage/public public/storage   # link storage for uploaded files to public directory 

# create database (you should change credentials)
mysql> CREATE USER 'brut'@'localhost' IDENTIFIED BY 'brut';
mysql> CREATE DATABASE brut;
mysql> GRANT ALL PRIVILEGES ON brut . * TO 'brut'@'localhost';
mysql> FLUSH PRIVILEGES;

xu@calypso:~$ cp .env.example .env          # create enviroment config file
xu@calypso:~$ vim .env                      # edit configuration (mail smtp options, db credentials you choose on db creation, debug mode=true/false, APP_ENV=local/production).
xu@calypso:~$ php artisan key:generate      # generate unique application key
xu@calypso:~$ php artisan migrate           # run database migrations

# configure and point your web server to /public folder
```

**then create Manager user**

open tinker repl (to quit type `\q`)
```bash
xu@calypso:~$ php artisan tinker
```

```php
<?php
$user = new \App\User;
$user->email = 'admin@example.ru';
$user->password = Hash::make('somePassword'); // replace somePassword with strong manager password
$user->name = 'Administrator Name';
$user->save();
\q // quit tinker
```

### Updating (both production and development)
```bash
xu@calypso:~$ cd beton-brut/
xu@calypso:~$ git pull
xu@calypso:~$ composer install              # install new project dependencies
xu@calypso:~$ php artisan migrate           # run database migrations
```

## Usage

dashboard at `/dashboard`

## Development

### Files

- controllers: `app/Http/Controllers/`
- routes: `app/Http/routes.php` (To see all defined routes and corresponding controller methods use `php artisan route:list` console command)
- main config `config/app.php`,
- logs `storage/logs/`
- docs in the `docs` folder
  - database description: `db.dia` or `db.png` [Link](/docs/db.png)


### Seed development data

```bash
xu@calypso:~$ php artisan db:seed # run database seeders
```

### Development server

```bash
xu@calypso:~$ php artisan serve --port 8444
```