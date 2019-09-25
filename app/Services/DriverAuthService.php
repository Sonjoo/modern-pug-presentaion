<?php
namespace App\Services;

use App\Services\AuthTrate;
use App\Serivces\ApiClient\KakaoClient;

use Illuminate\Http\Request;

class DriverAuthService {
  use AuthTrate;

  private $kakaoClient;

  public function __construct() {
    $this->kakaoClient = new KakaoClient;
  }

  public function login(Request $request) {

  }

  public function publishJoinAuthNum($phone_num) {
    $auth_no = $this->createAuthNum();

  }

  public function publishLoginAuthNum() {
    $auth_no = $this->createAuthNum();
    $this->kakaoClient->sendMsg('driver-login-auth', [
      'phone_num' => $phone_num

    ]);
  }
}
