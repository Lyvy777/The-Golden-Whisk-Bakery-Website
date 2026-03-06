# The Golden Whisk Bakery Website
The Golden Whisk is a simple bakery website designed to showcase delicious products and provide an easy user experience for browsing items, learning about the brand, and contacting the business.  

## Project Overview
The Golden Whisk website simulates an online bakery where users can:
- View featured bakery products
- Learn about the brand
- Contact the business
- Access login or signup forms
- Navigate through a visually styled interface

## Features
- Responsive product display layout
- Hero section for introduction
- Product cards with images
- Authentication form (Login / Signup)
- Contact form and contact information
- About section with image and description
- Hover effects and interactive buttons

## Technologies Used
- Frontend - HTML5, CSS3 (Custom Cherry/Rose theme), JavaScript
- Backend - PHP (Individualized variable logic)
- Database - MySQL 
- Tools - XAMPP, VS Code

## How to Run the Project
To run this project locally, follow these steps:

### 1. Prerequisites
Ensure you have XAMPP installed on your machine.

### 2. Database Setup
- Open **phpMyAdmin**.
- Create a new database named `golden_whisk_db`.
- Import the following SQL structure:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT
);
```

### 3. Folder Configuration
Clone this repository into your htdocs folder for XAMPP users.

### 4. Running the App
Navigate to `https://localhost/The Golden Whisk/index.html` in your web browser.

## Purpose
- Created as a web development project.
  
## Author
Lyvia Gekonge
