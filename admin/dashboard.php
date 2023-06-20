<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controller/posts.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/admin.css">
        <title>Admin Section - Dashboard</title>
    </head>
    <body>
        
    <?php include(ROOT_PATH . "/app/include/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/include/adminSidebar.php"); ?>

            <!-- Admin Content -->
            <div class="admin-content">

                <div class="content">

                    <h2 class="page-title">Dashboard</h2>

                    <?php include(ROOT_PATH . '/app/include/messages.php'); ?>

                </div>

            </div>
            <!-- // Admin Content -->
        </div>
    </body>
</html>