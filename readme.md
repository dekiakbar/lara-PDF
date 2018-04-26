# Multi Role Laravel
Multi Role User, dengan hak akses Super Admin,Admin dan User.
## Penunjang
- [MySql-Server](https://dev.mysql.com/downloads/mysql/)
- [Composer](https://getcomposer.org/)
- [PHP >= 7.0](www.php.net/)
- [Git-CLI](https://git-scm.com/downloads)
- [NIAT](https://id.wikipedia.org/wiki/Niat)

## Instalasi
1. Download repositori ini menggunakan git-CLI : `git clone https://github.com/dekiakbar/MultiRole.git`
2. Navigasi ke direktori tersebut, gunakan terminal dan ketik : `cd MultiRole`
3. Kemudian ketikan perintah ini untuk menginstal depedency laravel : `composer install`
4. Lewati langkah ini kalo kamu menggunakan window, ketikan perintah : `cp .env.example .env` 
5. Lalu buka file .env dan ubah Database,password dan usernamenya sesuai dengan server localhost kamu.
6. Jalankan perintah ini untuk menggenerate KEY : `php artisan key:generate`
7. Untuk menghasilkan sampel data, ketikan perintah berikut : `php artisan migrate --seed`
8. Enjoy :D

## User dan Password
1. Superadmin 
	- email : superadmin@superadmin.com 
	- pass : superadmin123
2. Superadmin 
	- email : admin@admin.com 
	- pass : admin123
1. User 
	- email : user@user.com 
	- pass : user123
## Warning
1. Projek ini dibuat dan tersedia secara gratis tanpa dipungut biaya apapun. 
2. **Gunakan Sebaik mungkin dan saya tidak BERTANGGUNG JAWAB atas PENYALAHGUNAAN dari aplikasi ini**
3. **Always Use With Your Own Risk**