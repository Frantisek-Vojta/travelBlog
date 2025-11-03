installation:


` git clone https://github.com/Frantisek-Vojta/travelBlog `

`cd /travelBlog`

`composer install`

`cp .env.example .env`

`php artisan key:generate`

`touch database/database.sqlite`

`php artisan migrate:fresh --seed`

`php artisan serve`
