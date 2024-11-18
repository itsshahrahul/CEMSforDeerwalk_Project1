<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>cems</title>
    <?php require 'utils/styles.php'; ?>
</head>
<body>
<?php
include 'classes/db1.php';
$result = mysqli_query($conn, "SELECT * FROM events"); 

$options = '';
while($row = mysqli_fetch_assoc($result)) {
    $options .= '<option value="'.$row['event_title'].'">'.$row['event_title'].'</option>';
}
?>
<?php require 'utils/header.php'; ?>
<div class="content">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                <label>Student Roll No:</label><br>
                <input type="text" name="usn" class="form-control" required><br><br>

                <label>Student Name:</label><br>
                <input type="text" name="name" class="form-control" required><br><br>

                <label>Branch:</label><br>
                <input type="text" name="branch" class="form-control" required><br><br>

                <label>Semester:</label><br>
                <input type="text" name="sem" class="form-control" required><br><br>

                <label>Email:</label><br>
                <input type="text" name="email" class="form-control" required><br><br>

                <label>Phone:</label><br>
                <input type="text" name="phone" class="form-control" required><br><br>

                <label>College:</label><br>
                <input type="text" name="college" class="form-control" required><br><br>

         
                <label>Event Type:</label><br>
                <select name="event_name" class="form-control" required>
                    <?php echo $options; ?>
                </select><br><br>

                <button type="submit" name="update">Submit</button><br><br>
            </form>
        </div>
    </div>
</div>

<?php require 'utils/footer.php'; ?>
</body>
</html>

<?php
if (isset($_POST["update"])) {
    $usn = $_POST["usn"];
    $name = $_POST["name"];
    $branch = $_POST["branch"];
    $sem = $_POST["sem"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $college = $_POST["college"];
    $event_name = $_POST["event_name"];

    if (!empty($usn) && !empty($name) && !empty($branch) && !empty($sem) && !empty($email) && !empty($phone) && !empty($college) && !empty($event_name)) {
        $INSERT = $conn->prepare("INSERT INTO participent (usn, name, branch, sem, email, phone, college, event_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $INSERT->bind_param("sssissss", $usn, $name, $branch, $sem, $email, $phone, $college, $event_name);

        if($INSERT->execute()){
            echo "<script>
            alert('Registered Successfully!');
            window.location.href='usn.php';
            </script>";
        } else {
            echo "<script>
            alert('Failed to register. Please try again.');
            window.location.href='register.php';
            </script>";
        }

        $INSERT->close();
    } else {
        echo "<script>
        alert('All fields are required');
        window.location.href='register.php';
        </script>";
    }
    $conn->close();
}
?>
