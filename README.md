File set up 

setting up composer 
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

Run Vue - npm run watch

Run Lavarel - php artisan serve

Then check command line for loacal host address


Vue Files Storage
Find front end Vue files in 
practical-test/resources/js/


Colours:
body blue colour - #1e2e50
body white colour - #ffffff

dark blue font - #293579
link blue colours - #4d9bfe

buttons - #2083fe


