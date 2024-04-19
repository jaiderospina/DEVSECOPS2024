# <h1 align="center"> CONTENERIACIÓN DE UNA APLICACIÓN </h1>

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/contenedores-docker.png?raw=true" alt="logo" width="888" height="550"/></p>


## Guia de inicio 
### Paso 1 Login en DockerHub

Primeramente debemos enlazar nuestra cuenta de DockerHub con el Docker de consola, esto lo hacemos utilizando el siguiente comando el cual nos solicitara usuario y contraseña para poder iniciar:

```
	docker login
```

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/Login%20Docker.png" alt="logo" width="851" height="250"/></p>

## Paso 2 Clonación de repositorio y creación Dockerfile

Con el comando "git clone" estamos sacando una copia de seguridad de un proyecto en GitHub llamado "getting-started-app". Es como hacer una fotocopia de un libro para estudiarlo, pero en este caso, estamos copiando un proyecto de software para poder trabajar en él en nuestro propio equipo en local.

Adicionalmente, se creó un archivo llamado Dockerfile. Este archivo es esencial para construir imágenes de Docker, que son como paquetes que contienen todo lo necesario para ejecutar una aplicación, como bibliotecas y configuraciones. Es como decirle a  mi equipo que necesitas una receta específica para preparar tu aplicación en un contenedor Docker.


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/1.png?raw=true" alt="logo" width="730" height="450"/></p>


## Paso 3 agregación de contenido DockerFile

Despues procedemos agregar contenido en el Dockerfile, este contenido básicamente es un conjunto de instrucciones para construir una "imagen" de Docker, que es como un paquete que contiene todo lo necesario para ejecutar una aplicación. Usa una versión específica de Node.js, establece un directorio de trabajo, copia todos los archivos de tu aplicación, instala las dependencias necesarias, define el comando para ejecutar tu aplicación y especifica el puerto en el que estará disponible. 

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/2.PNG?raw=true" alt="logo" width="730" height="350"/></p>

## Paso 4 Construcción de imagen

Para construir la imgen debemos ejecutar el siguiente comando "docker build -t getting-started ." este comando en Docker es como darle instrucciones a una fábrica para construir un producto nuevo. "docker build" le dice a Docker que comience a crear algo nuevo. "-t getting-started" es como etiquetar ese producto, dándole un nombre para identificarlo fácilmente. Y finalmente, el punto "." le dice a Docker que construya este producto usando el archivo de configuración llamado "Dockerfile" que está en el directorio actual.


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/3.PNG?raw=true" alt="logo" width="830" height="350"/></p>


## Paso 5 arranque de contenedor 

Para el arranque del contenedor ejecutamos el comando "docker run -dp 127.0.0.1:3000:3000 getting-started", este comando "docker run" ejecuta un contenedor Docker a partir de una imagen llamada "getting-started". La bandera "-dp" especifica que el contenedor se ejecutará en segundo plano y redirigirá el tráfico desde el puerto 3000 del host (localhost) al puerto 3000 del contenedor. Esto es útil para aplicaciones web, donde el puerto 3000 suele ser utilizado.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/4.PNG?raw=true" alt="logo" width="950" height="50"/></p>

<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/5.PNG?raw=true" alt="logo" width="900" height="250"/></p>


## Paso 6  Listado de contenedores

Para listar los contenedores se debe utilizar el comando docker ps, este es un comando que muestra los contenedores Docker que están actualmente en ejecución en tu sistema. Es como mirar una lista de todas las aplicaciones que están corriendo en un equipo o servidor, pero en este caso, son aplicaciones encapsuladas en contenedores Docker. 

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/6.PNG?raw=true" alt="logo" width="920" height="50"/></p>


## Paso 7 Actualización de codigo fuente

En git que clonamos debemos a ir a la ruta "src/static/js/app.js" y modificar el valor "- <p className="text-center">No items yet! Add one above!</p>" por el  valor "+ <p className="text-center">You have no todo items yet! Add one above!</p>"

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/7.png?raw=true" alt="logo" width="730" height="250"/></p>


## Paso 8 Construcción de imagen

Una vez realizo lo anterior se debe  construir  la versión de la imagen, para ello se debe ejecutar el siguiente comando "docker build -t getting-started ."  este comando "docker build -t getting-started ." es como decirle a Docker que construya una imagen de contenedor llamada "getting-started" utilizando los archivos en el directorio actual (representado por el punto "."). La opción "-t" establece el nombre o etiqueta de la imagen para identificarla fácilmente más tarde. Es como decirle a Docker que haga un ensamblaje de todos los archivos y configuraciones necesarios para crear un contenedor con el nombre "getting-started".  Adiconalmente despues de haber ejecutado este comando se debe ejecutar el comando "docker run -dp 127.0.0.1:3000:3000 getting-started" este comando ya lo hemos explicado anteriormente.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/8.png?raw=true" alt="logo" width="730" height="350"/></p>


