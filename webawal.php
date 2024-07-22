<?php
// Dummy data for demonstration purposes
$users = [
    [
        'username' => 'student123',
        'email' => 'student@example.com',
        'role' => 'student'
    ],
    [
        'username' => 'lecturer456',
        'email' => 'lecturer@example.com',
        'role' => 'lecturer'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumpulan Tugas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Pengumpulan Tugas</h1>
        <?php foreach ($users as $user): ?>
            <div class="profile <?php echo $user['role']; ?>">
                <img src="<?php echo $user['role']; ?>_icon.png" alt="<?php echo ucfirst($user['role']); ?> Icon" class="profile-icon">
                <div class="profile-info">
                    <p>Username: <?php echo $user['username']; ?></p>
                    <p>Email: <?php echo $user['email']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
