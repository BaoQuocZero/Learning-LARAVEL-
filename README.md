# Learning-LARAVEL

- composer create-project --prefer-dist laravel/laravel a Tạo dự án
- php artisan serve Chạy dự án
- php artisan make:model Post -m
- php artisan migrate Chạy migration tạo CSDL
- php artisan make:seeder PostTableSeeder tạo seeder
- php artisan db:seed --class PostTableSeeder chạy seeder
- php artisan make:controller PostController --resource Tạo controller