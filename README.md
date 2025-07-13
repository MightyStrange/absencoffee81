Aplikasi Absensi Online dibangun menggunakan framework PHP Laravel, memberikan solusi modern untuk manajemen absensi karyawan atau siswa secara efisien. Aplikasi ini dirancang dengan antarmuka pengguna yang bersih dan responsif untuk memastikan pengalaman pengguna yang optimal.

### Apa yang update?
    1. Penambahan webcam
    2. Tutup atau buka otomatis
    3. Penguatan security(captcha, csrf, dsb)
    4. Website yang responsive
    5. Dsb

### Apa yang dibutuhkan?
    1. PHP Server
    2. MYSql database
    3. Koneksi internet
    4. Dsb

### Cara penggunaan
    1. Unduh repository ini
    2. Jalankan "composer install"
    3. Jalankan "cp .env.example .env"
    4. Jalankan "php artisan key:generate"
    5. Jalankan "php artisan migrate:fresh"
    6. Jalankan "php artisan db:seed --class=CreateUserAdmin"
    7. Jalankan "php artisan db:seed --class=SettingAbsensi"
    8. Setting .env file (Sub judul selanjutnya)
    9. Selanjutnya file setting file .env di bawah ini

### Cara setting file .env
    1. APP_DEBUG=false
    2. APP_URL=https://sesuaikan_url_anda.com *disarankan / http://sesuaikan_url_anda.com
    3. Tambahkan FORCE_HTTPS=true(jika menggunakan protokol https *disarankan) / false(jika menggunakan protokol http)
    4. DB_HOST=host_mysql
    5. DB_PORT=3306 / sesuaikan port mysql anda
    6. DB_DATABASE=absensi_online / sesuaikan nama database anda
    7. DB_USERNAME=icwr / sesuaikan username database anda
    8. DB_PASSWORD=icwr / sesuaikan password database anda
    9. APP_ENV=local / production / testing (sesuaikan dengan lingkungan anda)

### Default akun
    Email: icwr@icwr.com
    Password: icwr

### Hal yang harus diperhatikan
    1. Harus menggunakan https demi kelancaran library webcam
    2. Ubah username dan password default dengan cara
        tambahkan user pada dashboard admin dan hapus
        user icwr (demi keamanan website anda)

### Komponen
- Laravel
- Bootstrap
- Jquery
- Datables
- Chart.js
- Webcam.js
- Dashboard admin 

### Lain-lain

[![Powered](https://skillicons.dev/icons?i=php,mysql,js,html,css,bootstrap,laravel)](https://skillicons.dev)
<br>
![visitor badge](https://visitor-badge.laobi.icu/badge?page_id=ICWR-TEAM.absensi-online&left_text=My%20Page%20Visitors)
![292222072-1c0ace01-95e0-4bcd-a7ce-b5e2765084e5](https://github.com/ICWR-TEAM/absensi-online/assets/45759837/6f9e9fb1-3df6-4dca-9f47-56669efb0074)


### Gambar lain

<img width="1918" height="928" alt="image" src="https://github.com/user-attachments/assets/e3ba7114-a552-4ba9-9e7b-c5265de43e47" />
<img width="1917" height="931" alt="image" src="https://github.com/user-attachments/assets/8191347e-2031-4dc3-ae0f-f2c2996f9419" />
<img width="1896" height="899" alt="image" src="https://github.com/user-attachments/assets/f8ce79c8-bebe-4009-80ab-349700f83edf" />
<img width="1919" height="929" alt="image" src="https://github.com/user-attachments/assets/5d8dcc2a-5de9-412c-8dda-03e5ac8afd07" />



