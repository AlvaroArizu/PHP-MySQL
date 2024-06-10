# Web Services (API REST)

Los servicios web REST (Representational State Transfer) son una forma de construir APIs que permiten la comunicación entre aplicaciones a través de la web usando HTTP. REST se basa en principios simples y usa operaciones estándar de HTTP, lo que lo hace fácil de implementar y utilizar.

## Principios de REST

1. **Recursos**: Todo en REST se trata como un recurso, que se puede identificar con una URL única. Por ejemplo, `https://api.ejemplo.com/usuarios/1` puede representar un usuario con ID 1.
2. **Operaciones HTTP**: Se utilizan los métodos HTTP estándar para realizar operaciones sobre los recursos:
   - **GET**: Obtener representación del recurso.
   - **POST**: Crear un nuevo recurso.
   - **PUT**: Actualizar un recurso existente.
   - **DELETE**: Eliminar un recurso.
3. **Representaciones**: Los recursos se representan comúnmente en formatos como JSON o XML.
4. **Stateless**: Cada solicitud HTTP realizada por el cliente contiene toda la información necesaria para que el servidor la entienda y la procese.

## Ejemplo de API RESTful en PHP

### Crear un Servidor RESTful con PHP

#### Estructura de Archivos
- `index.php`: Controlador principal que maneja las solicitudes.

#### Código de `index.php`:

```php
<?php
// Configurar la cabecera para permitir solicitudes desde cualquier origen y definir el tipo de contenido JSON
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Obtener el método HTTP
$method = $_SERVER['REQUEST_METHOD'];

// Obtener el identificador del recurso, si existe
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));

// Simulación de base de datos en memoria
$users = [
    1 => ['id' => 1, 'name' => 'John Doe'],
    2 => ['id' => 2, 'name' => 'Jane Smith']
];

// Funciones auxiliares
function getUser($id) {
    global $users;
    if (isset($users[$id])) {
        echo json_encode($users[$id]);
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'User not found']);
    }
}

function getUsers() {
    global $users;
    echo json_encode(array_values($users));
}

function createUser($data) {
    global $users;
    $id = max(array_keys($users)) + 1;
    $users[$id] = ['id' => $id, 'name' => $data['name']];
    http_response_code(201);
    echo json_encode($users[$id]);
}

function updateUser($id, $data) {
    global $users;
    if (isset($users[$id])) {
        $users[$id]['name'] = $data['name'];
        echo json_encode($users[$id]);
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'User not found']);
    }
}

function deleteUser($id) {
    global $users;
    if (isset($users[$id])) {
        unset($users[$id]);
        http_response_code(204);
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'User not found']);
    }
}

// Manejar la solicitud según el método HTTP
switch ($method) {
    case 'GET':
        if (isset($request[0])) {
            getUser($request[0]);
        } else {
            getUsers();
        }
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        createUser($data);
        break;
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        if (isset($request[0])) {
            updateUser($request[0], $data);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'User ID is required']);
        }
        break;
    case 'DELETE':
        if (isset($request[0])) {
            deleteUser($request[0]);
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'User ID is required']);
        }
        break;
    default:
        http_response_code(405);
        echo json_encode(['message' => 'Method not allowed']);
        break;
}
?>
```
## Ventajas de REST
- Simplicidad: Fácil de entender y usar.
- Interoperabilidad: Usa estándares HTTP, lo que facilita la integración con otros sistemas.
- Escalabilidad: Diseñado para funcionar bien en entornos distribuidos.
## Desventajas de REST
- Stateless: Cada solicitud debe contener toda la información necesaria, lo que puede llevar a un mayor volumen de datos transferidos.
- Menor formalidad: A diferencia de SOAP, REST no tiene un estándar estricto para la descripción del servicio (aunque OpenAPI puede ayudar con esto).