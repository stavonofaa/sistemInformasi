# Presensi Siswa SMAN 1 CIKARANG TIMUR

## Daftar Isi
- [Tentang](#tentang)
- [Prasyarat](#prasyarat)
- [Instalasi](#instalasi)
- [Penggunaan](#penggunaan)
- [Kontak](#kontak)

## Tentang
ini adalah aplikasi informasi sekolah berbasis website pada SMAN 1 Cikarang Timur yang mempermudah dalam penyampaian informasi 

## Prasyarat
Sebutkan prasyarat yang diperlukan sebelum menginstal proyek ini. Misalnya:
- PHP versi 8.1.25
- Composer
- Web server Apache
- teks editor
- xampp

## Instalasi
Berikan langkah-langkah untuk menginstal proyek Anda. Misalnya:
1. download
   download melalui link di bawah ini lalu ekstrak file zip hasil download
    ```bash
    git clone https://github.com/stavonofa/sisteminformasi_sekolah
    ```
2.  buka xampp lalu klik start apache dan myqsl
    ```bash
    ![Alt text](url_gambar)

    ```
3. buka link 
    ```bash
    http://localhost/phpmyadmin/
    ```
   laluimport database [database](database/db_imas.sql)

4. buka link di bwah ini untuk membuka halaman guru/siswa
    ```bash
    http://localhost/nama_folder
    ```
    buka link bawah ini untuk membuka halaman admin
    ```bash
    http://localhost/nama_folder/admin
    ```
## Penggunaan
1. Untuk akun Admin gunakan
   Username : admin@gmail.com
   password : admin
   
   halaman admin:
   ![Alt text](img/halamanAdmin.png)

   Pada Menu admin anda dapat mengelola data umum, jadwal mengajar, data guru, dan data siswa

   Halaman guru:
   ![Alt text](img/halamanGuru.png)
   Pada halaman Guru anda dapat melakukan presensi kepada siswa dan melakukan rekap persemester

   Halaman guru:
   ![Alt text](img/halamanSiswa.png)
   Pada halaman Siswa anda dapat melihat daftar kehadiran siswa
   
## Kontak

Irfan Fadlurrahman - [@irnn_24](https://twitter.com/TwitterHandle) - irfanfadhlurrahman240703@gmail.com

Demo aplikasi: 
- [Presensi BK2 Admin](https://irfansman1tryhard.000webhostapp.com/admin)
- [Presensi BK2 Guru/Siswa](https://irfansman1tryhard.000webhostapp.com/)

