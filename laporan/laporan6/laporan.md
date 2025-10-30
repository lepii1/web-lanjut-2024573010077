# Laporan Modul 6: Model dan Laravel Eloquent
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Ahmad Aulia Fahlevi  
**NIM:** 2024573010077
**Kelas:** TI-2C

---

## Abstrak
Modul ini membahas secara komprehensif Blade Template Engine pada framework Laravel 12. Blade adalah template engine yang 
kuat dan sederhana yang memungkinkan pengembang menulis view yang bersih dan mudah dibaca menggunakan sintaks PHP yang 
disederhanakan. Modul ini mencakup fitur-fitur utama Blade, mulai dari sintaks dasar untuk menampilkan data ({{ $variable }}), 
penggunaan struktur kontrol (@if, @foreach, @switch), hingga implementasi fitur canggih seperti Layouts dan Sections (@extends, 
@yield), Blade Components (<x-component>), dan Partial Views (@include). Praktikum yang disajikan menunjukkan cara meneruskan 
berbagai jenis data dari Controller ke View, menggunakan struktur kontrol untuk rendering kondisional, serta membangun layout 
yang dapat digunakan kembali dengan integrasi Bootstrap 5 dan sistem Theme Switching.
---

## 1. Dasar Teori
- Definisi Blade Template Engine <br>
  Blade adalah template engine default yang disertakan dalam Laravel. Blade berfungsi untuk memisahkan logic aplikasi 
  dari kode presentasi (HTML). Tidak seperti template engine PHP populer lainnya, Blade tidak membatasi Anda untuk 
  menggunakan kode PHP murni dalam view Anda; sebaliknya, Blade menyediakan shortcut yang nyaman untuk fungsionalitas 
  templating umum.

- Fitur Utama Blade
  - Sintaks Ringan dan Cepat: Blade tidak menambahkan overhead ke aplikasi Anda karena semua file Blade dikompilasi ke 
    dalam kode PHP murni dan disimpan dalam cache sampai dimodifikasi.
  - Menampilkan Data: Menggunakan kurung kurawal ganda ({{ $variable }}) untuk menampilkan data yang diteruskan dan secara 
    otomatis mencegah serangan Cross-Site Scripting (XSS) dengan membersihkan output.
  - Struktur Kontrol: Menyediakan directive yang mudah dibaca untuk struktur kontrol PHP, seperti:
    - Kondisional: @if, @elseif, @else, @unless, @isset, @empty.
    - Perulangan: @foreach, @for, @while, @forelse.
  - Inheritance Template (Layouts dan Sections):
    - @extends('layout.name'): Menentukan view anak mana yang harus mewarisi template dari view induk.
    - @yield('name'): Menandai tempat di template induk di mana konten dari section di view anak akan disuntikkan.
    - @section('name') ... @endsection: Menentukan konten yang akan dimasukkan ke dalam tempat @yield di template induk.
  - Blade Components: Fitur yang memungkinkan pembuatan potongan UI yang dapat digunakan kembali, mirip dengan web component, yang mendukung props dan slots. Digunakan dengan sintaks seperti <x-alert>.
  - Partial Views: Menggunakan directive @include('partial.name') untuk menyertakan konten dari view Blade lain, berguna untuk elemen seperti header dan footer.
