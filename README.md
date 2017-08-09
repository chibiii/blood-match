User Authentication
======================

Basic Symfony application with user authentication using FOSUserBundle

## Cloning

    https://github.com/symfonycebu/user-authentication.git

## Requirements

- [Composer](https://getcomposer.org/download/)

- Database (preferrably PostgreSQL)

- PHP 7.0

## Installation

- Install the dependencies

        cd user-authentication
        composer install
        composer require friendsofsymfony/user-bundle "~2.0"

## Configuration

- Create the database

        php bin/console doctrine:database:create


- Create the schema

        php bin/console doctrine:schema:create

- Create the database tables

        php bin/console doctrine:schema:create

- When updating the tables, use the following command:

        php bin/console doctrine:schema:update --force

- Create parameters.yml

        cd app/config
        cp parameters.yml.dist parameters.yml

- Change the following fields in parameters.yml:

        database_driver: #database driver, ex. pdo_pgsql
        database_host: #database host, ex. localhost, 127.0.0.1
        database_port: #database port, ex. 5432
        database_name: #database name, ex. rockthatsymfony
        database_user: #database user that has access rights to the database
        database_password: #database user password
        mailer_transport: gmail
        mailer_host: smtp.gmail.com
        mailer_user: email@gmail.com
        mailer_password:
        secret: #secretkey

## Run

`php bin/console server:run`

## Testing

[http://localhost:8000](http://localhost:8000)

### Other Resources

- [Symfony Bundles](http://symfony.com/doc/current/bundles.html)
- [Getting Started with FOSUserBundle](http://symfony.com/doc/master/bundles/FOSUserBundle/index.html)