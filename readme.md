## Запуск проекта

1) composer install
2) Переименовать .env.example в .env
3) В этом файле заменить DB_DATABASE, DB_USERNAME, DB_PASSWORD на данные от вашего MySQL-сервера
4) php artisan key:generate
5) php artisan migrate
6) php artisan db:seed
7) php artisan serve
8) Проект запущен на localhost:8000

# Данные от админ-панели 
Адрес для входа: localhost:8000/login
Адрес панели: localhost:8000/manager
E-mail: admin@news.local
Password: password
