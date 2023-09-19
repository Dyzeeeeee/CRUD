<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD</h1>
    <form action="<?=base_url('save')?>" method="post">
    <input type="hidden" name="id" value="<?= isset($u['id']) ? $u['id'] : '' ?>">
    <label>Student ID: </label>
    <input type="text" name="studentID" placeholder="">
    <br><br>
    <label>Full Name: </label>
    <input type="text" name="fullname" placeholder="" >
    <br><br>
    <label>Year Level: </label>
    <input type="text" name="yearLevel" placeholder="" >
    <br><br>
    <label>Program: </label>
    <input type="text" name="program" placeholder=""    >
     <br>
    <input type="submit" name="submit" value="save">
    </form>
    <table border="1">
        <tr>
            <th>Student ID</th>
            <th>Full Name</th>
            <th>Year Level</th>
            <th>Program</th>
            <th>Action</th>
        </tr>
        <?php foreach ($r as $i): ?>
        <tr>
            <th><?=$i['studentID']?></th>
            <th><?=$i['fullname']?></th>
            <th><?=$i['yearLevel']?></th>
            <th><?=$i['program']?></th>
            <th>
                <a href="/edit/<?=$i['id']?>">edit</a>
                <a href="/delete/<?=$i['id']?>">delete</a>
            </th>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>