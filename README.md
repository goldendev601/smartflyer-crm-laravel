# Smart flyer
### Installation Guide

## Installation
The guide explains , how you could set this project on your local dev environment or in any
deployment server and how the Smart flyer work.

#### Requirements:
1. PHP version must be equal or greater then 8.0.
2. Latest composer version
3. MySQL DB server
4. Appache
5. Latest versions of Node & NPM

#### Setup Laravel Codebase:

First clone the repo from: https://github.com/Beyondimagine/smartflyer-crm.git
After cloning the project follow the steps below.
1. Run command:
   ```composer install```
2. Copy **.env.example** file and paste in the project folder with the name **".env"** , also set
   values in **.env**. If you require some values ask from lead. Specifically set **AWS3** and **MAIL**
   credentials
3. Run command: ```php artisan config:cache```  (To load latest .env config)
4. Run command: ```php artisan migrate``` (before running this make sure the DB credentials
   set in DB)
5. Run command ```php artisan db:seed```
6. install **'php_redis'** extension if not install on php version or comment out this  the in .env **#CACHE_DRIVER=redis**

Now all setup has been done you can access the site with following credentials:

#### Admin

Email: ```admin@smartflyer.com```

Password: ```admin123```

#### Workflow of codebase

*  Important Note: every time when make new migration need to run command ```php artisan code:models```

**About this command** ```php artisan code:models```

This is Reliese Laravel package. Reliese Laravel Model Generator aims to speed up the development process of Laravel applications by providing some convenient code-generation capabilities.
The tool inspects your database structure, including column names and foreign keys, in order to automatically generate Models that have correctly typed properties, along with any relationships to other Models.
for more https://github.com/reliese/laravel