- Best Practices (Praktik Terbaik)
  - DRY (Don't Repeat Yourself): Gunakan layout dan components untuk menghindari pengulangan kode.
  - Pemisahan Tanggung Jawab: Hindari menempatkan business logic yang kompleks di dalam view Blade.
  - 
---

## 2. Langkah-Langkah Praktikum
Tuliskan langkah-langkah yang sudah dilakukan, sertakan potongan kode dan screenshot hasil.

2.1 Praktikum 1 – Menangani Request dan Reponse View di Laravel 12
- Membuat controller DasarBladeController. <br>
  ![img.png](gambar/img.png)
- Menambahkan route pada routes/web.php. <br>
  ![img_1.png](gambar/img_1.png)
- Membuat Metode untuk menghandle data pada Controller. <br>
  ![img_2.png](gambar/img_2.png)
- Membuat View dasar.blade.php. <br>
  ![img_3.png](gambar/img_3.png)
- Menjalankan aplikasi dan Menunjukkan hasil dibrowser. <br>
  ![img_4.png](gambar/img_4.png)

2.2 Praktikum 2 – Menggunakan Group Route
- Membuat controller LogicController. <br>
  ![img_5.png](gambar/img_5.png)
- Menambahkan route yang dikelompokkan. <br>                                    
  ![img_6.png](gambar/img_6.png)
- Menambahkan Logika di Controller. <br>
  ![img_7.png](gambar/img_7.png)
- Membuat View logic.blade.php. <br>
  ![img_8.png](gambar/img_8.png)
- Menjalankan aplikasi dan Menunjukkan hasil dibrowser. <br>
  ![img_9.png](gambar/img_9.png)

2.3 Praktikum 3 – Pengelompokan Prefix dengan Namespace Rute di Laravel 12
- Membuat controller PageController. <br>
  ![img_10.png](gambar/img_10.png)
- Menambahkan route yang dikelompokkan. <br>                                     
  ![img_11.png](gambar/img_11.png)
- Mengupdate Controller. <br>
  ![img_12.png](gambar/img_12.png)
- Membuat Layout Dasar dengan Bootstrap. <br>
  ![img_13.png](gambar/img_13.png)
- Membuat View untuk Admin. <br>
  ![img_14.png](gambar/img_14.png)
- Membuat View untuk User. <br>
   ![img_15.png](gambar/img_15.png)
- Menjalankan aplikasi dan Menunjukkan hasil dibrowser. <br>
  ![img_16.png](gambar/img_16.png) <br>
  ![img_17.png](gambar/img_17.png)

2.3 Praktikum 3 – Pengelompokan Prefix dengan Namespace Rute di Laravel 12
- Membuat controller UIController. <br>
  ![img_18.png](gambar/img_18.png)
- Menambahkan route yang dikelompokkan. <br>
  ![img_19.png](gambar/img_19.png)
- Mengupdate Controller. <br>
  ![img_20.png](gambar/img_20.png)
- Membuat Layout Utama dengan Theme Support. <br>
  ![img_21.png](gambar/img_21.png)
- Membuat Direktori Partials lalu membuat file navigation.blade.php. <br>
  ![img_22.png](gambar/img_22.png)
- Membuat View alert.blade.php. <br>
  ![img_23.png](gambar/img_23.png)
- Membuat Blade Components. <br>
  ![img_24.png](gambar/img_24.png)
- Membuat View Utama yaitu home.blade.php
  ![img_25.png](gambar/img_25.png)
  - Membuat View about.blade.php
    ![img_26.png](gambar/img_26.png)
  - Membuat View team--stats.blade.php
    ![img_27.png](gambar/img_27.png)
  - Membuat View contact.blade.php
    ![img_28.png](gambar/img_28.png)
  - Membuat View contact-from.blade.php
    ![img_29.png](gambar/img_29.png)
  - Membuat View profile.blade.php
    ![img_30.png](gambar/img_30.png)
- Menjalankan aplikasi dan Menunjukkan hasil dibrowser.
  ![img_31.png](gambar/img_31.png) <br>
  ![img_32.png](gambar/img_32.png) <br>
  ![img_33.png](gambar/img_33.png) <br>
  ![img_34.png](gambar/img_34.png) <br>
- Tampilan saat menggunakan tema gelap
  ![img_35.png](gambar/img_35.png) <br>
  ![img_36.png](gambar/img_36.png) <br>
  ![img_37.png](gambar/img_37.png) <br>
  ![img_38.png](gambar/img_38.png)

---

## 3. Hasil dan Pembahasan
Jelaskan apa hasil dari praktikum yang dilakukan.
- Apa Hasil dari Praktikum yang dilakukan? <br>
  Secara keseluruhan, praktikum ini berhasil memvalidasi dan mendemonstrasikan efektivitas **Blade Template Engine** dalam
  membangun antarmuka pengguna yang dinamis dan terstruktur di Laravel. Hasil praktikum adalah:
    - **Validasi Blade Syntax Dasar:** Berhasil menampilkan berbagai tipe data (String, Array, Object) yang diteruskan dari
      Controller ke View menggunakan sintaks {{ $variable }}.
    - **Fungsionalitas Kontrol Struktur:** Berhasil mengimplementasikan logika presentasi di View menggunakan directives
      kondisional (@if, @switch) dan perulangan (@foreach, @forelse) untuk merender konten secara dinamis.
    - **Efisiensi Layout:** Berhasil membuat tata letak yang konsisten dan dapat digunakan kembali di banyak halaman (misalnya,
      /admin dan /user) menggunakan fitur Layout Inheritance (@extends, @yield, @section), sehingga mengurangi redundansi
      kode HTML (DRY Principle).
    - **Reusabilitas Komponen:** Berhasil memecah elemen UI kompleks menjadi komponen yang lebih kecil, seperti Blade Components
      (<x-component>) dan Partial Views (@include), untuk modularitas dan pemeliharaan kode yang lebih mudah.

- Bagaimana Validasi Input Bekerja di Laravel? <br>
  Validasi input bekerja dengan memastikan data yang dikirim oleh pengguna mematuhi aturan yang telah ditentukan (required, email, max:255, dll.).
    - **Pemisahan Logika Presentasi:** Blade memungkinkan penggunaan struktur kontrol (seperti if atau loop) dalam sintaks yang mirip dengan HTML (@if, @foreach) tetapi tanpa mencampur kode PHP murni.
        - **Keunggulan:** Hal ini memisahkan logika yang menentukan apa yang ditampilkan dari kode HTML yang menentukan bagaimana tampilannya.
    - **Sistem Warisan Template:** Fitur Layouts memungkinkan kita mendefinisikan master template (induk) yang berisi elemen umum (header, footer, navigasi). Child View hanya perlu mendefinisikan konten uniknya.
        - **Keunggulan:** Ini menjamin konsistensi visual di seluruh aplikasi dan mempermudah pembaruan tata letak secara massal.

- Apa peran Masing-Masing Komponen (Route, Controller, View) dalam Program yang Dibuat? <br>
  Meskipun Route berfungsi sebagai gerbang, dalam konteks praktikum Blade, fokus peran ada pada Controller dan View:
    - **Controller (Otak Pemrosesan Data):**
        - **Peran:** Bertanggung jawab untuk menyiapkan dan memproses data yang dibutuhkan.
        - **Aksi:** Mengambil data dari sumber (simulasi array/object) dan mengirimkannya ke View menggunakan fungsi view('nama_view', compact('data')). Controller tidak menulis HTML.
    - **View (Antarmuka Presentasi):**
        - **Peran:** Bertanggung jawab untuk merender data yang diterima dari Controller menjadi HTML yang dapat dilihat pengguna.
        - **Aksi:** Menggunakan sintaks Blade ({{ }} dan @directives) untuk menampilkan data, menerapkan perulangan, dan menyesuaikan tampilan berdasarkan kondisi. View tidak melakukan pemrosesan data yang kompleks.

---

## 4. Kesimpulan

Blade Template Engine adalah alat fundamental dalam pengembangan aplikasi Laravel. Dengan sintaks yang intuitif, Blade 
secara efektif memfasilitasi pemisahan logic aplikasi dari presentasi, menghasilkan kode yang terstruktur, mudah dipelihara, 
dan dapat digunakan kembali. Melalui fitur Layout Inheritance dan Blade Components, pengembang dapat menciptakan tata letak 
yang konsisten di seluruh aplikasi dengan upaya minimal. Penguasaan Blade, termasuk cara meneruskan data, memanfaatkan 
struktur kontrol, dan mengelola layout, adalah kunci untuk membangun antarmuka pengguna yang dinamis dan efisien dalam 
ekosistem Laravel.

---

## 5. Referensi
- Sumber dari :
  - Laraval 12 Training Kit: A Practical Guide to Modern Web Development. Link: https://lnkd.in/gm6ms5cf
  - BELAJAR LARAVEL Tutorial Framework Laravel Untuk Pemula by SANDHIKA GALIH. Link: https://www.youtube.com/@sandhikagalihWPU
  - Website Full Stack Open. Link: https://fullstackopen.com/en/

---