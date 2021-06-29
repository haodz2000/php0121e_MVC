<?php

    include_once 'model/Student.php';

    class StudentController
    {
        private $student;

        public function __construct()
        {
            $this->student = new Student;
        }

        public function students()
        {
            $method = '';
            if (isset($_GET['method'])){
                $method = $_GET['method'];
            }

            switch ($method) {
                case 'add':{
                    $faculty = $this->student->getFaculty();

                    if (isset($_POST['submit'])){
                        $name    = $_POST['name'];
                        $faculty_id = $_POST['faculty'];
                        $email   = $_POST['email'];
                        $phone   = $_POST['phone'];
                        $address = $_POST['address'];
                        $create = $this->student->create($faculty_id, $name, $email, $phone, $address);
                        if ($create){
                            header("Location: index.php");
                        }else{
                            $error = "Thêm mới thất bại!";
                        }
                    }
                    include_once 'views/students/add-students.php';
                    break;
                }
                default:

                    $result = $this->student->getAllStudents();
                    include_once 'views/students/dashboard.php';
                    break;
            }

        }
    }