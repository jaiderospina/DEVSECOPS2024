# CONTENERIZAR UNA APLICACION

## Paso 1:

Para subir la aplicación a un contenedor Docker se primero que se necesita es el proyecto para subir, por esto en este caso se va a usar un repositorio de pruebas de Docker.

Para clonar el repositorio no ubicamos en una carpeta donde se quiera guardar el proyecto y usamos el siguiente comando por consola:

``` git
    git clone https://github.com/docker/getting-started-app.git
```

Al finalizar el proceso de clonado se deberá ver en consola un mensaje como este:

<div style="width: 100%; text-align: center;">
    <img style="max-width: 50rem; width: 100%" alt="DevSecOps" src="imagenes/Imagen-1.png">
</div>

## Paso 2:

Con un IDE para editar archivos de texto plano o binarios como lo es `Visual Studio Code` se abre el proyecto y se deberá tener una estructura de carpetas como esta:

<div style="width: 100%; text-align:center;">
    <img style="" alt="DevSecOps" src="imagenes/Imagen-2.png">
</div>

En la carpeta raíz del proyecto que se llama getting-started-app debemos crear un archivo `Dockerfile`. Se puede crear desde consola o desde la propia interfaz del IDE usado

El proceso por consola sería el siguiente: 

1.	Nos aseguramos de estar dentro de la carpeta del proyecto:

<div style="width: 100%; text-align: center;">
    <img style="max-width: 50rem; width: 100%" alt="DevSecOps" src="imagenes/Imagen-3.png">
</div>

2.	Y creamos un nuevo archivo Dockerfile con el siguiente comando:

``` docker
    type nul > Dockerfile
```

3. Deberá generar el archivo como se muestra a continuación:

<div style="width: 100%; text-align: center;">
    <img style="" alt="DevSecOps" src="imagenes/Imagen-4.png">
</div>

Con el editor de texto editamos el archivo creado y escribimos las siguientes líneas de código dadas en sintaxis de Docker y lo guardamos:

``` docker
    FROM node:18-alpine
    WORKDIR /app
    COPY . .
    RUN yarn install --production
    CMD ["node", "src/index.js"]
    EXPOSE 3000
```

## Paso 3:

Ahora es el momento de construir la imagen que se va descargar a partir de los comando que insertamos en el paso anterior con el siguiente comando:

``` docker
    docker build -t getting-started .
```

Esto comenzará contruir la imagen y a descargar directamente desde DockerHub la imagen `node:18-alpine` que especificamos en la primera línea del archivo y va a realizar la copia generando en la consola la visualización del proceso de descarga de esta:

<div style="width: 100%; text-align: center;">
    <img style="" alt="DevSecOps" src="imagenes/Imagen-5.png">
</div>

## Paso 3:

Una vez finalizada la descarga de la imagen vamos a correrla en un contenedor enviándole como parámetros los puertos por los que nos vamos a poder comunicar con la aplicación con el siguiente comando:

``` docker
    docker run -dp 127.0.0.1:3000:3000 getting-started
```

En este comando se puede visualizar la ruta localhost con su puerto respectivo `127.0.0.1:3000` y a continuación su puerto de exposición para la comunicación desde afuera con el `:3000.`

Una vez ejecutado el comando va a generar un hash es cual va a ser el id del contenedor el cual va a contener la imagen y la aplicación que acabamos de implementar:

<div style="width: 100%; text-align: center;">
    <img style="" alt="DevSecOps" src="imagenes/Imagen-6.png">
</div>

Con el comando de Docker ps vamos a poder ver ese contenedor listado:

``` docker
    docker ps
```

<div style="width: 100%; text-align: center;">
    <img style="" alt="DevSecOps" src="imagenes/Imagen-7.png">
</div>

Como ya estamos seguros de que el contenedor existe y tenemos el puerto `3000` expuesto para el consumo por medio de la ip de localhost, desde el navegador vamos a entrar a la siguiente ruta `http://localhost:3000` para visualizar lo siguiente:

<div style="width: 100%; text-align: center;">
    <img style="" alt="DevSecOps" src="imagenes/Imagen-8.png">
</div>