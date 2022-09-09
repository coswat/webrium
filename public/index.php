<?php

require_once __DIR__ . '/../vendor/autoload.php';

use webrium\core\App;
use webrium\core\Debug;
use webrium\core\File;
use webrium\core\Directory;

// init index path
App::root(__DIR__.'/..');


Debug::displayErrors(true);

// Load default directory structure
Directory::initDefaultStructure();

// Load config
File::source('config',['Config.php','DB.php']);

// load routes
File::source('routes',['Web.php']);
