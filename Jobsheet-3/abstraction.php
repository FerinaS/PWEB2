
<?php
// class abstrak Course
abstract class Course {
    protected $courseName;

    //metode construct untuk menginisialisasi
    public function __construct($courseName) {
        //properties ini akan diisi value dari parameter
        $this->courseName = $courseName;
    }

    // method abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
    }

    // class OnlineCourse yang mengimplementasikan getCourseDetails
class OnlineCourse extends Course {
    private $platform;

    //metode construct untuk menginisialisasi
    public function __construct($courseName, $platform) {
        //Memanggil konstruktor induk
        parent::__construct($courseName);
        $this->platform = $platform;
    }

        //mengambil nilai dari atribut/properti
        public function getCourseDetails() {
            //untuk mengembalikan informasi
            return "Online Course: " . $this->courseName . " via " . $this->platform;
    }
}

// class OfflineCourse yang mengimplementasikan getCourseDetails
class OfflineCourse extends Course {
    private $location;
    //metode construct untuk menginisialisasi
    public function __construct($courseName, $location) {
        //Memanggil konstruktor induk
        parent::__construct($courseName);
        $this->location = $location;
    }

    //mengambil nilai dari atribut/properti
    public function getCourseDetails() {
        //untuk mengembalikan informasi
        return "Offline Course: " . $this->courseName . " at " . $this->location;
    }
}

// Instansiasi objek dari class
$onlineCourse = new OnlineCourse("PHP Programming", "W3Schools");
$offlineCourse = new OfflineCourse("Java Script Programming", "PNC");
// memanggil metode getname, menampilkan hasil dan nilainya
echo $onlineCourse->getCourseDetails() . "<br>";  // output
echo $offlineCourse->getCourseDetails() . "<br>"; // output
?>
