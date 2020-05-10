<h2>Установка на Linux Ubuntu</h2>

#клонируем исходный код проекта

git clone https://github.com/V-43/it-univer-pm.git
cd it-univer-pm/

# устанавливаем зависимости 
composer install
npm install

#создаем базу и копируем настройки
php -r "touch('database/db.sqlite');"
cp .env.example .env

#в настройках нужно указать полный путь до базы, иначе почему-то не находит
vim .env /.../database/db.sqlite

#генерим ключ и наполняем базу данными
php artisan key:generate
php artisan migrate --seed

#слушаем localhost:8000
php artisan serve
