# Authentication-website
Creating a Login and Registration Panel securely generating a unique userID of a Registered User
Laravel Authentication Example
This repository demonstrates how to set up authentication in a Laravel web application, including registration, login, and logout functionality. It also showcases the use of middleware to enhance security and prevent unauthorized access.
Prerequisites
PHP 8.0 or higher
Composer
Laravel 9.x
Installation
Clone the repository:
bash
git clone https://github.com/your-username/laravel-authentication-example.git

Navigate to the project directory:
bash
cd laravel-authentication-example

Install the dependencies:
bash
composer install

Create a copy of the .env.example file and rename it to .env. Update the database connection details in the .env file.
Generate an application key:
bash
php artisan key:generate

Run the database migrations:
bash
php artisan migrate

Start the development server:
bash
php artisan serve

The application should now be accessible at http://localhost:8000.
Authentication Flow
Registration:
Users can register by providing their name, email, and password.
The registration form is available at the /registration route.
The register method in the CustomAuthController handles the registration logic.
Login:
Registered users can log in using their email and password.
The login form is available at the /login route.
The loginPost method in the CustomAuthController handles the login process.
Dashboard:
After successful login, users are redirected to the dashboard.
The dashboard is accessible at the /dashboard route.
The auth middleware is applied to the dashboard route to ensure only authenticated users can access it.
Logout:
Users can log out of the application.
The logout functionality is handled by the logout method in the CustomAuthController.
The DisableBackBtn middleware is applied to the logout route (/logout) to clear the cache and prevent users from accessing the dashboard after logging out using the browser's back button.
Applying Middleware
The DisableBackBtn middleware is used to enhance security and prevent unauthorized access to protected routes after logout. Here's how it works:
The DisableBackBtn middleware is defined in the app/Http/Middleware/DisableBackBtn.php file.
The middleware is registered in the $routeMiddleware array in the app/Http/Kernel.php file:
php
protected $routeMiddleware = [
    // ...
    'disable.back.btn' => \App\Http\Middleware\DisableBackBtn::class,
];

The DisableBackBtn middleware is applied to the logout route in the routes/web.php file:
php
Route::post('/logout', [CustomAuthController::class, 'logout'])
    ->name('logout')
    ->middleware('disable.back.btn');

When a user logs out, the DisableBackBtn middleware is executed. It clears the cache and redirects the user to the login page, preventing them from accessing the dashboard or other protected routes using the browser's back button.
By applying the DisableBackBtn middleware to the logout route, you enhance the security of your application and ensure that users cannot access protected routes after logging out.
