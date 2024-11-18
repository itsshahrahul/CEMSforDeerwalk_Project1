<?php
// Establish database connection
include_once 'classes/db1.php';

// Define and execute the query
$query = "SELECT * FROM participent";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>cems</title>
    <?php require 'utils/styles.php'; ?>
</head>
<body>
    <?php include 'utils/adminHeader.php'; ?>
    <div class="content">
        <div class="container">
            <h1>Student details</h1>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <table class="table table-hover">
                    <tr>
                        <th>USN</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Sem</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>College</th>
                        <th>Event</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo isset($row["usn"]) ? $row["usn"] : ""; ?></td>
                            <td><?php echo isset($row["name"]) ? $row["name"] : ""; ?></td>
                            <td><?php echo isset($row["branch"]) ? $row["branch"] : ""; ?></td>
                            <td><?php echo isset($row["sem"]) ? $row["sem"] : ""; ?></td>
                            <td><?php echo isset($row["email"]) ? $row["email"] : ""; ?></td>
                            <td><?php echo isset($row["phone"]) ? $row["phone"] : ""; ?></td>
                            <td><?php echo isset($row["college"]) ? $row["college"] : ""; ?></td>
                            <td><?php echo isset($row["event_name"]) ? $row["event_name"] : ""; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } else {
                echo "No result found";
            } ?>
        </div>
    </div>
    <?php include 'utils/footer.php'; ?>
</body>
</html>
