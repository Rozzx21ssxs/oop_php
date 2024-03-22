<?php

class buku
{
    private $judul;
    private $pengarang;
    private $jumlahhalaman;
    private $statuspinjam;

    public function __construct($judul, $pengarag, $jumlahhalaman)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->jumlahhalaman = $jumlahhalaman;
        $this->statuspinjam = false;
    }

    public function getjudul()
    {
        return $this->judul;
    }

    public function getpengarang()
    {
        return $this->pengarang;
    }

    public function getjumlahhalaman()
    {
        return $this->jumlahhalaman;
    }

    public function getstatuspinjam()
    {
        return $this->statuspinjam ? "sudah dipinjam" : "belum dipinjam";
    }

    public function pinjam()
    {
        if ($this->statuspinjam) {
            echo "buku sedang dipinjam";
            return;
        }

        $this->statuspinjam = true;
        echo "peminjaman berhasil";
    }

    public function kembalikan()
    {
        if (!$this->statuspinjam) {
            echo "buku belum dipinjam";
            return;
        }

        $this->statuspinjam = false;
        echo "pengembalian berhasil";
    }
}

// contoh penggunaan 
$buku1 = new buku("harry potter", "j.k. rowling", 300);
$buku2 = new buku("sherlock holmes", "arthur conan doyle", 400);

echo "buku 1: " . $buku1->getjudul() . " oleh " . $buku1->getpengarang() . " (" . $buku1->getjumlahhalaman() . "halaman, " . $buku1->getstatuspinjam() . ")" . PHP_EOL;
echo "buku 2: " . $buku2->getjudul() . " oleh " . $buku2->getpengarang() . " (" . $buku2->getjumlahhalaman() . "halaman, " . $buku2->getstatuspinjam() . ")" . PHP_EOL;

$buku1->pinjam();
$buku2->pinjam();

echo "setelah dipinjam:" . PHP_EOL;
echo "buku 1: " . $buku1->getjudul() . " (" . $buku1->getstatuspinjam() . ")" . PHP_EOL;
echo "buku 2: " . $buku2->getjudul() . " (" . $buku2->getstatuspinjam() . ")" . PHP_EOL;

$buku1->kembalikan();

echo "setelah dikembalikan:" . PHP_EOL;
echo "buku1: " . $buku1->getjudul() . " (" . $buku1->getstatuspinjam() . ")" . PHP_EOL;

?>