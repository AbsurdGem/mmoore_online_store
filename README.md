
Project Summary – mmoore_online_store
Overview

mmoore_online_store is a PHP-based online store application developed using the MVC (Model-View-Controller) architecture. It demonstrates full-stack web development concepts including database connectivity, dynamic content generation, and session-based cart management. The project was built and tested in XAMPP using PHP 8.2 and MySQL, with a structured folder layout for maintainability.

Key Features

Dynamic Product Catalog — Products are loaded directly from the MySQL database.

Shopping Cart — Supports adding, updating, and removing items using PHP sessions.

Checkout Page — Calculates subtotal, tax, and shipping automatically.

MVC Architecture — Separation of concerns through models, views, and controllers.

Responsive Interface — Clean and simple design with organized navigation between catalog, cart, and checkout pages.

Database Integration — CRUD operations implemented for full backend functionality.

Technologies Used

Frontend: HTML5, CSS3, PHP (Views)

Backend: PHP (Controllers & Models)

Database: MySQL (phpMyAdmin)

Server Environment: Apache (XAMPP)

Version Control: GitHub (Repository: AbsurdGem/mmoore_online_store
)

Testing Summary

All application features were manually tested in the XAMPP environment. The following key areas were validated:

Database connection and CRUD operations ✅

Product catalog display and navigation ✅

Add-to-cart and cart persistence ✅

Checkout calculations and clear cart function ✅

Error-free operation and consistent interface styling ✅

Testing confirmed that the application functions as expected, with no PHP or database errors.

Lessons Learned

This project strengthened my understanding of PHP, MySQL, and MVC structure. I learned how important consistent file organization, debugging, and testing are in maintaining a clean workflow. Overcoming issues with WAMP and switching to XAMPP taught me real-world troubleshooting skills. The process also showed how structured planning and small milestones make large projects much more manageable.

Phase Tags

Phase 2: Database & Framework Setup

Phase 3: Database Integration & CRUD Operations

Phase 4: MVC Architecture Implementation

Author

Morgan Moore
ECPI University – Software Development Major
Project: mmoore_online_store
Course: SDC310 – PHP Web Application Development
Date: November 2025


How to Run This Project

Follow these steps to set up and run the mmoore_online_store PHP web application on your local environment:

Install XAMPP

Download and install XAMPP
 for Windows.

Make sure Apache and MySQL services are running in the XAMPP Control Panel.

Clone or Download the Repository

Open your terminal or Git Bash.

Navigate to your htdocs directory (usually C:\xampp\htdocs\).

Clone the project repository:

git clone https://github.com/AbsurdGem/mmoore_online_store.git


Or download and extract the ZIP file directly from GitHub.

Set Up the Database

Open phpMyAdmin from XAMPP (http://localhost/phpmyadmin).

Create a new database named:

mmoore_online_store


Click the Import tab.

Import the SQL file included in the project folder:

mmoore_online_store.sql


Configure Database Connection

Open the file:

includes/db_connect.php


Make sure your connection details match your local environment:

$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "mmoore_online_store";


Run the Application

In your browser, go to:

http://localhost/mmoore_online_store/


The homepage should load, displaying your product catalog.

Test the Features

Add products to the cart.

View and update your cart.

Proceed to checkout to confirm totals and clear the cart.

View MVC Structure (Optional)

Review the models/, views/, and controllers/ folders for organized source code.

Each controller coordinates data from models and sends it to the views.
