# Laporan Modul 2: Laravel Fundamentasl
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Ahmad Aulia Fahlevi  
**NIM:** 2024573010077
**Kelas:** TI-2C

---

## Abstrak
DI laporan kali ini yang pertama kita belajar tentang apa itu MVC dan bagaimana MVC tersebut di Laravel, lalu juga
belajar tentang Middleware di Laravel dan juga masalah Routing juga tentang Request dan Respon, lalu di Praktikum pertama 
membuat route, controller, dan viewnya, dimana nantinya pada saat kita mmebuat locallhost dengan /welcome, maka akan 
muncul tampilan selamat datang di laravel. Di Praktikum kedua kita belajar cara membuat calculator singkat di laravel, 
sehingga pada saat kita membuka localhost /calculator, maka akan muncul tampilan kalkulator yang bisa digunakan untuk 
penjumlahan, perkalian, pembagian, dan pengurangan.
---

## 1. Dasar Teori
- MVC (Model, View, Controller) adalah sebuah pola arsitektur perangkat lunak yang memisahkan aplikasi menjadi tiga komponen utama untuk mengelola aspek-aspek yang berbeda:
  - Model: Mengelola data dan logika bisnis aplikasi. Ini adalah bagian yang berinteraksi langsung dengan database untuk mengambil, menyimpan, atau memanipulasi data.
  - View: Bertanggung jawab untuk menampilkan data kepada pengguna. Ini adalah antarmuka (interface) pengguna yang bisa berupa halaman HTML, form, atau elemen visual lainnya.
  - Controller: Bertindak sebagai perantara antara Model dan View. Controller menerima permintaan (request) dari pengguna, memprosesnya dengan berinteraksi dengan Model, dan kemudian mengirimkan data yang sesuai ke View untuk ditampilkan.

- Routing adalah sistem yang menentukan bagaimana URL yang diakses pengguna akan diarahkan ke bagian kode yang sesuai di aplikasi. Rute (route) didefinisikan untuk mencocokkan URL dengan Controller atau fungsi tertentu.

- Middleware adalah filter yang memproses permintaan HTTP sebelum mencapai Controller. Fungsi utamanya untuk menjalankan tugas-tugas seperti autentikasi, pencatatan (logging), atau verifikasi sebelum permintaan diproses lebih lanjut.

- Bagaimana cara Laravel menangani Request dan Response.
  - Request: Permintaan HTTP masuk dari pengguna.
  - Middleware: Permintaan melewati filter.
  - Router: Mencocokkan URL dengan rute yang sesuai.
  - Controller: Memproses permintaan, berinteraksi dengan Model.
  - View: Menggunakan data dari Controller untuk membuat tampilan.
  - Response: Mengirimkan hasil tampilan kembali ke pengguna.

- Peran Controller dan View.
  - Controller: Menerima permintaan, mengelola data dengan Model, dan memilih View yang tepat untuk ditampilkan.
  - View: Bertugas menampilkan data kepada pengguna, seringkali dalam bentuk halaman web.

- Fungsi Blade Templating Engine.<br>
Blade adalah sebuah mesin template yang membuat tampilan (View) lebih rapi dan dinamis. Fungsinya adalah untuk memisahkan kode logika dari HTML, serta menyediakan sintaks sederhana untuk menampilkan data dan menggunakan struktur kontrol seperti if dan foreach.
---

## 2. Langkah-Langkah Praktikum
Tuliskan langkah-langkah yang sudah dilakukan, sertakan potongan kode dan screenshot hasil.

2.1 Praktikum 1 – Route, Controller, dan Blade View

- Menambahkan route pada routes/web.php.
![WhatsApp Image 2025-09-16 at 17.46.34_7d3d5484.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2017.46.34_7d3d5484.jpg)
- Membuat controller WelcomeController.
![WhatsApp Image 2025-09-16 at 17.46.15_1a3162de.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2017.46.15_1a3162de.jpg)
- Membuat view mywelcome.blade.php.
![WhatsApp Image 2025-09-16 at 17.50.13_b02cb6a2.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2017.50.13_b02cb6a2.jpg)
- Menjalankan aplikasi dan Menunjukkan hasil dibrowser
![WhatsApp Image 2025-09-16 at 17.53.09_5920aead.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2017.53.09_5920aead.jpg)

2.2 Praktikum 2 – Membuat Aplikasi Sederhana "Calculator"

- Menambahkan route untuk kalkulator.
![WhatsApp Image 2025-09-16 at 18.02.59_a5416798.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2018.02.59_a5416798.jpg)
- Membuat controller CalculatorController.
![WhatsApp Image 2025-09-16 at 18.01.37_109c3877.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2018.01.37_109c3877.jpg)
- Membuat view calculator.blade.php.
![WhatsApp Image 2025-09-16 at 18.02.32_eefe099b.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2018.02.32_eefe099b.jpg)
- Menjalankan aplikasi dan mencoba dengan beberapa input berbeda.
  - ![WhatsApp Image 2025-09-16 at 18.03.54_4a62e1aa.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2018.03.54_4a62e1aa.jpg)
  - ![WhatsApp Image 2025-09-16 at 18.04.34_b1e49056.jpg](gambar/WhatsApp%20Image%202025-09-16%20at%2018.04.34_b1e49056.jpg)

---

## 3. Hasil dan Pembahasan
Jelaskan apa hasil dari praktikum yang dilakukan.
- Apakah aplikasi berjalan sesuai harapan?
  - Ya, Aplikasi berjalan sesuai harapan.
- Apa yang terjadi jika ada input yang salah (misalnya pembagian dengan 0)?
  - Akan terjadi eror, dikarenakan pembagian 0 tidak bisa, maka akan muncul notifikasi eror.
- Bagaimana validasi input bekerja di Laravel?
  - Validasi input di Laravel dilakukan untuk memastikan data yang dikirim oleh pengguna sesuai dengan aturan yang telah ditentukan sebelum data tersebut diproses lebih lanjut. Proses ini sangat penting untuk mencegah data yang tidak valid, berbahaya, atau tidak lengkap masuk ke database.
- Apa peran masing-masing komponen (Route, Controller, View) dalam program yang dibuat?
  - Peran Route yaitu Mengarahkan permintaan masuk (request) dari pengguna ke bagian aplikasi yang sesuai.
  - Peran Controller yaitu Menerima permintaan yang telah diarahkan oleh Route, mengelola logika bisnis, dan menentukan respons
  - Peran View yaitu Bertugas untuk menampilkan data dan antarmuka pengguna.

---

## 4. Kesimpulan

Kesimpulan dari praktikum ini adalah memperkenalkan konsep-konsep dasar pengembangan web menggunakan framework Laravel, khususnya arsitektur MVC (Model-View-Controller). Melalui dua praktikum sederhana, kita diajak untuk memahami alur kerja sebuah aplikasi Laravel, mulai dari permintaan user/client hingga respons yang ditampilkan.

---

## 5. Referensi
- Sumber dari :
  - Laraval 12 Training Kit: A Practical Guide to Modern Web Development. Link: https://lnkd.in/gm6ms5cf
  - BELAJAR LARAVEL Tutorial Framework Laravel Untuk Pemula by SANDHIKA GALIH. Link: https://www.youtube.com/@sandhikagalihWPU
  - Website Full Stack Open. Link: https://fullstackopen.com/en/

---