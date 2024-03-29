build:
	cp .env.example .env
	docker-compose build
	docker-compose up -d --remove-orphans
	docker exec cfm_php composer install
	docker exec cfm_php php artisan key:generate
	docker exec cfm_php php artisan db:drop
	docker exec cfm_php php artisan db:create
	docker exec cfm_php php artisan migrate
	docker exec cfm_php php artisan db:seed
	docker exec cfm_php php artisan optimize:clear
start:
	docker-compose up -d --remove-orphans
laravel:
	docker exec cfm_php php artisan $(cmd)
static-analysis:
	docker exec cfm_php vendor/bin/phpinsights analyse
clear-cache:
	docker exec cfm_php php artisan optimize:clear
composer:
	docker exec cfm_php composer install
migrate:
	docker exec cfm_php php artisan migrate
seed:
	docker exec cfm_php php artisan db:seed
