# <h1 align="center"> Contenerizar una aplicación </h1>

Integrantes:
 - Juan Peña - ID: 635668
 - Oscar Yela - ID: 433321
 - Maycol Javier Paez Rincon - ID: 751391
 - Brigitte Rodriguez - ID: 415800
 - Alvaro Adolfo Cote Sanchez - ID: 730352


# Paso 2: Contenerizar una aplicación
## Obtener la aplicación
1. Se clona el repositorio [getting-started-app](https://github.com/docker/getting-started-app/tree/main) usando el siguiente comando:

```
git clone https://github.com/docker/getting-started-app.git
```

Este comando se ejecuta desde una terminal y utiliza el protocolo git para clonar todos los archivos desde el repositorio de Github hacia la maquina local. Después de ejecutar este comando, existirá una carpeta llamada "getting-started-app" en el directorio donde se esta ubicado, que contiene todo el contenido del repositorio remoto.

 - **git clone**: Es el comando principal de Git que se utiliza para clonar un repositorio.
 - **https://github.com/docker/getting-started-app.git**: Es la URL del repositorio que se desea clonar. En este caso, es un repositorio hospedado en GitHub en la cuenta "docker" y el repositorio se llama "getting-started-app.git".


![](Imagenes/Screenshot_1.png)

2. Se verifica el contenido del repositorio clonado.
```
	├── getting-started-app/
	│ ├── package.json
	│ ├── README.md
	│ ├── spec/
	│ ├── src/
	│ └── yarn.lock
```

![](Imagenes/Screenshot_2.png)


## Construir la imagen de la aplicación.

Para crear la imagen, necesitará utilizar un Dockerfile. Un Dockerfile es simplemente un archivo basado en texto sin extensión de archivo que contiene un script de instrucciones. Docker usa este script para crear una imagen de contenedor.

Los siguientes comandos fueron ejecutados en Windows en el terminal de Git Bash.

1. En el directorio `getting-started-app`, en la misma ubicación que el archivo `package.json`, se crea un archivo llamado `Dockerfile`.

```
cd /path/to/getting-started-app
```

Este comando se ejecuta desde una terminal para cambiar entre directorios. Esto significa que todos los comandos que se ejecuten después de este comando se ejecutarán en el contexto de ese directorio.

 - **cd**: Es el comando para cambiar de directorio.
 - **/path/to/getting-started-app**: Es la ruta al directorio "getting-started-app" en el sistema. Se debe reemplazar "/path/to" con la ruta real de la maquina local donde se descargo el repositorio en el paso anterior.

![](Imagenes/Screenshot_3.png)


Cree un archivo vacío llamado Dockerfile.

```
touch Dockerfile
```

Este comando se utiliza para crear un archivo vacío o actualizar la marca de tiempo de un archivo existente.

- **touch**: Es el comando principal que se utiliza para crear un archivo vacío o actualizar la marca de tiempo de un archivo existente.
- **Dockerfile**: Es el nombre del archivo que se va a crear o actualizar. En este caso, el nombre del archivo es "Dockerfile".

![](Imagenes/Screenshot_4.png)

2. Usando un editor de texto o editor de código, agregue el siguiente contenido al Dockerfile:

```
# syntax=docker/dockerfile:1

FROM node:18-alpine
WORKDIR /app
COPY . .
RUN yarn install --production
CMD ["node", "src/index.js"]
EXPOSE 3000
```

Este archivo es un script de texto plano que contiene unas instrucciones que Docker utiliza para construir una imagen.

 - **# syntax=docker/dockerfile:1**: Esta línea especifica la versión del formato del Dockerfile que se va a utilizar. En este caso, se está utilizando la versión 1.

 - **FROM node:18-alpine**: Esta línea especifica la imagen base que se utilizará para construir la nueva imagen. En este caso, la imagen base es node:18-alpine, que es una imagen ligera de Alpine Linux con Node.js instalado.

 - **WORKDIR /app**: Establece el directorio de trabajo dentro del contenedor Docker como /app. Todas las instrucciones siguientes se ejecutarán en este directorio.

- **COPY . .** : Copia todos los archivos y directorios del contexto de construcción (el directorio desde donde se ejecuta el comando docker build) al directorio de trabajo dentro del contenedor Docker (/app en este caso).

 - **RUN yarn install --production**: Ejecuta el comando `yarn install --production` dentro del contenedor Docker. Esto instalará las dependencias del proyecto utilizando Yarn, pero omitirá las dependencias de desarrollo (--production).

 - **CMD ["node", "src/index.js"]**: Establece el comando predeterminado que se ejecutará cuando se inicie un contenedor basado en esta imagen. En este caso, ejecutará el archivo index.js que se encuentra en la carpeta src utilizando Node.js.

 - **EXPOSE 3000**: Expone el puerto 3000 del contenedor Docker. Esto permite que los contenedores basados en esta imagen acepten conexiones en el puerto 3000 cuando se ejecuten.

![](Imagenes/Screenshot_5.png)

3. Construya la imagen usando el siguiente comando:

```
docker build -t getting-started .
```

Este comando se utiliza para construir una imagen Docker a partir de un Dockerfile y los archivos presentes en el directorio actual.

 - **docker build**: Este es el comando principal de Docker utilizado para construir imágenes Docker.
 - **-t getting-started**: La opción -t se utiliza para etiquetar la imagen que se está construyendo con un nombre y, opcionalmente, un tag. En este caso, se está etiquetando la imagen con el nombre getting-started.
 - **.** : Esto especifica el contexto de construcción. En este caso, el punto (.) significa que el contexto de construcción es el directorio actual en el que se está ejecutando el comando. Todos los archivos y directorios en este directorio serán considerados por Docker durante el proceso de construcción de la imagen.

![](Imagenes/Screenshot_6.png)
![](Imagenes/Screenshot_7.png)

## Iniciar un contenedor de aplicaciones

Ahora que tiene una imagen, puede ejecutar la aplicación en un contenedor usando el comando `docker run`.

1. Se ejecuta el contenedor usando el nombre de la imagen que se acaba de crear:

```
docker run -dp 127.0.0.1:3000:3000 getting-started
```

Este comando se utiliza para ejecutar un contenedor Docker a partir de una imagen Docker existente.

 - **docker run**: Este es el comando principal de Docker utilizado para ejecutar contenedores Docker.
 - **-d**: (`--detach`) Esta opción ejecuta el contenedor en modo "detach". Esto significa que el contenedor se ejecutará en segundo plano y no bloqueará la terminal.
 - **-p 127.0.0.1:3000:3000**: (`--publish`) Esta opción mapea el puerto 3000 del contenedor al puerto 3000 de la interfaz de red del host (127.0.0.1). Esto significa que cualquier tráfico que llegue al puerto 3000 de la máquina host se redirigirá al puerto 3000 del contenedor. Utilizar 127.0.0.1 restringe la conexión solo a la interfaz de loopback del host.
 - **getting-started**: Este es el nombre de la imagen Docker que se utilizará para ejecutar el contenedor.


![](Imagenes/Screenshot_8.png)

2. Abrimos en el navgador http://localhost:3000 . Se verifica que la aplicación se este ejecutando.


![](Imagenes/Screenshot_9.png)

3. Se agregan elementos para comprobar que funciona. Se marcan  elementos como completos y se eliminan.

![](Imagenes/Screenshot_10.png)

## Validar si el contenedor se esta ejecutando

Ejecute el siguiente comando `docker ps` en una terminal para enumerar sus contenedores.

```
docker ps
```
Este comando  proporciona una lista de los contenedores activos junto con información relevante como el ID del contenedor, el nombre, el ID de la imagen, el estado y el puerto expuesto.

![](Imagenes/Screenshot_11.png)



# Paso 3: Actualizar la aplicación
## Actualizar el código fuente

En los siguientes pasos, cambiará el "texto vacío" cuando no tenga ningún elemento de la lista de tareas pendientes a "¡Aún no tiene elementos de tarea pendiente! ¡Agregue uno arriba!".

1. En el archivo `src/static/js/app.js`, se actualiza la línea 56 para usar el nuevo texto.

![](Imagenes/Screenshot_12.png)

2. Se crea una versión actualizada de la imagen usando el comando `docker build`.

```
docker build -t getting-started .
```

Esta comando ya se explico previamente

![](Imagenes/Screenshot_13.png)
![](Imagenes/Screenshot_14.png)

3. Inicie un nuevo contenedor usando el código actualizado.

```
docker run -dp 127.0.0.1:3000:3000 getting-started
```
Aparecerá un error como el siguiente:
![](Imagenes/Screenshot_15.png)

Este error ocurre cuando Docker intenta exponer un puerto en un contenedor, pero el puerto especificado ya está siendo utilizado por otro proceso en el host local.

 - **docker**: Esto indica que el error proviene del demonio de Docker.
 - **Error response from daemon**: Indica que el demonio de Docker respondió con un error.
 - **driver failed programming external connectivity on endpoint competent_swartz (cf8e5c2567085497271ed6ddb5ffd1fa5752376b72c7bb38807cfeb0b210e23a)**: Esto describe que el error ocurrió mientras Docker intentaba configurar la conectividad externa para un contenedor específico, identificado por su nombre o ID.
 - **Bind for 127.0.0.1:3000 failed: port is already allocated**: Aquí está la causa principal del error. Docker intenta asignar el puerto 3000 en la interfaz loopback (127.0.0.1) para el contenedor, pero ese puerto ya está en uso por otro proceso en el sistema.

## Retire el contenedor viejo.

Para retirar un contenedor, primero debe detenerlo. Una vez que se haya detenido, puedes eliminarlo.

1. Obtenga el ID del contenedor mediante el comando `docker ps`.
```
docker ps
```
![](Imagenes/Screenshot_16.png)

2. Utilice el comando `docker stop` para detener el contenedor. Reemplace `<the-container-id>` con el identificador del contenedor obtenido en el paso anterior.
```
docker stop <the-container-id>
```

Este comando se utiliza para detener un contenedor Docker en ejecución

 - **docker stop**: Esto indica que queremos detener un contenedor Docker.
 - **`<the-container-id>`**: En este espacio, se debe especificar el ID del contenedor que desea detener.

![](Imagenes/Screenshot_17.png)

3. Una vez que el contenedor se haya detenido, puede eliminarlo usando el comando `docker rm`.
```
docker rm <the-container-id>
```

Este comando se utiliza para eliminar un contenedor Docker que ya no está en ejecución.
 - **docker rm**: Esto indica que queremos eliminar un contenedor Docker.
 - **`<the-container-id>`**: En este espacio, se debe especificar el ID del contenedor que desea eliminar.

![](Imagenes/Screenshot_18.png)

## Inicie el contenedor de aplicaciones actualizado

Se inicia la aplicación actualizada usando el comando `docker run`.
```
docker run -dp 127.0.0.1:3000:3000 getting-started
```
![](Imagenes/Screenshot_19.png)

Se actualiza la pagina en el navegador y se ve el texto de ayuda actualizado.

![](Imagenes/Screenshot_20.png)
