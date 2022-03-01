## About OnlyFilm

A platform for local producers and script writers to sell their films online to audiences both in and outside of Kenya.

## Getting Started

1. Clone the repository.
2. Run `composer install`
3. Set up your database credentials in the ***.env*** file
4. Create the database tables by running the following command in your terminal:
```
php artisan migrate
```
5. Run the command below to create test users and video tags:
```
php artisan db:seed
```
Two test users are created:
- First user:
  - email: john@doe.com
  - password: 12345678
- Second user:
  - email: jane@doe.com
  - password: 87654321
        
You're set to go!
