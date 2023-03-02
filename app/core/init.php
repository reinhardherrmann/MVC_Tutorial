<?php

/**
 * every file in the core folder must be added in the init.php
 * to be loaded by index.php
 */


require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
// this runs the website:
require 'App.php';