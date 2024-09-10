<?php
//membuat/mendefinisikan sebuah class mahasiswa
Class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

//metode construct untuk menginisialisasi
public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;

    }
//mengambil nilai dari atribut/properti
    public function getNama() {
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
$mahasiswa = new Mahasiswa("FERINA", "230302036", "Komputer dan Bisnis");
//memanggil metode getname, menampilkan hasil dan nilainya
echo $mahasiswa->getNama();
echo "<br>"; 
echo $mahasiswa->getNim(); 
echo "<br>"; 
echo $mahasiswa->getJurusan(); 

?>