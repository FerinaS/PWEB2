<?php

//membuat/mendefinisikan sebuah class Mobil
class mobil {
    //menambah atribut merk dan warna
    public $merk;
    public $warna;

    //metode construct untuk menginisialisasi
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;

    }

    //metode untuk menampilkan data
    public function deskripsi() {
         //untuk mengembalikan informasi mobil
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }
}

// Instansiasi objek dari class mobil
$mobil1 = new Mobil("Toyota", "Hitam");
//menampilkan data mobil
echo $mobil1->deskripsi();
?>
        