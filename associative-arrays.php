<?php include "templates/header.php" ?>

<div class="border rounded">
    <h1>Associative Array</h1>

    <?php 
    $students = [
        "Interactive Media" => 8,
        "Game Art" => 5,
        "Graphics Design" => 15
    ];
    ?>

    print_r($students);

    echo "<p>There are {$students['Interactive Media']} students in Interactive Media.<p>";

    $student['Graphics Design'] = 1; //to update
    $student['Graphics Art'] = 10;

    print_r($students);

    /*
        Home Research:
            array_key_exists()
            array_keys()
            array_values()
     */
</div>

<?php include "templates/footer.php" ?>
