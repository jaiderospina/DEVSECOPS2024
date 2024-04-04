# Subir imagenes a DockerHub

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
