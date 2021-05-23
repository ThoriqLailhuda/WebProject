# Klinik Project

_Projek aplikasi web manajemen klinik kesehatan_

### Anggota kelompok
* Nur Salma Kholidawafi (M0519071)
* Sahdewi Bunga Safira (M0519074)
* Thoriq Lailhuda (M0519079)
* Vania Diandra Pevantia (M0519080)
* Fathoni Satrio Utomo (M0519088)

## Contributing
Cara berkontribusi:

### Requirement configuration

1. Clone proyek ini ke dalam direktori (C:\xampp\htdocs\nama-direktori). 
__!Kalau dulu sudah clone, tinggal jalankan git pull.!__

1. Download dan Install __Composer__ [disini](https://getcomposer.org/Composer-Setup.exe),

1. Buka __cmd__, lalu masukan `composer global require "laravel/installer=~1.1"`, lalu tekan _enter_,

1. Buka projek dalam Visual Studio, 

1. Buka terminal (_Menu Terminal -> New Terminal_), 

1. Masukan `composer install`, tekan _enter_, lalu tunggu hingga selesai.


### Setting environment

1. Masukan `php artisan migrate` dalam terminal di VSCode.

1. Masukan `copy .env.example .env`,

1. Menghubungkan env ke database, buka file `.env`, ubah nama database.

1. Masukan `php artisan key:generate` dalam terminal di VSCode.

1. Masukan `php artisan serve` untuk mengcompile dan mengeksekusi.

1. Buka browser, lalu buka `localhost:8000` untuk melihat hasilnya.


## Source
* Install composer and laravel guide [here](https://laravel.com/docs/4.2).
* Setting after clone guide [here](https://stackoverflow.com/questions/38602321/cloning-laravel-project-from-github).