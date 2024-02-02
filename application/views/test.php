<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
</head>
<body>
    <nav class="navbar">
        <div class="hamburger-menu">&#9776;</div>
        <ul class="nav-list">
            <li <?php if ($active_tab == 'home') echo 'class="active"'; ?>><a href="<?= base_url('index.php/AdminController') ?>">Home</a></li>
            <li <?php if ($active_tab == 'view_roles') echo 'class="active"'; ?>><a href="<?= base_url('index.php/AdminController/viewRole') ?>">View Roles</a></li>
            <li <?php if ($active_tab == 'add_question_paper') echo 'class="active"'; ?>><a href="<?= base_url('admin/addQuestionPaper') ?>">Add Question Paper</a></li>
            <li <?php if ($active_tab == 'view_result') echo 'class="active"'; ?>><a href="<?= base_url('admin/viewResult') ?>">View Result</a></li>
            <li class="logout"><a href="<?= base_url('logout') ?>">Logout</a></li>
        </ul>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var hamburgerMenu = document.querySelector('.hamburger-menu');
            var navList = document.querySelector('.nav-list');

            hamburgerMenu.addEventListener('click', function () {
                navList.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
