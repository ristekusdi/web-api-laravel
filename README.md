# Web API Laravel
Laravel package untuk mempermudah membuat API yang dibangun menggunakan Laravel di lingkungan Universitas Udayana.

## Persyaratan

- PHP versi >= 7.2
- Laravel versi 5.4 ke atas

## Instalasi

Via Composer

```bash
composer require ristekusdi/web-api-laravel
```

## Tested
Package ``` ristekusdi/web-api-laravel ``` sudah ditest pada laravel versi 5.5, 5.8, dan 8.0.

## Setup Laravel versi 5.4 ke bawah
Untuk penggunaan di Laravel versi 5.4 ke bawah, perlu di lakukan secara manual
- Jalankan perintah di bawah ini:
```
composer require ristekusdi/web-api-laravel
```
- Tambahkan WebApiLaravelServiceProvider di bagian providers
```php
    /*
    * Package Service Providers...
    */
    Ristekusdi\WebApiLaravel\WebApiLaravelServiceProvider::class,
    /*
```

- Jalankan perintah di terminal
```
php artisan cache:clear
php artisan config:clear
composer dump-autoload
```

- Selesai

## Penggunaan Dasar

Jalankan php artisan serve dan masukkan URL http://localhost:8000/web-api-laravel untuk diarahkan ke halaman response API.

    /web-api-laravel untuk menampilkan respon api.