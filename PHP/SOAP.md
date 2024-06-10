# SOAP (Simple Object Access Protocol)
SOAP es un protocolo basado en XML para intercambiar información entre aplicaciones a través de redes, normalmente sobre HTTP/HTTPS. Se caracteriza por:

- Basado en XML: Utiliza XML para estructurar los mensajes.
- Interoperabilidad: Permite que sistemas heterogéneos se comuniquen.
- Estructura del mensaje: Un mensaje SOAP tiene un sobre (envelope) con un encabezado (header) opcional y un cuerpo (body) obligatorio.

### Ejemplo de un mensaje SOAP:
```xml
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope">
   <soap:Header>
      <m:Trans>234</m:Trans>
   </soap:Header>
   <soap:Body>
      <m:GetStockPrice>
         <m:StockName>IBM</m:StockName>
      </m:GetStockPrice>
   </soap:Body>
</soap:Envelope>
```
### Implementación en PHP
#### Servidor SOAP:
```php
function getStockPrice($stockName) {
    $prices = ["IBM" => 145.67, "AAPL" => 256.32, "GOOG" => 987.65];
    return isset($prices[$stockName]) ? $prices[$stockName] : 0;
}

$options = ['uri' => 'http://localhost/'];
$server = new SoapServer(null, $options);
$server->addFunction('getStockPrice');
$server->handle();
```

#### Cliente SOAP:
```php
$options = ['location' => 'http://localhost/server.php', 'uri' => 'http://localhost/', 'trace' => 1];
$client = new SoapClient(null, $options);
try {
    $price = $client->getStockPrice('IBM');
    echo "The stock price of IBM is $price";
} catch (SoapFault $e) {
    echo "Error: {$e->getMessage()}";
}
```
## Ventajas de SOAP
- Estándar y ampliamente aceptado.
- Extensible y seguro (WS-Security).
## Desventajas de SOAP
- Complejo y verboso.
- Procesamiento más lento comparado con otros enfoques como REST.


```php

```