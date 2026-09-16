# 🎨 Figma Design System & Style Guide
**Aplikasi Pengelolaan Warung (WarungApp)**
> Dokumen panduan desain lengkap dan komprehensif untuk perancangan antarmuka di **Figma**, diselaraskan 100% secara detail dan presisi dengan kode implementasi CSS (`style.css`), komponen layout, dan identitas visual aplikasi.

---

## 🌟 1. Identitas Visual & Warna Oranye Khas (Brand Orange)

Aplikasi Pengelolaan Warung menggunakan tema visual modern bernuansa **Warm Orange (Oranye Hangat / Terracotta)** sebagai warna identitas utama (*Primary Brand*). Warna oranye ini mencerminkan kehangatan, keramahan, dan dinamisme operasional warung/toko kelontong.

### 🟧 Palet Utama Oranye (Primary Orange System)

| Token Figma | Nilai Hex | Nilai RGB | Opacity / Keterangan | Penggunaan Utama pada Aplikasi |
| :--- | :--- | :--- | :--- | :--- |
| `Primary/50 (Ultra Light)` | `#FDF4F0` | `253, 244, 240` | `100%` Solid | Background container lembut, highlight card khusus |
| `Primary/100 (Subtle Nav)` | `#FDECE6` | `253, 236, 230` | Equivalent `9.5%` (`rgba(230, 98, 57, 0.095)`) | **Background aktif & hover menu sidebar**, hover submenu |
| `Primary/200 (Light Tint)` | `#FBD6C9` | `251, 214, 201` | Equivalent `12%` (`rgba(230, 98, 57, 0.12)`) | Badge `bg-primary-subtle`, border aksen oranye lembut |
| `Primary/500 (Base Orange)` | **`#E66239`** | `230, 98, 57` | `100%` Solid | **Warna Utama Aplikasi**: Tombol `.btn-primary`, Icon Produk, Teks Aktif Sidebar, Vektor Logo, Avatar Primary |
| `Primary/600 (Dark Hover)` | **`#CF512A`** | `207, 81, 42` | `100%` Solid | Status **Hover & Active** tombol utama (`.btn-primary:hover`), link hover, text emphasis |
| `Primary/700 (Deep Orange)` | `#B2401D` | `178, 64, 29` | `100%` Solid | Teks oranye dengan kontras tinggi di atas latar terang |

---

## 🎨 2. Palet Warna Lengkap (Complete Color Palette)

### A. Semantic & Status (Indikator & Notifikasi)
| Status | Solid (Hex) | RGB | Subtle BG (Pill/Badge) | Border / Text Accent | Keterangan Penggunaan |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Success** | `#00C951` | `0, 201, 81` | `#E6F9EE` (`10%`) | `#00C951` | Stok Aman (> 5 pcs), Indikator Online Avatar |
| **Warning (Amber Orange)** | `#F0B100` | `240, 177, 0` | `#FEF7E6` (`12%`) | `#F0B100` / `#946C00` | Stok Kritis (1–5 pcs), Indikator Away Avatar |
| **Danger** | `#FB2C36` | `251, 44, 54` | `#FFEAEB` (`10%`) | `#FB2C36` | Stok Habis (0), Tombol Hapus, Indikator Sibuk/Busy |
| **Info** | `#00B8DB` | `0, 184, 219` | `#E6F8FB` (`12%`) | `#00B8DB` | Keterangan info, status indikator info avatar |

### B. Neutral & Grayscale (Struktur Antarmuka)
| Token Figma | Hex Code | Deskripsi & Penggunaan di Web |
| :--- | :--- | :--- |
| `Neutral/Dark` | `#171717` | Judul tebal utama, logo text, header level 1-2 |
| `Neutral/Body` | `#262626` | Warna teks konten standar (`--bs-body-color`) |
| `Neutral/Nav` | `#404040` | Teks navigasi default sidebar (idle) & link umum |
| `Neutral/Secondary` | `#525252` | Sub-label, nomor urut tabel, icon secondary, avatar secondary |
| `Neutral/Muted` | `#737373` | Header kolom tabel (`th`), caption, info helper |
| `Neutral/Placeholder` | `#A3A3A3` | Placeholder input form, status offline avatar |
| `Neutral/Border` | `#E5E5E5` | Garis pemisah card, border sidebar, border tabel, input outline |
| `Neutral/Translucent` | `rgba(0, 0, 0, 0.08)` | Garis pemisah subtle |
| `Neutral/Light Surface`| `#F5F5F5` | Background thead tabel, addon input (`Rp`), icon box background |
| `Neutral/Canvas BG` | `#F8F9FA` | Background kanvas seluruh halaman aplikasi (`body`) |
| `Neutral/White` | `#FFFFFF` | Background Card, Navbar Topbar, Sidebar container |

