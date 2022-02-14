### 2. Project 2

Create a new Laravel project using composer

Attached you will find a DB dump and a .csv file.

Create a DB connection in laravel using the .env file.

Seed the DB based on the dump

In the resulted DB you will have these 1 table: `transactions`.
```
* transactions: id, code, amount, user_id, created_at, updated_at
```

You have two sources. One DB and one is the .csv file

1. Create an endpoint which will return the transactions in a json with an extra parameter which will specify the source

# Solution:

## Deployment steps:
- composer install
- edit .env file and add database connection.
- php artisan db:wipe (To remove all tables)
- php artisan db:seed (to re-execute this command you need re-execute previous command).

endpoints:
* http://project2.test/api/transactions?source=db
* http://project2.test/api/transactions?source=csv

## note:
In path app/Services
you can see a business logic for using Factory pattern.
