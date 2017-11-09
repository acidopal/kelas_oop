<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
use Portal\News;

$news = new News();
echo $news->getTitle();
echo "<br>";

echo "Sekarang : ". Carbon::now()."<br>";

echo "Umur Saya : ". Carbon::createFromDate(1997, 10, 24)->age."<br>";	

echo "Kamu lahir : ". Carbon::createFromDate(1997, 10, 24)->diffForHumans()."<br>";	