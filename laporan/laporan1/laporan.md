# Laporan Modul 1: Perkenalan Laravel
**Mata Kuliah :** Workshop Web Lanjut   
**Nama :** Ahmad Aulia Fahlevi  
**NIM :** 2024573010077  
**Kelas :** TI-2C  

---

## Abstrak 
Laporan ini saya buat untuk menampilkan cara membuat laravel dari awal lalu hingga bisa memunculkan
laravelnya dilocal.

---

## 1. Pendahuluan
- Laravel adalah sebuah PHP framework yang bersifat open-source dan digunakan untuk membangun aplikasi web. Diciptakan oleh Taylor Otwell, Laravel dirancang untuk menyederhanakan proses pengembangan dengan menyediakan fitur dan struktur yang terorganisir. Framework ini sangat populer di kalangan developer karena sintaksnya yang ekspresif, elegan, dan mudah dipahami. Tujuannya adalah untuk membuat pengembangan web menjadi pengalaman yang lebih menyenangkan dan efisien bagi para developer.
- Karakteristik utama : 
  - Model-View-Controller (MVC): Memisahkan kode menjadi tiga bagian (Model, View, Controller) agar lebih terstruktur dan mudah dikelola.
  - Eloquent ORM: Sistem yang memungkinkan kita untuk berinteraksi dengan database menggunakan sintaks PHP yang mudah, tanpa harus menulis query SQL manual.
  - Blade Template Engine: Mesin template yang membuat kode tampilan (HTML) lebih bersih dan rapi.
  - Fitur Lengkap Bawaan: Dilengkapi dengan fitur penting seperti sistem otentikasi (login/register), routing, dan alat pengujian yang sudah siap pakai.
- Laravel cocok untuk berbagai jenis aplikasi, seperti:
  - Situs web kustom
  - Aplikasi e-commerce
  - Sistem manajemen konten (CMS)
  - Layanan API untuk aplikasi mobile

---

## 2. Komponen Utama Laravel
- Blade Templating Engine: Blade adalah templating engine bawaan Laravel untuk merender view. Kita dapat mengirim data dari basis data atau sumber lain ke dalam view.
- Eloquent ORM: Eloquent adalah ORM bawaan Laravel untuk berinteraksi dengan basis data. Dengan Eloquent, kita tidak perlu menulis query SQL mentah. Sintaksnya sangat elegan untuk melakukan operasi seperti mengambil, membuat, memperbarui, dan menghapus data.
- Artisan CLI: Command-line tool untuk mengelola aplikasi Laravel. Dengan Artisan, kita bisa menjalankan migrasi basis data, membuat controller dan model, menjalankan development server, dan banyak lagi.
- Tinker: REPL (Read-Eval-Print Loop) untuk berinteraksi dengan aplikasi langsung dari terminal. Hampir semua yang bisa dilakukan dari kode, dapat dijalankan lewat Tinker.
- Routing di Laravel: Sistem routing Laravel sangat dinamis dan mudah digunakan. Mendukung URL pattern, middleware, route grouping, serta resource route.

---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.
- Folder Utama
  - app/: Rumah bagi semua logika aplikasi, seperti kontroler dan model.
  - config/: Berisi semua file konfigurasi aplikasi.
  - database/: Menyimpan migrasi (perubahan struktur database), seeder (data awal), dan factory.
  - public/: Folder yang bisa diakses publik oleh browser, tempat file index.php, CSS, dan JavaScript berada.
  - resources/: Tempat file tampilan (Blade), bahasa, dan aset mentah (sebelum di-compile).
  - routes/: Mendefinisikan semua URL dan rute aplikasi.
  - storage/: Tempat Laravel menyimpan log, cache, dan file yang diunggah.
  - vendor/: Berisi semua library pihak ketiga yang diinstal oleh Composer.

- File Penting
  - .env: Menyimpan variabel sensitif seperti kredensial database dan kunci API.
  - composer.json: Mengelola daftar dependensi PHP untuk proyek.
  - artisan: Sebuah alat baris perintah (CLI) untuk menjalankan berbagai perintah penting di Laravel.


---

## 4. Diagram MVC dan Cara kerjanya

> ![Bungaa](gambar/1fa91d28b553d474ff35cf7c81fc6594.jpg)

---

## 6. Kelebihan & Kekurangan (refleksi singkat)
- Menurut saya, kelebihan utamanya adalah produktivitas tinggi. Laravel memungkinkan developer membuat aplikasi modern dengan cepat berkat sintaks yang mudah dan fitur bawaan yang lengkap seperti Eloquent dan Blade. Komunitasnya yang besar juga sangat membantu.
- Tantangan bagi pemula adalah kurva pembelajarannya. Laravel memiliki banyak konsep dan abstraksi yang mungkin terasa kompleks di awal. Membutuhkan waktu untuk memahami semua bagiannya agar bisa bekerja secara efektif.

---

## 7. Referensi
- Sumber dari : 
  - Laraval 12 Training Kit: A Practical Guide to Modern Web Development. Link : https://lnkd.in/gm6ms5cf
  - BELAJAR LARAVEL Tutorial Framework Laravel Untuk Pemula by SANDHIKA GALIH. Link : https://www.youtube.com/@sandhikagalihWPU

---