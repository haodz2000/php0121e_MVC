<?php

    // Ket noi CSDL va thuc thi truy van: Liet ke, them, sua, xoa, tim kiem
    include_once 'config/Connect.php';

class Faculty extends Connect
{
    public function __construct()
    {
        parent::__construct(); // luon luon duoc ket noi CSDL va ton tai bien $this->pdo
    }



}