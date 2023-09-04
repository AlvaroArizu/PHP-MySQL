# unidad 4 
## Conceptos basicos 
### HTML
Es un lenguaje descriptivo que tiene como ibjeto dar formato al texto y las imagenes que pretendemos visualizar en el navegador.
A partir de este lenguaje somos capaces de introducir enlaces, seleccionar el tamaño de las fuentes o intercalar imágenes, todo esto de una manera prefijada y en ningún caso inteligente.

 HTML no permite realizar un simple cálculo matemático o crear una página de la nada a partir de una base de datos. 

 La que ha hecho necesario el empleo de otros lenguajes accesorios mucho más versátiles y de un aprendizaje relativamente más complicado, capaces de responder de manera inteligente a las demandas del navegador y que permiten la automatización de determinadas tareas

 Estos lenguajes capaces de recrear a partir de ciertos "scripts" un sinfín de páginas automatizadas son los protagonistas de este concepto de páginas dinámicas.

 **Páginas dinámicas vs HTML**

 Las páginas dinámicas ofrecen ventajas significativas en la gestión de contenido web. Son especialmente útiles para sitios web con contenido que cambia con frecuencia, como portales de televisión. Con ellas, es posible automatizar la actualización de información, simplificar la gestión de idiomas y realizar cambios de formato de texto de manera eficiente. Para sitios web pequeños y estáticos, el esfuerzo inicial de implementar páginas dinámicas puede no ser justificado

 ### Que es PHP? 
 Las siglas “PHP” significan “PHP: Hypertext Processor”, es que es un lenguaje de programación que sirve para hacer páginas de Internet dinámicas, con la posibilidad de combinarlo con bases de datos. Los script de PHP suelen intercalarse en el código HTML de una página, y el encargado de procesar esos scripts es el intérprete del servidor web.

 El fin de un script PHP es generar una salida (que puede ser texto o código HTML, entre otras cosas), que puede ser diferente según el caso, ya que el objetivo de incluir scripts PHP en una página es obtener resultados dinámicos.

 PHP puede ser utilizado en cualquiera de los principales sistemas operativos del mercado, incluyendo Linux, muchas variantes Unix (incluyendo HP-UX, Solaris y OpenBSD), Microsoft, Windows, Mac OS X, RISC OS y probablemente alguno más.

 PHP es un lenguaje de programación versátil que es compatible con una amplia gama de servidores web, lo que le brinda la libertad de elegir su sistema operativo y servidor favoritos. Puede programar de manera procedimental u orientada a objetos, y aunque no todas las características de programación orientada a objetos están completamente implementadas, muchas bibliotecas importantes están escritas de esta manera. Además de generar HTML, PHP puede crear imágenes, archivos PDF y películas Flash al vuelo. También puede producir otros resultados, como XHTML y archivos XML, que se pueden almacenar en lugar de mostrarse en pantalla.


 **La característica más potente y destacable de PHP es su soporte para una gran cantidad de bases de datos.**

PHP es una herramienta poderosa y versátil en el ámbito de la programación web. Ofrece:

1. **Abstracción de Base de Datos:** La extensión DBX permite trabajar con diversas bases de datos de manera transparente.

2. **Conexión a Bases de Datos:** PHP es compatible con el estándar ODBC, lo que permite conectarse a una amplia gama de bases de datos.

3. **Comunicación con Otros Servicios:** PHP puede comunicarse con una variedad de servicios a través de protocolos como LDAP, IMAP, SNMP, NNTP, POP3, HTTP y más. También es posible crear sockets personalizados.
   
4. **Intercambio de Datos:** PHP es compatible con WDDX para el intercambio de datos entre diferentes lenguajes de programación web.
   
5. **Interoperabilidad:** PHP puede trabajar con objetos Java de manera transparente y acceder a objetos remotos a través de la extensión CORBA.
   
6. **Procesamiento de Texto:** Ofrece herramientas para el procesamiento de texto, incluyendo expresiones regulares extendidas tipo Perl y procesamiento de documentos XML con estándares como SAX y DOM. También es posible transformar documentos XML mediante la extensión XSLT.
   
7. **Comercio Electrónico:** Para aplicaciones de comercio electrónico, PHP proporciona funciones como Cybercash, CyberMUT, VeriSign Payflow Pro y CCVS para el procesamiento de pagos.
   
8. **Otras Extensiones:** PHP ofrece una amplia variedad de extensiones adicionales para diversas funcionalidades, como motores de búsqueda, utilidades de compresión, conversión de calendarios, traducción, entre otras.
   
