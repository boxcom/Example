# Запустить сборку контейнеров

`docker-compose up -d --build site`

- **nginx** - `:8080`
- **mysql** - `:3306`
- **php** - `:9000`

Переименовать файл .env.example в .env

- `docker-compose run --rm composer update`
- `docker-compose run --rm npm run dev`
- `docker-compose run --rm artisan migrate` 
- `docker-compose run --rm artisan db:seed` 

