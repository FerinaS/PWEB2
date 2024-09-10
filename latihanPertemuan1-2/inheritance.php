<?php

// definisi Class
Class Produk {

    // Atribut atau Properties
    protected $nama;

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;

    }

    //untuk mengambil nilai properti
    public function getName() {
        return $this->nama;
    }
}
//untuk mewariri/pewarisan
class Buku extends Produk {
    // untuk menyimpan informasi, hanya bisa diakses oleh method yang ada di dalam kelas
    private $penulis;

    //metode construct untuk menginisialisasi
    public function __construct($nama, $penulis) {
        //untuk memanggil konstruktor dari kelas induk dan juga untuk menginisialisasi properti
        parent::__construct($nama);
        $this->penulis = $penulis;
    }
    
    // untuk mengambil nilai dari properti
    public function getPenulis() {
        return $this->penulis;

    }
}

 // Instansiasi Objek
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
// menampilkan/meencetak hasil
echo $buku1->getName();
?>