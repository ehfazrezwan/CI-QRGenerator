<?php

  class Sample extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->library('ciqrcode');

    }
    //Function to generate QR code
    public function qrGenerate(){
      header("Content-Type: image/png");
  		header('Content-Disposition: attachment; filename=QR'.time().'.png');

      //String to turn into QR is defined in the data index of the
      //array passed to the generate function
  		$params['data'] = "Some text";
  		$params['level'] = 'L';
  		$params['size'] = 10;
  		$this->ciqrcode->generate($params);
    }
  }

 ?>
