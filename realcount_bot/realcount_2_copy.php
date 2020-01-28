<?php
 
define('BOT_TOKEN', '704354729:AAGhVZA3xBTg-LXiPIyC4WZFOZWtQ_IYwWI');
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');
 
function apiRequestWebhook($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }
 
  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }
 
  $parameters["method"] = $method;
 
  header("Content-Type: application/json");
  echo json_encode($parameters);
  return true;
}
 
function exec_curl_request($handle) {
  $response = curl_exec($handle);
 
  if ($response === false) {
    $errno = curl_errno($handle);
    $error = curl_error($handle);
    error_log("Curl returned error $errno: $error\n");
    curl_close($handle);
    return false;
  }
 
  $http_code = intval(curl_getinfo($handle, CURLINFO_HTTP_CODE));
  curl_close($handle);
 
  if ($http_code >= 500) {
    // do not want to DDOS server if something goes wrong
    sleep(10);
    return false;
  } else if ($http_code != 200) {
    $response = json_decode($response, true);
    error_log("Request has failed with error {$response['error_code']}: {$response['description']}\n");
    if ($http_code == 401) {
      throw new Exception('Invalid access token provided');
    }
    return false;
  } else {
    $response = json_decode($response, true);
    if (isset($response['description'])) {
      error_log("Request was successfull: {$response['description']}\n");
    }
    $response = $response['result'];
  }
 
  return $response;
}
 
function apiRequest($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }
 
  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }
 
  foreach ($parameters as $key => &$val) {
    // encoding to JSON array parameters, for example reply_markup
    if (!is_numeric($val) && !is_string($val)) {
      $val = json_encode($val);
    }
  }
  $url = API_URL.$method.'?'.http_build_query($parameters);
 
  $handle = curl_init($url);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);
 
  return exec_curl_request($handle);
}
 
function apiRequestJson($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }
 
  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }
 
  $parameters["method"] = $method;
 
  $handle = curl_init(API_URL);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);
  curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));
  curl_setopt($handle, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
 
  return exec_curl_request($handle);
}
 
