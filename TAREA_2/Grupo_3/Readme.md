# Punto 1: Crear un repositorio en local y subirla al repositorio de Dockerhub, mediante el usos de la terminal.

## Paso 1
Se consulta los contenedores existentes usando el comando 
```prompt
docker ps -a
```
<<imagen>>

## Paso 2
A través de la terminal se crea el contenedor XYZ usando el comando XYZ

## Paso 3

## Paso 4


# Punto 2: Crear repositorio directamente en Github siguiendo las buenas prácticas recomendadas por Dockerhub.

## Paso 1

## Paso 2

Se renombra la imagen del docker con el siguiente comando:

```prompt
docker tag [id imagen] [nombre usuario]/[nombre imagen]:[tag]
```

## Paso 3

Se inicia sesión en DockerHub con el siguente comando colocando el usuario y la contraseña correctamente:

```prompt
docker login -u [usuario] -password-stdin [contraseña]
```

## Paso 4

Se sube la imagen al repositorio online de docker:

```prompt
docker push [imagen]:[tag] 
```
