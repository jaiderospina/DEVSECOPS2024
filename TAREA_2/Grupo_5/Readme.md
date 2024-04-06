# <h1 align="center"> PRACTICA EN CLASE </h1>

Integrantes:
 - Edward castro       - ID: 644838
 - Daniel lopez        - ID: 711991
 - Fabial silvqa       - ID: 
 - Sebastian romero    - ID: 732124
 - Sebastian prieto    - ID: 711751

## Prerequisitos
Se debe tener la imagen creada en el laboratorio en clase


### Paso 1 
Verificar que tengamos instalado Docker y podamos correr la imagen que viene por defecto.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen1.PNG" alt="logo" width="500"/></p>

### Paso 2 

ejecutamos el comando docker run --interactive  --tty ubunto bash en el cual le estamos diciendo que docker corra e interactue con al terminal bash de ubuntu, posteriormente actualizara el sistema e instalara el programa. 

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen2.PNG" alt="logo" width="500"/></p>

posteriormente damos las intrucciones para que el ejecutable se contruya y se den los permisos necesarios para la ejecucion, una vez realizado este paso procedemos a salir y volvemos a la terminal de windows

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen3.PNG" alt="logo" width="500"/></p>
el comando docker container ls -a nos esta enlistando los contenedores donde se corre la imagen 

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen4.PNG" alt="logo" width="500"/></p>
El comando docker images nos permite revisar que iamgenes tenemos enlistadas y asi poder revisarlas

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen5.PNG" alt="logo" width="500"/></p>

el docker run nos permite correr una imagen que nosotros le indiquemos y el ejecutable donde se encuentra la imagen.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen6.PNG" alt="logo" width="500"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen7.PNG" alt="logo" width="500"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen8.PNG" alt="logo" width="500"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen9.PNG" alt="logo" width="500"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen10.PNG" alt="logo" width="500"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen11.PNG" alt="logo" width="500"/></p>

# <h1 align="center"> SUBIR IMAGEN A DOCKERHUB </h1>

## Subir imagen a Dockerhub (Desde consola)
### Paso 1
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen12.png" alt="logo" width="500"/>
</p>
Primeramente debemos identificar si nuestra imagen posee actualmente nombre y tag, de lo si no, debemos asignarme los mismos ya que de lo contrario, no se nos denegará el push a dockerhub, como podemos ver, nuestra imagen no posee nombre ni tag, así que se lo asignaremos.

### Paso 2
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen13.PNG" alt="logo" width="500"/></p>

Debemos verificar que estemos autenticados en dockerhub, con el siguiente comando, en caso de que no deberemos ingresar nobmre de usuario y contraseña, en caso de que ya estemos autenticados, volverá a realizar la autenticacion con las credenciales actuales, en ambos casos deberá mostrarnos si la autenticacion ha sido satisfactoria.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen14.PNG" alt="logo" width="500"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen15.PNG" alt="logo" width="500"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen15.PNG" alt="logo" width="500"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_2/Grupo_5/imagenes/imagen16.PNG" alt="logo" width="500"/></p>

