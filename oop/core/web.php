<?php
// register routes in your app

Router::get("", function() {
    $homeController = new HomeController;
    $homeController->index();
});

####################################
### Create get::'memes/get/{id}' route here
Router::get("memes/get/{id}", function($id) {
    $memesController = new MemesController;
    $memesController->getMeme($id);
});
####################################

####################################
### Create get::'memes/create' route here
Router::get("memes/create", function() {
    $memesController = new MemesController;
    $memesController->newMeme();
});
####################################

####################################
### Create post::'memes/create' route here
Router::post("memes/create", function() {
    $memesController = new MemesController;
    $memesController->create();
});
####################################

####################################
### Create post::'memes/delete' route here
Router::post("memes/delete", function() {
    $memesController = new MemesController;
    $memesController->delete();
});
####################################

####################################
### Create post::'memes/update' route here
Router::post("memes/update", function() {
    $memesController = new MemesController;
    $memesController->update();
});
####################################


Router::get("users/login", function() {
    $usersController = new UsersController;
    $usersController->getLogin();
});

####################################
### Create post::'users/login' route here
Router::post("users/login", function() {
    $usersController = new UsersController;
    $usersController->login();
});
####################################

Router::post("users/create", function() {
    $usersController = new UsersController;
    $usersController->create();
});


Router::get("users/logout", function() {
    $usersController = new UsersController;
    $usersController->logout();
});

if(Router::$found === false) {
   include "views/_404.php";
}
