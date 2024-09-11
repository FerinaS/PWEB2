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

    //mengambil nilai dari atribut/properti
    public function getName() {
        //untuk mengembalikan informasi Pengguna
        return $this->name;
    }
}

// class Student mewarisi Person
class Student extends Person {
    //Menyimpan nama student
    public $studentID;

    //metode construct untuk menginisialisasi
    public function __construct($name, $studentID) {
        //Memanggil konstruktor induk
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // override method getName untuk memberikan format khusus pada Student
    public function getName() {
        //untuk mengembalikan informasi student
        return "Student: " . $this->name;
    }

    //mengambil nilai dari atribut/properti
    public function getStudentID() {
        //untuk mengembalikan informasi
        return $this->studentID;
    }
}

// class Teacher mewarisi class Person
class Teacher extends Person {
    public $teacherID;

    public function __construct($name, $teacherID) {
        //Memanggil konstruktor induk
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // override method getName untuk memberikan format khusus pada Teacher
    public function getName() {
        //untuk mengembalikan informasi
        return "Teacher: " . $this->name;
    }

    //mengambil nilai dari atribut/properti
    public function getTeacherID() {
        //untuk mengembalikan informasi
        return $this->teacherID;
    }
}

// Instansiasi objek dari class Student and Teacher
$student = new Student("Tika", "230102");
$teacher = new Teacher("Pak Annas", "098765");
// memanggil metode getname, menampilkan hasil dan nilainya
echo $student->getName() . "<br>"; // output 
echo $teacher->getName() . "<hr>"; // output
?>