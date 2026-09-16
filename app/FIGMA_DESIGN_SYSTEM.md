# 🎨 Panduan Desain Antarmuka (Figma Design System)
**Aplikasi Pengelolaan Warung**

> **Tentang Dokumen Ini:**  
> Dokumen ini adalah panduan praktis dan mudah dipahami untuk siapa saja yang ingin membuat atau melihat desain aplikasi di Figma. Disusun dengan bahasa sehari-hari tanpa istilah teknis yang membingungkan, agar tampilan di Figma dan hasil aplikasi di web benar-benar sama persis.

---

## 🖥️ 1. Ukuran Layar Desktop (Ukuran Frame Figma)

Untuk mendesain halaman web aplikasi ini di Figma, gunakan ukuran layar desktop standar berikut:

### 📐 Dimensi Utama Layar Desktop
* **Ukuran Frame Figma:** **`1440 x 900 px`** *(Ukuran standar layar laptop/komputer)*
* **Warna Latar Belakang Layar (Canvas):** `#F8F9FA` *(Abu-abu sangat muda/bersih)*

### 🧱 Pembagian Tata Letak (Layout)
Layar desktop terbagi menjadi **3 area utama**:

```
+-----------------------------------------------------------------------------------+
| 🧭 MENU SAMPING (SIDEBAR) | 🔝 BAR ATAS (NAVBAR TOPBAR)                           |
| Lebar: 240 px             | Tinggi: 60 px, Menempel di atas                       |
| Tinggi: Penuh (100vh)     +-------------------------------------------------------+
| Warna: Putih (#FFFFFF)    | 📄 KONTEN UTAMA (HALAMAN APLIKASI)                    |
| Garis Pembatas Kanan: Abu | Lebar: Sisa ruang (1200 px)                           |
|                           | Ruang Kosong Tepi (Padding): 24 px                    |
|                           | Background: Abu-abu muda (#F8F9FA)                    |
+---------------------------+-------------------------------------------------------+
```

| Bagian | Ukuran (Lebar x Tinggi) | Keterangan & Warna |
| :--- | :--- | :--- |
| **Menu Samping (Sidebar Terbuka)** | Lebar `240 px`, Tinggi `Penuh` | Latar putih (`#FFFFFF`), garis tepi abu-abu di kanan |
| **Menu Samping (Sidebar Ringkas/Mini)** | Lebar `60 px`, Tinggi `Penuh` | Saat menu disembunyikan / ditekan toggle |
| **Bar Atas (Header/Navbar)** | Tinggi `60 px`, Lebar sisa layar | Latar putih (`#FFFFFF`), tempat profil & notifikasi |
| **Area Konten Utama** | Lebar `1200 px`, Jarak dalam `24 px` | Tempat kartu data, tabel produk, dan grafik |

---

## 🎨 2. Warna yang Digunakan (Color Palette)

Aplikasi ini menggunakan warna utama **Oranye Khas Warung** yang hangat dan ramah, dipadukan dengan warna-warna penjelas status yang jelas.

### 🟧 A. Warna Utama (Oranye Warung)
Warna ini dipakai untuk elemen penting seperti tombol utama, menu yang sedang aktif, dan ikon sorotan.

| Kode Warna | Contoh Tampilan | Kapan Dipakai? |
| :--- | :--- | :--- |
| **`#E66239`** *(Oranye Utama)* | Warna Oranye Terang | Tombol utama (**+ Tambah Produk**), ikon produk, menu yang sedang dibuka |
| **`#CF512A`** *(Oranye Gelap)* | Warna Oranye Tua | Efek saat tombol diarahkan kursor mouse (*Hover / Klik*) |
| **`#FDECE6`** *(Oranye Pudar)* | Latar Oranye Sangat Lembut | Latar belakang kotak menu yang sedang aktif di sidebar |

---

### 🚦 B. Warna Indikator Status (Mudah Dipahami)
Warna untuk memberikan informasi kondisi barang dengan cepat:

