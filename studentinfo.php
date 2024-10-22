<?php 

    $studentInfo = [
        "ID" => "mis2023210005",
        "Name" => "KHON Kimly",
        "Gender" => "Male",
        "Date to Birth" => "28/08/2004",
        "Major" => "MIS",
        "Address" => "Phnom Penh",
        "Fees" => "99$",
        "Credit" => "4"
    ];
    echo "======= Student Information =======<br>";
    foreach ($studentInfo as $key => $value) {
        echo "$key: $value<br>";
    }
    $elementCount = count($studentInfo);
    echo "<br>Total number of element : $elementCount<br>";
?>