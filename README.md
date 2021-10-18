run docker-compose up -d --build
run composer install
run php artisan key:generate
run php artisan config:cache
run php artisan migrate
run php artisan db:seed
go to 127.0.0.1:80