
![Logo](https://www.dilse.ca/wp-content/uploads/2024/02/logo__1.png)

# Dilse
Dilse is a web application developed for the Dil Se Indian Restaurant & Bar. This project aims to provide a comprehensive online platform for the restaurant, offering features such as online reservations, menu browsing, and customer feedback.

# Technologies Used
- **Laravel**: A PHP framework used for building web applications.
- **phpMyAdmin**: A tool used to manage MySQL databases.
- **ORM (Object-Relational Mapping)**: Used to interact with the database in an object-oriented manner.


# Prerequisites
Before you begin, ensure you have met the following requirements:

PHP >= 7.3
Composer
MySQL
phpMyAdmin
## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password


## Admin and User Login Details

### Admin Panel
- **Dashboard:** [Admin Panel Dashboard](https://dilse.exoticaitsolutions.com/admin)
- **Email:** [admin@dlse.com](mailto:admin@dlse.com)
- **Password:** cryPOtiver

### User Panel
- **Dashboard:** [User Panel Dashboard](https://dilse.exoticaitsolutions.com/user)
- **Email:** [bheemexoticait@gmail.com](mailto:bheemexoticait@gmail.com)
- **Password:** bheemexoticait


## Run Locally

Clone the project

```bash
  git clone https://github.com/Bheem-Singh-Pailoss/dilse.git
```

Go to the project directory

```bash
  cd dilse
```

Install dependencies

```bash
  composer install
```
Copy the example environment file and set up your environment variables:

```bash
  cp .env.example .env
```
Generate an application key:

```bash
  php artisan key:generate
```
Run the migrations:

```bash
  php artisan migrate --seed
```
Serve the application:

```bash
  php artisan serve

```

## Roadmap

### Phase 1: Initial Setup and Basic Features

- **Project Setup**
  - Initialize Laravel project.
  - Set up phpMyAdmin for database management.
  - Configure ORM for database interactions.

- **User Authentication**
  - Implement user registration and login functionality.
  - Create user roles (admin, staff, customer).

- **Online Reservations**
  - Develop reservation form.
  - Implement reservation management system for both users and admins.

- **Menu Browsing**
  - Create dynamic menu pages displaying food items.
  - Implement category-wise filtering of menu items.

### Phase 2: Advanced Features and Enhancements

- **Customer Feedback**
  - Develop feedback form for customers.
  - Create an admin interface to view and manage feedback.

- **Order Management**
  - Implement an online ordering system.
  - Integrate payment gateways for seamless transactions.

- **Notifications**
  - Set up email and SMS notifications for reservations and order updates.

- **User Profile Management**
  - Allow users to manage their profiles and view their order history.

### Phase 3: Optimization and Deployment

- **Performance Optimization**
  - Optimize database queries and application performance.
  - Implement caching mechanisms.

- **Testing and Bug Fixing**
  - Conduct thorough testing of all features.
  - Fix identified bugs and issues.

- **Deployment**
  - Deploy the application to a live server.
  - Set up continuous integration and continuous deployment (CI/CD) pipeline.

### Future Enhancements

- **Loyalty Program**
  - Develop a loyalty program for repeat customers.
  
- **Analytics Dashboard**
  - Implement an analytics dashboard for admins to monitor key metrics.
## Screenshots
## Admin Interface Screenshots

Here are some major screenshots of the admin interface for the Dil Se project:

1. **Admin Login**
   ![Admin Login](https://snipboard.io/fnX9Dw.jpg)

2. **Admin Dashboard**
   ![Admin Dashboard](https://snipboard.io/FWLrjb.jpg)

3. **User Management**
   ![User Management](https://snipboard.io/ZyzcMr.jpg)

4. **Referral Management**
   ![Referral Management](https://snipboard.io/hRUl9p.jpg)

5. **Settings**
   ![Settings](https://snipboard.io/RFCi2c.jpg)


## Frontend Interface Screenshots

Here are some major screenshots of the frontend interface for the Dil Se project:

1. **Login Page**
   ![Login Page](https://snipboard.io/7sR3Fp.jpg)

2. **Register Page**
   ![Register Page](https://snipboard.io/Jo3xb0.jpg)

3. **Home Page**
   ![Home Page](https://snipboard.io/FPxqh7.jpg)

4. **Menu Page**
   ![Menu Page](https://snipboard.io/6dcygE.jpg)

5. **Reservation Page**
   ![Reservation Page](https://snipboard.io/LSrAiP.jpg)

6. **Feedback Page**
   ![Contact Page](https://snipboard.io/TBbF1H.jpg)

7. **Dashboard Page**
   ![Dashboard Page](https://snipboard.io/Hk4SU8.jpg)

>

## Features

### User Authentication

- **Login**: Users can log in to their accounts to access personalized features.
- **Sign-Up**: New users can register for an account to make reservations and place orders.

### Email Notifications

- **Reservation Confirmation**: Users receive an email confirmation upon successful reservation.
- **Order Updates**: Users receive notifications about their order status via email.

## How to Set Up

### User Authentication

1. **Login and Sign-Up**:
    - Visit the `/login` and `/register` routes to access login and sign-up pages.
    - Fill in the necessary details to create an account or log in.

### Email Notifications

1. **Configure Mail Service**:
    - Set up your mail service in the `.env` file. Example for SMTP:
      ```
      MAIL_MAILER=smtp
      MAIL_HOST=smtp.mailtrap.io
      MAIL_PORT=2525
      MAIL_USERNAME=null
      MAIL_PASSWORD=null
      MAIL_ENCRYPTION=null
      MAIL_FROM_ADDRESS="hello@example.com"
      MAIL_FROM_NAME="${APP_NAME}"
      ```
2. **Triggering Notifications**:
    - Email notifications are automatically triggered for reservations and order updates.

### New Features
- **Referral Functionality:** Users can refer friends and family to the restaurant, earning rewards for successful referrals. This feature encourages word-of-mouth marketing and builds a loyal customer base.

- **Docker Support:** The project now includes Docker support, allowing for easier deployment and management of the application in containerized environments. This simplifies the setup process and ensures consistency across different environments.


