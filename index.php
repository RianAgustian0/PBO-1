<?php 

require_once('./lingkaran.php'); //panggil file lingkaran

Use App\Math\LuasLingkaran;//panggil namespace

$lingkaran = new LuasLingkaran(15);
$lingkaran->tampil('roda');
LuasLingkaran::testing();

?>