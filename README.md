## Laravel Book

Project laravel ini merupakan project saya untuk belajar membuat API menggunakan Laravel.

### Cara Menggunakan Project Ini

- Clone project ini https://github.com/rafialfatih/laravel-books pada folder tujuan
- Masuk ke folder clone dengan cara `cd laravel-books`
- Copy file `.env.example` menjadi `.env` dengan cara mengetikkan ```cp .env.example .env``` pada terminal
- Jalankan `composer update`
- Setelah melakukan `composer update`, jalankan `php artisan key:generate` untuk meng-*generate* application key.
- Lalu jalankan `php artisan migrate --seed` untuk mengisi data untuk aplikasi tersebut.
