# Company financial management

Simple app for track company incomes and expenses

![license](https://img.shields.io/github/license/pawelpoloczek/company-financial-management)
![static analysis](https://github.com/pawelpoloczek/company-financial-management/actions/workflows/static_analysis.yml/badge.svg)
![size](https://img.shields.io/github/repo-size/pawelpoloczek/company-financial-management)
![release](https://img.shields.io/github/v/release/pawelpoloczek/company-financial-management)

## Setup

You can setup this app with docker by below comand:
```shell
docker-compose build
docker-compose up -d
```

Or in linux OS by make:
```shell
make build
make start
```

## Working with docker

When using docker, you should execute artisan commands from inside the container.

For example, to create a migration, run the command below:
```shell
docker exec cfm_php php artisan make:migration some_migration_name
```

In linux environments you can use make instead:
```shell
make laravel cmd='make:migration some_migration_name'
```