# <h1 align="center"> GUIA INICIO RÁPIDO DOCKER EN PRÁCTICA</h1>

Integrantes:
 - Edward castro       - ID: 644838
 - Daniel lopez        - ID: 711991
 - Fabial silva       - ID: 
 - Sebastian romero    - ID: 732124
 - Sebastian Sarmiento - ID: 711751

 # Paso 2: Contenerizar una aplicación

 ### Requisitos previos

instalado la última versión de Docker Desktop.
instalado un cliente Git

Tener un IDE o un editor de texto para editar archivos. Docker recomienda usar Visual Studio Code

Antes de empezar, se debe clonar el repositorio getting-started-app repository usando el siguiente comando:
```
    git clone https://github.com/docker/getting-started-app.git
```
Aparecerá algo como esto:
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/1.png" alt="logo" width="1200"/></p>

## Construir la imagen de una app

Para construir una imagen, se recomienda utilizar un Dockerfile, solo se debe crear un documento con este nombre,
Pero sin ninguna extension.

Primero dirígete a la ruta raiz del proyecto clonado, algo semejante a esto:

```
    cd \path\to\getting-started-app
```

O puedes hacerlo directamente desde el explorador de archivos de tu S.O

Una vez allí crea el archivo, ya sea con tu editor o por medio de tu explorador de archivos: 
    Dockerfile

Usando tu editor de código agrega los siguientes comandos a tu Dockerfile:

```
    # syntax=docker/dockerfile:1

    FROM node:18-alpine
    WORKDIR /app
    COPY . .
    RUN yarn install --production
    CMD ["node", "src/index.js"]
    EXPOSE 3000
```

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/4.png" alt="logo" width="700"/></p>

Para construir la imagen usas el siguiente comando:

```
    docker build -t getting-started .
```

El comando docker build utiliza el Dockerfile para construir una nueva imagen. Es posible que hayas notado que Docker descargó muchas "capas". Esto se debe a que indicaste al constructor que querías empezar desde la imagen node:18-alpine. Sin embargo, como no tenías esa imagen en tu máquina, Docker necesitó descargarla.

Después de que Docker descargó la imagen, las instrucciones del Dockerfile copiaron tu aplicación y utilizaron yarn para instalar las dependencias de tu aplicación. La directiva CMD especifica el comando predeterminado para ejecutar al iniciar un contenedor desde esta imagen.

Finalmente, la bandera -t etiqueta tu imagen. Piensa en esto como un nombre legible para humanos para la imagen final. Como nombraste la imagen getting-started, puedes hacer referencia a esa imagen cuando ejecutes un contenedor.

El punto al final del comando docker build indica a Docker que debe buscar el Dockerfile en el directorio actual.

Al correr el comando aparecerá algo como esto en la consola:

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/5.png" alt="logo" width="700"/></p>


## Inicia el contenedor de una app

Ahora que tienes una imagen puedes usar el comando:  
```
    docker run -dp 127.0.0.1:3000:3000 getting-started
```

docker run hará que se ejecute la imagen en un contenedor, notese que  el nombre de la imagen se encuentra al final

-dp indica dos cosas, primeramente la letra d es para ordenarle a docker que corra el contenedor en segundo plano
la letra p es para mapear un puerto de nuestro host o anfitrion, con un puerto del contendor, 
el primer notese que luego de la bandera -dp se coloca la direccion ip local y el puerto en la misma, 
luego el puerto del contenedor, y por último, como se mensionó antes, el nombre de la imagen que deseamos iniciar en el contenedor.



<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/6.png" alt="logo" width="1200"/></p>

Podemos ver la lista de contenedores corriendo actualmente con el siguiente comando:

```
    docker ps
```

Veremos algo como lo siguiente:
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/7.png" alt="logo" width="1200"/></p>

