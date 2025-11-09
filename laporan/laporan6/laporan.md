# Laporan Modul 6: Model dan Laravel Eloquent
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Ahmad Aulia Fahlevi  
**NIM:** 2024573010077
**Kelas:** TI-2C

---

## Abstrak
Praktikum ini bertujuan untuk memahami dan mengimplementasikan konsep fundamental Model dan Eloquent ORM (Object-Relational Mapping) 
dalam framework Laravel 12, serta mengintegrasikannya dengan pola desain seperti Data Transfer Object (DTO), Plain Old Class Object 
(POCO), dan Repository Pattern. Implementasi dilakukan melalui tiga sesi latihan: 1. Mengikat data formulir menggunakan Model gaya 
POCO tanpa database, 2. Strukturisasi transfer data menggunakan DTO dan Service Layer, dan 3. Membangun aplikasi CRUD (Create, Read, Update, Delete)
daftar tugas (Todo List) yang berinteraksi langsung dengan database MySQL menggunakan Laravel Eloquent. Hasil praktikum 
menunjukkan bahwa Model Eloquent secara efektif mengabstraksi operasi database, sementara penerapan pola DTO dan 
Repository Pattern berhasil meningkatkan modularitas, pemisahan concern, dan pemeliharaan kode aplikasi.
---

## 1. Dasar Teori
Pada praktikum ini dasar teorinya itu berpusat dpada arsitektur MVC (Model-View-Controller) di Laravel,
dengan fokus pada komponen Model.
- **Model dan Eloquent ORM**
  - **Model** dalam Laravel merepresentasikan struktur data aplikasi dan umumnya terhubung dengan sebuah tabel di database. 
    Model bertindak sebagai jembatan antara logika bisnis aplikasi dan data yang tersimpan.
  - **Eloquent ORM** adalah implementasi bawaan Laravel yang memudahkan interaksi database. Melalui Eloquent, operasi CRUD 
    dapat dilakukan menggunakan sintaks PHP berorientasi objek yang intuitif, daripada menulis raw SQL.
- **POCO (Plain Old Class Object)**
  - **POCO** adalah kelas PHP sederhana yang digunakan untuk menyimpan data tanpa perilaku atau dependensi framework yang 
    kompleks. Dalam praktikum ini, POCO digunakan untuk meniru perilaku Model guna mengikat dan menampilkan data formulir 
    secara sederhana, memisahkan logika data dari dependensi database.
- **Data Transfer Object (DTO)**
  - **DTO** adalah objek yang digunakan khusus untuk mentransfer data antar lapisan aplikasi (misalnya, dari Controller 
    ke Service Layer). Tujuannya adalah untuk memastikan data masuk dalam format yang terstruktur, memvalidasi dan 
    memisahkan data mentah (request) dari logika bisnis inti, sehingga menghasilkan kode yang lebih rapi dan mudah diuji.
- **Repository Pattern**
  - **Repository Pattern** merupakan pola desain yang mengabstraksi logika akses data. Pola ini memisahkan lapisan logika 
    bisnis dari lapisan persistensi (database). Dengan menggunakan interface dan implementasi repository, aplikasi dapat 
    dengan mudah beralih jenis database tanpa memengaruhi logika bisnis di Controller atau Service Layer.
---

## 2. Langkah-Langkah Praktikum
Tuliskan langkah-langkah yang sudah dilakukan, sertakan potongan kode dan screenshot hasil.

2.1 Praktikum 1 – Menggunakan Model untuk Binding Form dan Display
- Membuat Model Data Sederhana (POCO) <br>
  ![img_1.png](gambar/img_1.png)
- Membuat Controller ProductController <br>
  ![img_2.png](gambar/img_2.png)
  ![img_3.png](gambar/img_3.png)
- Mendefinisikan Rute <br>
  ![img.png](gambar/img.png)
- Membuat Tampilan (Views) dengan Bootstrap. <br>
  - Membuat Views create.blade.php. <br>
    ![img_4.png](gambar/img_4.png)
  - Membuat Views result.blade.php. <br>
    ![img_5.png](gambar/img_5.png)
- Menjalankan aplikasi dan Menunjukkan hasil dibrowser. <br>
  ![img_6.png](gambar/img_6.png)
  ![img.png](gambar/img_34.png)