## Paso 9 Retiración y arranque contenedor 


Para retirar un contenedor se debe utilizar dos comandos  "docker stop <the-container-id>" y "docker rm <the-container-id>". Estos omandos en Docker son sencillos pero útiles. "docker stop" detiene un contenedor en ejecución, así de simple. Mientras que "docker rm" elimina un contenedor que ya está detenido, lo borra completamente, como si sacaras una carpeta de tu escritorio. Esos comandos son clave para administrar tus contenedores en Docker. Adiconal a ello se debe arrancar el contenedor, para ello utilizamos el comando  "docker run -dp 127.0.0.1:3000:3000 getting-started" este comando ya lo hemos mencionado anteriormente cual es su funcionamiento como tal.


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/9.png?raw=true" alt="logo" width="730" height="250"/></p>


## Paso 10 Validación del contenedor

Cuando arranquemos  el contenedor  de la aplicación  revisamos los cambio que hemos realizado, para ello se debe ir a la url configurada predeterminadamente http://localhost:3000/


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/10.png?raw=true" alt="logo" width="730" height="250"/></p>


## Paso 11 Creación etiqueta, push y compilado de imagen

Para creación de etiquetas utlizamos el comando "docker tag getting-started YOUR-USER-NAME/getting-started", este comando "docker tag" en la línea de comandos nos permite crear una nueva etiqueta para una imagen de Docker. Por lo cual en este caso, estás etiquetando una imagen llamada "getting-started" con un nombre de usuario seguido de "/getting-started". Esto es útil para organizar y compartir las  propias versiones de imágenes de Docker con otros usuarios.

Para realizar el push utilizamos el comando "docker push YOUR-USER-NAME/getting-started", basicamente este comando sube una imagen de Docker llamada 'getting-started' a un registro de Docker, identificado por tu nombre de usuario (YOUR-USER-NAME). Es como publicar un archivo en línea para que otros lo descarguen y utilicen fácilmente en sus propios proyectos.

para la función Build este no ayudara a crear una imagen Docker usando un archivo de configuración llamado Dockerfile. "--platform linux/amd64" especifica que la imagen se construirá para la arquitectura x86_64 comúnmente conocida como AMD64 de Linux. "-t YOUR-USER-NAME/getting-started" etiqueta la imagen con un nombre fácil de recordar. Y el punto al final indica que Docker debe buscar el Dockerfile en el directorio actual. Esencialmente, es como construir un paquete listo para usar que contiene todo lo que tu aplicación necesita para ejecutarse, como configuraciones, código y dependencias.


#Ejecución de los 3 comandos
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/11.png?raw=true" alt="logo" width="730" height="350"/></p>

## Paso 12 Persistir la base de datos


Cuando un contenedor se pone en funcionamiento, aprovecha las diversas capas de una imagen para su sistema de archivos. Asimismo, cada contenedor posee su propio entorno "temporal" para llevar a cabo la creación, actualización o eliminación de archivos. Estos cambios no se reflejarán en otros contenedores, incluso si están basados en la misma imagen.

Para observar este proceso en acción, procederemos a iniciar dos contenedores. En uno de ellos, se generará un archivo, mientras que en el otro se verificará la existencia de dicho archivo. Lo que se podrá observar es que el archivo creado en un contenedor no estará disponible en el otro.

Iniciamos un contenedor Alpine y accedemos a su caparazón. con el siguiente comando. Este comando crea y ejecuta un nuevo contenedor utilizando la imagen Alpine, con un terminal interactivo asignado, lo que permite al usuario interactuar con el contenedor a través de la línea de comandos. El contenedor se identificará con el nombre "mytest".

```
	docker run -ti --name=mytest alpine
```


Ahora se procede a ejecutar el siguiente comando, el cual crea un archivo llamado "greeting.txt" dentro del directorio actual del contenedor, que contiene la palabra "hello".:

```
	/ # echo "hello" > greeting.txt
```

Ejecutamos la salida del contenedor, el shell actual se cierra y se regresa al sistema operativo del host o al shell que llamó al contenedor, dependiendo de cómo se haya iniciado el contenedor, con el siguiente comando:

```
	/ # exit
```

