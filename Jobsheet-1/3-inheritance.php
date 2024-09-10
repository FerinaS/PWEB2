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
        return "Nama Dosen:  $this->nama";
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
        return "Mengajar Matkul: $this->mataKuliah";

    }
}
// Instansiasi objek dari class Dosen
$dosen = new Dosen("Pak Abdau", "Pemrograman Web 2");
// memanggil metode getname, menampilkan hasil dan nilainya
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();

?>