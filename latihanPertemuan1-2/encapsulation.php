<?php

//membuat/mendefinisikan sebuah class mahasiswa
Class Buku {

    //menambah atribut/properties
    private $judul;
    private $penulis;

    //metode construct untuk menginisialisasi
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulisn = $penulis;

    }

    //untuk mengambil nilai dari properti 
    public function getJudul() {
        return $this->judul;
    }
    //untuk mengatur nilai dari properti
    public function setJudul($judul) {
        $this->judul = $judul;
    }
}

// Instansiasi Objek
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
// menampilkan/meencetak hasil
echo $buku1->getJudul(); 
?>