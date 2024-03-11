<?php
session_start();
require_once __DIR__ . '/html_head.php';
$newPassword = $_SESSION['password'];
?>

<body class="bg-secondary">
    <div class="d-flex justify-content-center mt-5 text-center p-5">
        <?php if (strlen($newPassword) < 4) : ?>
            <div class="alert alert-primary fw-bold " role="alert">
                <p class="text-danger">The password creation failed.</p>
                <p>Please ensure you have filled in all required fields.</p>
            </div>
        <?php endif ?>
        <?php if (strlen($newPassword) >= 4) : ?>
            <div class="card text-bg-success mb-3">
                <div class="card-header text-dark fw-bolder fs-4 ">Your new strong password:</div>
                <div class="card-body">
                    <h5 class="card-title p-2 fs-3"><?php echo $newPassword ?></h5>
                </div>
            </div>
        <?php endif ?>
    </div>
</body>

</html>