<?php
    //multidimensional array
    $students_electives = [
        [
            "student_name" => "Daan de Vries",
            "reg_no" => " ",
            "test_score" => 18,
            "attendance_score" => 7,
            "exam_score" => 65,
            "total_score" => 90,
            "grade" => "A"
        ],
        [
            "student_name" => "Sophie Janssen",
            "reg_no" => " ",
            "test_score" => 15,
            "attendance_score" => 8,
            "exam_score" => 60,
            "total_score" => 83,
            "grade" => "B"
        ],
        [
            "student_name" => "Thomas Bakker",
            "reg_no" => " ",
            "test_score" => 14,
            "attendance_score" => 9,
            "exam_score" => 55,
            "total_score" => 78,
            "grade" => "B"
        ],
        [
            "student_name" => "Emma de Jong",
            "reg_no" => " ",
            "test_score" => 19,
            "attendance_score" => 6,
            "exam_score" => 70,
            "total_score" => 95,
            "grade" => "A"
        ],
        [
            "student_name" => "Lars van Dijk",
            "reg_no" => " ",
            "test_score" => 12,
            "attendance_score" => 8,
            "exam_score" => 50,
            "total_score" => 70,
            "grade" => "C"
        ],
        [
            "student_name" => "Julia Visser",
            "reg_no" => " ",
            "test_score" => 17,
            "attendance_score" => 7,
            "exam_score" => 60,
            "total_score" => 84,
            "grade" => "B"
        ],
        [
            "student_name" => "Milan de Bruijn",
            "reg_no" => " ",
            "test_score" => 13,
            "attendance_score" => 9,
            "exam_score" => 58,
            "total_score" => 80,
            "grade" => "B"
        ],
        [
            "student_name" => "Lotte Willems",
            "reg_no" => " ",
            "test_score" => 18,
            "attendance_score" => 8,
            "exam_score" => 68,
            "total_score" => 94,
            "grade" => "A"
        ],
        [
            "student_name" => "Bram van der Berg",
            "reg_no" => " ",
            "test_score" => 11,
            "attendance_score" => 6,
            "exam_score" => 45,
            "total_score" => 62,
            "grade" => "D"
        ],
        [
            "student_name" => "Noor Smits",
            "reg_no" => " ",
            "test_score" => 19,
            "attendance_score" => 9,
            "exam_score" => 70,
            "total_score" => 98,
            "grade" => "A"
        ]
    ];


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <title>php-exercise</title>
</head>
<body>
    <table class="centered">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Registration Number</th>
                <th>Test Score</th>
                <th>Attendance</th>
                <th>Exam Score</th>
                <th>Total Score</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($students_electives as $students_elective) {
                    echo "<tr>";
                    echo "<td>".$students_elective["student_name"]."</td>";
                    $students_elective["reg_no"] = rand(100, 200);
                    echo "<td>" . "REGNO-" . $students_elective["reg_no"] . "</td>";
                    echo "<td>".$students_elective["test_score"]."</td>";
                    echo "<td>".$students_elective["attendance_score"]."</td>";
                    echo "<td>".$students_elective["exam_score"]."</td>";
                    echo "<td>".$students_elective["total_score"]."</td>";
                    echo "<td>".$students_elective["grade"]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>