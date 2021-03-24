<?php
// Show the full name
function fullName($firstName, $lastName)
{
    return "The name is {$firstName} {$lastName}\n";
}

// Calculate age
function age($dateOfBirth)
{
    // Date in yyyy/mm/dd format; or it can be in other formats as well
    // Explode the date to get year, month and day
    $dob = explode("-", $dateOfBirth);

    // Get age from date or birthdate
    $age = (date("md", date("U", mktime(0, 0, 0, $dob[0], $dob[1], $dob[2]))) > date("md")
    ? ((date("Y") - $dob[0]) - 1) 
    : (date("Y") - $dob[0]));
    return "The Age is: " . $age;
}

echo fullName('Leonardo', 'Caballero');
echo age('1980-12-03') . "\n";

echo fullName('Ana', 'Poleo');
echo age('1982-04-12');
?>

