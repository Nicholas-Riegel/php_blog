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

// I am deliberately not using an autoloader here in order to make things as clear as possible

session_start();

new Core();