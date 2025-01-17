## Crud Project 

This is a basic CRUD (Create, Read, Update, Delete) project built with Laravel. It allows you to create, view, update, and delete users. This project is configured to run in a XAMPP environment.

- [XAMPP](https://www.apachefriends.org/index.html) installed (including Apache, MySQL, PHP)
- [Composer](https://getcomposer.org/) installed
- [Git](https://git-scm.com/) installed

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Installation

1. **Clone the repository:**

   ```sh
   git clone https://github.com/rafaelwhenrique/simple-crud.git
   cd basic-crud


2. **Install Composer dependencies**

   ```sh
   composer install


3. **Copy the .env example file and configure environment variables:**

   ```sh
   cp .env.example .env

4. **Open the .env file and configure the following variables according to your XAMPP setup:**

   ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_mysql_username
    DB_PASSWORD=your_mysql_password

5. **Generate an application key:**

   ```sh
   php artisan key:generate

6. **Run migrations to create database tables**

   ```sh
   php artisan migrate

7. **Start the Laravel local development server:**

   ```sh
   php artisan serve

The application will be available at http://localhost:8000.

## Usage

1. **Create User**
    - Go to http://localhost:8000/users/create.
    - Fill in the form with the user's details and click "Save".

1. **View Users**
    - Go to http://localhost:8000/users.
    - See the list of registered users.

1. **Edit User**
    - Go to http://localhost:8000/users and click "Edit" next to the user you want to edit.
    - Update the user's details and click "Save".

1. **Delete User**
    - Go to http://localhost:8000/users.
    - Click the "Delete" button next to the user you want to delete.
    - Confirm the deletion in the confirmation modal.

## Project Structure 

   1. app/Http/Controllers/UserController.php: Controller responsible for CRUD operations.
   2. resources/views/users/: Directory containing the Blade views for creating, editing, listing, and viewing users.
   3. routes/web.php: Routes file where the CRUD routes are defined.

## Contribution 

   1. Fork the project.
   2. Create a new branch (git checkout -b feature/new-feature).
   3. Commit your changes (git commit -m 'Add new feature').
   4. Push to the branch (git push origin feature/new-feature).
   5. Open a Pull Request.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
    
### Author ##
- Rafael Henrique

### Conclusion
With this `README.md`, anyone who wants to use or contribute to your project will have clear instructions on how to set up the environment, install dependencies, and use the CRUD functionalities. If you need more adjustments or have any other questions, feel free to ask!


