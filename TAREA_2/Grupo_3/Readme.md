# Punto 1: Crear un repositorio en local y subirla al repositorio de Dockerhub, mediante el usos de la terminal.

## Paso 1
Se consulta los contenedores existentes usando el comando 
```prompt
docker ps -a
```
<div align="center">
    <img alt="DevSecOps" src="img/TerminalPaso1.png">
</div>

## Paso 2
A través de la terminal, nos ubicamos en el directorio donde se encuentra el fichero **grupo3.Dockerfile** con el comando **cd**

<div align="center">
    <img alt="DevSecOps" src="img/TerminalPaso2.png">
</div>

## Paso 3
Se ejecuta el comando **docker build** el cual se encarga de realizar la construcción de la imagen
```prompt
docker build -f grupo3.Dockerfile .
```
<div align="center">
    <img alt="DevSecOps" src="img/TerminalPaso3.png">
</div>

Posteriormente se observa que la imagen se crea exitosamente pero sin etiqueta y versión.
<div align="center">
    <img alt="DevSecOps" src="img/TerminalPaso31.png">
</div>

## Paso 4
Se ejecuta el comando **docker image tag** para agregar la etiqueta.
```prompt
docker image tag  ab413aaff52d jpinilla3016/grupo3:latest
```
<div align="center">
    <img alt="DevSecOps" src="img/TerminalPaso4.png">
</div>

## Paso 5
Se inicia sesión en DockerHub usando el comando **docker login** ingresando el usuario y la contraseña correctamente:

```prompt
docker login -u [usuario] -p [contraseña]
```
<div align="center">
    <img alt="DevSecOps" src="img/TerminalPaso5.png">
</div>

## Paso 6
Se sube la imagen al repositorio Online de Docker Hub:
```prompt
docker push [imagen]
```
<div align="center">
    <img alt="DevSecOps" src="img/TerminalPaso6.png">
</div>

## Paso 7
Se visualiza el mensaje de la imagen con el siguiente comando:
```prompt
docker run [imagen]
```
<div align="center">
    <img alt="DevSecOps" src="img/TerminalPaso7.png">
</div>

# Punto 2: Crear repositorio directamente en Github siguiendo las buenas prácticas recomendadas por Dockerhub.

## Paso 1
Creamos el repositorio en Docker Hub:

<div align="center">
    <img alt="DevSecOps" src="img/creacion.PNG">
</div>


## Paso 2
Establecemos un nombre, descripción y privacidad del repositorio:

<div align="center">
    <img alt="DevSecOps" src="img/1.jpg">
</div>


## Paso 3
Se realiza el push a la imagen:

```prompt
docker push miguelo89/grupo_3:tagname
```
<div align="center">
    <img alt="DevSecOps" src="img/2.jpg">
</div>


## Paso 4

Agregamos nombres de los participantes del repositorio:

<div align="center">
    <img alt="DevSecOps" src="img/3.jpg">
</div>


## Paso 5

Visualizamos la imagen:

```prompt
docker run [imagen]
```
<div align="center">
    <img alt="DevSecOps" src="img/4.jpg">
</div>

## Integrantes :trollface:

| [<img src="https://avatars.githubusercontent.com/u/163602168?v=4" width=115><br><sub>Juliteth Pinilla</sub>](https://github.com/jpinillaDiplomado) | [<img src="https://avatars.githubusercontent.com/u/105172071?v=4" width=115><br><sub>Miguel Aponte</sub>](https://github.com/Miguelo89)  | [<img src="https://avatars.githubusercontent.com/u/163653023?v=4" width=115><br><sub>Andrés Gonzales </sub>](https://github.com/Andrezk8) |  
| :---: | :---: | :---: |
| [<img src="https://avatars.githubusercontent.com/u/63757797?v=4" width=115><br><sub>John Solorza </sub>](https://github.com/jsolorza) | [<img src="https://avatars.githubusercontent.com/u/43438728?v=4" width=115><br><sub>Sebastian Villa </sub>](https://github.com/SebastianVilla13) | [<img src="https://avatars.githubusercontent.com/u/164546938?v=4" width=115><br><sub>Leonardo Rondon </sub>](https://github.com/leonardoj27) |
