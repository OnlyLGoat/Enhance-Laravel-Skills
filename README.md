# Enhance-Laravel-Skills

A learning project built with Laravel, focusing on implementing core web application features like Contact forms and Order Management.

## Features

### 📬 Contact Module
- **Route**: `/contact`
- **Features**: 
  - GET: Display a contact form.
  - POST: Validate and store user messages.
- **Viewing Messages**: `/messages` (GET) to list all stored contact messages.

### 📦 Order Management
A basic CRUD system for managing business data.
- **Dashboard**: `/` (Home)
- **Clients**: 
  - Manage client profiles (Add, Edit, List, Delete).
  - Routes: `/clients`, `/clients/create`, `/clients/{id}/edit`.
- **Products (Produits)**:
  - Manage product inventory and pricing.
  - Routes: `/produits`, `/produits/create`, `/produits/{id}/edit`.

## Tech Stack
- **Framework**: [Laravel 11](https://laravel.com)
- **Styling**: [Tailwind CSS v4](https://tailwindcss.com) (via Vite)
- **Database**: SQLite/MySQL (standard Laravel configuration)

## Getting Started

1. **Clone the repository**:
   ```bash
   git clone https://github.com/OnlyLGoat/Enhance-Laravel-Skills.git
   cd Enhance-Laravel-Skills
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Start the development server**:
   ```bash
   php artisan serve
   npm run dev
   ```

## Project Structure
- `app/Http/Controllers/Contact/`: Logic for the contact form.
- `app/Http/Controllers/Order_Management/`: Logic for Clients and Products.
- `routes/topics/`: Modularized route files for better organization.
- `resources/views/Order_Management/`: Blade templates for the management system.

## License
Built for educational purposes. Licensed under the [MIT license](https://opensource.org/licenses/MIT).
