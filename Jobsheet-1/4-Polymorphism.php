<?php
//membuat/mendefinisikan sebuah class mahasiswa
Class Pengguna {
    public $nama;

    //metode construct untuk menginisialisasi
    public function __construct($nama) {
        $this->nama = $nama;

    }
    //mengambil nilai dari atribut/properti
    public function getNama() {
        return "Nama: $this->nama";
    }
    // Implementasi metode aksesFitur untuk pengguna
    public function aksesFitur() {
        return "akses fitur dasar pengguna";
    }
}
//mewarisi semua atribut/properti dari kelas pengguna
class Dosen extends Pengguna{
    private $mataKuliah;

    //metode construct untuk menginisialisasi
    public function __construct($nama,$mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //mengambil nilai dari atribut/properti
    public function getMataKuliah() {
        return "Mata Kuliah: $this->mataKuliah";

    }
    // Implementasi metode aksesFitur untuk dosen
    public function aksesFitur() {
        return "Dosen dapat mengakses : akses fitur pengelolaan nilai dan jadwal mata kuliah <br> " . $this->getMataKuliah() . ".";

    }
}
//mewarisi semua atribut/properti dari kelas pengguna
class Mahasiswa extends Pengguna{
    private $Jurusan;

    //metode construct untuk menginisialisasi
    public function __construct($nama,$jurusan) {
        parent::__construct($nama);
        $this->jurusan = $jurusan;
    }

    //mengambil nilai dari atribut/properti
    public function getJurusan() {
        return "Jurusan: $this->jurusan";
    }
    // Implementasi metode aksesFitur untuk mahasiswa
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses : akses fitur data Mahasiswa <br> " . $this->getJurusan() . ".";
    }
}
// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen = new Dosen("Pak Abdau", "Pemrograman Web 2");
$mahasiswa = new Mahasiswa("Pak Abdau", "Komputer dan Bisnis");

// memanggil metode getname, menampilkan hasil dan nilainya
echo $dosen->aksesFitur();
echo "<br>";
echo $mahasiswa->aksesFitur();

?>