En resumen, PHP es una herramienta muy completa y versátil que ofrece una amplia gama de capacidades para el desarrollo web y más allá. Su extensa comunidad de desarrollo y las numerosas extensiones disponibles lo hacen adecuado para una variedad de proyectos y aplicaciones.

PHP es una herramienta esencial en el desarrollo web que puede llevar a cabo diversas tareas clave:

* el envío de correos electrónicos personalizados
* la gestión de bases de datos
* la manipulación de archivos
* l procesamiento de imágenes. 
  
Su versatilidad lo hace valioso en la creación y mantenimiento de sitios web dinámicos y funcionales.

### CONFIGURACIÓN DEL COMPORTAMIENTO DE PHP
En este punto se desarrollaran brevemente las posibilidades de configuración que nos ofrece PHP, para el uso que le daremos en el curso, usaremos por lo general la configuración que viene sugerida en la instalación de XAMPP, la cual abordaremos más adelante en esta misma unidad.

## El archivo de configuración php.ini
Es leído cuando arranca PHP, es el que contiene la configuracion de PHP con este se controlal muchos aspectos de su funcionamineto 

El archivo php.ini es un archivo de configuración esencial en PHP que define el comportamiento del intérprete. Puede ser encontrado en la distribución de PHP en el directorio raíz. Es un archivo de texto que se edita para ajustar la configuración según las necesidades del proyecto. 

Hay dos versiones, pero ambas son iguales con diferentes valores por defecto. 

Las instrucciones se llaman directivas y se componen de una clave y un valor (por ejemplo, asp_tags = Off). 

Las directivas son sensibles a mayúsculas y minúsculas, y algunas se comentan con ';' cuando no son necesarias por defecto.

**EL ARCHIVO php.ini SE LEE CADA VEZ QUE SE REINICIA, POR LO TANTO TIENE QUE REINICIARSE PARA QUE ACTUALICE LOS CAMBIOS.**

### Las directivas 
El archivo php.ini contiene directivas que definen cómo funciona PHP. Cada directiva tiene un valor por defecto o puede estar inactiva. Modificar estas directivas requiere comprender su significado; generalmente, se recomienda no cambiarlas a menos que se entienda su impacto en la configuración de PHP. Los valores proporcionados aquí son indicativos, no una configuración definitiva.

### Opciones de lenguaje
Instrucciones generales sobre el funcionamiento de PHP:

En el archivo php.ini, hay varias directivas importantes:

- **engine = On**: Activa la interpretación de scripts PHP cuando PHP está cargado como un módulo de Apache. Se usa junto con httpd.conf para habilitar o deshabilitar PHP en directorios específicos.
- **short_open_tag = On**: Permite el uso de etiquetas PHP abreviadas como 
`<? ... ?> y <%= $valor %> en lugar de <?php ... ?> o <script>. Se recomienda apagarlo para mayor compatibilidad.`
   
- **asp_tags = Off**: Habilita o deshabilita el uso de etiquetas de estilo ASP <% ... %>. Desactivado por defecto.

- **precision = 14 y 2k_compliance = On**: Controla la precisión decimal y la compatibilidad con el año 2000.
- **output_buffering = Off**: Permite el envío de cabeceras HTTP desde lugares distintos al inicio del script. También se puede configurar para establecer el tamaño máximo de las líneas HTTP permitidas. Cuando está activado, PHP almacena temporalmente las cabeceras HTTP en un búfer de memoria, lo que permite modificarlas durante la ejecución del script.
- **output_handler =**: Esta directiva permite redirigir toda la salida de los scripts a una función PHP. Se recomienda no habilitar esta opción y, en su lugar, configurarla en cada script según sea necesario.

- zlib.output_compression: Controla si se envían datos comprimidos al cliente. Se puede habilitar o deshabilitar (Off) y especificar el tamaño del búfer.
- **zlib.output_compression:** Controla si se envían datos comprimidos al cliente. Se puede habilitar o deshabilitar (Off) y especificar el tamaño del búfer.

- **implicit_flush:** Determina si se envía el contenido de salida inmediatamente en lugar de esperar a que se complete. No se recomienda su activación.

- **unserialize_callback_func:** Relacionado con la serialización de datos, se usa para especificar una función de callback personalizada.

- **allow_call_time_pass_reference:** Controla si se permiten las referencias en el tiempo de ejecución. Se desaconseja su uso.

- **safe_mode:** Activa o desactiva el modo seguro de PHP, que limita ciertas funciones por razones de seguridad.

- **safe_mode_gid:** Controla si el modo seguro utiliza un chequeo GID en lugar de UID.

- **safe_mode_include_dir:** Los archivos en este directorio pueden utilizarse con include/require en modo seguro sin verificaciones UID/GID.

