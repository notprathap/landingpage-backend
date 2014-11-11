landingpage-backend
===================

* Run composer install to install dependencies
* To set up db, run mysqladmin -u username -p create dbname; propel sql:insert
* Then run migrations: propel:migrate
* To update schema, update the schema.xml and
    1. run propel model:build
    2. run propel diff (to generate migration files)
    3. run propel migrate
* If you update the propel config, then run propel config:convert to reflect the change in the generated PHP config
