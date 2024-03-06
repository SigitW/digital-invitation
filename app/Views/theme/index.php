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

    <h3>Theme</h3>
    <br />

    <div>
        <a href="/theme/add">Add</a>
    </div>
    <br />
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Jenis Theme</th>
                <th>Flag</th>
                <th>Created Date</th>
                <th>Created Who</th>
                <th>Updated Date</th>
                <th>Updated Who</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($list != null) {
                foreach ($list as $p) {
            ?>
                    <tr>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['jenis_theme']; ?></td>
                        <td><?= $p['flag']; ?></td>
                        <td><?= $p['created_at']; ?></td>
                        <td><?= $p['created_who']; ?></td>
                        <td><?= $p['updated_at']; ?></td>
                        <td><?= $p['updated_who']; ?></td>
                        <td>
                            <a href="/theme/edit/<?= $p['id'] ?>">Edit</a>
                            <a href="/theme/delete/<?= $p['id'] ?>">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <br />
    <a href="/">Back to home</a>
</body>

</html>