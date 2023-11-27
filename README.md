# Laravel Magical Link

## Overview

Laravel Breeze Magical Link is a project that combines the simplicity of Laravel Breeze for authentication with the added functionality of Passwordless Authentication.

This approach eliminates the need for traditional passwords, using email-based tokens for secure user authentication.

## Tech Stack

Laravel 10

PHP 8.2.4

MySQL

Mailtrap.io

Prettier for Blade

Laravel Breeze

## Installation

Follow these steps to set up the Laravel Magical Link project:

Clone the Repository:

bash

```Copy code
git clone https://github.com/aldiandarwin/breeze-passwordles.git
```

Install Dependencies:

bash

```Copy code
composer install
```

Configure Environment:

Copy the .env.example file to .env and configure the database connection and other necessary settings.

Generate Application Key:

bash

```Copy code
php artisan key:generate
```

Run Migrations:

bash

```Copy code
php artisan migrate
```

Seed Database (Optional):
If you want to seed the database with sample data, run:

bash

```Copy code
php artisan db:seed
```

Start the Development Server:

bash

```Copy code
php artisan serve
```

Visit the Application:

Open your browser and go to <http://localhost:8000> to view the application.

## Usage

Register a New User:

Navigate to the registration page.
Provide the required details.

Submit the registration form.
Login Using Magical Link:

### Visit the login page

Enter the registered email address.

Check your email for the magical login link.

Click the link to authenticate and access the application.

## Conclusion

Laravel Magical Link provides a secure and user-friendly Passwordless Authentication method, enhancing the overall security of the authentication process while simplifying the user experience.

Feel free to explore and customize this Laravel project based on your specific requirements
