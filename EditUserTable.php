<?php

require_once './lib/UsersDB.php';
require_once './lib/posts.php';


global $UserDB;
global $postDB;


//deleteUserDB();
//echo "<pre>";
//showUserDB();
//echo "</pre>";
//delete_post('Sina', 'Isfahan');
//deletePostDB();
echo "<pre>";
showPostDB();
echo "</pre>";

function showUserDB(){
    global $UserDB;
    $results = $UserDB->query("
            SELECT *
            FROM users
        ");    
    while($row = $results->fetchArray(SQLITE3_ASSOC)) {
        print_r($row);
    }  
}
function deleteUserDB(){
    global $UserDB;
    $results = $UserDB->query("
            SELECT *
            FROM users
        ");    
    while($row = $results->fetchArray(SQLITE3_ASSOC)) {
        delete_user($row['username']);
    }   
}

function showPostDB(){
    global $postDB;
    $results = $postDB->query("
            SELECT *
            FROM posts
        ");    
    while($row = $results->fetchArray(SQLITE3_ASSOC)) {
        print_r($row);
    }  
}
function deletePostDB(){
    global $postDB;
    $results = $postDB->query("
            SELECT *
            FROM posts
        ");    
    while($row = $results->fetchArray(SQLITE3_ASSOC)) {
        delete_post($row['username'],$row['location']);
    }   
}