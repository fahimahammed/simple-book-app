
# Laravel Book Management System

## Description
The Laravel Book Management System is a web application that allows users to manage a collection of books. Users can perform various operations such as viewing, adding, editing, deleting, and searching for books. This application demonstrates the use of Laravel's MVC architecture, validation, and pagination.

## Features
- List books with pagination
- View details of individual books
- Create new books
- Edit existing book information
- Delete books
- Search for books by title

## Technologies Used
- **PHP**: Server-side scripting language
- **Laravel**: PHP web application framework
- **MySQL**: Database management system
- **Blade**: Laravel's templating engine
- **Bootstrap**: Front-end framework for responsive design

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/laravel-book-management.git
   cd laravel-book-management
   ```

2. **Install dependencies**:
   Make sure you have Composer installed, then run:
   ```bash
   composer install
   ```

3. **Set up the environment**:
   - Rename the `.env.example` file to `.env`.
   - Update the `.env` file with your database credentials:
     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

4. **Generate application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations**:
   ```bash
   php artisan migrate
   ```

6. **Seed the database (optional)**:
   You can use a seeder to add sample data to your application.
   ```bash
   php artisan db:seed
   ```

7. **Start the development server**:
   ```bash
   php artisan serve
   ```

   The application will be available at `http://127.0.0.1:8000`.
