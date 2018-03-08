---------------- RUN SHOW GITHUB USER PROFILE --------------------


INSTALL ON DEBIAN:
	- STEP 1: MAKE SURE THAT YOU HAVE LAMPP INSTALLED, IF NOT DOWNLOAD USING THIS COMMAND: "wget https://ufpr.dl.sourceforge.net/project/xampp/XAMPP%20Linux/1.8.1/xampp-linux-1.8.1.tar.gz"
	- STEP 2: USE THIS FOLLOWING COMMAND TO EXTRACT "sudo tar xvfz xampp-linux-1.8.1.tar.gz -C /opt"
	- STEP 3: USE THIS COMMAND 'cd opt/lampp/htdocs' TO ENTER ON HTDOCS FOLDER AND EXTRACT USING THIS COMMAND "unzip Autenticao.zip"
	- STEP 4: NOW LETS GO INSTALL COMPOSER 
	- STEP 5: DOWNLOAD USING THIS FOLLOWING LIKE: "curl -sS https://getcomposer.org/installer | php"
	- STEP 6: NOW GIVE PERMISSION TO THE FILE USING "sudo chmod +x composer.phar"
	- STEP 7: TO MOVE THE FILE TO BIN FOLDER USING "sudo mv composer.phar /usr/local/bin/composer"
	- STEP 8: USE THIS FOLLOWING COMMAND 'cd Autenticacao' TO OPEN THE FOLDER AND USE THIS COMMAND "composer update" TO UPDATE ALL DEPENDENCIES
	- STEP 9: LATER, RUN THE SERVER USING THIS COMMAND: "php artisan server"
	- STEP 10: ACCESS THE PAGE: HTTP://LOCALHOST:8000/

INSTALL ON WINDOWS:
	- STEP 1: MAKE SURE THAT YOU HAVE XAMPP INSTALLED, IF NOT DOWNLOAD AND INSTALL ON https://www.apachefriends.org/pt_br/download.html
	- STEP 2: DOWNLOAD AND INSTALL COMPOSER, FOLLOWING THIS LINK: https://getcomposer.org/doc/00-intro.md#installation-windows.
	- STEP 3: PUT THE PROJECT CALLED "Autenticacao" INSIDE 'HTDOCS' LOCATED IN 'C:/XAMPP'
	- STEP 4: IN WINDOWS CMD ACCESS THE FOLDER "Autenticacao" AND USE THIS FOLLOWING COMMAND: "composer update"
	- STEP 5: LATER RUN THIS FOLLOWING COMMAND: "php artisan serve"
	- STEP 6: ACCESS ON YOUR BROWSER http://localhost:8000/