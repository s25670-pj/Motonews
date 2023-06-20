<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controller/posts.php');

if (isset($_GET['id']))
{
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $post['title']; ?> | Motonews</title>
</head>
<body>

<?php include(ROOT_PATH . "/app/include/header.php"); ?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

        <!-- Main Content Wrapper -->
        <div class="main-content-wrapper">
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>

                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                </div>

            </div>
        </div>
        <!-- // Main Content -->

        <!-- Sidebar -->
        <div class="sidebar single">
            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <?php foreach ($topics as $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <!-- // Sidebar -->
    </div>
    <!-- // Content -->

</div>
<?php include(ROOT_PATH . "/app/include/footer.php"); ?>
</body>

</html>