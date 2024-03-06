<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Type</title>
</head>

<body>

    <div>
        <a href="/themetype/add">Add</a>
    </div>
    <br />
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
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
            foreach ($list as $p) {
            ?>
                <tr>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['flag']; ?></td>
                    <td><?= $p['created_at']; ?></td>
                    <td><?= $p['created_who']; ?></td>
                    <td><?= $p['updated_at']; ?></td>
                    <td><?= $p['updated_who']; ?></td>
                    <td>
                        <a href="/themetype/edit/<?= $p['id'] ?>">Edit</a>
                        <a href="/themetype/delete/<?= $p['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br />
    <a href="/">Back to home</a>
</body>
</html>