<?php

class Movie {
    const ENDPOINT = 'https://whenisthenextmcufilm.com/api';

    public function getData() {
        $hc = curl_init(self::ENDPOINT);
        curl_setopt($hc, CURLOPT_RETURNTRANSFER, true); // Devuelve datos pero no los muestra en pantalla.
        $result = curl_exec($hc);
        $data = json_decode($result, true);
        curl_close($hc);

        return $data;
    }
}