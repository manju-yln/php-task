
/* The purpose of this code is to extract this URL "http://www.sagepub.com/journals/Journal202702#submission-guidelines" from the H/* this below code is implemented to extract URL "http://www.sagepub.com/journals/Journal202702#submission-guidelines" from the HTML markup. */

#There are two files in this application

1. app.php - contains php source code of the project
2. readMe.txt - contains explanation of the project

use the following command to run this project in linux platform

#php app.php

Here is the functionality description

1. we are using get_file_contents function to load HTML markup from the url "https://journals.sagepub.com/home/VRT".
2. Created DOM Document object and assigning html markup to it, so that we can html structure by using DOM document.
3. Finally i am looping in all the anchor tags and using an IF condition to match with specific one and display it.