function processMessage($message) {
    include 'koneksi.php';
    
  // process incoming message
  $message_id = $message['message_id'];
  $chat_id = $message['chat']['id'];
  if (isset($message['text'])) {
    // incoming text message
    $text = $message['text'];


    $data = explode("-", $text);

    $password = $data[0];
    $id_tps = $data[1];
    $suara1 = $data[2];
    $suara2 = $data[3];
    

    $nomor_tps;
    
    // insert data to server
    
    // if the password == true
    if ($data[0] == "123456" ){
        
        // check apakah id_tps tersedia?
        $query_check_tps = "SELECT tb_tps.id_tps, tb_tps.nomor_tps FROM tb_tps WHERE tb_tps.id_tps = '$id_tps'";
        
        $result_check_tps = mysqli_query($con, $query_check_tps);
        
        // jika tidak id_tps tersedia
        if (mysqli_num_rows($result_check_tps) == 0){
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "ID TPS yang anda masukkan ".$id_tps." tidak tersedia, harap cek lagi. ".$result_check_tps.""));
            
        //jika id_tps tersedia
        } else {
          
          while($row = mysqli_fetch_assoc($result_check_tps)) {
            $nomor_tps = $row["nomor_tps"];
          }
            
            // check apakah data sudah di entri?
            $query_check_suara = "SELECT tb_suara_pilpres.id_tps FROM tb_suara_pilpres WHERE tb_suara_pilpres.id_tps = '$id_tps'";
            
            $result_check_suara = mysqli_query($con, $query_check_suara);
            
            // check apakah data suara sudah pernah di entri?
            if (mysqli_num_rows($result_check_suara) > 0){
                // data dah masuk woy
                apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "Data dengan ID TPS ".$id_tps." ("
                  .$nomor_tps.") yang anda gunakan sudah di entry."));
                
            // data belum pernah di entri, takis
            } else {
                // jika salah satu suara masih ada yg kosong
                if ($suara1=="" || $suara2=="" ){
                    apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => 'Maaf data suara tidak berhasil dikirim karna data yang anda masukkan belum lengkap =>'.PHP_EOL.
                  'id tps : '.$id_tps.' ('.$nomor_tps.')'.PHP_EOL.
                  'suara1 : '.$suara1. ''.PHP_EOL.
                  'suara2 : '.$suara2));
                } else {
                    // semua inputan berhasil lolos dari filter, kuy di entri ke server
                    $query = "INSERT INTO tb_suara_pilpres(id_tps, suara1, suara2, waktu) values ('$id_tps', '$suara1', '$suara2', NOW())";
                
                $result = mysqli_query($con, $query);
                
                apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => 'Data suara berhasil dikirim =>'.PHP_EOL.
                  'id tps : '.$id_tps.' ('.$nomor_tps.')'.PHP_EOL.
                  'suara1 : '.$suara1. ''.PHP_EOL.
                  'suara2 : '.$suara2));
                }
            }
        }
    // end of command entry suara
    
    // if the password == update data
    } else  if ($data[0] == "r123456" ){
        
        // check apakah id_tps tersedia?
        $query_check_tps = "SELECT tb_tps.id_tps, tb_tps.nomor_tps FROM tb_tps WHERE tb_tps.id_tps = '$id_tps'";
        
        $result_check_tps = mysqli_query($con, $query_check_tps);
        
        // jika tidak id_tps tersedia
        if (mysqli_num_rows($result_check_tps) == 0){
            apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "ID TPS ".$id_tps." yang anda masukkan tidak tersedia, harap cek lagi."));
            
        //jika id_tps tersedia
        } else {

          while($row = mysqli_fetch_assoc($result_check_tps)) {
            $nomor_tps = $row["nomor_tps"];
          }
            
                $query = "UPDATE tb_suara_pilpres SET suara1 = '$suara1', suara2 = '$suara2', waktu = NOW() WHERE id_tps = '$id_tps'";
                
                $result = mysqli_query($con, $query);
                
                apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => 'Data suara berhasil diupdate =>'.PHP_EOL.
                  'id tps : '.$id_tps.' ('.$nomor_tps.')'.PHP_EOL.
                  'suara1 : '.$suara1. ''.PHP_EOL.
                  'suara2 : '.$suara2));
            
        }
    // end of command entry suara
    
    }

     else if ($data[0] == "/cekhasil") {
        
        $query = "SELECT (SUM(suara1)/ SUM(suara1 + suara2) *100) AS total1, (SUM(suara2)/ SUM(suara1 + suara2) *100) AS total2 FROM tb_suara_pilpres;";
        
        $result = mysqli_query($con, $query);
        
        $data = mysqli_fetch_assoc($result);
        
        $paslon1 = $data['total1'];
        $paslon2 = $data['total2'];
        
        
        apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "Joko Widodo - Ma'ruf Amin : ".$paslon1."%".PHP_EOL.
        "Prabowo Subianto - Sandiago Salahuddin Uno : ".$paslon2."%"));
    // if the password == false
    
    } else {
        apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => "Pasword anda salah!".PHP_EOL.
        "Hubungi admin jika anda belum mendapatkan password."));
    }

  } else {
    apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => 'I understand only text messages'));
  }
}
 
 
define('WEBHOOK_URL', 'https://www.topapp.id/kp/real-count-v2/realcount_bot/realcount_2.php');
 
if (php_sapi_name() == 'cli') {
  // if run from console, set or delete webhook
  apiRequest('setWebhook', array('url' => isset($argv[1]) && $argv[1] == 'delete' ? '' : WEBHOOK_URL));
  exit;
}
 
 
$content = file_get_contents("php://input");
$update = json_decode($content, true);
 
if (!$update) {
  // receive wrong update, must not happen
  exit;
}
 
if (isset($update["message"])) {
  processMessage($update["message"]);
}
?>