<?php

$inputText = $_POST['input_text'];
$inputZone = $_POST['input_zone'];
$inputKode = $_POST['input_kode'];
$inputItem = $_POST['input_item'];
$inputHarga = $_POST['input_harga'];
$nomorwa   = $_POST['wa-user'];

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
  'type' => 'get-nickname',
  'code' => 'mobile-legends',
  'target' => $inputText,
  'additional_target' => $inputZone
);


// URL API yang akan dituju
$url = 'https://vip-reseller.co.id/api/game-feature?key=yHL76XKfusIVED9TdL9FQbr27X5Jey9q9GrQjFkgWjanVGXThtoh9IWSJlmyYD0D&sign=58898cae8374072f6bfe44d75a5ea71b';

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


<?php

$token = "pvCnx@g417uoCJD9tRRJ";
$nowa = $_POST['nomoradmin'];
$target = $nowa;

$curl = curl_init();

$pesan = '
*[Halo Banyu Ada pesanan nih]*
#Type: Order
#service: ' . $apikodeResult . '
#username: ' . $name . '
#data no (id-user): ' . $apiidResult . '
#data zone: ' . $apizoneResult . '
#item: ' . $apiitemResult . '
#harga: ' . $apihargaResult . '
#WA Pembeli: ' . $apiwaResult . '
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
*(*jangan lupa tulis nomor telepon pada nama pengirim)*';


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

