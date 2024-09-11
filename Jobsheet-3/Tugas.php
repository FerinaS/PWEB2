<?php

//membuat/mendefinisikan sebuah class Person
class Person {
    //menambah atribut nama
    protected $name;

    //metode construct untuk menginisialisasi
    public function __construct($name) {
        //properties ini akan diisi value dari parameter $nama
        $this->name = $name;
    }

    // Metode Polymorphism getRole()
    public function getRole() {
        //untuk mengembalikan informasi
        return "Person";
    }

    //mengambil nilai dari atribut/properti
    public function getName() {
        //untuk mengembalikan informasi
        return $this->name;
    }
}

// class Student mewarisi Person
class Dosen extends Person {
    private $nidn;

    //metode construct untuk menginisialisasi
    public function __construct($name, $nidn) {
        //Memanggil konstruktor induk
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Override metode getRole untuk Polymorphism
    public function getRole() {
        return "Dosen";
    }

    // Getter dan Setter untuk NIDN (Encapsulation)
    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}

class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Override metode getRole untuk Polymorphism
    public function getRole() {
        return "Mahasiswa";
    }

    // Getter dan Setter untuk NIM (Encapsulation)
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}

abstract class Jurnal {
    protected $title;

    public function __construct($title) {
        $this->title = $title;
    }

    // Metode abstrak untuk submit jurnal
    abstract public function submitJurnal();
}

class JurnalDosen extends Jurnal {
    private $nidn;

    public function __construct($title, $nidn) {
        parent::__construct($title);
        $this->nidn = $nidn;
    }

    // Implementasi metode submitJurnal
    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diterima oleh Dosen dengan NIDN $this->nidn.";
    }
}

class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($title, $nim) {
        parent::__construct($title);
        $this->nim = $nim;
    }

    // Implementasi metode submitJurnal
    public function submitJurnal() {
        return "Jurnal dengan judul '$this->title' telah diterima oleh Mahasiswa dengan NIM $this->nim. ";
    }
}

// Contoh penggunaan
$dosen = new Dosen("Bpk Anto", "203035098");
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIDN  " . $dosen->getNidn() . "<br>";
echo "<hr>";
$mahasiswa = new Mahasiswa("Rini", "230302029");
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . "<br>";
echo "<hr>";
$jurnalDosen = new JurnalDosen("Sistem Informasi Manajemen", $dosen->getNidn());
echo $jurnalDosen->submitJurnal() . "<br>";
echo "<hr>";
$jurnalMahasiswa = new JurnalMahasiswa("Sistem Interaksi", $mahasiswa->getNim());
echo $jurnalMahasiswa->submitJurnal() . "<br>";
echo "<hr>";
?>