- **safe_mode_exec_dir:** Limita las funciones de ejecución de programas del sistema a archivos ejecutables en el directorio especificado.

- **safe_mode_allowed_env_vars:** Permite definir una lista de prefijos para controlar qué variables de entorno pueden ser modificadas en el Modo Seguro.

- **safe_mode_protected_env_vars:** Lista de variables de entorno que no pueden ser modificadas mediante `putenv()` incluso en Modo Seguro.

- **open_basedir:** Restringe los archivos que PHP puede abrir al árbol de directorios especificado.

- **disable_functions:** Permite deshabilitar funciones PHP de manera general.

- **highlight...:** Define colores para el resaltado de sintaxis en PHP.

- **expose_php:** Controla si PHP revela su presencia en el servidor, como en las cabeceras HTTP del servidor.

### Limites al empleo de recursos
- **max_execution_time = 30** Tiempo máximo en segundos para que un script se ejecute antes de ser finalizado para prevenir bloqueos del servidor.

- **max_input_time = 60** Límite de tiempo en segundos para que un script analice datos de entrada.

- **memory_limit = 8M** Tamaño máximo de memoria en bytes que un script puede utilizar para evitar un consumo excesivo de recursos del servidor.

### Gestión y archivo de errores
- **error_reporting**: Establece el nivel de detalle de los informes de error en PHP. Se recomienda habilitarlo durante el desarrollo y desactivarlo en producción para evitar exponer información sensible. Puedes configurarlo usando números o etiquetas.
  * E_ALL muestra errores y advertencias 
  * E_ALL & ~E_NOTICE errores criticos y advertencias
  * E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR muestra solo errores
  * 

- **display_errors = Off** Controla si los errores se muestran en la salida HTML. No se recomienda en producción.

- **display_startup_errors = Off** Decide si se muestran los errores de inicio. Desaconsejado activarlo.

- **log_errors = On** Guarda los mensajes de error en un archivo de registro.

- **log_errors_max_len = 1024** Especifica el tamaño máximo del archivo de registro de errores.

- **ignore_repeated_errors  = Off** Evita registrar mensajes de error repetidos.

- **ignore_repeated_source  = Off** Considera repetidos los mensajes de error idénticos aunque provengan de líneas o scripts diferentes.

- **report_memleaks = On** Controla si se muestran los mensajes de error de fuga de memoria.

- **track_errors = Off** Almacena el último mensaje de error en la variable `$php_errormsg`.

- **html_errors = Off** Decide si los mensajes de error incluyen etiquetas HTML.

- **docref_root y docref_ext = .html** Configuran enlaces a la documentación de PHP en los mensajes de error si `html_errors` está habilitado.

- **error_prepend_string y error_append_string:** Cadenas que se agregan antes y después de cada mensaje de error.
  ` error_prepend_string = "<font color=ff0000>"
  error_append_string = "</font>"`

- **error_log = filename** Especifica el nombre del archivo para registrar los errores de un script. Por defecto, está comentado (inhabilitado).

### Gestión de datos
- **track_vars:** Esta directiva crea arrays $HTTP_GET_VARS, $HTTP_POST_VARS y $HTTP_COOKIE_VARS con los datos introducidos mediante los métodos GET, POST y cookies. Está siempre activada desde PHP 4.0.3.

- **arg_separator.output = "& amp;"** Controla el carácter utilizado en las URLs generadas por PHP para separar argumentos. El valor predeterminado es "&".

- **arg_separator.input = ";&"** Define los separadores utilizados por PHP al analizar una URL suministrada para almacenarla en variables.

- **variables_order:** Esta directiva establece el orden en que PHP registrará e interpretará las variables de entorno. Los valores posibles son GPCSE (Get, Post, Cookie, Environment, Server). Esto determina la prioridad de las variables en caso de nombres duplicados. Por ejemplo, configurarlo como "GP" hará que PHP ignore las cookies y sobrescriba las variables recibidas por GET con las de POST si tienen el mismo nombre.

