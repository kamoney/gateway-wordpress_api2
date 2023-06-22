<?php
/**
 * Kamoney class
 *
 * @package WooCommerce_Kamoney/Classes/Kamoney
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Kamoney
{
    private $id_merchant = '';
    private $api = "https://homolog-api2.kamoney.com.br";

    public function __construct($id_merchant)
    {
        $this->id_merchant = $id_merchant;
    }

    private function query($endpoint, $data = array(), $type = 'GET')
    {
        // create sign
        $mt = explode(' ', microtime());
        $req['nonce'] = $mt[1] . substr($mt[0], 2, 6);
        $req['merchant_id'] = $this->id_merchant;

        foreach ($data as $key => $value) {
            $req[$key] = $value;
        }

        // $data_query = http_build_query($req, '', '&');
        // $sign = hash_hmac('sha512', $data_query, $this->secret_key);

        $url = $this->api . $endpoint;

        $args = array(
            'body' => $req,
            'timeout' => '10',
            'redirection' => '0',
            'httpversion' => '1.0',
            'blocking' => true,
            // 'headers' => array(
            //     "public" => $this->public_key,
            //     "sign" => $sign,
            // ),
            'cookies' => array(),
        );

        if ($type == 'POST') {
            $response = wp_remote_post($url, $args);
        } else {
            $response = wp_remote_get($url, $args);
        }

        return json_decode($response['body'], true);
    }

    public function status_merchant()
    {
        return $this->query("/public/services/merchant");
    }

    public function merchant_create($data)
    {
        return $this->query("/private/merchant", $data, 'POST');
    }
}
