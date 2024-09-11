

<?php
// Abstraction class Pengguna
abstract class Pengguna {
    //menambhakan atribut
   public $nama;
    
//mengambil nilai dari atribut/properti
public function getNama() {
        return  $this->nama;
    }

//mengubah nilai dari atribut/properti
public function setNama($nama) {
        $this->nama = $nama;
    }

    // Abstraction method yang harus diimplementasikan di dalam class anak
    abstract public function aksesFitur();
}

// Class Dosen yang mengimplementasikan metode aksesFitur
class Dosen extends Pengguna { 
    //menambahkan atribut 
    private $mataKuliah;
    
//mengambil nilai dari atribut/properti
public function getMatakuliah() {
        return  $this->mataKuliah;
    }

//mengubah nilai dari atribut/properti
public function setMatakuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    // Implementasi metode aksesFitur untuk Dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur pengelolaan nilai mahasiswa dan jadwal mata kuliah " . $this->getMatakuliah() . ".";
    }
}

// Class Mahasiswa yang mengimplementasikan metode aksesFitur
class Mahasiswa extends Pengguna {
    //menamabahkan atribut di class mahasiswa
    private $jurusan;
    
//mengambil nilai dari atribut/properti
public function getJurusan() {
        return "Jurusan $this->jurusan";
    }

    //mengubah nilai dari atribut/properti
public function setJurusan($jurusan) {
    $this->jurusan = $jurusan;
}

    // Implementasi metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa TI dapat mengakses fitur Data mahasiswa di website " . $this->getJurusan() . ".";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen();
// Mengisi nilai atribut menggunakan metode set
$dosen->setNama("Pak Wahyu");
$dosen->setMataKuliah("Alpro");

// Instansiasi objek dari class Dosen dan Mahasiswa
$mahasiswa = new Mahasiswa();
// Mengisi nilai atribut menggunakan metode set
$mahasiswa->setNama("Laura");
$mahasiswa->setJurusan("Komputer dan Bisnis");

// memanggil metode aksesFitur, menampilkan hasil dan nilainya
echo $dosen->aksesFitur();
echo "<br>";
echo $mahasiswa->aksesFitur();
?>
