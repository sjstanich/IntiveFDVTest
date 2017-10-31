## INTIVE-FDV TEST

> In this test opt for a simple development. Design the RentBike model with 
> the fields and the controller that is responsible for the logic. Do not split into services because we only needed a few simple tests.

> To run the proyect you have to configure your Database in .env file then 
> you have to ejecute a migration to create the tables for database
> ```
> php artisan migrate
> ```

> When this is done you cant execute the proyect starting the server.
> ```
> php artisan serve
> ```
> Some Urls to test are:

> ```
> /dayRent/{bikeSNumbers}/{familyPlan TRUE OR FALSE}
> /hourRent/{bikeSNumbers}/{familyPlan TRUE OR FALSE}
> /weekRent/{bikeNumbers}/{familyPlan TRUE OR FALSE}
> ```


> To execute the tests we can do it with phpunit
> ```
> vendor/bin/phpunit
> ```


>All commands you have to execute in the root of the proyect