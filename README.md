# Installation

## Install the package

```bash
composer install
```

## Configure the database connection in the .env file and edit APP_URL according to your needs

```bash
cp .env.example .env
```

## Run configuration commands

```bash
php artisan key:generate
php artisan storage:link
```

## Run the migrations

```bash
php artisan migrate
```

## Run the seeders

```bash
php artisan db:seed
```

## Run the server

```bash
php artisan serve
```
