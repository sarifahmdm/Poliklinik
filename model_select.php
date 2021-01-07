<?php

Class Model_select extends CI_Model
{

function __construct(){

parent::__construct();

}


function provinsi(){


$this->db->order_by('nama_provinsi','ASC');
$provinces= $this->db->get('provinsi');


return $provinces->result_array();


}

function kabupaten($id_provinsi){
}


function kecamatan($id_kabupaten){

}

function kelurahan($id_kecamatan){

}


}
