<?php
namespace App\Services\ApiClient;

use GuzzleHttp\Client as HttpClient;

use App\Utils\CODES;

class FcmClient {

  private $tmpls = [
    
  ];

  public function __construct() {

  }

  public function sendPush($tmpl_code, $phone_num, $data) {

  }

  private function createTemplate($data) {

  }

}
