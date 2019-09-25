<?php
namespace App\Services\ApiClient;

use GuzzleHttp/Client as HttpClient;

class SlackClient {

  private $httpClient;

  public function __construct() {
    $httpClient = new HttpClient;
  }

  public function sendMsg($channel, $msg_type, $variables) {
    $httpClient->post('slack_url');
  }
}
