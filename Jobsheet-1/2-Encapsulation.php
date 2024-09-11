<?php
//membuat/mendefinisikan sebuah class mahasiswa
Class Mahasiswa {
    //menambah atribut nama,nim,dan jurusan
    private $nama;
    private $nim;
    private $jurusan;

//mengambil nilai dari atribut/properti
    public function getNama() {
        //untuk mengembalikan informasi mahasiswa 
        return "Nama: $this->nama";
    }
//mengubah nilai dari atribut/properti
    public function setNama($nama) {
        $this->nama = $nama;
    }
//mengambil nilai dari atribut/properti
    public function getNim() {
        return "Nim: $this->nim";
    }
//mengubah nilai dari atribut/properti
    public function setNim($nim) {
        $this->nim = $nim;
    }
//mengambil nilai dari atribut/properti
    public function getJurusan() {
        return "Jurusan: $this->jurusan";
    }
//mengubah nilai dari atribut/properti
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

}

// Instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();

// Mengisi nilai atribut menggunakan metode set
$mahasiswa->setNama("Azzahra");
$mahasiswa->setNim("2301020467");
$mahasiswa->setJurusan("Komputer dan Bisnis");

//memanggil metode getname, menampilkan hasil dan nilainya
echo $mahasiswa->getNama();
echo "<br>"; 
echo $mahasiswa->getNim(); 
echo "<br>"; 
echo $mahasiswa->getJurusan(); 

?>