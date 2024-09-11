<?php
//membuat/mendefinisikan sebuah class mahasiswa
Class Mahasiswa {
//menambah atribut nama,nim,dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

//metode untuk menampilkan data
public function tampilkanData() {
    //untuk mengembalikan informasi mahasiswa, termasuk nama, NIM, dan jurusannya
    return"Nama: $this->nama" . "<br>" . "NIM: $this->nim" . "<br>" .  "Jurusan: $this->jurusan" . "<hr>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();

// Mengisi nilai atribut atau properti dengan cara manual
$mahasiswa->nama = "Ferina Sheren";
$mahasiswa->nim = "230302036";
$mahasiswa->jurusan = "Komputer dan bisnis";
//menampilkan data mahasiswa
echo $mahasiswa->tampilkanData();
?>