---

## 🔤 3. Tipografi (Typography System)

* **Font Family**: [`Poppins`](https://fonts.google.com/specimen/Poppins) (Google Fonts)
* **Fallback**: `sans-serif`
* **Base Size**: `14px` (`0.875rem`)
* **Line Height Standar**: `1.5`

### 📌 Skala Tipografi untuk Frame Figma

| Style Name | Font Size (px) | Weight | Line Height | Letter Spacing | Penggunaan |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Heading 1** | `32px` | **700 (Bold)** | `40px` (`1.25`) | normal | Header besar dashboard |
| **Heading 2** | `28px` | **700 (Bold)** | `36px` (`1.3`) | normal | Judul section utama |
| **Heading 3** | `24px` | **700 (Bold)** | `31px` (`1.3`) | normal | Judul halaman (*Daftar Produk Warung*) |
| **Heading 4** | `20px` | **600 (SemiBold)** | `28px` (`1.4`) | normal | Subjudul halaman / Card title besar |
| **Heading 5** | `16px` | **600 (SemiBold)** | `22px` (`1.4`) | normal | Judul kartu (*Stok Produk*, *Informasi*) |
| **Heading 6** | `14px` | **600 (SemiBold)** | `20px` (`1.4`) | normal | Nama produk pada tabel |
| **Body (Default)** | `14px` | **400 (Regular)** | `21px` (`1.5`) | normal | Teks umum, form input, isi tabel |
| **Body Medium** | `14px` | **500 (Medium)** | `21px` (`1.5`) | normal | Label form, navigasi aktif, harga produk |
| **Body Small** | `13px` | **400 (Regular)** | `19.5px` (`1.5`) | normal | Menu link pada sub-kategori sidebar |
| **Caption / Small**| `12px` | **400 (Regular)** | `17px` (`1.4`) | normal | ID produk (`#1`), breadcrumbs, helper form |
| **Table Header** | `12px` | **400 (Regular)** | `17px` (`1.4`) | `+0.5px` (UPPERCASE) | Header kolom tabel (`NO`, `NAMA PRODUK`, `HARGA`, `STOK`, `AKSI`) |
| **Badge Label** | `12px` | **500 (Medium)** | `14px` (`1.2`) | normal | Status stok produk |

---

## 📐 4. Spasi, Grid & Dimensi Layout (Layout & Spacing)

### A. Dimensi Master Layout (Desktop Frame: 1440 x 900 px)

```
+-------------------------------------------------------------------------+
| [Sidebar: 240px] | [Topbar Navbar: Height 60px, Margin-Left: 240px]    |
|                  +------------------------------------------------------+
| [Logo Area: 60px]| [Main Content Canvas]                                |
| [Menu Items]     | Padding: 24px (Top 75px dari viewport)               |
|                  | Background: #F8F9FA                                  |
+-------------------------------------------------------------------------+
```

| Komponen Layout | Dimensi (Lebar x Tinggi) | Ketentuan Khusus |
| :--- | :--- | :--- |
| **Sidebar (Expanded)** | Width: `240px`, Height: `100vh` | Fixed kiri, Background `#FFFFFF`, Border kanan `1px solid #E5E5E5` |
| **Sidebar (Collapsed Mini)** | Width: `60px`, Height: `100vh` | Mode ringkas ketika tombol toggle ditekan |
| **Topbar Header** | Height: `60px`, Width: `100%` (Offset `240px`) | Background `#FFFFFF`, Border bawah `1px solid #E5E5E5`, Padding `0 16px` |
| **Main Content Canvas** | Margin-Left: `240px`, Padding Top: `75px` | Background `#F8F9FA`, Container Padding: `24px` |

### B. Spacing Scale (Grid Base 4px / 8px)
* `space-1` (`4px`): Padding vertikal badge stok
* `space-2` (`8px`): Jarak elemen form label, gap item navigasi, icon gap
* `space-3` (`12px`): Margin horizontal menu sidebar, gap dropdown
* `space-4` (`16px`): Padding kartu header, padding cell horizontal tabel
* `space-5` (`20px`): Gap antar card / grid kolom
* `space-6` (`24px`): Padding body card (`p-4`), margin bottom header halaman
* `space-7` (`40px`): Spacing section besar (`py-6`)

---

## 🔲 5. Border Radius & Efek Bayangan (Corner & Shadow)

### Border Radius
* **Badges / Small Tag**: `6px` (`rounded-1`)
* **Buttons, Cards, Inputs, Sidebar Items**: `8px` (`rounded-2`)
* **Avatar & Status Dots**: `50%` / `9999px` (`rounded-circle`)

### Shadows di Figma
* **Card & Container Default (`shadow-sm`)**:
  * Drop Shadow: `X: 0`, `Y: 1`, `Blur: 3`, `Spread: 0`, Color: `#000000`, Opacity: `5%`
* **Dropdown & Flyout Menu**:
  * Drop Shadow: `X: 0`, `Y: 8`, `Blur: 24`, `Spread: 0`, Color: `#000000`, Opacity: `12%`
* **Modal / Backdrop Overlay**:
  * Background: `#000000`, Opacity: `45%`, Layer Blur: `1px`

---

## 🧩 6. Panduan Pembuatan Komponen UI di Figma (Component Specifications)

### A. Tombol Oranye & Varian Tombol (Buttons)

#### 1. Primary Orange Button (`.btn-primary`) — *Signature Action*
* **Tinggi Frame**: `38px` (Standard) / `42px` (Large)
* **Auto Layout**: Horizontal, Padding `8px 16px` (atau `8px 24px`), Gap `6px`
* **Corner Radius**: `8px`
* **Warna Default**: Fill `#E66239`, Text/Icon `#FFFFFF` (Poppins 14px Medium)
* **Warna Hover/Pressed**: Fill `#CF512A`, Text/Icon `#FFFFFF`
* **Shadow**: `0 1px 2px rgba(0,0,0,0.05)`

#### 2. Outline Primary Button (`.btn-outline-primary`)
* **Auto Layout**: Horizontal, Padding `8px 16px`, Corner Radius `8px`
* **Border**: `1px solid #E66239`, Fill: `Transparent`
* **Text/Icon**: `#E66239` (Hover: Fill `#E66239`, Text `#FFFFFF`)

#### 3. Icon Action Button (`.btn-icon`)
* **Small (`btn-sm`) untuk Aksi Tabel**:
  * Frame: `35px x 35px`, Corner Radius `6px`
  * Edit: Border `1px solid #525252`, Icon `#525252` (`14px`)
  * Hapus: Border `1px solid #FB2C36`, Icon `#FB2C36` (`14px`)

---

### B. Sidebar Navigasi dengan Aksen Oranye (`.sidebar`)

* **Ukuran Item (`.nav-link`)**: Width `216px` (Width Sidebar `240px` - Margin `24px`), Height `40px`
* **Auto Layout**: Horizontal, Padding `8px 10px`, Gap `12px`, Corner Radius `8px`
* **Variasi Status**:
  * **Default / Idle**: Fill `Transparent`, Text `#404040`, Icon `#404040` (18px)
  * **Hover State**: Fill `#FDECE6` (`rgba(230, 98, 57, 0.095)`), Text `#E66239`, Icon `#E66239`
  * **Active State**: Fill `#FDECE6` (`rgba(230, 98, 57, 0.095)`), Text `#E66239` (Font Weight 500), Icon `#E66239`
* **Submenu Item**: Height `34px`, Padding `7px 14px 7px 26px`, Font `13px Poppins`

---

### C. Tabel Data & Icon Box Produk

* **Card Container**: Fill `#FFFFFF`, Border `1px solid #E5E5E5`, Corner Radius `8px`, Shadow-sm
* **Card Header**: Auto Layout Horizontal, Padding `16px`, Border Bottom `1px solid #E5E5E5`
* **Header Tabel (`th`)**: Background `#F8F9FA`, Padding `14px 16px`, Teks `#737373` (12px Uppercase)
* **Baris Data (`td`)**: Padding `14px 16px`, Border Bottom `1px solid #E5E5E5`
* **Product Icon Box**:
  * Frame: `40px x 40px`, Corner Radius `6px`
  * Fill: `#F5F5F5` (Light Grey)
  * Icon: Tabler `ti-package`, **Warna Oranye `#E66239`**, Size `20px`

---

### D. Badges Status Stok Produk (`.badge-stock`)

* **Auto Layout**: Horizontal, Padding `4px 8px`, Corner Radius `6px`, Font `12px Poppins Medium`
* **3 Varian Status**:
  1. **Stok Aman (`> 5 pcs`)**:
     * Background: `#E6F9EE` (`rgba(0, 201, 81, 0.12)`)
     * Border: `1px solid rgba(0, 201, 81, 0.25)`
     * Text: `#00C951` (cth: `15 pcs`)
  2. **Stok Kritis (`1 - 5 pcs`)**:
     * Background: `#FEF7E6` (`rgba(240, 177, 0, 0.12)`)
     * Border: `1px solid rgba(240, 177, 0, 0.3)`
     * Text: `#B88700` (cth: `3 (Kritis)`)
  3. **Stok Habis (`0 pcs`)**:
     * Background: `#FFEAEB` (`rgba(251, 44, 54, 0.12)`)
     * Border: `1px solid rgba(251, 44, 54, 0.25)`
     * Text: `#FB2C36` (cth: `Habis (0)`)

---

### E. Form Input Fields (`.form-control`, `.input-group`)

* **Input Box**: Height `38px` - `40px`, Corner Radius `6px`, Border `1px solid #E5E5E5`, Fill `#FFFFFF`
* **Teks Input**: `14px Poppins Regular`, Color `#262626` (Placeholder: `#A3A3A3`)
* **Focus State**: Border `#E66239`, Ring Box Shadow `0 0 0 3px rgba(230, 98, 57, 0.2)`
* **Input Prepend / Append (Icon / `Rp`)**: Fill `#F5F5F5`, Text `#737373`, Border `1px solid #E5E5E5`

---

## 🔣 7. Ikonografi (Iconography)

* **Icon Family**: [Tabler Icons](https://tabler.io/icons)
* **Stroke**: `2px` (Regular)
* **Ikon Kunci**:
  * **Navigasi Utama**: `ti-layout-dashboard` (Dasbor), `ti-shopping-cart` (Transaksi), `ti-building-warehouse` (Inventaris), `ti-report-analytics` (Laporan)
  * **Sub-Menu**: `ti-receipt` (Pencatatan), `ti-history` (Riwayat), `ti-box` (List Produk), `ti-category` (Kategori)
  * **Aksi & Tombol**: `ti-plus` (Tambah), `ti-edit` (Ubah), `ti-trash` (Hapus), `ti-chevron-right` (Panah Menu), `ti-layout-sidebar-left-expand` (Toggle Sidebar)
  * **Produk Icon**: `ti-package` (**Oranye `#E66239`**)

---

## 💡 8. Checklist Pembuatan Asset di Figma

1. **Color Styles**: Daftarkan token `Primary/Orange/500 (#E66239)`, `Primary/Orange/600 (#CF512A)`, `Primary/Subtle (#FDECE6)`, status semantic (`Success`, `Warning`, `Danger`), dan neutral scale.
2. **Typography Styles**: Buat text styles `H1` sampai `H6`, `Body Regular`, `Body Medium`, `Table Header`, dan `Badge`.
3. **Components & Variants**:
   * Buat master component `Button/Primary` dengan property `State: Default | Hover | Active`.
   * Buat master component `Sidebar/Item` dengan property `Active: True | False` (aktif dengan aksen oranye).
   * Buat master component `Badge/Stock` dengan varian `In Stock | Critical | Out of Stock`.
   * Buat master component `Table/Row` lengkap dengan icon box oranye.
