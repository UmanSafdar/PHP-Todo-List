# PHP Todo List

A simple **Todo List application** built with PHP and MySQL.  
This project allows you to **add tasks, mark tasks as complete/undo, and delete tasks**. Perfect for beginners to learn PHP CRUD operations.

---

## 🛠️ Features

- Add new tasks  
- Mark tasks as **complete** (strike-through effect)  
- Undo completed tasks  
- Delete tasks  
- Simple and clean user interface  

---

## 💻 Technologies Used

- **PHP** – Server-side scripting  
- **MySQL** – Database for storing tasks  
- **HTML & CSS** – Frontend layout and styling  
- Optional: **Bootstrap** (if you want to use it for better UI)  

---
## 🗂️ Project Structure


php-todo-list/
│
├─ index.php # Main project file
├─ style.css # CSS styling
├─ database.sql # Database structure
├─ config.example.php # Example database config
├─ .gitignore
└─ README.md
---
Setup Instructions (Locally)

Clone the repository:
git clone https://github.com/YourUsername/php-todo-list.git

Create the database:

Open database.sql in phpMyAdmin or MySQL CLI

Run the SQL commands:

CREATE DATABASE todolist;

USE todolist;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status VARCHAR(50) DEFAULT ''
);

Configure database connection:

Copy config.example.php → config.php

Edit config.php with your MySQL credentials:

$servername = "localhost";
$username = "root";
$password = "";
$database = "todolist";

Run the project:

Place your project folder in your local server (XAMPP/WAMP/MAMP)

Open browser and go to:
http://localhost/php-todo-list/index.php

