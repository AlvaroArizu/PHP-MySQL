# Procesamiento 
## XML
### Convertir XML a un Objeto SimpleXMLElement
```php
<?php
$xmlData = '<user><name>John</name><age>30</age><city>New York</city></user>';

// Convertir XML a un objeto SimpleXMLElement
$xmlObject = simplexml_load_string($xmlData);
print_r($xmlObject);
?>
```
### Convertir un Array a XML
```php
<?php
function arrayToXml($data, &$xmlData) {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $subnode = $xmlData->addChild("$key");
            arrayToXml($value, $subnode);
        } else {
            $xmlData->addChild("$key", htmlspecialchars("$value"));
        }
    }
}

$data = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

$xmlData = new SimpleXMLElement('<?xml version="1.0"?><user></user>');
arrayToXml($data, $xmlData);
echo $xmlData->asXML();
?>
```

## JSON
### Convertir JSON a un ARRAY o OBJETO en PHP
```php
<?php
$jsonData = '{"name": "John", "age": 30, "city": "New York"}';

// Convertir JSON a un array asociativo
$array = json_decode($jsonData, true);
print_r($array);

// Convertir JSON a un objeto
$object = json_decode($jsonData);
print_r($object);
?>
```
### Convertir un ARRAY o OBJETO a JSON en PHP
```php
<?php
$data = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

// Convertir array a JSON
$jsonData = json_encode($data);
echo $jsonData;
?>
```

## AngularJS
AngularJS es un framework JavaScript que facilita la creación de aplicaciones web dinámicas. Aquí te muestro cómo consumir datos de una API RESTful usando AngularJS.
### Ejemplo de Consumo de API RESTful con AngularJS
```PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AngularJS Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="myCtrl">

    <h1>{{message}}</h1>
    <ul>
        <li ng-repeat="user in users">{{user.name}} - {{user.age}}</li>
    </ul>

    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {
        $scope.message = "User List";

        // Obtener datos de una API RESTful
        $http.get("https://api.example.com/users")
        .then(function(response) {
            $scope.users = response.data;
        });
    });
    </script>

</body>
</html>
```
## Sitemas caché
Los sistemas de caché se utilizan para mejorar el rendimiento de las aplicaciones almacenando respuestas de datos que se pueden reutilizar sin necesidad de volver a calcular o recuperar la información original. Aquí hay una introducción a dos sistemas de caché comunes en PHP: APCu y Memcached.

### Usar APCu en PHP
APCu es una extensión de PHP para almacenar datos en caché en la memoria del servidor.

```bash
sudo apt-get install php-apcu
```
```php
<?php
// Almacenar datos en caché
apcu_store('key', 'value');

// Recuperar datos del caché
$value = apcu_fetch('key');
echo $value; // Imprime 'value'

// Eliminar datos del caché
apcu_delete('key');
?>
```

### Usar Memcached en PHP
Memcached es un sistema de almacenamiento en caché distribuido.
```bash
sudo apt-get install memcached
sudo apt-get install php-memcached
```

```php
<?php
$memcached = new Memcached();
$memcached->addServer('localhost', 11211);

// Almacenar datos en caché
$memcached->set('key', 'value', 60); // Almacena 'value' bajo 'key' durante 60 segundos

// Recuperar datos del caché
$value = $memcached->get('key');
echo $value; // Imprime 'value'

// Eliminar datos del caché
$memcached->delete('key');
?>
```

