<?php
require_once 'helpers.php';
$data = readTxtData('data.txt', ' ');

?>
<table border="1">
    <thead>
        <th>STT</th>
        <th>Tên</th>
        <th>MSSV</th>
    </thead>
    <tbody>
    <?php foreach ($data as $line):?>
        <tr>
            <td><?= $line[0] ?></td>
            <td><?= $line[1] ?></td>
            <td><?= $line[2] ?></td>
        </tr>
    <?php endforeach?>
    </tbody>
</table>