<?php
//membuat/mendefinisikan sebuah class mahasiswa
class Mahasiswa {
    //menambah atribut nama,nim,dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

    //metode construct untuk menginisialisasi
    public function __construct($nama, $nim, $jurusan) {
        //properties ini akan diisi value dari parameter $nama, $nim, dan $jurusan
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;

    }
    //metode untuk menampilkan data
    public function tampilkanData() {
            //properties ini akan diisi value dari parameter $nama, $nim, dan $jurusan
            return "Nama: $this->nama" . "<br>" . "NIM: $this->nim" . "<br>" . "Jurusan: $this->jurusan" . "<hr>";
        }
    
    //ubah jurusan menggunakan metode upadate
    public function updateJurusan($jurusanbaru) {
        //properties ini akan diisi value dari parameter $jurusanbaru
        $this->jurusan = $jurusanbaru;
    
    }
    //mengubah nilai dari atribut/properti
    public function setNim($nim) {
        $this->nim = $nim;

    }
}
// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Ferina", "230302036", "Komputer dan Bisnis");
//memanggil/menampilkan hasil dan nilainya
echo "TAMPILAN DATA AWAL <br>";
echo $mahasiswa1->tampilkanData();

//memanggil metode update, setname, menampilkan hasil dan nilainya
$mahasiswa1->updateJurusan("Ekonomi Bisnis");
$mahasiswa1->setNim("098765");
echo "TAMPILAN DATA BARU<br>";
echo $mahasiswa1->tampilkanData();

?>
