<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Class</title>
</head>

<body>

    <?php
    if (isset($status)) {
        if ($status == 'error')
            echo '<div style="padding:10px; width:200px; background-color:red; border-radius:5px;"><strong>Error</strong> ' . $msg . '</div>';
        if ($status == 'success')
            echo '<div style="padding:10px; width:200px; background-color:green; border-radius:5px;"><strong>Success</strong> ' . $msg . '</div>';
    }
    ?>
    <br />
    <h3>Theme Class Edit</h3>
    <br />
    <div>
        <form action="/themeclass/save_edit" method="POST">
            <label for="">Nama</label>
            <div>
                <input type="hidden" name="id" id="id" value="<?= $data['id'] ?>">
                <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>">
            </div>
            <br>
            <input type="submit" value="Submit">
            <a href="/themeclass/">Kembali</a>
        </form>
    </div>
</body>

</html>