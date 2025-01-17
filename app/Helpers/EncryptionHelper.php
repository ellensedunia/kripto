<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Crypt;

//$encryptedData = Crypt::encryptString($data);
//$decryptedData = Crypt::decryptString($encryptedData);
//echo $decryptedData;

class EncryptionHelper
{

    public static function getKey() {
        return hash('sha256', base64_decode(env('APP_KEY')), true);
    }


    //Fungsi untuk mengenkripsi data
    public static function encrypt(string $data) {
        // ambil kunci
        $key = self::getKey();
        $iv = random_bytes(openssl_cipher_iv_length(env('ENCRYPTION_ALGORITHM')));

        // enkripsi
        $encrypted = openssl_encrypt($data, env('ENCRYPTION_ALGORITHM'), $key, 0, $iv);

        if ($encrypted === false) {
            throw new \Exception('Encryption Failed');
        }

        // gabungkan iv dengan cipher text
        return base64_encode($iv . $encrypted);
    }

    public static function decrypt(string $encryptedData) {
        $key = self::getKey();
        
        $decoded = base64_decode($encryptedData);

        // Ekstrak IV dan ciphertext
        $ivlength = openssl_cipher_iv_length(env('ENCRYPTION_ALGORITHM'));
        $iv = substr($decoded, 0, $ivlength);
        $cipher_text = substr($decoded, $ivlength);

        $decrypted = openssl_decrypt($cipher_text, env('ENCRYPTION_ALGORITHM'), $key, 0, $iv);
        
        if($decrypted === false) {
            throw new \Exception('Decryption Failed');
        }
        
        return $decrypted;
    }
    
    




    /*
        ENKRIPSI & DEKRIPSI DENGAN "\Crypt"
    */
    
    // public static function encrypt($data)
    // {
    //     return Crypt::encryptString($data);
    // }

    // // Fungsi untuk mendekripsi data
    // public static function decrypt($data)
    // {
    //     return Crypt::decryptString($data);
    // }
}