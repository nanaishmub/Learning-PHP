    <?php
    echo"Hello World! <br>";
    echo"My first PHP <br>";

    // Variabes

    //String Data type
    $name = "Aisha Mujahid";
    echo $name;
    echo "<br> Hello {$name} <br>"; //string literal

    $food = "pizza";
    echo"You like {$food} <br>";

    $email = "aisha@madeupmail.com";
    echo"Your email is {$email} <br>";

    //Integers
    $age = 21;
    echo"You are {$age} years old <br>";

    $users = 14;
    echo"There are {$users} users online <br>";

    $quantity = 45;
    echo"You would like to buy {$quantity} oranges<br>";

    //Float
    $gpa = 4.22;
    echo"Your gpa is {$gpa}<br>";

    $price = 17.99;
    echo"Your {$food} is \${$price} <br>";

    //Boolean
    $isStudent = true;
    echo"Student status {$isStudent}"; //boolean variables are usually not echoed to the browser, rather they are used intenally within the code
     
?>