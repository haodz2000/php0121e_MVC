<?php
    include_once '../../model/AjaxHandle.php';
    class AjaxController extends AjaxHandle
    {
        private $ajax;
        public function __construct()
        {
            $this->ajax = new  AjaxHandle();
        }
        public function Ajax()
        {
            $ajaxActive = '';
            if (isset($_GET['ajaxActive']))
            {
                $ajaxActive = $_GET['ajaxActive'];
            }
            switch ($ajaxActive)
            {
                case 'searchStudent':
                {
                    if(isset($_GET['key']))
                    {
                        $key = $_GET['key'];
                        $data = $this->ajax->searchStudent($key);
                        $info ='';
                        foreach ($data as $key=>$value)
                        {
                            $name = $value['name'];
                            $title = $value['title'];
                            $email = $value['email'];
                            $phone = $value['phone'];
                            $info .= "<tr>
                                                <td scope='col''>#</td>
                                                <td scope='col'>{$name}</td>
                                                <td scope='col'>{$title}</td>
                                                <td scope='col'>{$email}</td>
                                                <td scope='col'>{$phone}</td>
                                                <td scope='col'>Action</td>
                                            </tr>";
                        }
                        echo $info;
                    }
                    break;
                }
                default:
                {
                    break;
                }
            }
        }
    }
?>