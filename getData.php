<?php
$file = "myData.json";
$ambilData=  file_get_contents($file);
$decodeData = json_decode($ambilData,true);
?>
<?php foreach($decodeData as $data):?>
<tr>
    <td><?= $data['nama'];?></td>
    <td><?= $data['email'];?></td>
    <td><?= $data['alamat'];?></td>
    <td><?= $data['gender'];?></td>
    <td><?= $data['program'];?></td>
    <td><?= $data['tahun'];?></td>
</tr>
<?php endforeach;?>