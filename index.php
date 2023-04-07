<?php

require './config/config.php';
require './Libraries/Controllers.php';
require './Libraries/Database.php';

require './Models/User.php';
require './Models/Post.php';

require './Controllers/Pages.php';
require './Controllers/Users.php';
require './Controllers/Posts.php';
require './Libraries/Core.php';

/**  
* an autoloader woul normally be used here 
* but i wanted to leave the files explicit
*/

session_start();

new Core();