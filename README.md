# PantherHackers Dev Environment

A development environment for the old PantherHackers Wordpress website.

## Installation - docker
1.) install [docker](https://docs.docker.com/engine/installation/). Make sure to include `docker-compose` in the installation  
2.) `cd` into this repo's root directory  
3.) run `docker-compose up`  
4.) navigate to [http://localhost:8000](http://localhost:8000) and go through the install  
5.) If you want to upload data to the database, extract the tables [from mysq to a .sql file](http://stackoverflow.com/a/17479787/2229572) and then come into the root of this repo. 
use the command `docker exec -it {current_directory}_db_1 mysql -u wordpress -pwordpress wordpress < db.sql` 

## Installation - XAMPP

This installation is written for Windows based systems.
The instructions should be very similar for Linux and MacOS based systems.

1.) Install appropriate version of XAMPP (or any stack consisting of Apache, MySQL/MariaDB, and PHP)
If using XAMPP the link is: https://www.apachefriends.org/

2.) Move the "PantherHackers" folder into the "htdocs" folder (default: C:\xampp\htdocs)

3.) Move the "wordpress" database into the myql data folder (default: C:\xampp\mysql\data)

To Check to see if MySQL is set up correctly, open XAMPP control panel, click the open the MySQL Admin panel (localhost/phpmyadmin)
On the listing of databases on the left, you should see "wordpress"
Click it, then click on "privileges" on the top menu.
There should be a user with the attributes of: "wordpress, localhost, global, ALL PRIVLEGES, Yes"
If not, add a new user account named "wordpress" with the host name "localhost" password of "wordpresspass", and check the "Check all" under Global Privileges.
Press the "Go" button at the bottom to create this account.

4.) Run Apache and MySQL (if already being run, stop and restart both services)

5.) Point web browser to address (in this case "localhost/pantherhackers")
