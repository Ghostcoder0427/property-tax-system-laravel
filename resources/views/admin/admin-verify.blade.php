<?php
session_start();
include_once '../db/config.php'; //

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $status = $_POST['status'];

    $sql = 'UPDATE users SET status = ? WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $status, $user_id);

    if ($stmt->execute()) {
        // Fetch user's email
        $sql = 'SELECT email FROM users WHERE id = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->fetch();

        // Send email to the user
        $subject = 'Registration ' . ucfirst($status);
        $message = $status === 'verified' ? 'Your registration has been verified.' : 'Your registration has been rejected.';
        $headers = 'From: no-reply@yourdomain.com';

        mail($email, $subject, $message, $headers);

        echo 'User status updated and email sent.';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

    $stmt->close();
}

$sql = "SELECT id, email, status FROM users WHERE status = 'pending'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Verify Registrations</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <h2>Pending Registrations</h2>
        <table>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row['email']) . '</td>';
                        echo '<td>';
                        echo "<form method='post' action='admin_verify.php'>";
                        echo "<input type='hidden' name='user_id' value='" . $row['id'] . "'>";
                        echo "<button type='submit' name='status' value='verified'>Verify</button>";
                        echo "<button type='submit' name='status' value='rejected'>Reject</button>";
                        echo '</form>';
                        echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo "<tr><td colspan='2'>No pending registrations.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
$conn->close();
?>
