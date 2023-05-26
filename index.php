<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $person1 = new Person("Ahmed",19); 
    //$person1->set_name("James\n"); 
    echo $person1->get_name() . "=>" . $person->get_age; 

    $person2 = new Person("Mary",21); 
    //$person1->set_name("Helen\n");
    echo $person2->get_name() . "=>" . $person->get_age; 


    ?>
</body>

</html>