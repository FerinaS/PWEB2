<?php

//membuat/mendefinisikan sebuah class Persona
class Person {
    //menambah atribut nama
    protected $name;
    
    //metode construct untuk menginisialisasi
    public function __construct($name) {
    //properties ini akan diisi value dari parameter $nama 
    $this->name = $name;

    }
    //mengambil nilai dari atribut/properti
    public function getName() {
        //properties ini akan diisi value dari parameter $nama 
        return $this->name;
    }
    }
//mewarisi semua atribut/properti dari kelas persona
class Student extends Person {
    public $studentID;

    //metode construct untuk menginisialisasi
    public function __construct($name, $studentID) {
        //Memanggil konstruktor induk
        parent::__construct($name);
        $this->studentID = $studentID;

    }

    //mengambil nilai dari atribut/properti
    public function getStudentID() {
        //untuk mengembalikan informasi 
        return $this->studentID;

    }

}
// Instansiasi objek dari class student
$student = new Student("Efendi", "23232323");
// memanggil metode getname, menampilkan hasil dan nilainya
echo "Name: " . $student->getName() . "<br>";
echo "Student ID: " . $student->getStudentID() . "<hr>";
?>

