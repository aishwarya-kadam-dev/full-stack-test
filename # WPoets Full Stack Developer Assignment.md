# WPoets Full Stack Developer Assignment

## Overview

This project is a Full Stack PHP application developed as part of the WPoets Full Stack Developer Test.

The application includes:

* Dynamic category management
* Dynamic slide management
* AJAX-based tab switching
* Responsive frontend implementation
* MySQL database integration
* Admin panel for managing categories and slides


## Technologies Used

* PHP
* MySQL
* HTML5
* CSS3
* Bootstrap
* JavaScript
* jQuery
* AJAX

## Project Setup

### 1. Clone Repository

git clone <full-stack-test>


### 2. Create Database

Create a MySQL database:

CREATE DATABASE wpoets_test;


### 3. Import Database

Import the provided SQL file into the database.

### 4. Configure Database Connection

Update database credentials in: database.php


Example:
$host = "localhost";
$user = "root";
$password = "123456";
$database = "wpoets_test";


### 5. Run Application

Place the project inside the web server root directory and access:

http://localhost/full-stack-test/


## Database Structure

### Categories Table

Stores category information:

* id
* title
* icon
* created_at

### Slides Table

Stores slide information:

* id
* category_id
* tag_line
* title
* description
* image
* learn_more_link
* sort_order
* created_at


## Admin URLs

### Categories

http://localhost/project-folder/admin/categories.php


Features:

* Add Category
* Edit Category
* Delete Category

### Slides

http://localhost/project-folder/admin/slides.php

Features:

* Add Slide
* Edit Slide
* Delete Slide

# Frontend Features
* Dynamic category tabs
* AJAX content loading
* Dynamic image switching
* Active tab highlighting
* Slider navigation dots
* Responsive layout for desktop and mobile devices

Notes
1. Icons and images are loaded dynamically from the assets directory.
2. Category changes update slide content without page reload using AJAX.
3. The application follows a simple and maintainable PHP structure.
