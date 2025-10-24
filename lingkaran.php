<?php

class LuasLingkaran
{

    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban')
    {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Lingkaran {$nama} Hasilnya adalah: {$rumus}";
    }

    public static function testing()
    {
        echo "<br/>";
        echo "ini dari static: ";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 7;
$lingkaran->tampil();
LuasLingkaran::testing();