Despues de salir del contenedor ejecutamos el siguiente comando con nuevo contenedor Alpine y usando la instancia cat:

```
	docker run alpine cat greeting.txt
```

Sin embargo, como se indica en el resultado proporcionado, el comando devuelve un error:

```
	cat: can't open 'greeting.txt': No such file or directory
```

Esto indicando que no puede abrir greeting.txt porque el archivo no existe en el nuevo contenedor. Esto confirma que el archivo greeting.txt no está disponible en el contenedor actual, ya que fue creado en otro contenedor previamente.

Por ultimo ejecutamos el comando, el cual esta opción indica a Docker que muestre todos los contenedores, incluidos los que no están en ejecución actualmente. Esto significa que se mostrará una lista completa de todos los contenedores que han sido creados en el sistema Docker, junto con su estado actual (ya sea en ejecución o detenido), su identificador único (ID), el nombre asignado al contenedor y otra información relevante, como la imagen base utilizada para crear el contenedor, la fecha y hora de creación, etc.

```
	docker ps --all
```

#Ejecución de los 5 comandos
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/12.png?raw=true" alt="logo" width="730" height="450"/></p>

## Paso 13 Crear un volumen e iniciar el contenedor.

Procedemos a crear un volumen, en este caso, se está creando un volumen con el nombre todo-db. Este nombre se puede utilizar posteriormente para vincularlo a contenedores que necesiten acceder o persistir datos en este volumen. Los nombres de los volúmenes en Docker deben ser únicos dentro del sistema Docker, esto lo vemos con el comando:

```
	docker volume create todo-db
```

Seguido de esto, iniciamos el contenedor, a partir de la imagen getting-started, configurando el mapeo de puertos y montando un volumen llamado todo-db en el contenedor en el directorio /etc/todos, ademas de que captura todos los archivos creados en la ruta, esto se ejecuta con el comando:

```
	docker run -dp 127.0.0.1:3000:3000 --mount type=volume,src=todo-db,target=/etc/todos getting-started
```

Por ultimo observamos la informacion del volumen, el cual proporciona información JSON detallada sobre el volumen todo-db, que puede incluir su nombre, controlador de almacenamiento, etiquetas asociadas, opciones de montaje, y más. Esta información puede ser útil para verificar la configuración del volumen, así como para solucionar problemas relacionados con su uso o configuración. Esto lo vemos con el siguiente comando

```
	 docker volume inspect todo-db
```


#Ejecución de los 3 comandos

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/13.png?raw=true" alt="logo" width="730" height="350"/></p>




## Paso 14 Ejecucion de aplicación en un contenedor de desarrollo

Para ello se inicia con la ejecucion del siguiente comando, Este comando ejecuta un contenedor Docker a partir de la imagen node:18-alpine. Utiliza la opción -dp para ejecutar el contenedor en segundo plano y mapear el puerto 3000 del contenedor al puerto 3000 del host local. Además, establece el directorio de trabajo dentro del contenedor en /app usando -w /app. Luego, monta el directorio actual del host ($pwd) en el directorio /app del contenedor. Una vez que el contenedor se inicia, ejecuta los comandos yarn install y yarn run dev dentro del contenedor utilizando el shell (sh -c). Esto generalmente se usa para iniciar una aplicación en modo de desarrollo.

```
	 docker run -dp 127.0.0.1:3000:3000 `
	-w /app --mount "type=bind,src=$pwd,target=/app" `
    	node:18-alpine `
    	sh -c "yarn install && yarn run dev"
```


Seguido de esto, listamos la imgaen para poder obtener su ID con el siguiente comando:

```
	 docker ps
```

Por ultimo, el comando docker logs -f <container-id> se utiliza para ver los registros de salida de un contenedor específico en tiempo real. La opción -f o --follow permite seguir continuamente la salida del registro a medida que se actualiza, lo que es útil para monitorear el comportamiento del contenedor en tiempo real, especialmente durante la ejecución de procesos o aplicaciones en el contenedor. El <container-id> se reemplaza por el ID del contenedor del cual se desean ver los registros.

```
	 docker logs -f <container-id>
```

#Ejecución de los 3 comandos
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_3/Grupo_4/Screen_Docker/14.png?raw=true" alt="logo" width="730" height="350"/></p>



Integrantes:
  - Johan Esteban Salinas Acosta ID: 614420
  - Duver Salgado ID: 596826
  - Jhoan Camilo Montealegre Romero ID: 705426
  - Pedro Orozco ID: 211654
  - Harold Cer ID:
