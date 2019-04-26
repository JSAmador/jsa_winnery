## About the project.

This is a small project to run a winnery.
There are 2 waiters and 1 Somelier as well as 9 tables on the winnery.
Customer are arriving to the tables and a selection of wines are offered.
The can select a wine to procced an order.
The waiter asigned to that table will notify the Somelier that will go and check if the selected wine is available, if so the wine is collected and delivered to the waiters that will notify the customers.

Every day the list of wines will be refreshed.

## To Run the project:

1. Install Dependencies
   ```composer install 
      npm install
   ```  
2. Settup .env file and fill with DB credentials (you should have a db already created)
    ``` cp .env.example .env ```
    
3. Generate an app Key
    ``` php artisan key:generate ```

4. Create structure of the DB
    ``` php artisan migrate ```

5. Fill The DB
    ``` php artisan db:seed ```
    
6. Run the project (with or without port)
    ```
    php artisan serve
    php artisan serve --port=8080
    ```

## To use the project:

  You can change the users on the seeder.


- Somelier:
  > somelier@jsawinnery.test
  > somelier_admin

- Waiter1:
  > Waiter1@jsawinnery.test
  > waiter1

- Waiter2:
  > Waiter2@jsawinnery.test
  > waiter2

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
