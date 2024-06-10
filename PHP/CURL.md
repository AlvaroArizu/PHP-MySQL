# CURL

```PHP
<?php
// Inicializar cURL
$curl = curl_init();

// Establecer la URL de la API
$url = "https://api.example.com/data";

// Establecer las opciones de cURL
curl_setopt($curl, CURLOPT_URL, $url); // URL a la que se enviará la solicitud
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Devolver el resultado en lugar de imprimirlo

// Realizar la solicitud GET
$response = curl_exec($curl);

// Verificar si hubo algún error
if(curl_errno($curl)){
    echo 'Error al realizar la solicitud cURL: ' . curl_error($curl);
}

// Cerrar la conexión cURL
curl_close($curl);

// Procesar la respuesta
$data = json_decode($response, true); // Convertir la respuesta JSON a un array asociativo

// Manejar los datos obtenidos
if ($data) {
    // La solicitud fue exitosa, procesar los datos aquí
    print_r($data);
} else {
    // La solicitud falló o la respuesta no fue en formato JSON
    echo "Error al procesar la respuesta.";
}
?>
```