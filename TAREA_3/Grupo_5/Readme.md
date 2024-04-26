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

## Construir la imagen de una app

Para construir una imagen, se recomienda utilizar un Dockerfile, solo se debe crear un documento con este nombre,
pero sin ninguna extension.

Primero dirígete a la ruta raiz del proyecto clonado, algo semejante a esto:

```
    cd \path\to\getting-started-app
```

o puedes hacerlo directamente desde el explorador de archivos de tu S.O

una vez allí crea el archivo: 
    Dockerfile

usando tu editor de código agrega los siguientes comandos a tu Dockerfile:

```
    # syntax=docker/dockerfile:1

    FROM node:18-alpine
    WORKDIR /app
    COPY . .
    RUN yarn install --production
    CMD ["node", "src/index.js"]
    EXPOSE 3000
```