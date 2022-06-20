
# Cuatro en línea

Guía para abrir el juego cuatro en línea con el framework laravel.

## 1- Prerrequisitos

Para comenzar se requiere de la instalación de las siguientes aplicaciones

- Docker desktop [https://docs.docker.com/desktop/](https://docs.docker.com/desktop/)
- DDEV [https://ddev.readthedocs.io/en/stable/](https://ddev.readthedocs.io/en/stable/)
- Composer [https://getcomposer.org/download/](https://getcomposer.org/download/)



## 2-Creación del proyecto
Para comenzar debemos dentro del directorio donde queremos tenerlo almacenado clonar el repositorio de github con el siguiente comando
<pre tabindex="0" class="has-inner-focus"><code> > git clone https://github.com/Vickycaracchi/cuatroenlinea
</code></pre>

Luego debemos escribir en la consola para configurar el contenedor en Docker  <code>ddev config</code>
Esto nos pedirá ingresar una nombre para el proyecto (a elección del usuario), la ruta del documento raíz del proyecto, allí es aconsejable dejar el campo vacío y el tipo de projecto, este debe ser si o sí **laravel**.

Luego ya podemos ingresar <code> ddev start</code> aunque todavía no debería funcionar si cargamos la url que obtenemos en el navegador.



## 3-Verificación con composer
Debemos asegurarnos de tener **composer** actualizado, para esto seguimos los siguientes pasos:
 
<pre tabindex="0" class="has-inner-focus"><code>> ddev ssh
> composer update
</code></pre>


## 4-Archivo de ambiente (environment)

Sin salir de <code>ddev ssh </code> debemos crear el archivo de ambiente al que llamamos <code> .env </code>. No es necesario escribir el contenido del archivo ya que la mayoria ya se encuentra en el archivo <code>.env.example </code> en un primer lugar debemos insertar el siguiente comando <code> ls -la </code> después con <code>.cp .env.example .env </code> copiamos el contenido. Luego es necesario añadir 2 líneas más de codigo, siendo estas : <code>echo "WWWGROUP=1000" >> .env</code> y luego, <code>echo "WWWUSER=1000" >> .env</code> 

Sintetizando los comandos que debemos escibir son (en el orden que se mencionan) los siguientes:
<pre tabindex="0" class="has-inner-focus"><code>> ls -la
> .cp .env.example .env 
> echo "WWWGROUP=1000" >> .env
> echo "WWWUSER=1000"
</code></pre>

## 5-Creación de key

Aún sin salir de <code> ddev ssh </code> debemos generar una clave para nuestro proyecto, de la siguiente manera:

<pre tabindex="0" class="has-inner-focus"><code>> php artisan key:generate
</code></pre>


## 6-Cierre y reinicio

Ahora debemos salir de <code>ddev ssh </code> y reiniciar <code> ddev </code> con los siguientes comandos (en el orden que se mencionan):

<pre tabindex="0" class="has-inner-focus"><code>> exit
> ddev restart
</code></pre>
## Jugar
 Una vez que se inicie <code> ddev </code> nos devolvera una dirección web que debemos cargar enn nuestro navegador. Si todo salio correctamente la misma nos llevará a la página ofical de <code> laravel </code>. Para poder jugar solo debemos añadir <code> /jugar/1 </code> y ya podemos **acceder al cuatro en linea**

## 7-Cierre

Ahora bien, para cerrar la sesión,solo basta con escribir el siguiente comando:

<pre tabindex="0" class="has-inner-focus"><code>> ddev poweroff
</code></pre>