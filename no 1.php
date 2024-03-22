<?php
// definisakan kelas produk
class produk {
    private $id;
    private $nama;
    private $harga;
    private $deskripsi;

    public function __construct($id, $nama, $harga, $deskripsi) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->deskripsi = $deskripsi;
    }

    public function tampilkan() {
        echo "<h2>{$this->nama}</h2>";
        echo "<p>{$this->deskripsi}</p>";
        echo "<p>Harga: Rp{$this->harga}</p>";
    }
}

// Definisikan kelas keranjang belanja
class Keranjang {
    private $produk = [];

    public function tambahProduk (Produk $produk, $jumlah) {
        $this->produk[] = ['produk' => $produk, 'jumlah' => $jumlah];
    }

    public function tampilkan() {
        foreach ($this->produk as $item) {
            $item['produk']->tampilkan();
            echo "<p>Jumlah: {$item['jumlah']}</p>";
            echo "<hr>";
        }
    }
}

// contoh penggunaan 
$produk1 = new produk(1, 'kemeja', 150000, 'kemeja lengan panjang dengan motif kotak-kotak.');
$produk2 = new produk(2, 'celana jeans', 250000, 'celana jeans slim fit dengan bahan denim berkualitas.');

$keranjang = new keranjang();
$keranjang->tambahproduk($produk1, 2);
$keranjang->tambahproduk($produk2, 1);

$keranjang->tampilkan();
?>