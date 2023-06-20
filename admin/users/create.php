<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controller/users.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="stylesheet" href="../../assets/css/admin.css">
        <title>Admin Section - Add User</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/include/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/include/adminSidebar.php"); ?>


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add User</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add User</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="create.php" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                        </div>
                        <div>
                            <?php if (isset($admin) && $admin == 1): ?>
                                <label>
                                    <input type="checkbox" name="admin" checked>
                                    Admin
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="admin">
                                    Admin
                                </label>
                            <?php endif; ?>
                            
                        </div>

                        <div>
                            <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>

    </body>

</html>