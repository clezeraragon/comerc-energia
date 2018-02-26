<?php
/**
 * Created by PhpStorm.
 * User: toboymoney
 * Date: 24/02/2018
 * Time: 22:15
 */

namespace ComercEnergia\Http\Controllers\API;


class ApiController
{


    public function hg_request($parametros, $chave = null, $endpoint = 'weather')
    {
        $url = 'https://api.hgbrasil.com/' . $endpoint . '/?format=json&';
        if (is_array($parametros)) {

            if (!empty($chave)) $parametros = array_merge($parametros, array('key' => $chave));

            foreach ($parametros as $key => $value) {
                if (empty($value)) continue;
                $url .= $key . '=' . urlencode($value) . '&';
            }
            $resposta = file_get_contents(substr($url, 0, -1));
            return json_decode($resposta);
        } else {
            return false;
        }
    }

    public static function getClimaTempo()
    {
        // Sua chave de API HG Braisl
        $chave = 'dfsdf';
        $ip = $_SERVER["REMOTE_ADDR"];
        $lat = '-23,5629';
        $lon = '‎-46,6544';

        $results = new ApiController();

        $dados = $results->hg_request(array('lat' => $lat, 'lon' => $lon, 'user_ip' => $ip), $chave);

        if (isset($dados))
        {
            return [
                'temperatura' => $dados->results->temp . ' ºC',
                'umidade' => $dados->results->humidity . ' %',
                'descricao' => $dados->results->description,
                "time" => $dados->results->time,
                'cidade' => $dados->results->city,

            ];
        }
        else {
            return [
                'temperatura' => 20 . ' ºC',
                'umidade' => 20 . ' %',
                "time" => date('H:i:s'),
                'cidade' => 'São Paulo',

            ];

        }



    }
}