2.2 Praktikum 2 – Menggunakan Group Route
- Membuat Kelas DTO kemudian membuat file ProductDTO.php. <br>
  ![img_7.png](gambar/img_7.png)
- Membuat Service Layer kemudian membuat file ProductService.php. <br>                                    
  ![img_8.png](gambar/img_8.png)
- Membuat Controller ProductController. <br>
  ![img_9.png](gambar/img_9.png)
  ![img_10.png](gambar/img_10.png)
- Mendefinisikan Rute. <br>
  ![img_11.png](gambar/img_11.png)
- Membuat Tampilan (Views) dengan Bootstrap. <br>
  - Membuat Views create.blade.php. <br>
    ![img_12.png](gambar/img_12.png)
  - Membuat Views result.blade.php. <br>
    ![img_13.png](gambar/img_13.png)
- Menjalankan aplikasi dan Menunjukkan hasil dibrowser. <br>
  ![img_1.png](gambar/img_35.png)
  ![img_2.png](gambar/img_36.png)

2.3 Praktikum 3 – Pengelompokan Prefix dengan Namespace Rute di Laravel 12
- Menginstall dependency MySQL. <br>
  ![img_15.png](gambar/img_15.png)
- Membersihkan config cache. <br>                                     
  ![img_16.png](gambar/img_16.png)
- Membuat Migration untuk Tabel todos lalu jalankan migrasi (php artisan migrate). <br>
  ![img_17.png](gambar/img_17.png)
  ![img_18.png](gambar/img_18.png)
  ![img_19.png](gambar/img_19.png)
- Membuat Seeder untuk Data Dummy. <br>
  ![img_20.png](gambar/img_20.png)
  ![img_21.png](gambar/img_21.png)
- Menjalankan seeder untuk mnegisi database. <br>
  ![img_22.png](gambar/img_22.png)
- Membuat Model Todo. <br>
  ![img_23.png](gambar/img_23.png)
  ![img_24.png](gambar/img_24.png)
- Membuat controller TodoController untuk Operasi CRUD. <br>
  ![img_25.png](gambar/img_25.png)
  ![img_26.png](gambar/img_26.png)
- Mendefinisikan Rute Web. <br>
  ![img_27.png](gambar/img_27.png)
- Membuat Tampilan Blade dengan Bootstrap. <br>
  - Membuat folder layouts dan file app.blade.php di resources/views. <br>
    ![img_28.png](gambar/img_28.png)
  - Membuat folder todos di resources/views. <br>
    - Membuat Views index.blade.php. <br>
      ![img_29.png](gambar/img_29.png)
    - Membuat Views create.blade.php. <br>
      ![img_30.png](gambar/img_30.png)
    - Membuat Views edit.blade.php. <br>
      ![img_31.png](gambar/img_31.png)
    - Membuat Views show.blade.php. <br>
      ![img_32.png](gambar/img_32.png)
- Menjalankan aplikasi dan Menunjukkan hasil dibrowser. <br>
  ![img_33.png](gambar/img_33.png)

---

## 3. Hasil dan Pembahasan
Jelaskan apa hasil dari praktikum yang dilakukan.
- Apa Hasil dari Praktikum yang dilakukan? <br>
  Hasil dari praktikum ini adalah serangkaian aplikasi fungsional yang mendemonstrasikan bagaimana mengimplementasikan dan 
  mengintegrasikan Model Eloquent ORM dengan pola desain arsitektural di Laravel.
  - **Implementasi Model POCO (Praktikum 1):** Berhasil membuat dan menggunakan kelas ProductViewModel (gaya POCO) untuk 
    binding data yang dikirim melalui formulir tanpa koneksi database. Ini menunjukkan bagaimana Model dapat digunakan 
    untuk strukturisasi data bahkan tanpa Eloquent.

  - **Integrasi DTO dan Service Layer (Praktikum 2):** Berhasil memisahkan data input dari logika pemrosesan dengan mengimplementasikan 
    ProductDTO. Data dari Request diubah menjadi DTO, kemudian DTO diteruskan ke ProductService, menunjukkan pemisahan concern yang 
    bersih antara Controller dan lapisan bisnis.

  - **Aplikasi CRUD Penuh dengan Eloquent (Praktikum 3):** Hasil utama adalah terciptanya aplikasi Todo List lengkap. 
    Aplikasi ini berhasil melakukan operasi Create, Read, Update, dan Delete data pada database MySQL, dengan semua interaksi 
    diatur secara efisien oleh Model Todo dan fitur Migrations serta Seeder Laravel.

