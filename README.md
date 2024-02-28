# JEANROC BO 🚀

Backoffice build with symfony with CRUD for freelancers and Skills. Theres also a API with multiple method like fetching the freelancers, fetching the Skills, creation of Freelancers. The API is build to feed a react app called jeanroc

## Prerequisites 📋

Before you begin, ensure you have met the following requirements:

- PHP 8.3 or higher
- Composer 
- Symfony CLI
- Git
- A MySQL instance running

## Installation 🛠️

Follow these steps to install the project:

### Clone the repository

First, clone the repository to your local machine:

```bash
git clone https://github.com/ticouto5290/JEANROC-BO.git
```

Navigate to the project directory:

```console
cd JEANROC-BO
```

Install dependencies
Use Composer to install the PHP dependencies:

```console
composer install
```

Configure the environment
Copy the .env file to .env.local and adjust the DATABASE_URL to match your database credentials:

```console
cp .env .env.local
```

Create the database
Create the database using the Symfony console:

```bash
php bin/console doctrine:database:create
```
Run migrations
Apply migrations to create the database schema:

```bash
php bin/console doctrine:migrations:migrate
```

Running the Application 🏃‍♂️
To start the Symfony web server, run:

```bash
symfony server:start
```

You can now access the application in your web browser at http://localhost:8000.

Accessing the Admin Panel 🔐
To access the admin panel, navigate to http://localhost:8000/admin 



Features coming up soon 

I am currently working on a new feature. when Admin accepts the freelancers profile an email is send to the Freelancer with logins credentials and the freelancer can complete his profile and add more information of modify it.