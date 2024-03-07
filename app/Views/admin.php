<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->include('adminlayout/headerasset'); ?>
    <title>kuinvite :: admin</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            halo dunia ! ini digital invitation
            <br>
            <h3>Digital Invitation</h3>
            <ul>
                <li><a href="">Dasboard</a></li>
                <li><a href="">My Invitation</a></li>
            </ul>
            <br>
            <h3>Master</h3>
            <ul>
                <li><a href="">Sosmed</a></li>
                <li><a href="/themetype/">Theme Type</a></li>
                <li><a href="/themeclass/">Theme Class</a></li>
                <li><a href="/theme/">Theme</a></li>
                <li><a href="/themeclasslist/">Theme Class List</a></li>
            </ul>
            <br>
            <h3>Settings</h3>
            <ul>
                <li><a href="">User</a></li>
                <li><a href="">Role</a></li>
            </ul>
            <br>
            <h3>Profile</h3>
            <ul>
                <li><a href="">My Profile</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>
    </div>
</body>
<?= $this->include('adminlayout/footerasset'); ?>

</html>