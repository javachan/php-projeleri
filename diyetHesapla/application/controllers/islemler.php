<?php
/**
 * Created by PhpStorm.
 * User: ahmetekti
 * Date: 7.02.2018
 * Time: 15:28
 */

class islemler extends CI_Controller
{
    public function index()
    {
        $besinDegerleri = $this->db->get("besin_degerleri")->result_array();

        $basliklar = $this->db->get("basliklar")->result_array();

        $veriTablosu =array(
            'besinDegerleri' => $besinDegerleri,
            'basliklar' => $basliklar,
        );
        $this->load->view("index",$veriTablosu);

    }

    public function kontrolEt()
    {

    }

}