<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme</title>
</head>

<body>
    <?php
    $session = session();
    if (isset($session->error))
        echo '<div style="padding:10px; width:200px; background-color:red; border-radius:5px;"><strong>Error</strong> ' . $session->error . '</div>';
    if (isset($session->success))
        echo '<div style="padding:10px; width:200px; background-color:green; border-radius:5px;"><strong>Success</strong> ' . $session->success . '</div>';
    ?>
    <br />
    <h3>Theme Edit</h3>
    <br />
    <div>
        <form action="/theme/save_edit" method="POST">
            <label for="">Nama</label>
            <div>
                <input type="hidden" name="id" id="id" value="<?= $data['id'] ?>">
                <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>">
            </div>
            <label for="">Theme Type</label>
            <div>
                <select name="jenis_theme_id" id="jenis_theme_id">
                    <?php foreach ($listjenis as $jenis) {
                        if ($data['jenis_theme_id'] == $jenis['id'])
                            echo '<option value="' . $jenis['id'] . '" selected>' . $jenis['nama'] . '</option>';
                        else
                            echo '<option value="' . $jenis['id'] . '">' . $jenis['nama'] . '</option>';
                    } ?>
                </select>
            </div>
            <br>
            <input type="submit" value="Submit">
            <a href="/theme/">Kembali</a>
        </form>
    </div>
</body>

</html>