# Aplikasi Pengelolaan Warung (MVC PHP Native)

Aplikasi manajemen produk warung berbasis PHP Native dengan pola arsitektur MVC (Model-View-Controller) dan template UI modern **InApp Inventory**.

---

## 📁 Struktur Folder

```text
aplikasi-pengelolaan-warung/
├── app/
│   ├── config/
│   │   └── database.php        # Konfigurasi koneksi database PDO MySQL
│   ├── controllers/
│   │   └── ProdukController.php # Controller penangan request & logika CRUD
│   ├── models/
│   │   └── Produk.php          # Model query database (CRUD produk)
│   ├── public/                 # Document Root publik
│   │   ├── assets/             # Aset statis (CSS, JS, Images) InApp
│   │   └── index.php           # Front Controller / Entry Point
│   └── views/
│       ├── layout/
│       │   ├── header.php      # Topbar, Sidebar & header InApp
│       │   └── footer.php      # Footer & script InApp
│       ├── dasbor/
│       │   └── index.php       # Tampilan ringkasan dashboard, statistik & grafik
│       └── produk/
│           ├── index.php       # Tampilan tabel daftar produk
│           ├── create.php      # Form tambah produk
│           └── edit.php        # Form edit produk
└── README.md
```

---

## 🚀 Cara Menjalankan

1. **Database**:
   - Buat database MySQL dengan nama `mvc_crud_db`.
   - Buat tabel `produk`:
     ```sql
     CREATE TABLE produk (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nama_produk VARCHAR(255) NOT NULL,
       harga DECIMAL(10,2) NOT NULL,
       stok INT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

2. **Web Server**:
   Jalankan PHP built-in server dari folder `app/public`:
   ```bash
   cd "aplikasi-pengelolaan-warung/app/public"
   php -S localhost:8000
   ```
   Buka browser di: `http://localhost:8000`
