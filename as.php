<?php


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://raw.githubusercontent.com/ONEJACK/awww/main/main.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
echo curl_exec($ch);