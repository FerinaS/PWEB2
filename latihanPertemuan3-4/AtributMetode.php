<?php 

//membuat/mendefinisikan sebuah class Buku
class Buku {

    //menambah atribut
    public $judul;
    public $penulis;
    
    //metode construct untuk menginisialisasi
    public function __construct($judul, $penulis) {
        //properties ini akan diisi value dari parameter $judul, $penulis
        $this->judul = $judul;
        $this->penulis = $penulis;

    }
    //metode untuk menampilkan data
    public function tampilkanInfo() {
        //untuk mengembalikan informasi buku, termasuk judul dan penulis
        return "Buku: $this->judul, ditulis oleh $this->penulis.";

    }
}
// Instansiasi objek dari class Buku
$buku1 = new Buku("Pemrograman PHP", "John Doe");
//menampilkan data Buku
echo $buku1->tampilkanInfo();
?>
