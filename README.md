# Product Registration System 

A simple Laravel-based Product Management module developed for the **Skill Lab Intern Selection Process**.  
The system supports basic **Create** and **Read** operations using a MySQL database.

---

## 🚀 Features

- **Product List** — A clean Bootstrap-powered table displaying all registered products
- **Add Product** — A form to register new products with real-time validation feedback
- **Strict Validation:**
  - Names and Categories are restricted to alphabetic characters only (no numbers allowed)
  - Price and Quantity are strictly numeric with minimum value requirements
- **Security** — CSRF protection and Mass Assignment protection via Eloquent Models

---

## 🛠️ Tech Stack

| Layer      | Technology        |
|------------|-------------------|
| Framework  | Laravel 12        |
| Language   | PHP 8.2           |
| Database   | MySQL 8.0         |
| Frontend   | HTML + Bootstrap (CDN) |

---

## 📥 Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/KalpaVidusha/Kalpa_store_LaravelBasic.git
cd Kalpa_store_LaravelBasic
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Create the Database

Open **MySQL Workbench** and run:
```sql
CREATE DATABASE product_store;
```

### 5. Configure `.env`

Open the `.env` file and update the database section:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product_store
DB_USERNAME=root
DB_PASSWORD=
```
> Leave `DB_PASSWORD` empty if you have no MySQL root password set.

### 6. Run Migrations
```bash
php artisan migrate
```

### 7. Start the Server
```bash
php artisan serve
```

Visit → [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📹 Demo Video

[▶️ Click here to watch the screen recording](YOUR_GOOGLE_DRIVE_LINK_HERE)

