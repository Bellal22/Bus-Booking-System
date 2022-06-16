<h1 align="center">Bus Booking System</h1>

<p align="center">

</p>

## About Application

This app has implemented to allow Passengers to  Book rides between Egypt Governments.
We've Two main Actors [ Admin , Passenger ], Who allowed to Authenticate then Start To reserve their trips.

- Well Structured.
- Following SOLID Principles as Possible.
- applying Repository Pattern When needed.
- APIs base with POSTMAN Collection.
- Sanctum Authentication.
- Mysql Database.
- Tests added.


## About Implementation

 - Admin & Passenger extend User. 
 - Admin & Passenger Authenticate. 
 - Admin can List already seeded Stations. 
 - Admin Can Create Trip with Stations (Governments) and Routes. 
 - Admin Can Create and List Buses.
 - Passenger can Search his trip with Info about available seats no.
 - Passenger can reserve an available seat. 
### Implementation tricks
 - Dynamic query params filter. 
 - Multi-language Stations with Middleware to set app locale according to header.
 - Concrete Classes depending on Abstraction or Interface <br> ex: TripRepository - AdminTripRepositoryInterface
 - FormRequest To Validation.
 - Resources To respond.
 - Registered isolated routes file for Passenger and Admin (RouteServiceProvider)


## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.0/installation#installation)

Clone the repository

    git clone git@github.com:Bellal22/Bus-Booking-System.git

Switch to the repo folder

    cd Bus-Booking-System

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Configure database in your `.env` file:
  ```dotenv
  DB_DATABASE=bus_booking_system
  DB_USERNAME=root
  DB_PASSWORD=
  ```

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git
    cd laravel-realworld-example-app
    composer install
    cp .env.example .env
    php artisan key:generate

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with seed data with relationships. This can help you to quickly start testing the api.**


Run the database seeder and you're done

    php artisan db:seed

## Tests

    php artisan test


***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh

## Ready Credentials
<h5 align="center">admin</h5>

- **Email:** admin@admin.com
- **Password:** password 
<br>
<h5 align="center">passenger</h5>
- **Email:** passenger@passenger.com
- **Password:** password

