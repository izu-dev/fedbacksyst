<style>
    li{

    }
</style>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $summary = $_POST['summary'];
    $skills = $_POST['skills'];

      $skillsarrays = explode(, $skills);

    // create atable like a resume
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Age</th>";
    echo "<th>Phone</th>";
    echo "<th>skills</th>";
    echo "<th>summary</th>";
    echo "<tr>";
    echo "<tr>";

    echo "<td>$name</td>";
    echo "<td>$age</td>";
    echo "<td>$phone</td>";
    echo "<td>$skills</td>";
    echo "<td>$summary</td>";


    foreach($skillsarrays as $skill){
        echo "<li>$skill</li>";
    }
    echo ""

    echo"<button>Go Back</button>";

}