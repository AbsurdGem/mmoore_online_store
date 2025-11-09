# mmoore_online_store
A simple PHP-based online store with shopping cart and checkout functionality.
mmoore_online_store – PHP Online Store Project

Author: Morgan Moore
Course: SDC310 – PHP Web Application Development
Term: Fall 2025
📌 Project Overview

This project is a simplified online store built using PHP, MySQL, and XAMPP, following the course requirements for SDC310. The application allows users to browse products, add items to a shopping cart, and complete a checkout process with calculated totals (tax and shipping).

Throughout the project, the application was expanded week-by-week using structured planning, database integration, and finally the MVC (Model–View–Controller) architecture for cleaner organization and maintainability.
Features
Catalog

Dynamically displays products from a MySQL database

Shows product name, description, cost, and “Add to Cart” button

Shopping Cart

Add items to cart

Update quantity of existing items

Remove items

Automatic subtotal calculation

Checkout

Displays purchase summary

Calculates:

5% tax

10% shipping

Final total

Clears the cart after checkout

Architecture

Fully implemented MVC structure

Controllers handle logic

Models handle database interaction

Views handle page layout and output

🗃 Database

Database name: mmoore_online_store

Table: products

Includes 5 sample items such as:

Gaming Mouse

Mechanical Keyboard

HD Monitor

USB-C Hub

External SSD

A complete SQL export of the database is included in the repository as:
✅ mmoore_online_store.sql

🛠 Technologies Used

PHP 8

MySQL / phpMyAdmin

XAMPP

VS Code

Git / GitHub
Testing Summary

A full testing document is included separately.
Tests performed included:

Database connection

CRUD operations

Add/Update/Remove cart items

Checkout totals

Cart clearing

Path and session error checks

All core features tested successfully in the XAMPP environment.

🏁 Final Notes

This project demonstrates full-cycle web development:

Planning

Building a database

Implementing PHP functionality

Moving to MVC

Testing & final deployment

It also represents one of the largest PHP projects I’ve built so far, and it helped me understand both backend logic and organizing larger applications.

📎 Releases

Phase 2: Initial database and structure

Phase 3: Database integration and CRUD

Phase 4: Final MVC version + testing

HTML & CSS

MVC file structure
