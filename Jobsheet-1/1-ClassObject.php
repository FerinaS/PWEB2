<?php
//membuat/mendefinisikan sebuah class mahasiswa
Class Mahasiswa {

//menambah atribut nama,nim,dan jurusan
public $nama;
public $nim;
public $jurusan;

//metode construct untuk menginisialisasi
public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;

    }
//metode untuk menampilkan data
public function tampilkanData() {
    return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}
// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("FERINA", "230302036", "Komputer dan Bisnis");
//menampilkan data mahasiswa
echo $mahasiswa->tampilkanData();
?>
