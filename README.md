Install:

First build will be finished with errors,
  1. You should enter to running container
  2. make composer install:
        docker exec -it laravel_app bash
        composer install
  3. generate key:
        docker exec -it laravel_app php artisan key:generate
