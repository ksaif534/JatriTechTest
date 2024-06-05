#Jatri Technical Assessment

This is an API First CRUD package development project for a technical job assessment.

Key Features:

1. Full CRUD(Create,Read,Update,Delete) operation defined in a custom package.
2. Appending API routes of the custom package to the Laravel 'api/routes.php' file.

Some key points for the code reviewer:

1. Installation: from the project root directory, run `composer require --prefer-source saifkamal/api-first-crud-package:dev-main` or `composer require saifkamal/api-first-crud-package:dev-main` which will install the package with the Laravel Application.

2. Create a database in your local database GUI(or mysql/postgres) and modify the `.env` files to maintain the right environment variable configurations.

3. Run `php artisan migrate`. This will migrate the migration table defined in the package to the database.

4. Run `php artisan serve` to run the local web server.

5. Go to `localhost:8000/api/crud_resources` to check the index api file.

You can now tinker with the CRUD functionalities.