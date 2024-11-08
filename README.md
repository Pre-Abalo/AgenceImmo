<p align="center"><a href="https://agence-immo.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About AgenceImmo Laravel Project

This project is a **Laravel** web application developed to manage an online real estate agency. It provides a user interface to view available properties and an administration interface to manage properties and their specific features.

## Features

### User Interface
- **Property Listings**: Users can browse available properties with detailed information such as number of rooms, area, price, and location.
- **Advanced Search**: Users can filter properties by various criteria (price, area, number of rooms, location).
- **Contact Form**: A contact form is available on each property page, allowing users to ask questions or express interest in a property.

### Admin Interface
- **Property Management**: Admins can add, edit, and delete properties. They can also assign specific options to each property (such as parking availability or elevator access).
- **Option Management**: Admins can manage specific characteristics (options) of properties within the admin interface.

## Project Configuration

### Dependencies and Tools Used
- **NPM**: For managing front-end dependencies.
- **MailHog**: For testing and debugging email delivery in the development environment.
- **Git and GitHub**: For version control and tracking modifications.

### Using MailHog to Test Email Functionality
MailHog is configured to intercept and display emails in the development environment without the need for an actual email account. This allows secure testing of the contact form.

### Test Data with Faker
The project uses the **Faker** library to generate random test data, making testing easier. For example:
- Property details (title, description, price)
- Contact information (first name, last name, email)

## Installation

1. **Clone the GitHub Repository**:
   ```bash
   git clone https://github.com/Pre-Abalo/AgenceImmo.git
   cd repository-name
   ```

1. **Install Laravel Dependencies**:
   ```bash
   composer install
   ```

2. **Install Front-end Dependencies**:
   ```bash
   npm install
   ```

3. **Configure the Environment**:
    - Copy the `.env.example` file to `.env`.
    - Configure database and MailHog settings in the `.env` file.

4. **Generate the Laravel Application Key**:
   ```bash
   php artisan key:generate
   ```

5. **Launch MailHog for Development**:
    - **Docker**:
      ```bash
      docker run -d -p 1025:1025 -p 8025:8025 mailhog/mailhog
      ```
    - Access MailHog at `http://localhost:8025`.

6. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

7. **Start the Application**:
   ```bash
   php artisan serve
   ```

## Usage

### User Interface
- Access the user interface to view available properties.
- Use filters to search for properties according to your criteria.

### Admin Interface
- Log into the admin interface to manage properties and their characteristics.
- Add or edit specific options for each property.

## Contributions
Contributions are welcome! Please submit a pull request for any changes or improvements.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
---

**Author**: N'DANIDA Préabalo Essoriki  
**Email**: preabalo.ndanida@lomebs.com  
**University**: Lomé Business School

---

Let me know if you need any more adjustments!
