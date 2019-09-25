<?php
namespace App\Services;

use App\Services\AuthTrate;
use App\Serivces\ApiClient\KakaoClient;


class DriverAuthService {
  use AuthTrate;

  public function __construct() {

  }

  public function login() {

  }

  public function publishJoinAuthNum($phone_num) {
    $this->createAuthNum();
  }

  public function publishLoginAuthNum() {

  }
}
