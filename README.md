# CV Scoring Installation Guide

Follow the steps below to set up the CV Scoring project:

1. Clone the repository:
   ```bash
   git clone https://github.com/Tocacreamy/CV-scoring.git
   ```

2. Navigate to the project directory and install dependencies:
   ```bash
   composer install
   ```

3. Copy the `example.env` file and rename it to `.env`:
   ```bash
   cp example.env .env
   ```

4. Create a new database and update the credentials in the `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Run the database migrations and seed the data:
   ```bash
   php artisan migrate --seed
   ```

7. Create a symbolic link for storage:
   ```bash
   php artisan storage:link
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

9. Have fun! 🎉
