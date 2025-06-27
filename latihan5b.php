<?php
$mahasiswa = [
    ['nama' => 'Cania Gemy Lestari', 'nim' => '701240164', 'jurusan' => 'SI'],
    ['nama' => 'Tanti Yuliawati', 'nim' => '67890', 'jurusan' => 'SI'],
    ['nama' => 'Muhammad Faisal', 'nim' => '11223', 'jurusan' => 'MI'],
];
?>

<h2>Daftar Mahasiswa</h2>
<ul>
<?php foreach ($mahasiswa as $mhs): ?>
    <?php
        // Encode seluruh data mahasiswa menjadi query string
        $query = http_build_query($mhs);
    ?>
    <li>
        <a href="latihangc.php?<?= $query ?>">
            <?= htmlspecialchars($mhs['nama']) ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>