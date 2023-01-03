<?php

$user_data = file_get_contents('user_data.json');
$user = json_decode($user_data, true);
$output = "";

 foreach($user as $user){
    $output .= "<tr><td>".$user['Full_name']."</td>";
    $output .= "<td>".$user['Age']."</td>";
    $output .= "<td>".$user['Birth_date']."</td>";
    $output .= "<td>".$user['Course']."</td>";
    $output .= "<td>".$user['Course_Year']."</td>";
    $output .= "</tr>";
}

echo $output;