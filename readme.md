# Asset Manager
Asset Manager is a web application which gives the ability to keep track of a company's assets with an overview of their status. Following are the major features of this application
* Listing of all the assets
* Add a new asset
* Update an existing asset
* Delete an asset

## Technologies Used
* PHP 7.2
* Laravel Framework 5.4
* Composer as package manager
* Mysql
* Bootstrap
* Javascript, HTML and CSS

## Prerequisites

Make sure that **Web server** (with Apache, PHP and Mysql), **Git** and **Composer package manager** is already installed on the system. If not then follow the instructions to download and install all of these dependencies from the below links
* [Web server for Mac](https://www.mamp.info/en/downloads/)
* [Web server for Windows](http://www.wampserver.com/en/)
* [Git](https://git-scm.com/downloads)
* [Composer package manager](https://getcomposer.org/)


## Installation
The installation process is quite simple and straightforward. Just follow the below steps
 
- Open the terminal and navigate into the root directory of the web server and then execute the below command to download the code from github
```
git clone https://github.com/waqasrazaq/asset-manager.git
```
- Once the code is downloaded then navigate into project directory (asset-manager) and execute the below command in the root directory and wait for the process to download and install all the required components and dependencies

```composer install```

It will take some time, so wait for a couple of minutes to complete the process.

- Next step is database configuration. Create a database named as "mz_db" and note down the connection information (DB username, password and port). Then open .env file from root directory of the project and update the below connection information as per your dev environment

```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mz_db
DB_USERNAME=root
DB_PASSWORD=
```

- Till now we have configured the database with our project. Now lets create the required tables. Execute the below command via terminal from root directory of the project. Also Note that .env file should not be part of repo. Currently it is added just to ease the process of project configuration. 

```
php artisan migrate
```

That's it. Our asset-manager is installed and configured. Double check that dev web server is started and then type the URL in browser as http://base_web_server_url:port/asset-manager/public
```
Example with port 80
http://localhost:80/asset-manager/public

```
## Working Demo 
http://projectxdubai.com/asset-manager/public/

## A brief introduction to project structure
It is based on MVC concept and has followed the Laravel's standard structure. Although the information below on the application structure is very brief, at least it gives a starting point for the developers to work on the project 

* app/Http/Controllers - Contains all the controllers for the application. There's a file AssetsController.php inside it which controls all the requests related to assets feature. 
* resoruces/views - Views folder contains all of our different type of views used in application. For example views for home, add, update assets pages
* public - It contains JS and CSS files added in the project
* routes - There's web.php file where we've specified all the routes for this application
* database/migrations - Contains all the scripts added to create the database schemas. 2018_07_28_102242_create_assets_table.php file responsible for the assets related tables
* vendor - Contains all the composer dependencies

For more details on the files structure, follow this docs https://laravel.com/docs/ link.

## Note
Major focus is given to application architecture and development environment. UI/UX part is quite basic which can be easly implemented based on the required design.

## Future Improvements
Following are some immediate improvements which i can think at the moment
- Unit testing
- Automatic deployment scripts
- Improvments in database schemas

## References
Below link conatins the best practices (Design principles and Design patterns specific to Laravel) and Coding standards which i have followed in this project

http://www.laravelbestpractices.com/
