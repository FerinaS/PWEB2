<?php
//membuat/mendefinisikan sebuah class mahasiswa
Class Pengguna {
     //menambah atribut nama
    public $nama;


    //mengambil nilai dari atribut/properti
    public function getNama() {
        //untuk mengembalikan informasi Pengguna
        return "Nama: $this->nama";
    }

    //mengubah nilai dari atribut/properti
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Implementasi metode aksesFitur untuk pengguna
    public function aksesFitur() {
        //untuk mengembalikan informasi Pengguna
        return "akses fitur dasar pengguna";
    }
}
//mewarisi semua atribut/properti dari kelas pengguna
class Dosen extends Pengguna {
    //Menyimpan nama mata kuliah
    private $mataKuliah;

    
    //mengambil nilai dari atribut/properti
    public function getmataKuliah() {
        //untuk mengembalikan informasi Dosen
        return "Mata Kuliah: $this->mataKuliah";

    }

    //mengubah nilai dari atribut/properti
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    // Implementasi metode aksesFitur untuk dosen
    public function aksesFitur() {
        //untuk mengembalikan informasi Pengguna
        return "Dosen dapat mengakses : akses fitur pengelolaan nilai dan jadwal mata kuliah <br> " . $this->getMataKuliah() . ".";

    }
}
//mewarisi semua atribut/properti dari kelas pengguna
class Mahasiswa extends Pengguna{
    private $Jurusan;

    //mengambil nilai dari atribut/properti
    public function getJurusan() {
        //untuk mengembalikan informasi Mahasiswa
        return "Jurusan: $this->jurusan";
    }

//mengubah nilai dari atribut/properti
public function setJurusan($jurusan) {
    $this->jurusan = $jurusan;
}

    // Implementasi metode aksesFitur untuk mahasiswa
    public function aksesFitur() {
        //untuk mengembalikan informasi mahasiswa
        return "Mahasiswa dapat mengakses : akses fitur data Mahasiswa <br> " . $this->getJurusan() . ".";
    }
}
// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
// Mengisi nilai atribut menggunakan metode set
$dosen->setNama("Pak Abdau");
$dosen->setMataKuliah("Pemrograman Web 2");

$mahasiswa = new Mahasiswa();
// Mengisi nilai atribut menggunakan metode set
$mahasiswa->setNama("Tri");
$mahasiswa->setJurusan("Komputer dan Bisnis");

// memanggil metode aksesFitur, menampilkan hasil dan nilainya
echo $dosen->aksesFitur();
echo "<br>";
echo $mahasiswa->aksesFitur();
?>