<?php
session_start();
require_once __DIR__ . '/html_head.php';
?>

<body class="bg-secondary">
    <div class="d-flex justify-content-center mt-5 text-center p-5">
        <div class="card text-bg-success mb-3">
            <div class="card-header text-dark fw-bolder fs-4 ">Your new strong password:</div>
            <div class="card-body">
                <h5 class="card-title p-2 fs-3"><?php echo $_SESSION['password'] ?></h5>
            </div>
        </div>
    </div>
</body>

</html>