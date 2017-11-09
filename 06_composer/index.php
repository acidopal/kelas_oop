<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

echo "Sekarang : ". Carbon::now()."<br>";

echo "Umur Saya : ". Carbon::createFromDate(1997, 10, 24)->age."<br>';