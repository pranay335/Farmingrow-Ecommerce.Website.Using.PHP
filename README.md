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

3. Click **Import**
4. Select the file:

```
farmingrow (6).sql
```

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

## 🔐 Security Notes

* Do NOT upload database credentials publicly
* Use `.gitignore` to exclude:

```
.env
config.env
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
