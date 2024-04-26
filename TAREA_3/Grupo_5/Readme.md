# <h1 align="center"> GUIA INICIO RÁPIDO DOCKER EN PRÁCTICA</h1>

Integrantes:
 - Edward castro       - ID: 644838
 - Daniel lopez        - ID: 711991
 - Fabial silvqa       - ID: 
 - Sebastian romero    - ID: 732124
 - Sebastian prieto    - ID: 711751

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

# Paso 2
