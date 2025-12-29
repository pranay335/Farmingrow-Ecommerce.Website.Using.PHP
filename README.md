# 🌾 FarmingRow – E‑Commerce Website for Agricultural Products

**FarmingRow** is a full‑stack **e‑commerce web application** developed using **HTML, CSS, JavaScript, PHP, and MySQL**. It is designed specifically for buying and selling **farming and agricultural products** online, providing a clean user experience and a complete **Admin + User** workflow.

This project is built to run on a **XAMPP server** and is suitable for **college projects, GitHub portfolios, and placement discussions**.

---

## 🚜 Project Overview

FarmingRow digitizes the agricultural marketplace by allowing users to browse farming products, place orders, and manage purchases online, while administrators can manage products, categories, and orders from a dedicated dashboard.

It addresses the real‑world problem of **limited digital platforms for agriculture‑focused e‑commerce**.

---

## ✨ Key Features

### 👤 User Side

* User registration & login
* Browse agricultural products
* Product categories (fruits, vegetables, tools, etc.)
* Add to cart & checkout
* Order summary and billing

### 🛠️ Admin Side

* Admin login
* Add / update / delete products
* Manage categories
* View and manage orders
* Basic inventory control

---

## 🛠️ Tech Stack

### Frontend

* HTML
* CSS
* JavaScript

### Backend

* PHP (Core PHP)

### Database

* MySQL

### Server

* **XAMPP (Apache + MySQL)**

---

## 🗄️ Database Details

* Database file included: **`farmingrow (6).sql`**
* Contains tables for users, products, orders, cart, and admin
* Uses relational structure with primary keys

---

## 📂 Project Structure

```
FarmingRow/
│── finalfarmin/        # Main PHP project folder
│── farmingrow (6).sql  # Database file
│── README.md
```

---

## ⚙️ Installation & Setup (Using XAMPP)

Follow these steps carefully to run the project locally.

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/your-username/FarmingRow-Ecommerce.git
```

### 2️⃣ Move Project to XAMPP

* Copy the **`finalfarmin`** folder
* Paste it into:

```
C:/xampp/htdocs/
```

Your path should look like:

```
C:/xampp/htdocs/finalfarmin
```

---

### 3️⃣ Start XAMPP Services

* Open **XAMPP Control Panel**
* Start **Apache**
* Start **MySQL**

---

### 4️⃣ Create Database

1. Open browser and go to:

```
http://localhost/phpmyadmin
```

2. Create a new database (example):

```
farmingrow
```
-- ===============================
-- FarmingRow Ecommerce Database
-- ===============================

CREATE DATABASE IF NOT EXISTS farmingrow;
USE farmingrow;

-- Disable foreign key checks
SET FOREIGN_KEY_CHECKS = 0;

-- ===============================
-- Drop tables if exist (safe reset)
-- ===============================
DROP TABLE IF EXISTS order_items;
DROP TABLE IF EXISTS payments;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS cart;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS admins;

-- ===============================
-- Admin Table
-- ===============================
CREATE TABLE admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- ===============================
-- Users Table
-- ===============================
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(15),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ===============================
-- Categories Table
-- ===============================
CREATE TABLE categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(100) NOT NULL
);

-- ===============================
-- Products Table
-- ===============================
CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    product_name VARCHAR(150) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

-- ===============================
-- Cart Table
-- ===============================
CREATE TABLE cart (
    cart_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    quantity INT DEFAULT 1,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);

-- ===============================
-- Orders Table
-- ===============================
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total_amount DECIMAL(10,2),
    order_status VARCHAR(50) DEFAULT 'Pending',
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- ===============================
-- Order Items Table
-- ===============================
CREATE TABLE order_items (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    price DECIMAL(10,2),
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);

-- ===============================
-- Payments Table (Optional)
-- ===============================
CREATE TABLE payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    payment_method VARCHAR(50),
    payment_status VARCHAR(50),
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(order_id)
);

-- Enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1;

5. Click **Go**

---

### 5️⃣ Configure Database Connection

Open the database configuration file (usually inside the project):

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "farmingrow";
```

---

### 6️⃣ Run the Project

Open browser and visit:

```
http://localhost/finalfarmin
```

---


## 📈 Future Enhancements

* Online payment gateway integration
* Product reviews & ratings
* Order tracking system
* Mobile‑responsive UI
* Farmer‑specific dashboards

---

## 👨‍🎓 Developed By

**Pranay Bhere**
CSE – AI & ML

---

## 📜 License

This project is created for **educational purposes only**.

---

⭐ *If you find this project useful, consider giving it a star on GitHub!*
