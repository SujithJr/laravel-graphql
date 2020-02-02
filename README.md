# Laravel with GraphQL

* `cd laravel-graphql`
* `composer install`
* `cp .env.example .env`
* Create a database and add the db name and credentials in **.env** file
* `php artisan key:generate`
* `php artisan migrate`
* `php artisan db:seed` to seed the database
* Run `php artisan serve`
* Open http://127.0.0.1:8000 in browser
* Go to http://127.0.0.1:8000/graphql-playground to test out graphql API's

##### Refer Docs (right corner) in http://127.0.0.1:8000/graphql-playground, which contains the instruction for GraphQL API
