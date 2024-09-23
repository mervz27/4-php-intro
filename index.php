<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $usernames = ["mark","john","michael"];
        $usernameStr = "mark,john,michael";
        
        //echo "implode ". implode(",",$usernames) ."<br>";
        //echo "explode ". json_encode(explode(",",$usernameStr)) ."<br>";
        //echo "total characters after trim ". strlen(trim($username)); 
        //echo "Your total purchase is $totalAmount['purchase'] <br>";
        //echo 'Your total purchase is 5000';

        $totalAmount = 45.31231231;
        //echo "round ".  round($totalAmount,2);

        $randomNumber = rand(1,5);
        //echo "Your random number is ". $randomNumber;
        //camelCase
        //PascalCase
        $fullName = "john doe";
        //echo $fullName."<br>";
        //echo ucwords($fullName);

        // $total = $total + 5;
        // $total += 5;

        $message = "Hello there, ";
        //$message = $message . "General Kenobi"; 
        $message .= "General Kenobi";
        //echo $message;

        $isLoggedIn = true;
        
        //AND OPERATOR
        // if($isLoggedIn && $isAdmin){
        //     echo "YOU ARE LOGGED IN AND AN ADMIN USER";
        // } else {
        //     echo "EITHER NOT LOGIN OR NOT ADMIN";
        // }

        //AND OPERATOR
        // if($isLoggedIn || $isAdmin){
        //     echo "YOU ARE LOGGED IN OR AN ADMIN USER";
        // } else {
        //     echo "NOT LOGIN OR NOT ADMIN";
        // }

        //verify if the user is not admin. and if not admin, display 'you are not admin'.
        $isAdmin = false;

        if(!$isAdmin){
            echo "You are not admin";
        }

    ?>
    
</body>
</html>