<?php 
  $access_token = 'fMVGvZiqW0XP2WFyDRfh3yR72TQZ8+tV08ifTlXhCv7C+AXjthPuXrij91Jc8JfDTMSk7Ky/Ll4WyZ6PYBsGWx/usYJBHH+uH/wW40pOHGuaB0rSJmW6znOplGBuqQbShHfzoOui12J1v8+R5pSMHAdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
  ?>
