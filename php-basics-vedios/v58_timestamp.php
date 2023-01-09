<?php
$time = time();
$actual_time = date('d M Y - h :i :s', $time);
// here time less 60 seconds
$actual_time_somewhere = date('d M Y - h :i :s', $time-60);
echo 'current time is ' . $actual_time;
echo '<br>';
echo 'some where current time is ' . $actual_time_somewhere;
echo '<br>';

// strtotime() is a function in PHP that converts a string representation of a date and time into a Unix timestamp
$date = "2022-12-22";
$timestamp = strtotime($date);
echo $timestamp;
echo '<br>';
$timestamp_week = strtotime("+1 week"); 
echo $timestamp_week;
echo '<br>';
$actual_time = date('d M Y - h :i :s', strtotime("+1 year 2 hours 30 seconds"));
echo $actual_time;
echo '<br>';