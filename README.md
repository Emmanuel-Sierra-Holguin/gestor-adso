# nombre y proposito del proyecto

- Nombre:gestor-adso
- proposito: preparacion del entorno de desarolo para lavarla y programacion con php.

# Herramientas y versiones reales

- php 
- **v PHP 8.2.12**

- composer
- **v Composer version 2.10.3 2026-08-27 13:34:23**

- php artisan
- **v Laravel Framework 12.69.3**

- git
- **v git version 2.56.0.windows.2**

- xampp
- v **v3.3.0**

- VS code
- v 1.141.0

- mariaDB
- v **C:\xampp\mysql\bin\mysql.exe  Ver 15.1 Distrib 10.4.32-MariaDB, for Win64 (AMD64), source revision c4143f909528e3fab0677a28631d10389354c491**

# Pasos de instalación y configuración de .env, Creación de BD y ejecución de migraciones


1. xampp
- descargamos xampp desde su sitio oficial y terminamos la instalacion mediante unas opciones que skips rapidamente(si tenemos una version vieja si o si tenemos que desintalar y borrar archivos/carpetas.) luego probamos mySQL y apache

- ahora mediante el ejecutor, escribimos SystemPropertiesAdvanced y entramos a variables del entorno, luego variables del sistema buscamos Path, presionamos editar, luego nuevo y pegamos dentro C:\xampp\php, lo subimos hasta arriba y aceptamos todo, cerramos xampp y lo volvemos a abrir

- Verificamos si funciono, buscamos el origen y versión. 

**where.exe php**

**php -v**

- Ahora verificamos que en php.init.text desde xampp config, verificamos que estén estas extensiones y eliminamos ; que estén en el inicio ya que esto los mantiene desactivados, solo a estas extensiones, verificamos que no esta duplicada.

extension_dir="C:\xampp\php\ext" extension=openssl 
extension=pdo_mysql 
extension=mbstring 
extension=fileinfo 
extension=zip

- Verificamos que habilitaron bien las extensiones.

**Verificar archivo php.ini activo**
**php --ini**

**Listar módulos/extensiones cargados**
**php -m**

2. Instalamos composer, aceptamos todo sin darle a ninguna casilla.

- Verificamos que tenemos la versión correcta y la instalación tuviera éxito y la ruta de composer.

**composer -V**

**where.exe composer**

3. Instalamos git.

- Verificamos la versión de git.

**git --version**

4. instalamos VS studio

- Verificar versión
  code --version

- Abrir carpeta actual en VS Code
  code .

**verificamos que el entorno para laraval este listo**

- php -v
  composer -V
  git --version
  code --version
  where.exe php
  where.exe composer


6. laraval

- Vamos a la carpeta del usuario actual, descargamos Laravel y creamos la carpeta gestor-adso, verificamos la versión.

- cd %USERPROFILE%\Documents
  composer create-project laravel/laravel gestor-adso
  cd gestor-adso
  php artisan --version

7. php artisan serve

- abrimos el servidor, copiamos la URL en el navegador y dejamos la terminal sin tocar, abrimos otra para ejecutar otros comandos.

8. verificamos que tenemos archivo .env y verificamos que el DB este organizado asi y el puerto es el que tenga xampp.

- DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=gestor_adso
  DB_USERNAME=root
  DB_PASSWORD=
 
9. Iniciamos maríaDB y creamos la base de datos de gestor_adso

10. Iniciamos maríaDB y creamos la base de datos de gestor_adso
  Verificamos que la migración fue correcta y realizamos un barrio de cache para leer los valores actuales de .inv de lavarel.

  php artisan config:clear y php artisan migrate

11. creamos el git local con rama main y preparamos los archivos y hacemos un cierre formal con git commit para cuando conectemos con el repositorio remoto.

12. hacemos el readme.




  

