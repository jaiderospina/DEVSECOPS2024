# <h1 align="center"> CONTENERIACIÓN DE UNA APLICACIÓN </h1>

<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/contenedores-docker.png?raw=true" alt="logo" width="888" height="550"/></p>


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


<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/1.png?raw=true" alt="logo" width="730" height="450"/></p>


## Paso 3 agregación de contenido DockerFile

Despues procedemos agregar contenido en el Dockerfile, este contenido básicamente es un conjunto de instrucciones para construir una "imagen" de Docker, que es como un paquete que contiene todo lo necesario para ejecutar una aplicación. Usa una versión específica de Node.js, establece un directorio de trabajo, copia todos los archivos de tu aplicación, instala las dependencias necesarias, define el comando para ejecutar tu aplicación y especifica el puerto en el que estará disponible. 

<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/2.PNG?raw=true" alt="logo" width="730" height="350"/></p>

## Paso 4 Construcción de imagen

Para construir la imgen debemos ejecutar el siguiente comando "docker build -t getting-started ." este comando en Docker es como darle instrucciones a una fábrica para construir un producto nuevo. "docker build" le dice a Docker que comience a crear algo nuevo. "-t getting-started" es como etiquetar ese producto, dándole un nombre para identificarlo fácilmente. Y finalmente, el punto "." le dice a Docker que construya este producto usando el archivo de configuración llamado "Dockerfile" que está en el directorio actual.


<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/3.PNG?raw=true" alt="logo" width="730" height="450"/></p>


## Paso 5 arranque de contenedor 

Para el arranque del contenedor ejecutamos el comando "docker run -dp 127.0.0.1:3000:3000 getting-started", este comando "docker run" ejecuta un contenedor Docker a partir de una imagen llamada "getting-started". La bandera "-dp" especifica que el contenedor se ejecutará en segundo plano y redirigirá el tráfico desde el puerto 3000 del host (localhost) al puerto 3000 del contenedor. Esto es útil para aplicaciones web, donde el puerto 3000 suele ser utilizado.

<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/4.PNG?raw=true" alt="logo" width="730" height="250"/></p>

<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/5.PNG?raw=true" alt="logo" width="730" height="250"/></p>


## Paso 6  Listado de contenedores

Para listar los contenedores se debe utilizar el comando docker ps, este es un comando que muestra los contenedores Docker que están actualmente en ejecución en tu sistema. Es como mirar una lista de todas las aplicaciones que están corriendo en un equipo o servidor, pero en este caso, son aplicaciones encapsuladas en contenedores Docker. 

<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/6.PNG?raw=true" alt="logo" width="730" height="250"/></p>


## Paso 7 Actualización de codigo fuente

En git que clonamos debemos a ir a la ruta "src/static/js/app.js" y modificar el valor "- <p className="text-center">No items yet! Add one above!</p>" por el  valor "+ <p className="text-center">You have no todo items yet! Add one above!</p>"

<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/7.png?raw=true" alt="logo" width="730" height="250"/></p>


## Paso 8 Construcción de imagen

Una vez realizo lo anterior se debe  construir  la versión de la imagen, para ello se debe ejecutar el siguiente comando "docker build -t getting-started ."  este comando "docker build -t getting-started ." es como decirle a Docker que construya una imagen de contenedor llamada "getting-started" utilizando los archivos en el directorio actual (representado por el punto "."). La opción "-t" establece el nombre o etiqueta de la imagen para identificarla fácilmente más tarde. Es como decirle a Docker que haga un ensamblaje de todos los archivos y configuraciones necesarios para crear un contenedor con el nombre "getting-started".  Adiconalmente despues de haber ejecutado este comando se debe ejecutar el comando "docker run -dp 127.0.0.1:3000:3000 getting-started" este comando ya lo hemos explicado anteriormente.

<p align="center"><img src="https://github.com/duversalgado/Docker_diplomado/blob/main/Screen_docker/8.png?raw=true" alt="logo" width="730" height="250"/></p>

