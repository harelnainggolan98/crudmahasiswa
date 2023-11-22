<?php
defined('BASEPATH') or exit('No direcr script access allowed');

class totalLaundry extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('laundry');
    }
    function index()
    {
        $this->laundry->hitung('ani', 'setrika', 6.5, false, false);
        echo"<br/>";
        echo"<br/>";
        $this->laundry->hitung('ina', 'setrika', 8, true, false);
        echo"<br/>";
        echo"<br/>";
        $this->laundry->hitung('nia', 'setrika', 3.5, false, true);
    }
}
?>