?>

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
                <h4>Pembelian</h4>
            </div>
        </div>
        <div class="isian">
            <div class="isi">
                <div class="topup">
                    <div class="data">
                        <div class="judul">
                            <h2>Masukan Data Game</h2>
                        </div>
                        <div class="game">
                            <div class="kotak">
                                <p>User ID</p>
                                <input id="user-id" type="id" name="id-user" placeholder="Contoh: 123456789" value="<?php echo $apiidResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>User ID Zone</p>
                                <input id="id-zone" type="id-zone" name="id-user" placeholder="Contoh: 01234" value="<?php echo $apizoneResult; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="judul">
                        <h2>Pilih Item</h2>
                    </div>
                    <div class="data">
                        <button id="dm-1" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">3 Diamond</p>
                            <p class="Bawah">Rp.2.000,00</p>
                        </button>
                        <button id="dm-2" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">14 Diamonds</p>
                            <p class="Bawah">Rp.4.000,00</p>
                        </button>
                        <button id="dm-3" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">28 Diamonds</p>
                            <p class="Bawah">Rp.7.000,00</p>
                        </button>
                        <button id="dm-4" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">42 Diamonds</p>
                            <p class="Bawah">Rp.11.000,00</p>
                        </button>
                        <button id="dm-5" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">56 Diamonds</p>
                            <p class="Bawah">Rp.14.000,00</p>
                        </button>
                        <button id="dm-6" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">70 Diamonds</p>
                            <p class="Bawah">Rp.17.000,00</p>
                        </button>
                        <button id="dm-7" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">86 Diamonds</p>
                            <p class="Bawah">Rp.20.000,00</p>
                        </button>
                        <button id="dm-8" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/weekly.png" alt="">
                            <p class="atas">Weekly Diamond Pass</p>
                            <p class="Bawah">Rp.24.000,00</p>
                        </button>
                        <button id="dm-9" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">112 Diamonds</p>
                            <p class="Bawah">Rp27.000,00</p>
                        </button>
                        <button id="dm-10" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">140 Diamonds</p>
                            <p class="Bawah">Rp35.000,00</p>
                        </button>
                        <button id="dm-11" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">172 Diamonds</p>
                            <p class="Bawah">Rp40.000,00</p>
                        </button>
                        <button id="dm-12" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">257 Diamonds</p>
                            <p class="Bawah">Rp.59.000,00</p>
                        </button>
                        <button id="dm-13" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">284 Diamonds</p>
                            <p class="Bawah">Rp.67.000,00</p>
                        </button>
                        <button id="dm-14" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">300 Diamonds</p>
                            <p class="Bawah">Rp.68.000.000,00</p>
                        </button>
                        <button id="dm-15" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">344 Diamonds</p>
                            <p class="Bawah">Rp.79.000,00</p>
                        </button>
                        <button id="dm-16" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">355 Diamonds</p>
                            <p class="Bawah">Rp.83.000,00</p>
                        </button>
                        <button id="dm-17" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">429 Diamonds</p>
                            <p class="Bawah">Rp.99.000,00</p>
                        </button>
                        <button id="dm-18" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">514 Diamonds</p>
                            <p class="Bawah">Rp.118.000,00</p>
                        </button>
                        <button id="dm-19" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/twilight.png" alt="">
                            <p class="atas">Twilight Pass</p>
                            <p style="margin-top: 20px;" class="Bawah">Rp.132.000,00</p>
                        </button>
                        <button id="dm-20" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">600 Diamonds</p>
                            <p class="Bawah">Rp.138.000,00</p>
                        </button>
                        <button id="dm-21" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">706 Diamonds</p>
                            <p class="Bawah">Rp.158.000,00</p>
                        </button>
                        <button id="dm-22" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">716 Diamonds</p>
                            <p class="Bawah">Rp.165.000,00</p>
                        </button>
                        <button id="dm-23" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">878 Diamonds</p>
                            <p class="Bawah">Rp.197.000,00</p>
                        </button>
                        <button id="dm-24" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">963 Diamonds</p>
                            <p class="Bawah">Rp.217.000,00</p>
                        </button>
                        <button id="dm-25" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">1050 Diamonds</p>
                            <p class="Bawah">Rp.237.000,00</p>
                        </button>
                    </div>
                </div>
                <form method="POST" action="" class="konfirmasi" id="parralax-mode">
                    <div class="data">
                        <div class="judul">
                            <h2>Konfirmasi</h2>
                        </div>
                        <div class="game">
                            <div class="kotak">
                                <div class="title">
                                    <p>Id User</p>
                                </div>
                                <div class="isi">
                                    <input name="input_text" id="output-id" type="id" style="margin: 0;" placeholder="ID Anda Salah" readonly value="<?php echo $apiidResult; ?>">
                                    <button type="sumbit" id="btn_sumbit" onclick="simpanData()">Verify</button>
                                </div>
                            </div>
                            <div class="kotak" style="display: none;">
                                <p>Nomor Admin</p>
                                <input id="adminwa" type="id" name="nomoradmin" placeholder="hi" readonly value="">
                            </div>
                            <div class="kotak" style="display: none;">
                                <p>Id Zone</p>
                                <input name="input_zone" id="output-zone" type="id" placeholder="ID Anda Salah" readonly value=" <?php echo $apizoneResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>Username</p>
                                <input id="hasil" type="id" name="id-user" placeholder="" readonly value="<?php echo $nama; ?>">
                                <span style="font-size: 15px;">Keterangan, <?php echo $message; ?></span>
                            </div>
                            <div class="kotak">
                                <p>Kode Item</p>
                                <input name="input_kode" id="kode-data" type="id" name="id-user" placeholder="Silahkan Pilih Item" readonly value="<?php echo $apikodeResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>Item</p>
                                <input name="input_item" id="item-data" type="id" name="id-user" placeholder="Silahkan Pilih Item" readonly value="<?php echo $apiitemResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>Harga Item</p>
                                <input name="input_harga" id="harga-data" type="id" name="id-user" placeholder="Silahkan Pilih Item" readonly value="<?php echo $apihargaResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>Nomor WhatsApp Aktif</p>
                                <input style="background-color: #fff;" type="id" name="wa-user" placeholder="Contoh : 6201234567 (bukan +62/08)">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="pembayaran" id="parralax-mode">
                    <div class="data">
                        <div class="judul">
                            <h2>pembayaran</h2>
                        </div>
                        <div class="game">
                            <div class="peringatan">
                                <div class="judul">
                                    <h2>Informasi</h2>
                                </div>
                                <div class="isi">
                                    <p><center>
                                        Selanjutnya, pembayaran akan kami alihkan 
                                        menggunakan trakteer (tulis nomor telepon dibagian nama pada support trakteer), pastikan data yang anda 
                                        masukan sudah benar, Bukti transaksi akan kami kabarkan melalui 
                                        nomor WA di atas, Terima Kasih
                                    </center> </p>             
                                </div>
                            </div>
                        </div>
                        <a href="konfirmasi.html" id="btnRequestAPI">
                            <p>Bayar</p>
                        </a>
                    </div>
                </div>     
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
<script src="/system/default.js"></script>
<script src="/system/item-ml.js"></script>
<!--script>
    function simpanData() {
      var inputData = document.getElementById("output-id").value;
      localStorage.setItem("data", inputData);
      window.location.href = "system-send.php";
    }
</script-->
</html>

