# Test Project
## 




This Symfony project is designed to save data into database given a file in arguments.

## Features

- Import a XML/JSON file and watch it magically saved into database



## Tech

This project uses symfony to achieve its goal.

## Installation

This project requires [PHP](https://www.php.net//) v7.4.3 to run. Please make sure to clone the project before starting the installation and also
Please make sure to add .env file and add this line
```sh
DATABASE_URL="mysql://username:passwod@127.0.0.1:3306/kaufland?serverVersion=8.2.0"
APP_ENV=dev
```
```sh
cd kaufland
composer install
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
php bin/console product:save /path/to/file
```

## Project Structure

The project follows the structure below:

 - src/Entity: Contains the ProductEntity.php file representing the Product entity.

 - src/Product: Contains the following files:
     FileReader.php
     FileReaderJson.php
     FileReaderXml.php
     ProductManager.php

  which allow us to save our file content inside our database

 - src/Repository: Contains the ProductRepository.php file.

- Please find all the logs inside /var/logs


Feel free to explore these folders for more details on the project structure.
