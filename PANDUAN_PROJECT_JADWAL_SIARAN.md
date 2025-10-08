# Panduan Lengkap Project Jadwal Siaran

## 📋 Daftar Isi

1. [Gambaran Umum Project](#gambaran-umum-project)
2. [Arsitektur MVC](#arsitektur-mvc)
3. [Struktur Database](#struktur-database)
4. [Sistem Role & Permissions](#sistem-role--permissions)
5. [Fitur Utama](#fitur-utama)
6. [Teknologi yang Digunakan](#teknologi-yang-digunakan)
7. [Struktur File dan Folder](#struktur-file-dan-folder)
8. [Cara Instalasi dan Setup](#cara-instalasi-dan-setup)
9. [Cara Menjalankan Project](#cara-menjalankan-project)
10. [API Endpoints](#api-endpoints)

---

## 🎯 Gambaran Umum Project

**Jadwal Siaran** adalah aplikasi web berbasis Laravel yang digunakan untuk mengelola jadwal siaran radio dengan sistem multi-role. Aplikasi ini memungkinkan pengelolaan program siaran, sequence, materi detail, dan penugasan petugas secara terstruktur.

### Tujuan Utama:

-   Mengelola program siaran radio
-   Menyusun sequence dan materi siaran
-   Mengatur jadwal petugas (produser, pengelola PEP, pengarah acara, dll.)
-   Menyediakan laporan jadwal harian
-   Memberikan akses berbeda berdasarkan role pengguna

---

## 🏗️ Arsitektur MVC

Project ini menggunakan **Model-View-Controller (MVC)** pattern dengan Laravel Framework:

### 📊 **Models** (`app/Models/`)

Models mewakili struktur data dan relasi antar tabel:

#### 1. **User Model**

-   Menyimpan data pengguna sistem
-   Memiliki field `role` untuk pembagian akses (admin, penyiar, katim, kepsta)
-   Relasi dengan berbagai model lain sebagai pembuat data

#### 2. **Program Model**

```php
// Relasi utama:
- pembuat(): BelongsTo User
- sequences(): HasMany Sequence
- jadwalPetugas(): HasMany JadwalPetugas
```

#### 3. **Sequence Model**

```php
// Relasi:
- program(): BelongsTo Program
- host(): BelongsTo User (penyiar)
- pembuat(): BelongsTo User
- items(): HasMany SequenceItem
```

#### 4. **SequenceItem Model**

```php
// Relasi:
- sequence(): BelongsTo Sequence
- pembuat(): BelongsTo User
- materiDetails(): HasMany MateriDetail
- itemDetails(): HasMany ItemDetail
```

#### 5. **JadwalPetugas Model**

-   Mengelola penugasan petugas untuk setiap program
-   Menyimpan data produser, pengelola PEP, pengarah acara, petugas LPU, penyiar dinas

### 🎮 **Controllers** (`app/Http/Controllers/`)

Controllers menangani logika bisnis dan request handling:

#### Admin Controllers:

-   **UserController**: CRUD pengguna
-   **ProgramController**: CRUD program siaran
-   **SequenceController**: CRUD sequence
-   **SequenceItemController**: CRUD item sequence
-   **MateriDetailController**: Kelola detail materi
-   **ItemDetailController**: Kelola detail item
-   **JadwalPetugasController**: Kelola jadwal petugas

#### Penyiar Controllers:

-   **JadwalController**: Lihat jadwal siaran

#### Shared Controllers:

-   **DashboardController**: Dashboard berdasarkan role
-   **LaporanController**: Laporan jadwal harian
-   **ProfileController**: Kelola profil pengguna

### 🎨 **Views** (`resources/views/`)

Views menggunakan Blade templating engine dengan struktur:

#### Layout Structure:

-   `layouts/app.blade.php`: Layout utama untuk user yang login
-   `layouts/guest.blade.php`: Layout untuk halaman guest
-   `layouts/navigation.blade.php`: Komponen navigasi

#### View Organization:

-   `admin/`: Views untuk admin (CRUD semua data)
-   `penyiar/`: Views untuk penyiar (jadwal dan materi)
-   `laporan/`: Views untuk laporan
-   `auth/`: Views untuk autentikasi
-   `components/`: Komponen Blade yang dapat digunakan ulang

---

## 🗄️ Struktur Database

### Tabel Utama:

#### 1. **users**

```sql
- id (Primary Key)
- name
- email
- password
- role (admin, penyiar, katim, kepsta)
- timestamps
```

#### 2. **programs**

```sql
- id (Primary Key)
- nama
- alias (nullable)
- deskripsi (nullable)
- dibuat_oleh (Foreign Key → users.id)
- timestamps
```

#### 3. **sequences**

```sql
- id (Primary Key)
- program_id (Foreign Key → programs.id)
- nama
- waktu
- host_id (Foreign Key → users.id)
- frame
- durasi
- dibuat_oleh (Foreign Key → users.id)
- timestamps
```

#### 4. **sequence_items**

```sql
- id (Primary Key)
- sequence_id (Foreign Key → sequences.id)
- materi
- frame (nullable)
- durasi (nullable)
- keterangan (nullable)
- dibuat_oleh (Foreign Key → users.id)
- timestamps
```

#### 5. **jadwal_petugas**

```sql
- id (Primary Key)
- tanggal
- program_id (Foreign Key → programs.id)
- produser_id (Foreign Key → users.id, nullable)
- pengelola_pep_id (Foreign Key → users.id, nullable)
- pengarah_acara_id (Foreign Key → users.id, nullable)
- petugas_lpu_id (Foreign Key → users.id, nullable)
- penyiar_dinas_id (Foreign Key → users.id, nullable)
- dibuat_oleh (Foreign Key → users.id)
- timestamps
- UNIQUE(tanggal, program_id)
```

#### 6. **materi_details** & **item_details**

-   Tabel untuk menyimpan detail tambahan materi dan item

---

## 🔐 Sistem Role & Permissions

### Role yang Tersedia:

#### 1. **Admin**

-   **Akses**: Full CRUD semua data
-   **Fitur**:
    -   Kelola pengguna
    -   Kelola program siaran
    -   Kelola sequence dan items
    -   Kelola jadwal petugas
    -   Lihat dashboard dengan statistik

#### 2. **Penyiar**

-   **Akses**: Terbatas pada jadwal dan materi yang ditugaskan
-   **Fitur**:
    -   Lihat jadwal siaran pribadi
    -   Edit materi dan item detail
    -   Dashboard dengan jadwal terdekat

#### 3. **Katim & Kepsta**

-   **Akses**: Hanya laporan
-   **Fitur**:
    -   Lihat laporan jadwal harian
    -   Cetak laporan

### Middleware Protection:

```php
// Route protection berdasarkan role
Route::middleware(['role:admin'])->group(function () {
    // Admin routes
});

Route::middleware(['role:penyiar'])->group(function () {
    // Penyiar routes
});

Route::middleware(['role:kepsta,katim'])->group(function () {
    // Laporan routes
});
```

---

## ⚡ Fitur Utama

### 1. **Manajemen Program Siaran**

-   Tambah, edit, hapus program siaran
-   Set nama, alias, dan deskripsi program
-   Track siapa yang membuat program

### 2. **Manajemen Sequence**

-   Buat sequence untuk setiap program
-   Set waktu, host, frame, dan durasi
-   Relasi dengan program dan penyiar

### 3. **Manajemen Materi Siaran**

-   Tambah item-item dalam sequence
-   Kelola detail materi dan item
-   Set durasi dan keterangan

### 4. **Penjadwalan Petugas**

-   Assign petugas untuk setiap program
-   Kelola berbagai posisi (produser, pengelola PEP, dll.)
-   Prevent duplikasi jadwal per tanggal

### 5. **Dashboard Berdasarkan Role**

-   **Admin**: Statistik sistem
-   **Penyiar**: Jadwal terdekat
-   **Katim/Kepsta**: Akses laporan

### 6. **Sistem Laporan**

-   Laporan jadwal harian
-   Fitur cetak laporan
-   Export data

### 7. **Authentication & Authorization**

-   Login/logout system
-   Role-based access control
-   Profile management

---

## 🛠️ Teknologi yang Digunakan

### Backend:

-   **Laravel 12.x** - PHP Framework
-   **PHP 8.2+** - Programming Language
-   **MySQL/SQLite** - Database
-   **Laravel Breeze** - Authentication scaffolding
-   **Maatwebsite Excel** - Excel export functionality

### Frontend:

-   **Blade Templating** - Server-side templating
-   **Tailwind CSS** - CSS Framework
-   **Alpine.js** - JavaScript framework (via Laravel Breeze)
-   **Vite** - Build tool

### Development Tools:

-   **Laravel Debugbar** - Development debugging
-   **Laravel Pint** - Code formatting
-   **PHPUnit** - Testing framework
-   **Laravel Pail** - Log monitoring

---

## 📁 Struktur File dan Folder

```
jadwalsiaran/
├── app/                          # Application core
│   ├── Http/Controllers/         # Controllers
│   │   ├── Admin/               # Admin controllers
│   │   └── Penyiar/             # Penyiar controllers
│   ├── Models/                   # Eloquent models
│   ├── Providers/               # Service providers
│   └── View/Components/         # Blade components
├── bootstrap/                    # Application bootstrap
├── config/                      # Configuration files
├── database/
│   ├── migrations/              # Database migrations
│   ├── seeders/                 # Database seeders
│   └── factories/               # Model factories
├── public/                      # Web root
├── resources/
│   ├── views/                   # Blade templates
│   │   ├── admin/              # Admin views
│   │   ├── penyiar/            # Penyiar views
│   │   ├── laporan/            # Report views
│   │   ├── auth/               # Auth views
│   │   └── layouts/            # Layout templates
│   ├── css/                    # Stylesheets
│   └── js/                     # JavaScript files
├── routes/                      # Route definitions
├── storage/                     # File storage
├── tests/                       # Test files
└── vendor/                      # Composer dependencies
```

---

## 🚀 Cara Instalasi dan Setup

### Prerequisites:

-   PHP 8.2 atau lebih tinggi
-   Composer
-   Node.js & NPM
-   MySQL/SQLite
-   Laragon (untuk Windows) atau XAMPP

### Langkah-langkah:

#### 1. Clone/Download Project

```bash
# Jika dari git repository
git clone <repository-url>
cd jadwalsiaran
```

#### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

#### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### 4. Database Configuration

Edit file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jadwalsiaran
DB_USERNAME=root
DB_PASSWORD=
```

#### 5. Database Migration & Seeding

```bash
# Run migrations
php artisan migrate

# Seed database dengan data awal
php artisan db:seed
```

#### 6. Build Assets

```bash
# Build CSS dan JavaScript
npm run build

# Atau untuk development dengan hot reload
npm run dev
```

---

## ▶️ Cara Menjalankan Project

### Development Mode:

```bash
# Jalankan server Laravel
php artisan serve

# Di terminal terpisah, jalankan Vite untuk hot reload
npm run dev

# Atau gunakan composer script
composer run dev
```

### Production Mode:

```bash
# Build assets untuk production
npm run build

# Optimize Laravel untuk production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Akses Aplikasi:

-   **URL**: http://localhost:8000
-   **Default Admin**: Periksa seeder untuk kredensial default

---

## 🌐 API Endpoints

### Authentication Routes:

-   `GET /login` - Halaman login
-   `POST /login` - Proses login
-   `POST /logout` - Logout

### Admin Routes (Prefix: `/admin`):

```
GET    /admin/users              # Daftar pengguna
POST   /admin/users              # Tambah pengguna
GET    /admin/users/{id}/edit    # Edit pengguna
PUT    /admin/users/{id}         # Update pengguna
DELETE /admin/users/{id}         # Hapus pengguna

GET    /admin/programs           # Daftar program
POST   /admin/programs           # Tambah program
GET    /admin/programs/{id}/edit # Edit program
PUT    /admin/programs/{id}      # Update program
DELETE /admin/programs/{id}      # Hapus program

GET    /admin/programs/{program}/sequences        # Daftar sequence
POST   /admin/programs/{program}/sequences        # Tambah sequence
GET    /admin/sequences/{sequence}/edit           # Edit sequence
PUT    /admin/sequences/{sequence}                # Update sequence
DELETE /admin/sequences/{sequence}                # Hapus sequence

GET    /admin/sequences/{sequence}/items          # Daftar items
POST   /admin/sequences/{sequence}/items          # Tambah item
GET    /admin/items/{item}/edit                   # Edit item
PUT    /admin/items/{item}                        # Update item
DELETE /admin/items/{item}                        # Hapus item

GET    /admin/programs/{program}/petugas          # Daftar jadwal petugas
POST   /admin/programs/{program}/petugas          # Tambah jadwal petugas
GET    /admin/petugas/{petugas}/edit              # Edit jadwal petugas
PUT    /admin/petugas/{petugas}                   # Update jadwal petugas
DELETE /admin/petugas/{petugas}                   # Hapus jadwal petugas
```

### Penyiar Routes (Prefix: `/penyiar`):

```
GET    /penyiar/jadwal                           # Jadwal penyiar
GET    /penyiar/sequences/{sequence}/items       # Items sequence
POST   /penyiar/sequences/{sequence}/items       # Tambah item
PUT    /penyiar/items/{item}                     # Update item
```

### Laporan Routes (Prefix: `/laporan`):

```
GET    /laporan/jadwal-harian                    # Laporan harian
GET    /laporan/jadwal-harian/cetak              # Cetak laporan
```

### Common Routes:

```
GET    /dashboard                                # Dashboard berdasarkan role
GET    /profile                                  # Edit profil
PUT    /profile                                  # Update profil
```

---

## 📝 Catatan Penting

### Security:

-   Semua route admin dilindungi dengan middleware `role:admin`
-   Route penyiar dilindungi dengan middleware `role:penyiar`
-   Route laporan dilindungi dengan middleware `role:kepsta,katim`
-   Menggunakan Laravel Breeze untuk authentication yang aman

### Performance:

-   Menggunakan Eloquent relationships untuk efisiensi query
-   Pagination untuk data yang banyak
-   Caching untuk optimasi (dapat diaktifkan untuk production)

### Maintenance:

-   Log file tersimpan di `storage/logs/`
-   Backup database secara berkala
-   Update dependencies secara rutin

### Customization:

-   Styling dapat diubah di `resources/css/app.css`
-   JavaScript dapat ditambahkan di `resources/js/app.js`
-   Komponen Blade dapat dibuat di `app/View/Components/`

---

## 🆘 Troubleshooting

### Common Issues:

#### 1. **Permission Error**

```bash
# Set permission untuk storage dan bootstrap/cache
chmod -R 775 storage bootstrap/cache
```

#### 2. **Database Connection Error**

-   Pastikan database service berjalan
-   Periksa konfigurasi di `.env`
-   Jalankan `php artisan config:clear`

#### 3. **Asset Not Loading**

```bash
# Rebuild assets
npm run build
# atau
npm run dev
```

#### 4. **Route Not Found**

```bash
# Clear route cache
php artisan route:clear
php artisan config:clear
```

---

## 📞 Support

Untuk pertanyaan atau bantuan teknis, silakan hubungi tim development atau buat issue di repository project.

---

**Terakhir diperbarui**: {{ date('Y-m-d') }}
**Versi Laravel**: 12.x
**Versi PHP**: 8.2+

