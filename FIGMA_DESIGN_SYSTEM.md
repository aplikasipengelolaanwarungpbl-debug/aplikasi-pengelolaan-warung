# 🎨 Figma Design System & Style Guide
**Aplikasi Pengelolaan Warung (WarungApp)**
> Dokumen panduan desain lengkap untuk mempermudah perancangan UI di **Figma** agar 100% konsisten dan presisi dengan kode implementasi web.

---

## 1. 🔤 Tipografi (Typography)

* **Primary Font Family**: [`Poppins`](https://fonts.google.com/specimen/Poppins) (Google Fonts)
* **Fallback**: `sans-serif`
* **Base Body Size**: `14px` (`0.875rem`)
* **Base Line Height**: `1.5` (~`21px`)

### 📌 Skala Tipografi (Type Scale)

| Level / Elemen | Font Size (px / rem) | Font Weight | Line Height | Letter Spacing | Keterangan & Penggunaan |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Heading 1 (H1)** | `32px` (`2rem`) | **700 (Bold)** | `1.25` (`40px`) | normal | Header besar / Judul utama |
| **Heading 2 (H2)** | `28px` (`1.75rem`) | **700 (Bold)** | `1.3` (`36px`) | normal | Judul section utama |
| **Heading 3 (H3)** | `24px` (`1.5rem`) | **700 (Bold)** | `1.3` (`31px`) | normal | Judul halaman (cth: *Daftar Produk Warung*) |
| **Heading 4 (H4)** | `20px` (`1.25rem`) | **600 (SemiBold)** | `1.4` (`28px`) | normal | Subjudul halaman / Card title besar |
| **Heading 5 (H5)** | `16px` (`1rem`) | **600 (SemiBold)** | `1.4` (`22px`) | normal | Card header title (cth: *Stok Produk*, *Informasi Produk*) |
| **Heading 6 (H6)** | `14px` (`0.875rem`) | **600 (SemiBold)** | `1.4` (`20px`) | normal | Nama produk dalam tabel, dropdown header |
| **Body (Default)** | `14px` (`0.875rem`) | **400 (Regular)** | `1.5` (`21px`) | normal | Teks umum, form input, tabel isi |
| **Body Medium** | `14px` (`0.875rem`) | **500 (Medium)** | `1.5` (`21px`) | normal | Label form, navigasi aktif, harga produk |
| **Body Small** | `13px` (`0.8125rem`) | **400 (Regular)** | `1.5` (`19.5px`) | normal | Sidebar submenu link |
| **Small / Caption** | `12px` (`0.75rem`) | **400 (Regular)** | `1.4` (`17px`) | normal | ID produk (`#ID`), helper text form, breadcrumbs |
| **Table Header** | `12px` (`0.75rem`) | **400 (Regular)** | `1.4` (`17px`) | `+0.5px` (UPPERCASE) | Kolom tabel (`NO`, `NAMA PRODUK`, `HARGA`, `STOK`, `AKSI`) |
| **Badge Text** | `12px` (`0.75rem`) | **500 (Medium)** | `1.2` (`14px`) | normal | Status stok produk |

---

## 2. 🎨 Palet Warna (Color Palette)

### A. Primary Brand (Warna Utama Warung)
| Tipe | Hex Code | RGB | Opacity / Keterangan |
| :--- | :--- | :--- | :--- |
| **Primary Base** | `#E66239` | `230, 98, 57` | Warna utama tombol, aksen aktif, logo, icon |
| **Primary Hover / Dark** | `#CF512A` | `207, 81, 42` | Status hover / active button primary |
| **Primary Subtle (Background)**| `#E66239` | `230, 98, 57` | `12%` opacity (`rgba(230, 98, 57, 0.12)`) |
| **Primary Nav Active** | `#E66239` | `230, 98, 57` | `9.5%` opacity (`rgba(230, 98, 57, 0.095)`) |

### B. Semantic & Status (Indikator & Alert)
| Status | Solid (Hex) | RGB | Subtle BG (Figma Frame/Pill) | Border / Text Accent |
| :--- | :--- | :--- | :--- | :--- |
| **Success** (Stok Aman / Online) | `#00C951` | `0, 201, 81` | `#E6F9EE` / `rgba(0, 201, 81, 0.1)` | `#00C951` |
| **Warning** (Stok Kritis ≤ 5 / Away) | `#F0B100` | `240, 177, 0` | `#FEF7E6` / `rgba(240, 177, 0, 0.12)`| `#F0B100` / `#946C00` |
| **Danger** (Stok Habis 0 / Busy / Hapus) | `#FB2C36` | `251, 44, 54` | `#FFEAEB` / `rgba(251, 44, 54, 0.1)` | `#FB2C36` |
| **Info** (Informasi / Info Status) | `#00B8DB` | `0, 184, 219` | `#E6F8FB` / `rgba(0, 184, 219, 0.12)`| `#00B8DB` |

### C. Neutral & Grayscale
| Nama Warna | Hex Code | Penggunaan di Desain |
| :--- | :--- | :--- |
| **Dark (Heading & Title)** | `#171717` | Teks judul utama, logo text |
| **Body Color** | `#262626` | Teks default antarmuka |
| **Nav / Link Default** | `#404040` | Menu link sidebar (idle), dropdown items |
| **Secondary (Sub-label)** | `#525252` | Label form, nomor urut tabel, ikon secondary |
| **Muted Text** | `#737373` | Header tabel, subtitle, keterangan tambahan |
| **Offline / Placeholder** | `#A3A3A3` | Status offline avatar, icon placeholder |
| **Border / Divider** | `#E5E5E5` | Border card, garis pemisah tabel, border sidebar/topbar |
| **Border Translucent** | `rgba(0, 0, 0, 0.08)` | Border subtle |
| **Light BG (Secondary Surface)**| `#F5F5F5` | Background input prepend (Rp/Icon), thead tabel, avatar bg |
| **App Canvas BG** | `#F8F9FA` | Latar belakang seluruh halaman web (`body`) |
| **Card & Sidebar Surface** | `#FFFFFF` | Latar belakang kartu (Card), Sidebar, Topbar |

---

## 3. 📐 Spasi, Ukuran Layout & Grid (Spacing & Layout Dimensions)

* **Grid Base**: Kelipatan `4px` / `8px`

### A. Layout Master Frame Figma (Desktop: 1440px / 1280px)
| Komponen Layout | Nilai / Dimensi | Posisi / Catatan |
| :--- | :--- | :--- |
| **Sidebar (Expanded)** | Width: `240px`, Height: `100vh` | Fixed kiri, Border kanan `1px solid #E5E5E5` |
| **Sidebar (Collapsed Mini)**| Width: `60px`, Height: `100vh` | Mode ringkas |
| **Topbar Navbar** | Height: `60px`, Width: `calc(100% - 240px)` | Fixed atas, Border bawah `1px solid #E5E5E5` |
| **Main Content Canvas** | Margin-Left: `240px`, Padding Top: `75px` | Content wrapper |
| **Page Container Padding** | Horizontal: `16px` (Mobile) / `24px` (Desktop) | `px-3 px-lg-4`, `py-4` (`24px`) |

### B. Spacing Scale
| Token / Class | Pixels | Rem | Contoh Pemakaian |
| :--- | :--- | :--- | :--- |
| **space-1** | `4px` | `0.25rem` | Jarak antar elemen sangat rapat, badge vertical padding |
| **space-2** | `8px` | `0.5rem` | Gap antar badge, tombol icon kecil, form label bottom margin |
| **space-3** | `12px` | `0.75rem` | Gap menu sidebar, padding input form |
| **space-4** | `16px` | `1.0rem` | Padding card header, padding horizontal table cell |
| **space-5** | `20px` | `1.25rem` | Gap card / grid kolom |
| **space-6** | `24px` | `1.5rem` | Padding card body (`p-4`), margin bottom header halaman (`mb-4`) |
| **space-7** | `40px` | `2.5rem` | Section spacing (`py-6`, `my-6`) |
| **space-8** | `48px` | `3.0rem` | Jarak antar block besar (`py-7`) |

---

## 4. 🔲 Border Radius & Shadows (Sudut & Efek Bayangan)

### Border Radius (Corner Radius)
* **Small (`rounded-1` / Badges)**: `6px` (`0.375rem`)
* **Medium (`rounded-2` / Buttons, Cards, Inputs, Sidebar Items)**: `8px` (`0.5rem`)
* **Full Circular (`rounded-circle` / Avatar, Status Dot)**: `50%` / `9999px`

### Shadows (Box Shadows di Figma)
* **Card & Default Container (`shadow-sm`)**:
  * `X: 0`, `Y: 1`, `Blur: 3`, `Spread: 0`, Color: `#000000` (`Opacity: 5%`)
* **Flyout / Popover / Dropdown Menu**:
  * `X: 0`, `Y: 8`, `Blur: 24`, `Spread: 0`, Color: `#000000` (`Opacity: 12%`)
* **Modal / Backdrop Overlay**:
  * Fill: `#000000` (`Opacity: 45%`), `Background Blur: 1px`

---

## 5. 🧩 Spesifikasi Komponen UI (UI Component Specs)

### A. Tombol (Buttons)

#### 1. Primary Button (`.btn-primary`)
* **Height**: `38px` (Standard) / `42px` (Large)
* **Padding**: `8px 16px` (`px-4`: `8px 24px`)
* **Border Radius**: `6px` - `8px`
* **Background**: `#E66239`
* **Text**: Color `#FFFFFF`, Size `14px`, Weight `500 (Medium)`
* **Hover State**: Background `#CF512A`
* **Shadow**: Optional `0 1px 2px rgba(0,0,0,0.05)`

#### 2. Outline Button (`.btn-outline-primary` / `.btn-outline-secondary` / `.btn-outline-danger`)
* **Height**: `38px`
* **Padding**: `8px 16px`
* **Border**: `1px solid` (Warna sesuai varian)
* **Background**: `Transparent`
* **Text Color**: Sesuai varian (`#E66239` / `#525252` / `#FB2C36`)

#### 3. Icon Action Button (`.btn-icon`)
| Varian | Ukuran Frame (Width x Height) | Font/Icon Size | Corner Radius |
| :--- | :--- | :--- | :--- |
| **btn-icon xs** | `28px x 28px` (`1.75rem`) | `12px` | `6px` |
| **btn-icon sm** (Tabel Aksi)| `35px x 35px` (`2.1875rem`) | `14px` | `6px` |
| **btn-icon default** | `40px x 40px` (`2.5rem`) | `15px` | `8px` |
| **btn-icon lg** | `54px x 54px` (`3.375rem`) | `16px` | `8px` |

---

### B. Form Input (`.form-control`, `.input-group`)
* **Height**: `38px` - `40px`
* **Corner Radius**: `6px`
* **Border**: `1px solid #E5E5E5`
* **Background**: `#FFFFFF`
* **Text**: `14px Poppins`, `#262626`
* **Placeholder Text**: `#A3A3A3`
* **Input Prepend/Append (`.input-group-text`)**:
  * Background: `#F5F5F5`
  * Text/Icon Color: `#737373`
  * Border: `1px solid #E5E5E5`
  * Width: `~42px` (atau auto sesuai teks "Rp")

---

### C. Kartu & Tabel (Cards & Tables)

#### Card Container:
* **Background**: `#FFFFFF`
* **Border**: `1px solid #E5E5E5`
* **Border Radius**: `8px`
* **Shadow**: `0 1px 3px rgba(0,0,0,0.05)`
* **Header Padding**: `16px` (Vertical `12px - 16px`, Horizontal `16px`)
* **Body Padding**: `24px` (`p-4`)

#### Data Table:
* **Header Cell (`th`)**:
  * Background: `#F8F9FA` atau `#F5F5F5`
  * Height / Padding: `14px 16px` (`0.9rem 1rem`)
  * Typography: `12px`, Weight `400`, Color `#737373`, Text Transform `UPPERCASE`
* **Row Cell (`td`)**:
  * Height / Padding: `14px 16px` (`0.9rem 1rem`)
  * Divider: Border Bottom `1px solid #E5E5E5`
  * Row Hover: Background `#F8F9FA`
* **Product Icon Box in Table**:
  * Size: `40px x 40px`
  * Background: `#F5F5F5`
  * Icon Color: `#E66239`
  * Border Radius: `6px`

---

### D. Badges Status Stok (`.badge-stock`)
* **Padding**: `4px 8px`
* **Border Radius**: `6px`
* **Typography**: `12px Poppins`, Weight `500 (Medium)`
* **Variasi Desain**:
  1. **Stok Aman (In Stock)**:
     * Background: `#E6F9EE` (`rgba(0, 201, 81, 0.12)`)
     * Border: `1px solid #B3F0CB`
     * Text: `#00C951`
     * Format: `{stok} pcs`
  2. **Stok Kritis (≤ 5 pcs)**:
     * Background: `#FEF7E6` (`rgba(240, 177, 0, 0.12)`)
     * Border: `1px solid #FCE4A6`
     * Text: `#B88700`
     * Format: `{stok} (Kritis)`
  3. **Stok Habis (0 pcs)**:
     * Background: `#FFEAEB` (`rgba(251, 44, 54, 0.12)`)
     * Border: `1px solid #FFC0C3`
     * Text: `#FB2C36`
     * Format: `Habis (0)`

---

### E. Avatar & Indikator Pengguna (`.avatar`)
* **Avatar Sizes**:
  * `avatar-xs`: `24px x 24px`
  * `avatar-sm`: `32px x 32px` (Digunakan di Topbar Nav)
  * `avatar-md`: `40px x 40px`
  * `avatar-lg`: `56px x 56px`
  * `avatar-xl`: `80px x 80px`
* **Border Radius**: `50%` (Circular)
* **Status Dot (`.avatar-indicators`)**:
  * Diameter: `30%` dari lebar avatar
  * Posisi: `Bottom-Right (5%)`
  * Border: `2px solid #FFFFFF`
  * Pilihan Warna: `#00C951` (Online), `#FB2C36` (Busy), `#F0B100` (Away), `#A3A3A3` (Offline)

---

### F. Sidebar Navigation Menu (`.sidebar`)
* **Sidebar Width**: `240px`
* **Sidebar Logo Area**: Height `60px`, Padding-Left `17px`, Border Bottom `1px solid #E5E5E5`
* **Nav Item (`.nav-link`)**:
  * Height: `40px`
  * Margin: `1px 12px` (Horizontal Margin `12px`)
  * Padding: `8px 10px`
  * Corner Radius: `8px`
  * Gap (Icon to Text): `12px`
  * Typography: `14px Poppins`
  * **Idle State**: Text `#404040`, Icon `#404040`, Background `Transparent`
  * **Hover State**: Text `#E66239`, Icon `#E66239`, Background `rgba(230, 98, 57, 0.095)`
  * **Active State**: Text `#E66239`, Icon `#E66239`, Background `rgba(230, 98, 57, 0.095)`, Font Weight `500`
* **Submenu Item (`.sidebar-submenu .nav-link`)**:
  * Height: `34px`
  * Padding: `7px 14px 7px 26px`
  * Typography: `13px Poppins`
  * Margin: `2px 12px`

---

## 6. 🔣 Icon Library & Icon Shape

* **Icon Set**: [Tabler Icons](https://tabler.io/icons)
* **Icon Stroke / Weight**: `Regular (2px)` atau `1.5px`
* **Daftar Ikon yang Digunakan**:
  * Dashboard: `ti ti-layout-dashboard`
  * Transaksi: `ti ti-shopping-cart`, `ti ti-receipt`, `ti ti-history`
  * Inventaris / Produk: `ti ti-building-warehouse`, `ti ti-box`, `ti ti-package`, `ti ti-category`, `ti ti-layers-intersect`
  * Laporan: `ti ti-report-analytics`
  * Navigasi & Aksi: `ti ti-plus`, `ti ti-edit`, `ti ti-trash`, `ti ti-chevron-right`, `ti ti-arrow-left`, `ti ti-device-floppy`, `ti ti-layout-sidebar-left-expand`, `ti ti-logout`

---

## 💡 Quick Tips untuk Desain di Figma

1. **Buat Color Styles di Figma** menggunakan nama token di atas (contoh: `Primary/Base`, `Semantic/Success`, `Grayscale/Border`).
2. **Buat Text Styles** dengan font `Poppins` mengikuti tabel skala tipografi di Bagian 1.
3. **Gunakan Auto Layout**:
   * Card Header & Table Cell: Auto Layout horizontal, `padding: 12px 16px`.
   * Form Group: Auto Layout vertical, `gap: 8px`.
   * Button: Auto Layout horizontal, `padding: 8px 16px`, `gap: 6px`.
4. **Install Tabler Icons Plugin** di Figma agar icon vector sama persis dengan web font yang digunakan.
