# <h1 align="center"> PROCESO DE SUBIR UNA IMAGEN A UN REPOSITORIO DE DOCKERHUB </h1>

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_4/imagenes/DockerHub.png?raw=true" alt="logo" width="630" height="357"/></p>


## Pasos a tener encuenta

### Paso 1 Login en DockerHub

Primeramente debemos enlazar nuestra cuenta de DockerHub con el Docker de consola, esto lo hacemos utilizando el siguiente comando el cual nos solicitara usuario y contraseña para poder iniciar:

```
	docker login
```

Imagen



### Paso 2 Etiquetar Imagen

Seguidamente debomos ponerle una equiqueta u nombre a la imagen para que esta sea identificable, lo podemos hacer con el siguiente comando

```
	docker tag nombre_imagen:etiqueta usuario_dockerhub/nombre_repositorio:etiqueta
```

Imagen 1
Imagen 2

### Paso 3 Subir Imagen a DockerHub

Una vez etiquetada la imagen correctamente, podemos subirla a Docker Hub usando el siguiente comando:

```
	docker push usuario_dockerhub/nombre_repositorio:etiqueta
```


Imagen Push Docker

### Paso 4 Verificar la subida

Por ultimo nos dirijimos a nuestra cuenta de Docker Hub en el navegador web y verificamos que la imagen se haya subido correctamente al repositorio especificado.

Imagen del Repositorio de Docker Hub












Integrantes:
  - Jhoan Camilo Montealegre Romero ID: 705426
  - Johan Esteban Salinas Acosta ID:
  - Duver Salgado ID:
  - Pedro Orozco ID:
  - Harold Cer ID:
