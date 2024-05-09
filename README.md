Este repositorio contiene archivos para una aplicación web diseñada para gestionar
proveedores de viajes. A continuación, se presenta un resumen de los archivos y sus
funcionalidades:
Archivos
1.
index.html.twig
•
Este archivo representa la página principal de la aplicación donde los usuarios
pueden ver proveedores registrados y agregar nuevos.
•
Características:
•
Formulario para agregar un nuevo proveedor.
•
Tabla que muestra proveedores registrados con opciones para editar o
eliminar.
2.
editar.html.twig
•
Este archivo se utiliza para editar la información de proveedores existentes.
•
Características:
•
Formulario para editar detalles del proveedor.
•
Rellena automáticamente los campos del formulario con la
información existente del proveedor.
3.
docker compose.yml
•
Archivo de configuración de Docker Compose para configurar el entorno de
desarrollo.
•
Servicios:
•
db : Servicio de base de datos
•
www : Servicio PHP Apache.
•
phpmyadmin : Servicio PhpMyAdmin para gestión de bases de
4.
dockerfile
•
Dockerfile para configurar el contenedor PHP Apache.
•
Instala la extensión mysqli.
5.
style.css
•
Archivo de hoja de estilo en cascada (CSS) que contiene estilos para la
aplicación web.
•
Define estilos generales para elementos como body, formularios, input s y
tabla
Uso
1.
Configuración del entorno de desarrollo
•
Asegúrate de que Docker y Docker Compose estén instalados en tu sistema.Asegúrate de que Docker y Docker Compose estén instalados en tu sistema.
•
Clona este repositorio en tu máquina local.Clona este repositorio en tu máquina local.
•
Navega hasta el directorio raíz del repositorio en tu terminal.Navega hasta el directorio raíz del repositorio en tu terminal.
•
Ejecuta Ejecuta dockerdocker--compose upcompose up para iniciar el entorno de desarrollo.para iniciar el entorno de desarrollo.
2.
Acceso a la aplicaciónAcceso a la aplicación
•
Una vez que los contenedores de Docker estén en funcionamiento, accede a la Una vez que los contenedores de Docker estén en funcionamiento, accede a la aplicación en aplicación en http://localhosthttp://localhost/index.php/index.php..
3.
Gestión de la base de datosGestión de la base de datos
•
PhpMyAdmin es accesible en PhpMyAdmin es accesible en http://localhost:8001http://localhost:8001..
•
Utiliza las credenciales especificadas en el archivo Utiliza las credenciales especificadas en el archivo dockerdocker--compose.ymlcompose.yml para para iniciar sesión.iniciar sesión.