Luego de esto podemos ir a 
[Texto del enlace](http://localhost:3000)

Allí veremos una todo list app así:
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/8.png" alt="logo" width="700"/></p>

# Paso 3: Actualizar la aplicación
Abrimos nuestro visor de codigo
En el src/static/js/app.jsarchivo, actualice la línea 56 para usar el nuevo texto vacío.
```
No items yet! Add one above
You have no todo items yet! Add one above!
```
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/9.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/10.png" alt="logo" width="700"/></p>

luego Creeamos una versión actualizada de la imagen usando el docker buildcomando.
```
docker build -t getting-started .
```
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/11.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/12.png" alt="logo" width="700"/></p>

luego iniciamos el nuevo contenedor usando el código actualizado.
```
docker run -dp 127.0.0.1:3000:3000 getting-started
```
Retire el contenedor viejo. con los comandos
```
docker ps
docker stop <the-container-id>
docker rm <the-container-id>
```
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/13.png" alt="logo" width="700"/></p>

Ahora, inicie su aplicación actualizada usando el docker runcomando.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/14.png" alt="logo" width="700"/></p>


# Paso 4: Comparte la aplicación

Una vez que haya generado una imagen, se puede difundir. Para compartir imágenes de Docker es necesario emplear un registro de Docker. 
El principal es Docker Hub, el origen de todas las imágenes que haya empleado hasta ahora.



<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/15.png" alt="logo" width="700"/></p>

Para enviar una imagen, primero debe crear un repositorio en Docker Hub.

-el primer paso es Regístrese o iniciar sesión en Docker Hub como se evidencia en la imagen.


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/16.png" alt="logo" width="400"/></p>

-Seleccione el botón Crear repositorio como lo indica la imagen

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/17.png" alt="logo" width="700"/></p>

-Para el nombre del repositorio, utilice getting-started. Asegúrese de que la visibilidad sea pública y para finalizar darle clic en crear
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/18.png" alt="logo" width="700"/></p>

-En la siguiente imagen, puede ver un comando Docker de ejemplo de Docker Hub. Este comando enviará a este repositorio.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/19.png" alt="logo" width="700"/></p>

### Empuja la Imagen 
-Como primer paso abrimos la línea de comando, ejecute el docker pushcomando que se ve en Docker Hub. Tenga en cuenta que su comando tendrá su ID de Docker(su usuario de docker), no "docker". Por ejemplo, docker push YOUR-USER-NAME/getting-started.


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/20.png" alt="logo" width="700"/></p>
  
  ¿Por qué fracasó? El comando push estaba buscando una imagen llamada docker/getting-started, pero no encontró ninguna. Si corres docker image ls, tampoco verás ninguno Para solucionar este problema, debe etiquetar la imagen existente que creó para darle otro nombre.

-Inicie sesión en Docker Hub usando el comando docker login -u YOUR-USER-NAME..
  
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/21.png" alt="logo" width="700"/></p>

-Utilice el docker tagcomando para darle a la getting-startedimagen un nuevo nombre. Reemplácelo YOUR-USER-NAMEcon su ID de Docker.


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/22.png" alt="logo" width="700"/></p>

-Ahora ejecute el docker pushcomando nuevamente. Si está copiando el valor de Docker Hub, puede descartar la tagnameparte, ya que no agregó una etiqueta al nombre de la imagen. Si no especifica una etiqueta, Docker usa una etiqueta llamada latest.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/23.png" alt="logo" width="700"/></p>
-Ahora una vez terminado el push se evicencia la imagen que acabamos de agregar en el docker 
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/24.png" alt="logo" width="700"/></p>

#### Ejecutamo la imagen en una instancia 

Una vez que su imagen ha sido creada y almacenada en un registro, pruebe ejecutar su aplicación en una instancia completamente nueva que nunca haya tenido acceso a esta imagen de contenedor. Para lograrlo, empleará Play with Docker.

-Abra su navegador para jugar con Docker .

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/25.png" alt="logo" width="700"/></p>
-Seleccione Iniciar sesión y luego seleccione la ventana acoplable en la lista desplegable.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/26.png" alt="logo" width="400"/></p>
-Inicie sesión con su cuenta de Docker Hub y luego seleccione Iniciar .
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/27.png" alt="logo" width="400"/></p>
-Seleccione la opción AGREGAR NUEVA INSTANCIA en la barra lateral izquierda. Si no lo ve, amplíe un poco su navegador. Después de unos segundos, se abre una ventana de terminal en su navegador.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/28.png" alt="logo" width="400"/></p>
-En la terminal, inicie su aplicación recién enviada.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/29.png" alt="logo" width="700"/></p>
-Deberías ver que la imagen se despliega y finalmente se inicia.
    Es posible que hayas observado que este comando asigna los puertos a una dirección IP diferente. Los comandos previos de "docker run" publicaron los puertos en 127.0.0.1 en el host. En esta ocasión, estás utilizando 0.0.0.0.
    La asignación a 127.0.0.1 solamente expone los puertos del contenedor a la interfaz de loopback. Sin embargo, al vincularse a 0.0.0.0, se exponen los puertos del contenedor en todas las interfaces del host, haciéndolos accesibles desde el exterior.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/30.png" alt="logo" width="700"/></p>
Seleccione la insignia 3000 cuando aparezca.
Si la insignia 3000 no aparece, puede seleccionar Abrir puerto y especificar 3000.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/31.png" alt="logo" width="700"/></p>

# Paso 5: Persistir la base de datos

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/32.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/33.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/34.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/35.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/36.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/37.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/38.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/39.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/40.png" alt="logo" width="700"/></p>


# Paso 6: Usar montajes de enlace

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/41.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/42.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/43.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/44.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/45.png" alt="logo" width="400"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/46.png" alt="logo" width="400"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/47.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/48.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/49.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/50.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/51.png" alt="logo" width="400"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/52.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/53.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/54.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/55.png" alt="logo" width="700"/></p>

# Paso 7: Aplicaciones de múltiples contenedores
De manera predeterminada, los contenedores se crean y ejecutan de forma aislada, sin tener conocimiento de otros procesos o contenedores en el mismo entorno. Sin embargo, al crear redes, facilitamos la comunicación entre los contenedores, permitiéndoles interactuar entre sí de manera efectiva.

 - Creación de la red
```
    docker network create todo-app
```
Este comando se utiliza en Docker para crear una red de contenedores con el nombre "todo-app".

Aparecera un un resultado como este:
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/56.png" alt="logo" width="700"/></p>

 - Iniciamos un contenedor Mysql
```
    docker run -d \
    --network todo-app --network-alias mysql \
    -v todo-mysql-data:/var/lib/mysql \
    -e MYSQL_ROOT_PASSWORD=secret \
    -e MYSQL_DATABASE=todos \
    mysql:8.0
```
Este comando se utiliza para ejecutar un contenedor MySQL en Docker con una serie de configuraciones específicas:

 - -d: Esta opción indica a Docker que ejecute el contenedor en modo 'detached' (desconectado), lo que significa que se ejecutará en segundo plano.
 - -network todo-app: Indica que el contenedor se conectará a la red llamada "todo-app", que fue creada previamente con el comando docker network create.
 - -network-alias mysql: Asigna un alias de red al contenedor. En este caso, el alias "mysql" será utilizado para referirse al contenedor MySQL dentro de la red "todo-app".
 - -v todo-mysql-data:/var/lib/mysql: Crea un volumen llamado "todo-mysql-data" y lo monta en el directorio /var/lib/mysql dentro del contenedor. Esto se utiliza para persistir los datos de MySQL incluso después de que el contenedor se detenga o se elimine.
 - -e MYSQL_ROOT_PASSWORD=secret: Establece la contraseña de root de MySQL como "secret". Esto se hace utilizando una variable de entorno para configurar la contraseña durante la inicialización del contenedor.
 - -e MYSQL_DATABASE=todos: Crea una base de datos llamada "todos" durante la inicialización del contenedor. Esto también se realiza mediante una variable de entorno.
 - mysql:8.0: Especifica la imagen de Docker que se utilizará para crear el contenedor. En este caso, se está utilizando la imagen oficial de MySQL versión 8.0.

Aparecerá algo como esto:
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/57.png" alt="logo" width="700"/></p>

Seguido de esto confirmaremos que la base de datos este en funcionamiento con el siguiente comando
```
    docker exec -it <mysql-container-id> mysql -u root -p
```
Luego se nos pedira una contraseña, escribiremos ```secret```  pues esta es la que hemos puesto en el paso anterior cuando definimos las variables de entorno mysql
Luego con el siguiente comando listaremos las bases de datos existentes y verificamos que se encuentra creada la base de datos llamada ```todos```:
```
    mysql> SHOW DATABASES;
```
Aparecerá algo como esto:
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/60.png" alt="logo" width="400"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/61.png" alt="logo" width="400"/></p>
El siguiente comando sera para salir del shwll de Mysql y regesar al shell de nuestra maquina
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/62.png" alt="logo" width="400"/></p>

Ahora iniciaremos un nuevo contenedor usando la imagen ```nicolaka/netshoot``` , este contenedor contiene herramientas utiles oara solucionar y comprobar el funcionamiento de las redes.
esto lo haremos con el siguiente comando
```
    docker run -it --network todo-app nicolaka/netshoot
```
Aparecerá algo como esto:

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/63.png" alt="logo" width="700"/></p>

En el contenedor, empleamos el comando "dig", una herramienta DNS valiosa. Este comando  lo usamos para buscar la dirección IP asociada al nombre de host "mysql".
```
    dig mysql
```
Tendremos este resultado:
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/64.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/65.png" alt="logo" width="700"/></p>

Ahora procederemos a iniciar el contenedor 

```
    docker run -dp 127.0.0.1:3000:3000 `
   -w /app -v "$(pwd):/app" `
   --network todo-app `
   -e MYSQL_HOST=mysql `
   -e MYSQL_USER=root `
   -e MYSQL_PASSWORD=secret `
   -e MYSQL_DB=todos `
   node:18-alpine `
   sh -c "yarn install && yarn run dev"
```
Este comando ejecuta un contenedor Docker utilizando la imagen "node:18-alpine".
 - -dp 127.0.0.1:3000:3000: Este comando indica a Docker que el contenedor debe ejecutarse en modo detached (-d), es decir, en segundo plano, y que el puerto 3000 del contenedor debe mapearse al puerto 3000 del host (127.0.0.1:3000:3000).
 - -w /app: Establece el directorio de trabajo dentro del contenedor en "/app".
 - -v "$(pwd):/app": Monta el directorio actual del host ($(pwd)) en el directorio "/app" del contenedor. Esto permite sincronizar el código fuente del host con el contenedor.
 - --network todo-app: Conecta el contenedor a la red Docker llamada "todo-app".
 - -e MYSQL_HOST=mysql -e MYSQL_USER=root -e MYSQL_PASSWORD=secret -e MYSQL_DB=todos: Establece variables de entorno dentro del contenedor para configurar la conexión a la base de datos MySQL. Especifica el host de MySQL, el nombre de usuario, la contraseña y la base de datos.
 - node:18-alpine: Especifica la imagen de Docker que se utilizará para crear el contenedor. En este caso, se utiliza la imagen "node:18-alpine", que es una versión ligera de Node.js basada en Alpine Linux.
 - sh -c "yarn install && yarn run dev": Ejecuta un shell dentro del contenedor y luego ejecuta los comandos "yarn install" y "yarn run dev". Estos comandos se utilizan comúnmente en proyectos de Node.js para instalar dependencias y ejecutar el servidor de desarrollo, respectivamente.

Tendremos este resultado:

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/66.png" alt="logo" width="700"/></p>

El comando ```docker ps```  lo usaremos para listar los contenedores Docker que están actualmente en ejecución el sistema.este nos proporciona información básica sobre estos contenedores, como su ID, nombre, estado, puertos mapeados y la imagen desde la cual se crearon.

y con el comando ```docker logs -f <container-id>``` se usamos para visualizar los logs (registros) del contenedor ```dead3bce7024```  en tiempo real.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/67.png" alt="logo" width="700"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/68.png" alt="logo" width="700"/></p>

Abrimos la aplicacion en el localhost y agregamos algunos elementos ```hola``` y ```test1```
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/69.png" alt="logo" width="700"/></p>

Luego nos conectamos a la base de datos con el comando

```
    docker exec -it <mysql-container-id> mysql -p todos
```

dento de la base de datos ejecutamos la siguiente consulta ```select * from todo_items;```

Tendremos este resultado:

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/70.png" alt="logo" width="700"/></p>

# Paso 8: Utilice la redacción de Docker

En el getting-started-appdirectorio, cree un archivo llamado compose.yaml.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/71.png" alt="logo" width="400"/></p>

En el paso 7 utilizó el siguiente comando para iniciar el servicio de la aplicación.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/72 (si ya está corriendo no es necesario).png" alt="logo" width="700"/></p>

Ahora es el momento de definir el servicio MySQL. El comando que usaste para ese contenedor fue el siguiente:

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/73.png" alt="logo" width="700"/></p>

Inicie la pila de aplicaciones usando el docker compose upcomando. Agregue la -dbandera para ejecutar todo en segundo plano.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/74.png" alt="logo" width="700"/></p>

Mire los registros usando el docker compose logs -f

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/75.png" alt="logo" width="400"/></p>

Si ya ejecutó el comando, verá un resultado similar a este:

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/76.png" alt="logo" width="700"/></p>

# Paso 9: Mejores prácticas de creación de imágenes

Para ver el historial de imagenes creadas se usa el siguiente comando:

´´´
    docker image history getting-started
´´´

se verá de la siguiente manera:

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/77.png" alt="logo" width="700"/></p>

Hay algunas imagenes que están truncadas, para poder verlas todas usas el siguiente comando:

```
    docker image history --no-trunc getting-started
```

Cada instrucción en el archivo Docker resulta en la creación de una nueva capa en la imagen. Por ejemplo, si se tiene una instrucción para instalar una biblioteca en particular, esa acción creará una capa nueva en la imagen.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/79.png" alt="logo" width="700"/></p>

## Captura de capaz

Con la configuración actual de nuestro Dockerfile, cada vez que hacemos un cambio en nuestr app, las dependencias tienen que ser reisntaladas, para corregir estye problema vamos a nuestro archivo Dockerfile
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/80.png" alt="logo" width="700"/></p>


Actualiza el Dockerfile para copiar primero el archivo package.json, instalar las dependencias y luego copiar todo lo demás.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/81.png" alt="logo" width="700"/></p>


Crea un archivo .dockerignore y define que se ignorarán los archivos que se encuentren en la carpeta nopde_models
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/82.png" alt="logo" width="700"/></p>


Genera un cambio en nuestra app, nos dirigimos a nuestro index.html
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/83.png" alt="logo" width="400"/></p>


Cambia el titulo del index.html
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/84.png" alt="logo" width="700"/></p>


Ejecuta las instrucciones del Dockerfile, y notarás que no se reinstalan las dependencias de node:
```
    docker build -t getting-started .
```
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/85.png" alt="logo" width="700"/></p>

Tambien se puede visualizar que se efectuaron los cambios correctamente
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_5/Imagenes/86.png" alt="logo" width="700"/></p>
