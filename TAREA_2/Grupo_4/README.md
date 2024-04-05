# <h1 align="center"> PROCESO DE SUBIR UNA IMAGEN A UN REPOSITORIO DE DOCKERHUB </h1>

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/DockerHub.png?raw=true" alt="logo" width="700" height="357"/></p>


## Pasos a tener encuenta

### Paso 1 Login en DockerHub

Primeramente debemos enlazar nuestra cuenta de DockerHub con el Docker de consola, esto lo hacemos utilizando el siguiente comando el cual nos solicitara usuario y contraseña para poder iniciar:

```
	docker login
```

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/Login%20Docker.png" alt="logo" width="851" height="250"/></p>

## Paso 2 Construcción de imagen 

###  En primer lugar, el comando docker build inicia el proceso de construcción de la imagen del contenedor. El parámetro -f especifica el nombre del Dockerfile que se utilizará para construir la imagen. En este caso, "HolaMundo.Dockerfile" es el archivo que contiene las instrucciones necesarias para construir la imagen del contenedor.


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/docker%20build.png?raw=true" alt="logo" width="730" height="250"/></p>


## Paso 3 Docker Images 

### Verificamos en la lista de imágenes disponibles localmente en el sistema del proceso de contrucción que realizamos anteiormente, que es la que proporciona información sobre el nombre de la imagen, su versión, el ID de la imagen y el tamaño.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/Docker%20images.png?raw=true" alt="logo" width="850" height="250"/></p>


## Paso 4 Docker Run 

###Seguidamente  ejecutamos Docker run  que es la que va iniciar  y ejecutar un contendor a partir de una imagen especifica en este caso buscamos el idImagen en docker images  y lo ejecutamos.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/docker%20run.png?raw=true" alt="logo" width="730" height="357"/></p>

## Paso 5 Docker Images 

### Nuevamentes ejecutamos Docker Images para verificar  el Image ID que vamos a utilizar para genera nuestro tag y asi mismo crear el respectivo repositorio

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/Docker%20images%202.png?raw=true" alt="logo" width="850" height="250"/></p>


## Paso 6 Docker Tag

### Verificando el Image Id anterior procedemos a crear una etiqueta en el repositorio  para que este sea identificable, cabe mencionar que esto permitira gestionar diferentes versiones de una imagen de contenedor, al etiquetar una imagen, nos  facilita su identificación y uso en entornos de desarrollo, prueba y producción.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/Creacion%20Tag.png?raw=true" alt="logo" width="840" height="250"/></p>












Integrantes:
  - Jhoan Camilo Montealegre Romero ID: 705426
  - Johan Esteban Salinas Acosta ID: 614420
  - Duver Salgado ID: 596826
  - Pedro Orozco ID: 211654
  - Harold Cer ID:
