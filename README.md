## Laravel Book

Project laravel ini merupakan project saya untuk belajar membuat API menggunakan Laravel.

## Cara Menggunakan Project Ini

1. Clone project ini https://github.com/rafialfatih/laravel-books pada folder tujuan
2. Masuk ke folder clone dengan cara `cd laravel-books`
3. Copy file `.env.example` menjadi `.env` dengan cara mengetikkan ```cp .env.example .env``` pada terminal
4. Jalankan `composer update`
5. Setelah melakukan `composer update`, jalankan `php artisan key:generate` untuk meng-*generate* application key.
6. Lalu jalankan `php artisan migrate --seed` untuk mengisi data untuk aplikasi tersebut.
