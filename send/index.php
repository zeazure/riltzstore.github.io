<?php

$inputText = $_POST['input_text'];
$inputZone = $_POST['input_zone'];
$inputKode = $_POST['input_kode'];
$inputWa = $_POST['input_wa'];

// Lakukan pemrosesan API dan dapatkan hasilnya
$apiidResult = $inputText;
$apizoneResult = $inputZone;
$apikodeResult = $inputKode;
$apiitemResult = $inputItem;
$apihargaResult = $inputHarga;
$apiwaResult    = $nomorwa; 

// Data yang akan dikirim sebagai form-data
$data = array(
    'key' => 'yHL76XKfusIVED9TdL9FQbr27X5Jey9q9GrQjFkgWjanVGXThtoh9IWSJlmyYD0D',
    'sign' => '58898cae8374072f6bfe44d75a5ea71b',
    'type' => 'order',
    'service' => $inputKode,
    'data_no' => $inputText,
    'data_zone' => $inputZone
);


// URL API yang akan dituju
$url = 'https://vip-reseller.co.id/api/game-feature?key=9NHJKX92dTl3grWYYR2Tqnpewr5uAwrTYgtWldf1iVIZQ0t9LHK90iIieNzHTWDl&sign=cbdb7601685a364045380c6a7a3e613a';

// IP yang diizinkan pada whitelist
$allowedIP = '114.79.51.255';

// Membuat instansi cURL
$ch = curl_init();

// Mengatur opsi cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: multipart/form-data',
  'X-Forwarded-For: ' . $allowedIP
));

// Setelah Anda mendapatkan respon dari API
$response = curl_exec($ch);

$response = json_decode($response, true);

$username = $response;

$result = $username['result']; // Output: John
$nama = $username['data'] . "(Jika Username sudah ada tidak perlu Verify lagi)"; // Output: 25
$name = $username['data'];
$message = $username['message']; // Output: New York

// Menutup koneksi cURL
curl_close($ch);

// Menampilkan hasil respon dari API
//print_r($response);
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 0);
?>


<!--php

$token = "pvCnx@g417uoCJD9tRRJ";
$nowa = $_POST['nomoradmin'];
$target = $nowa;

$curl = curl_init();

$pesan = '*[System UJI COBA002]*
*[Halo Banyu Ada pesanan nih]*
#Type: Order
#service: ' . $apikodeResult . '
#username: ' . $name . '
#data no (id-user): ' . $apiidResult . '
#data zone: ' . $apizoneResult . '
#item: ' . $apiitemResult . '
#harga: ' . $apihargaResult . '
#WA User: ' . $apiwaResult . '
#status: _Pending_
=====================
Jika item sudah lunas silahkan tulis *YES*
=====================
Atau klik link berikut: 
ini link';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
'target' => $target,
'message' => $pesan,
'url' => 'https://zeazure.github.io/asset/logo_light.png',
//'filename' => 'filename',
//'schedule' => '0',
//'typing' => false,
//'delay' => '2',
//'countryCode' => '62',
//'location' => '-7.983908, 112.621391',
//'buttonJSON' => '{"message":"fonnte button message","footer":"fonnte footer message","buttons":[{"id":"mybutton1","message":"hello fonnte"},{"id":"mybutton2","message":"fonnte pricing"},{"id":"mybutton3","message":"tutorial fonnte"}]}',
//'templateJSON' => '{"message":"fonnte template message","footer":"fonnte footer message","buttons":[{"message":"fonnte","url":"https://fonnte.com"},{"message":"call me","tel":"6282227097005"},{"id":"mybutton1","message":"hello fonnte"}]}',
//'listJSON' => '{"message":"fonnte list message","footer":"fonnte footer message","buttonTitle":"fonnte\'s packages","title":"fonnte title","buttons":[{"title":"text only","list":[{"message":"regular","footer":"10k messsages/month","id":"list-1"},{"message":"regular pro","footer":"25k messsages/month","id":"list-2"},{"message":"master","footer":"unlimited messsages/month","id":"list-3"}]},{"title":"all feature","list":[{"message":"super","footer":"10k messsages/month","id":"list-4"},{"message":"advanced","footer":"25k messsages/month","id":"list-5"},{"message":"ultra","footer":"unlimited messsages/month","id":"list-6"}]}]}'
),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

// Memberikan delay selama 5 detik sebelum melakukan request API
sleep(5);

$token = "pvCnx@g417uoCJD9tRRJ";
$target = $apiwaResult;

$curl = curl_init();

$pesanan = '*[Halo Berikut Adalah Pesanan Anda]*
#Type: Order
#Id Game: ' . $apiidResult . '
#Username: ' . $name . '
#item: ' . $apiitemResult . '
#harga: ' . $apihargaResult . '
#status: _Pending_
=====================
Untuk membayar dapat mengikuti link berikut:
https://trakteer.id/RILTZ%20STORE
(*jangan lupa tulis nomor telepon pada nama pengirim)';


curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
'target' => $target,
'message' => $pesanan,
'url' => 'https://trakteer.id/RILTZ%20STORE',
//'filename' => 'filename',
//'schedule' => '0',
//'typing' => false,
//'delay' => '2',
//'countryCode' => '62',
//'location' => '-7.983908, 112.621391',
//'buttonJSON' => '{"message":"fonnte button message","footer":"fonnte footer message","buttons":[{"id":"mybutton1","message":"hello fonnte"},{"id":"mybutton2","message":"fonnte pricing"},{"id":"mybutton3","message":"tutorial fonnte"}]}',
//'templateJSON' => '{"message":"fonnte template message","footer":"fonnte footer message","buttons":[{"message":"fonnte","url":"https://fonnte.com"},{"message":"call me","tel":"6282227097005"},{"id":"mybutton1","message":"hello fonnte"}]}',
//'listJSON' => '{"message":"fonnte list message","footer":"fonnte footer message","buttonTitle":"fonnte\'s packages","title":"fonnte title","buttons":[{"title":"text only","list":[{"message":"regular","footer":"10k messsages/month","id":"list-1"},{"message":"regular pro","footer":"25k messsages/month","id":"list-2"},{"message":"master","footer":"unlimited messsages/month","id":"list-3"}]},{"title":"all feature","list":[{"message":"super","footer":"10k messsages/month","id":"list-4"},{"message":"advanced","footer":"25k messsages/month","id":"list-5"},{"message":"ultra","footer":"unlimited messsages/month","id":"list-6"}]}]}'
),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mobile Legends | RILTZZ STORE Tempat Topup Murah & Bebas Biaya Admin</title>
</head>

<body>
    <div class="container" id="container">
        <div class="header" id="scrollDiv">
            <div class="logo">
                <img src="/asset/logo_riltzz.png" alt="">
            </div>
            <div class="tab">
                <h4>Form</h4>
                <h4>Pengiriman</h4>
            </div>
        </div>
        <div class="isian">
            <div class="isi">
                <form method="POST" action="" class="konfirmasi" id="parralax-mode">
                    <div class="data">
                        <div class="judul">
                            <h2>Isi Data Pembeli</h2>
                        </div>
                        <div class="game">
                            <div class="kotak">
                                <p>Nomor WhatsApp Pembeli</p>
                                <input style="background-color: #fff;" type="id" name="input_wa" placeholder="Contoh : 6201234567 (bukan +62/08)">
                            </div>
                            <div class="kotak">
                                <p>Kode Item</p>
                                <input name="input_kode" id="kode-data" type="id" name="input_kode" placeholder="Contoh: MBLI3-S4" value="">
                            </div>
                            <div class="kotak">
                                <div class="title">
                                    <p>Id User</p>
                                </div>
                                <div class="isi">
                                    <input name="input_text" id="output-id" type="id" style="margin: 0;" placeholder="Contoh: 1358684133" value="">
                                </div>
                            </div>
                            <div class="kotak">
                                <p>Id Zone</p>
                                <input name="input_zone" id="output-zone" type="id" placeholder="Contoh: 15573" value="">
                            </div>
                            <div class="kotak">
                                <p>Pesan</p>
                                <input style="background-color: #d3d3d3;" id="output-zone" type="id" placeholder="ID Anda Salah" value=" <?php echo $message; ?>" readonly>
                            </div>
                            <button style="background: #dacb00;" type="sumbit" id="btn_sumbit" onclick="simpanData()">Verify</button>
                        </div>
                    </div>
                </form>     
            </div>    
        </div>
        <div class="footer">
            <div class="title">
                <div class="logo">
                    <img src="/asset/logo_riltzz.png" alt="">
                </div>
                <div class="slogan">
                    <p>Layanan topup game</p>
                </div>
            </div>
            <div class="isian">
                <div class="menu">
                    <div class="text">
                        <h2>GAME</h2>
                        <p>Free Fire</p>
                        <p>Mobile Legends</p>
                        <p>Valorant</p>
                        <p>PUBG</p>
                        <p>CODM</p>
                        <p>Genshin Impact</p>
                    </div>
                </div>
                <div class="medsos">
                    <div class="text">
                        <h2>MEDSOS</h2>
                        <p>@madd.ban</p>
                        <p>@zeazure.ofc</p>
                    </div>
                </div>
                <div class="kontak">
                    <div class="text">
                        <h2>KONTAK</h2>
                        <p>+62-881-4062-549</p>
                        <p>+62 817-7600-0300</p>
                        <p>zea.zeazure@gmail.com</p>
                    </div>
                </div>
                <div id="kontak">
                    <div class="text">
                        <center>
                            <h2>Kontak</h2>
                            <p>@madd.ban</p>
                            <p>@zeazure.ofc</p>
                            <p>+62 881-4062-549</p>
                            <p>+62 817-7600-0300</p>
                            <p>zea.zeazure@gmail.com</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/madd_store/system/default.js"></script>
<script src="/madd_store/system/item-ml.js"></script>
<!--script>
    function simpanData() {
      var inputData = document.getElementById("output-id").value;
      localStorage.setItem("data", inputData);
      window.location.href = "system-send.php";
    }
</script-->
</html>

