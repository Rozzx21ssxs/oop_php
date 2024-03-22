<?php

class ATM
{
    private $saldo;

    public function __construct($saldoawal)
    {
        $this->saldo = $saldoawal;
    }

    public function ceksaldo()
    {
        echo "saldo anda saat ini: Rp " . number_format($this->saldo, 0, ',', ',') . PHP_EOL;
    }

    public function tartikTunai($jumlah)
    {
        if ($jumlah <= 0) {
            echo "jumlah penarikan tidak valid" . PHP_EOL;
            return;
        }
        
        if ($jumlah > $this->saldo) {
            echo "saldo tidak mencukupi" . PHP_EOL;
            return;
        }

        $this->saldo -= $jumlah;
        echo "penarikan tunai berhasil. saldo anda sekarang: Rp " . number_format($this->saldo, 0, ',', ',') . PHP_EOL;
    }

    public function setortunai($jumlah)
    {
        if ($jumlah <= 0) {
            echo "jumlah setoran tidak valid" . PHP_EOL;
            return;
        }

        $this->saldo += $jumlah;
        echo "Setoran tunai berhasil. Saldo anda sekarang: Rp " . number_format($this->saldo, 0, ',', ',') . PHP_EOL;
    }
}

// contoh penggunaan
$atm = new ATM(1000000);

$atm->ceksaldo();

$atm->tartikTunai(5000000);
$atm->ceksaldo();

$atm->setortunai(2000000);
$atm->ceksaldo();

$atm->tartikTunai(10000000);
$atm->ceksaldo();

?>