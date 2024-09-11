<?php
//membuat/mendefinisikan sebuah class Person
Class Person {
    //menambah atribut nama
    private $name;

    //metode construct untuk menginisialisasi
    public function __construct($name) {
        //properties ini akan diisi value dari parameter
        $this->name = $name;
    }

    //mengambil nilai dari atribut/properti
    public function getName() {
        //untuk mengembalikan informasi Person 
        return $this->name;
    }
    //mengubah nilai dari atribut/properti
    public function setName($name) {
        //properties ini akan diisi value dari parameter
        $this->name = $name;
    }
}
//mewarisi semua atribut/properti dari kelas Persona
class Student extends Person {
    private $studentID;

    //metode construct untuk menginisialisasi
    public function __construct($name, $studentID) {
        //Memanggil konstruktor induk
        parent::__construct($name);
        $this->studentID = $studentID;

    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;

    }
    //mengambil nilai dari atribut/properti
    public function getStudentID(){
        //untuk mengembalikan informasi Student
        return $this->studentID;

    }
    //mengambil nilai dari atribut/properti
    public function getName() {
        //Memanggil konstruktor induk
        return parent::getName();
    }

}
// Instansiasi objek 
$student = new Student ("Ferina Sheren", "12121212");
//menampilkan data
echo "<b>Sebelum Di Update</b><br>";
echo "Name : " . $student->getName();
echo "<br>";
echo "Student ID : " . $student->getStudentID();
echo "<br><hr>";
// instansiasi objek
$student->setName("Ferina Sheren Nurlita Anggraeni");
$student->setStudentID("230302036");
//menampilkan data
echo "<b>Setelah Di Update</b><br>";
echo "Name : " . $student->getName();
echo "<br>";
echo "Student ID : " . $student->getStudentID();

?>