- Bagaimana Validasi Input Bekerja di Laravel? <br>
  Berdasarkan Praktikum 3 (Pembuatan Todo List), validasi input di Laravel bekerja sebagai mekanisme middleware yang 
  memastikan integritas dan keamanan data sebelum diproses dan disimpan oleh Model.
  - **Mekanisme Kontrol di Controller:** Validasi diaktifkan pada method store dan update di TodoController menggunakan 
    $request->validate(). Misalnya, untuk tugas baru: \$request->validate(['task' => 'required|string']);.

  - **Pengecekan Aturan:** Aturan (required dan string) digunakan untuk memaksa pengguna memberikan data yang harus ada dan sesuai tipe data.

  - **Respons Otomatis Laravel:** Jika validasi gagal, Laravel secara otomatis mengalihkan (redirect) pengguna kembali ke 
    formulir sebelumnya, sambil membawa pesan error dan input lama (old input) melalui session. Ini memungkinkan View 
    menampilkan pesan kesalahan tanpa perlu penanganan manual di Controller.

- Apa peran Masing-Masing Komponen (Route, Controller, View) dalam Program yang Dibuat? <br>
  Ketiga komponen ini bekerja bersama dalam siklus request-response MVC, di mana Model Todo menjadi komponen inti penanganan data.
  - **Route (Gerbang Permintaan):**
    - **Peran:** Bertugas memetakan URL ke action Controller yang spesifik, mendefinisikan endpoint aplikasi CRUD. 
    - **Aksi:** Menggunakan Resource Routing (atau rute terpisah) untuk mengarahkan /todos/{todo} ke method seperti show, edit, update, atau destroy di Controller.

  - **Controller (Koordinator Logika):**
    - **Peran:** Menerima permintaan, melakukan validasi, memanggil Model untuk manipulasi data (logika bisnis), dan mengembalikan View yang sesuai. 
    - Aksi: Di method index, Controller memanggil Todo::all() dan meneruskan hasilnya ke View. Di method store, Controller memanggil 
      Todo::create(\$data) setelah validasi. Controller adalah titik interaksi utama dengan Model.

  - **View (Antarmuka Presentasi):**
    - **Peran:** Bertanggung jawab penuh untuk merender struktur HTML dan menampilkan data yang dikirimkan oleh Controller. 
    - **Aksi:** Menggunakan template Blade (misalnya todos/index.blade.php) untuk menampilkan daftar tugas (\$todos) yang diambil 
      dari Model, termasuk menampilkan formulir, detail, dan pesan sukses/error.

---

## 4. Kesimpulan

Secara keseluruhan, praktikum mengenai Model dan Laravel Eloquent ini berhasil mengilustrasikan penerapan prinsip-prinsip 
arsitektural inti dalam pengembangan aplikasi berbasis Laravel. Implementasi Model Eloquent ORM terbukti menjadi solusi 
yang efisien dan elegan untuk mengabstraksi semua operasi persistence data (CRUD) terhadap database MySQL, yang menghasilkan 
kode Controller yang lebih bersih dan fokus pada logika bisnis. Lebih lanjut, melalui implementasi POCO, DTO, dan Service 
Layer, praktikum ini menunjukkan pentingnya separation of concern. DTO memastikan transfer data yang terstruktur antara 
lapisan aplikasi, sementara POCO memberikan cara yang fleksibel untuk memodelkan data non-database. Kesimpulannya, 
penguasaan terhadap Model Eloquent dan integrasinya dengan pola desain modern adalah fundamental untuk membangun 
aplikasi Laravel yang tidak hanya fungsional tetapi juga terstruktur dengan baik, mudah dikelola, dan scalable di masa depan.

---

## 5. Referensi
- Sumber dari :
  - Laraval 12 Training Kit: A Practical Guide to Modern Web Development. Link: https://lnkd.in/gm6ms5cf
  - BELAJAR LARAVEL Tutorial Framework Laravel Untuk Pemula by SANDHIKA GALIH. Link: https://www.youtube.com/@sandhikagalihWPU
  - Website Full Stack Open. Link: https://fullstackopen.com/en/

---