* 🟢 **Hijau (`#00C951`) — Stok Aman:** Digunakan jika jumlah stok lebih dari 5 pcs. Latar lembut: `#E6F9EE`.
* 🟡 **Kuning/Kuning-Kuningan (`#F0B100`) — Stok Kritis:** Digunakan jika stok menipis (1–5 pcs). Latar lembut: `#FEF7E6`.
* 🔴 **Merah (`#FB2C36`) — Stok Habis / Bahaya:** Digunakan jika stok 0 atau untuk tombol **Hapus**. Latar lembut: `#FFEAEB`.
* 🔵 **Biru (`#00B8DB`) — Info / Keterangan:** Digunakan untuk label bantuan atau informasi umum.

---

### ⚪ B. Warna Netral & Latar Belakang
* **Hitam Pekat (`#171717`):** Untuk judul utama halaman.
* **Abu Gelap / Teks Biasa (`#262626`):** Untuk tulisan paragraf dan tabel.
* **Abu Sedang (`#737373`):** Untuk judul kolom tabel dan teks bantuan.
* **Garis Pembatas (`#E5E5E5`):** Garis pemisah tabel, kartu, dan kotak isian form.
* **Putih Bersih (`#FFFFFF`):** Warna kartu/wadah konten dan menu samping.

---

## 🔤 3. Gaya Tulisan & Ukuran Huruf (Typography)

* **Jenis Huruf (Font):** Menggunakan Google Font gratis **`Poppins`** (alternatif: *sans-serif* / font sistem standar).

### 📏 Panduan Ukuran Tulisan:
1. **Judul Halaman Besar:** `24 px` — Tebal (Bold)  
   *Contoh: "Daftar Produk Warung", "Dasbor Utama"*
2. **Judul Kartu / Sub-Judul:** `16 px` — Agak Tebal (SemiBold)  
   *Contoh: "Daftar Transaksi Hari Ini"*
3. **Teks Utama / Isi Tabel:** `14 px` — Biasa (Regular)  
   *Contoh: "Minyak Goreng 1L", "Rp 15.000"*
4. **Label Status & Catatan Kecil:** `12 px` — Agak Tebal / Sedang  
   *Contoh: Label stok ("Tersedia"), tulisan header kolom ("NO", "NAMA PRODUK")*

---

## 🔘 4. Bentuk Sudut & Efek Bayangan

* **Lengkungan Sudut (Corner Radius):**
  * Tombol, Kotak Isian (Form), dan Kartu Konten: Sudut melengkung halus sebesar **`8 px`**.
  * Label/Pill Status: Sudut melengkung kecil sebesar **`6 px`**.
  * Foto Profil (Avatar): Bulat penuh (**`50%`**).
* **Bayangan Halus (Shadow):**
  * Kartu konten menggunakan bayangan sangat tipis agar terlihat timbul rapi dari latar belakang (*Drop Shadow: Y=1, Blur=3, Warna Hitam Transparan 5%*).

---

## 🧩 5. Contoh Komponen Utama

### 1. Tombol (Button)
* **Tombol Utama (Oranye):** Tinggi `38 px`, sudut melengkung `8 px`, warna oranye `#E66239`, tulisan putih.
* **Tombol Hapus (Merah):** Kotak ukuran `35 x 35 px`, border garis merah, ikon tempat sampah merah.

### 2. Label Stok Barang (Status Badge)
* Kotak kecil dengan sudut melengkung `6 px` dan teks tebal `12 px`:
  * `🟢 15 pcs` (Latar hijau muda, teks hijau)
  * `🟡 3 pcs (Kritis)` (Latar kuning muda, teks kuning tua)
  * `🔴 Habis (0)` (Latar merah muda, teks merah)

### 3. Kotak Isian (Form Input)
* Tinggi `38 px` - `40 px`, warna latar putih, garis tepi abu-abu `1 px`.
* Saat diklik/diisi: Garis tepi berubah menjadi oranye `#E66239`.

---

## 🚀 6. Cara Praktis Memulai di Figma

1. Buat **Frame Baru** dengan ukuran **`1440 x 900 px`** dan beri warna latar `#F8F9FA`.
2. Tarik kotak **Sidebar** di sisi kiri dengan lebar `240 px` warna putih `#FFFFFF`.
3. Pasang **Navbar** di bagian atas kanan dengan tinggi `60 px` warna putih.
4. Isi area tengah dengan **Kartu Putih** berjarak `24 px` untuk menaruh tabel, tombol, atau diagram data.
5. Gunakan font **Poppins** dan warna **Oranye (`#E66239`)** untuk tombol dan menu yang aktif.
