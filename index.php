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
* an autoloader would normally be used here 
* but i wanted to leave the files explicit
*/

session_start();

// To follow the logic, start at ./Libraries/Core.php
new Core();