<?php
include 'components/connect.php'; // Including database connection

// Ensure Super Admin is logged in
if(isset($_COOKIE['tutor_id'])){
    $tutor_id = $_COOKIE['tutor_id'];
 }else{
    $tutor_id = '';
    header('location:login.php');
 }

// Functionality: Activate/Deactivate Courses
if (isset($_GET['toggle_course'])) {
    $course_id = $_GET['course_id'];
    $status = $_GET['status'];

    $new_status = ($status == 'active') ? 'inactive' : 'active';
    $stmt = $conn->prepare("UPDATE courses SET status = ? WHERE id = ?");
    $stmt->execute([$new_status, $course_id]);
    header("Location: super_admin_dashboard.php");
    exit;
}

// Functionality: Delete User or Teacher
if (isset($_GET['delete_user'])) {
    $user_id = $_GET['user_id'];

    // Delete user
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$user_id]);

    // Optionally, delete courses uploaded by the teacher if they are deleted
    $stmt = $conn->prepare("DELETE FROM courses WHERE uploader_id = ?");
    $stmt->execute([$user_id]);

    header("Location: super_admin_dashboard.php");
    exit;
}

// Fetch all courses
$courses_stmt = $conn->prepare("SELECT courses.id, courses.title, courses.status, users.username FROM courses JOIN users ON courses.uploader_id = users.id");
$courses_stmt->execute();
$courses = $courses_stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch all users and teachers
$users_stmt = $conn->prepare("SELECT * FROM users WHERE role IN ('teacher', 'user')");
$users_stmt->execute();
$users = $users_stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Super Admin Dashboard</h1>

<!-- Section to Track Courses -->
<h2>Track Uploaded Courses</h2>
<table>
    <thead>
        <tr>
            <th>Course Title</th>
            <th>Uploader</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($courses as $course) : ?>
        <tr>
            <td><?= $course['title']; ?></td>
            <td><?= $course['username']; ?></td>
            <td><?= $course['status']; ?></td>
            <td>
                <!-- Toggle Active/Inactive -->
                <a href="super_admin_dashboard.php?toggle_course=1&course_id=<?= $course['id']; ?>&status=<?= $course['status']; ?>">
                    <?= ($course['status'] == 'active') ? 'Deactivate' : 'Activate'; ?>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Section to Delete Users and Teachers -->
<h2>Manage Users and Teachers</h2>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user['username']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['role']; ?></td>
            <td>
                <!-- Delete User or Teacher -->
                <a href="super_admin_dashboard.php?delete_user=1&user_id=<?= $user['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
