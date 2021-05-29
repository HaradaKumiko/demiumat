<h1 align="center">Welcome To DemiUmat! </h1>

------------
## Apa Itu DemiUmat ? 
<p> DemiUmat Adalah Aplikasi Management Masjid Berbasis Website Yang Bertujuan Untuk Memudahkan Tugas Para Takmir Masjid. </p>

------------
## DemiUmat Dibangun Oleh
<p> Build With Laravel, Bootstrap, & Stisla </p>

------------
## Fitur Apa Saja Yang Tersedia? 
Untuk versi saat ini Fitur yang tersedia adalah : 
 - Sistem Login yang dibuat dengan Middleware yang bisa mengecek hak akses user, apakah user tersebut memiliki akses tersebut atau tidak 
 - CRUD Blog
 - CRUD Forum
 - CRUD User
 - CRUD Inventaris
 - List User & CRUD
 - Rekapitulasi kas & CRUD kas masuk & keluar
 - Setting Website (mengubah nama & alamat masjid/musholla, logo, favicon, serta gambar tampilan depan website)

------------
![1](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/1.png?raw=true)
![2](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/2.png?raw=true)
![3](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/3.png?raw=true)
![4](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/4.png?raw=true)
![5](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/5.png?raw=true)
![6](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/6.png?raw=true)
![7](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/7.png?raw=true)
![8](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/8.png?raw=true)
![9](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/9.png?raw=true)
![10](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/10.png?raw=true)
![11](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/11.png?raw=true)
![12](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/12.png?raw=true)
![13](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/13.png?raw=true)
![14](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/14.png?raw=true)
![15](https://github.com/HaradaKumiko/demiumat/blob/master/public/assets/img/15.png?raw=true)

------------
## How To Run 

1. **Clone Repository**
```bash
git clone https://github.com/HaradaKumiko/demiumat.git
cd demiumat
composer install
npm install
cp .env.example .env 
php artisan key:generate
```

2. **Buat Database 'demiumat' Terlebih Dahulu Kemudian Edit File .env**
```bash
DB_PORT=3306
DB_DATABASE=demiumat
DB_USERNAME=**username_server**
DB_PASSWORD=**password_server**
```

3. **Install**
```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
```

4. **Enjoy**
```bash
php artisan serve
```

**User Default**
```bash
      Email                Password       Role
--------------------------------------------------------
farhan@farhan.net       | admin123    | Administrator
budihidayat@gmail.com   | password123 | Pengurus Takmir
yonosaefullah@gmail.com | password123 | Warga
--------------------------------------------------------
```

------------
## 🧑 Find Me 
<p>If you need something from me, feel free to contact me at : <p>
Facebook : <a href="https://www.facebook.com/han.rivaldy.5">Farhan Rivaldy</a><br>
LinkedIn : <a href="https://www.linkedin.com/in/farhanrivaldy">Farhan Rivaldy</a><br>
Email    : <a href="mailto:fariv.fariv12@gmail.com">Farhan Rivaldy</a>

------------
**Made with ❤️ by HaradaKumiko - FarhanRivaldy**
