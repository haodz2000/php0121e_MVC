<?php

include_once 'model/Faculty.php';

class FacultyController extends Faculty
{
    private $faculty;

    public function __construct()
    {
        $this->faculty = new Faculty;
    }

    public function faculty()
    {
        $method = '';
        if (isset($_GET['method'])){
            $method = $_GET['method'];
        }

        switch ($method) {
            case 'add':

                break;

            default:
                include_once 'views/facultys/list-faculty.php';
                break;
        }

    }
}