- **register_globals = Off** Permite registrar automáticamente (o no) las variables EGPCS como globales. Por razones de seguridad se recomienda desactivar el registro.
- **register_argc_argv = Off** Esta directiva instruye a PHP si debe declarar las variables argv&argc (arrays predefinidos que almacenan los parámetros pasados (argv) y su numero (argc).
- **post_max_size = 8M** Tamaño máximo de los datos que PHP aceptará por el método POST.

### Magic quotes
- **magic_quotes_gpc = Off** Controla si se aplican magic quotes a datos recibidos por los métodos GPC (Get/Post/Cookie). Cuando está habilitado (On), añade barras invertidas a ciertos caracteres en los datos.

- **magic_quotes_runtime = Off** Si está activo, hace que muchas funciones que obtienen datos de fuentes externas devuelvan comillas con barras invertidas.

- **magic_quotes_sybase = Off** Cuando está habilitado, cambia el comportamiento de magic quotes para usar comillas simples en lugar de barras invertidas cuando se aplican a datos.

### Más directivas de Gestión de datos
- **auto_prepend_file y auto_append_file:** Permiten agregar archivos automáticamente antes o después de la ejecución de los archivos PHP, respectivamente.

- **default_charset  = "iso-8859-1"** Establece el conjunto de caracteres predeterminado para la salida en PHP.

- **default_mimetype = "text/html"** Define el tipo MIME predeterminado para los datos de salida en PHP.

- **always_populate_raw_post_data = On** Fuerza la creación de la variable $HTTP_RAW_POST_DATA incluso cuando se conoce el tipo MIME.

- **allow_webdav_methods = On** Habilita la gestión de solicitudes HTTP específicas de WebDAV.

### Rutas y directorios
- **include_path = ".;c:phpincludes" o ".;c:wwwphplib". ** Especifica directorios para buscar archivos requeridos.
- **doc_root:** Directorio raíz de las páginas PHP en el servidor.
- **user_dir:** Directorio raíz para archivos PHP bajo el directorio de inicio del usuario.
- **extension_dir = ./** Directorio para buscar extensiones dinámicas.
- **enable_dl = On** Habilita/deshabilita la carga dinámica de extensiones PHP.
- **cgi.force_redirect:** Importante para la seguridad al ejecutar PHP como CGI, forzando redirección de solicitudes CGI.
  * **cgi.force_redirect = 1**
Por defecto se activa. Es una directiva importante de seguridad que "debes" activar si ejecutas en tu apache PHP como cgi (no es necesaria si tienes PHP como modulo, o si usas como servidor el IIS de microsoft).
   * **; cgi.redirect_status_env = ;**
En conjunción con cgi.force_redirect y servidores distintos de Apache o iPlanet.
  * **; fastcgi.impersonate = 1;**
En conjunción con IIS y FastCGI

### Subir ficheros
- **file_uploads = On** Permitir o no subir (upload) ficheros vía HTTP.
- **upload_tmp_dir =** Carpeta o directorio utilizable para guardar temporalmente archivos subidos por PHP. Si no se especifica, usará el designado por defecto por el servidor. El usuario que esté ejecutando el script debe tener permiso de escritura en ese directorio.
- **upload_max_filesize = 2M** Tamaño máximo de archivos que pueden subirse.

### Directivas relacionadas con fopen
- **allow_url_fopen = On**
Permite pasar urls (http, ftp) a la función fopen(), en lugar de la ubicación física del archivo
- **;from="john@doe.com"**
define el email a usar como contraseña para ftp anónimo
- **;user_agent="PHP"**
define la "firma" que dejará PHP en el servidor remoto de donde coge los archivos default_socket_timeout = 60 timeout en segundos para la apertura de sockets
- **; auto_detect_line_endings = Off**
Si activo, PHP detectara automáticamente el carácter que indica fin de linea (distinto en windows, linux y windows)

### Extensiones dinámicas

- **extension=:** Define qué extensiones dinámicas debe cargar PHP al iniciar, como `extension=msql.dll` para Windows o `extension=msql.so` para Linux.
- Asegúrate de que los archivos de extensión estén en el directorio especificado previamente con `extension_dir`.
- En versiones recientes de PHP, algunos módulos se cargan automáticamente y no es necesario incluir sus extensiones.

### Configuración de módulos de PHP
- **define_syslog_variables = Off** Permite definir variables del sistema. Recomendado Off.
- **;browscap = extra/browscap.ini** El archivo browscap.ini es un archivo de texto que contiene información sobre las cadenas de identificación que usa cada navegador.

### Directivas de Configuración de Correo
Si usas PHP bajo linux, puedes enviar correo usando tu propio PC con sendmail; con windows no tienes esa posibilidad, por lo que para enviar correos desde un script PHP con la funcion mail() tienes que delegar en tu configuración de correo ordinaria, la que usas por ejemplo con outlook para enviar y recibir correo

Este sería un ejemplo bajo windows:
- **SMTP = mailhost@teleline.es**
Este sería el caso si tu conexión a internet te la proporciona telefónica. Especificamos la dirección del servidor
smtp (correo saliente).
- **sendmail_from= webmaster@misitio.com**
La dirección del remitente ("De:") para los correos enviados desde PHP bajo Windows.

