<?php 

namespace App\Model\Api;

Class RequestApi {

    /**
     * Método que organiza e separa os dados em json para serem usados nas tabelas 
     */
    public static function curlApi($dado = ''){
        $idNumber = 1;
        $url = "https://jsonplaceholder.typicode.com/posts/?id=".$idNumber;
        $ch = curl_init($url);
        $setopt1 = curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $setopt2 =  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado = json_decode(curl_exec($ch));
    
        // Separa os dados especificos
        foreach ($resultado as $ator) {
            $valor = $ator->$dado. "<br>";
        }
        return $valor;
    }

    public static function curlApiTODOs($dado = ''){
        $idNumber = 1;
        $url = "https://jsonplaceholder.typicode.com/todos/?id=".$idNumber;
        $ch = curl_init($url);
        $setopt1 = curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $setopt2 =  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado = json_decode(curl_exec($ch));
    
        // Separa os dados especificos
        foreach ($resultado as $ator) {
            $valor = $ator->$dado. "<br>";
        }
        return $valor;
    }

    public static function curlApiPhotos($dado = ''){
        $idNumber = 1;
        $url = "https://jsonplaceholder.typicode.com/photos/?id=".$idNumber;
        $ch = curl_init($url);
        $setopt1 = curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $setopt2 =  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resultado = json_decode(curl_exec($ch));
    
        // Separa os dados especificos
        foreach ($resultado as $ator) {
            $valor = $ator->$dado. "<br>";
        }
        return $valor;
    }
}
?>


