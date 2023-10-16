<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset= "UTF-8">
        <title>TGIF</title>
        <meta name="author" content="India and Janey">
        <meta name="description" content="Travel Guide for International Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" 
        href="custom.css?version=<?php print time();?>" type="text/css">
    </head>

    <?php
    print '<body id="' . 
    $path_parts['filename'] . '">';   
    print '<section class="top">';
    include 'nav.php'; 
    include 'header.php';
    print '</section>';
    include 'nav2.php';?>