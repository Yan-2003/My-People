<?php
    $error = "";
    $success = "";

    if(isset($_POST["submit"]))
    {
        if(empty($_POST["Fname"]))
        {
            $error =  "Please Enter your full name."; 
        }else if(empty($_POST["username"]))
        {
            $error =  "Please Enter a username."; 
        }else if(empty($_POST["age"]))
        {
            $error =  "Please Enter your age."; 
        }else if(empty($_POST["course"]))
        {
            $error =  "Please Enter your course."; 
        }else if(empty($_POST["year"]))
        {
            $error =  "Please Enter your year level."; 
        }else if(empty($_POST["bday"]))
        {
            $error =  "Please Enter your Birth date."; 
        }else
        {
            if(file_exists('user_data.json'))
            {   
                $current_data = file_get_contents('user_data.json');
                $array_data = json_decode($current_data, true);
                $fillup = array(
                    'id'=>                 $id,
                    'Full_name'  =>         $_POST['Fname'],
                    'Username' =>            $_POST['username'],
                    'Age' =>                 $_POST['age'],
                    'Course' =>              $_POST['course'],
                    'Course_Year' =>         $_POST['year'],
                    'Birth_date' =>          $_POST['bday']
                );
    
                $array_data[] = $fillup;
                $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
                if(file_put_contents('user_data.json', $final_data)){
                    $success = "Your Data has been save.";
                }else{
                    $error = "NO DATA BASE.";
                }
            }else{
                $error = "NO DATA BASE.";
            }
        }
    }