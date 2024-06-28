# SoFirecross

**SoFirecross** is an online car sales platform built using Laravel and Tailwind CSS. The platform allows various car dealers to list their cars for sale and provides users with a convenient way to search and purchase cars based on their preferences.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Authentication and Payment](#authentication-and-payment)
- [Admin Dashboard](#admin-dashboard)
- [Roles and Permissions](#roles-and-permissions)
- [Contributing](#contributing)
- [License](#license)

## Features
- Online car sales platform
- User authentication and secure payments
- Admin dashboard for managing the platform
- Role-based access control
- Tailwind CSS for styling

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/fariraimasocha/firecross
    cd firecross
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```

3. **Setup environment variables:**
    Copy the `.env.example` file to `.env` and update the necessary configuration settings.
    ```bash
    cp .env.example .env
    ```

4. **Generate application key:**
    ```bash
    php artisan key:generate
    ```

5. **Run database migrations:**
    ```bash
    php artisan migrate
    ```

6. **Compile assets:**
    ```bash
    npm run dev
    ```

7. **Serve the application:**
    ```bash
    php artisan serve
    ```

## Usage

1. **Register and Login:**
    - Users can register and log in to their accounts.
    - Dealers can create an account to list their cars.

2. **List Cars:**
    - Dealers can list their cars with details such as make, model, year, price, and photos.

3. **Search and Filter:**
    - Users can search for cars based on various filters such as make, model, year, and price range.

4. **Subscription:**
    - Dealers pay a subscription fee to list their cars.
    - Users can browse and contact dealers based on their preferences.

## Authentication and Payment
The platform includes secure user authentication and payment systems. Laravel Sanctum is used for API authentication, and payment integration is handled through Stripe.

## Admin Dashboard
The admin dashboard provides comprehensive tools for managing users, listings, and subscriptions. Admins can approve or reject listings, manage user roles, and view platform analytics.

## Roles and Permissions
Role-based access control is implemented to manage user permissions. The roles include:
- **Admin**: Full access to the platform's features.
- **Dealer**: Access to list and manage their cars.
- **User**: Access to browse and contact dealers.

## Contributing
Contributions are welcome! Please fork the repository and create a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
