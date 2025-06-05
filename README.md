# Getting Started with Sample API

### Prerequisites
- Git ^2.34.1
- Docker ^28.1.1

### Clone the project
#### `git clone git@github.com:bryandidur/sample-api.git`
#### `(or with HTTP: git clone https://github.com/bryandidur/sample-api.git)`

### Enter the project folder
#### `cd sample-api`

### Copy .env.example file to .env
#### `cp .env.example .env`

### Install Composer dependencies
#### `docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php81-composer:latest composer install --ignore-platform-reqs`

### Setup Docker containers (Wait some minutes for the containers to be ready and log stops)
#### `./vendor/bin/sail up`

#### (GO TO ANOTHER TERMINAL TAB)

#### Migrate database tables
#### `./vendor/bin/sail artisan migrate`

### Seed database tables
#### `./vendor/bin/sail artisan db:seed`
