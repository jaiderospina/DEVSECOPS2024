# PROYECTO FINAL SECDEVOPS 2024-1
## Integrantes
- Johan Esteban Salinas Acosta
- Duver Salgado
- Harol Cerquera
- Pedro Orozco
- Daniel Lopez
- Sebastian Sarmiento
- Fabian Silva
- Edward Castro
- Camilo Montealegre


# Introduccion

# Requerimientos funcionales

|    CÓDIGO    | REQUISITO FUNCIONAL                                              |
|--------------|------------------------------------------------------------------|
|              | Nombre: Gestión Ingreso al sistema                               |
|   RQF001     | Descripción: El sistema permitirá el acceso a los usuarios administrador y colaborador y podrán ingresar al sistema mediante la autenticación de usuario y contraseña.|      
|              | Usuarios: Administrador, Colaborador                             |

|    CÓDIGO    | REQUISITO FUNCIONAL                                              |
|--------------|------------------------------------------------------------------|
|              | Nombre: Gestión de usuarios                                      |
|   RQF002     | Descripción: El sistema permitirá consultar, actualizar y eliminar registro de usuarios del sistema.|
|              | Usuarios: Administrador                                          |

|    CÓDIGO    | REQUISITO FUNCIONAL                                              |
|--------------|------------------------------------------------------------------|
|              | Nombre: Gestión de productos                                     |
|   RQF003     | Descripción: El sistema permitirá consultar, crear, actualizar y eliminar registros en la base de productos del sistema.|
|              | Usuarios: Administrador, Colaborador                             |

|    CÓDIGO    | REQUISITO FUNCIONAL                                              |
|--------------|------------------------------------------------------------------|
|              | Nombre: Reporte productos                                        |
|   RQF004     | Descripción: El sistema permitirá al colaborador descargar un reporte de la base de productos.|
|              | Usuarios: Administrador                                          |

# Requerimientos no funcionales

|    CÓDIGO    | REQUISITO NO FUNCIONAL                                           |
|--------------|------------------------------------------------------------------|
|              | Nombre: Rendimiento del aplicativo                               |
|   RQNF001    | Descripción: El sistema debe ser capaz de manejar el ingreso de buena cantidad de registros por día para evitar retrasos significativos, el tiempo de respuesta para el ingreso de un registro no debe exceder los 5 segundos para proporcionar una experiencia fluida al usuario.|

|    CÓDIGO    | REQUISITO NO FUNCIONAL                                           |
|--------------|------------------------------------------------------------------|
|              | Nombre: Disponibilidad del aplicativo                            |
|   RQNF002    | Descripción: El sistema debe tener un tiempo de disponibilidad del 99.9% para garantizar que los usuarios puedan ingresar y consultar en cualquier momento.|

|    CÓDIGO    | REQUISITO NO FUNCIONAL                                           |
|--------------|------------------------------------------------------------------|
|              | Nombre: Diseño de Interfaz grafica                               |
|   RQNF003    | Descripción: El aplicativo debe hacer uso de una interfaz intuitiva, sencilla de utilizar y que permita identificar fácilmente los datos importantes con respecto al inventario.|

# Casos de uso

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_1.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_2.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_3.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_4.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_5.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_6.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_7.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_8.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Caso_Uso_9.png" alt="logo" width="1000"/></p>

# Diagrama de secuencia

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Diagrama%20de%20secuencia.jpeg" alt="logo" width="1000"/></p>

# Diagrama de despliegue

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/Diagrama%20despliegue.png" alt="logo" width="800"/></p>

# Manual de usuario.

El usuario visualiza los repositorios que tiene acceso.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen1.png" alt="logo" width="1000"/></p>

ingresa al repositorio a trabajar.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen2.png" alt="logo" width="1000"/></p>

Visualiza el tag o los tags disponibles a desplegar.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen3.png" alt="logo" width="1000"/></p>

Para comenzar el despliegue tomamos el tag que nos haya indicado el desarrollador en este caso tomamos el tag v3 y creamos una rama.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen4.png" alt="logo" width="1000"/></p>

Cuando se crea la rama con el tag debemos hacer un merge.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen5.png" alt="logo" width="1000"/></p>

Acá creamos el merge, en la parte izquierda de Source Branch seleccionamos la rama que creamos anteriormente y en target Branch en que ambiente lo queremos desplegar en este caso la rama stage que es ambiente desarrollo o de pruebas.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen6.png" alt="logo" width="1000"/></p>

Una vez funcionamos los cambios, se ejecutará el pipeline el cual ejecutara lo Jobs que hemos creamos, los Jobs más importantes son Build, Backup y Deploy, con esto visualizamos que el despliegue continuo se haya realizo correctamente.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen7.png" alt="logo" width="1000"/></p>

Como podemos ver si vamos a la rama stage vemos que el tag se ha fusionado con la rama correctamente y raíz de lo que hay en este tag se puede generar mas tags si se agregan mas funcionalidades en el desarrollo.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen8.png" alt="logo" width="800"/></p>


# Manual de administración Gitlab.

Seleccionamos el Admin área para empezar con la administración del proyecto

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen9.png" alt="logo" width="250"/></p>

Visualizamos los usuarios que tiene los permisos al repositorio.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen10.png" alt="logo" width="1000"/></p>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen11.png" alt="logo" width="250"/></p>

De lo anterior  indico las funcionalidades de la administración del gitlab.
Para asignarle a los usuario dependiendo el rol asignado:

## Dashboard:

Descripción: Esta es la página principal del área de administración. Proporciona una vista general del estado actual de GitLab, incluyendo estadísticas de uso y notificaciones importantes.

Funcionalidad: Aquí, los administradores pueden obtener una visión rápida de la actividad reciente y el estado general del sistema GitLab, ayudando a monitorear el rendimiento y detectar posibles problemas.

## Projects:

Descripción: Esta sección lista todos los proyectos existentes en el servidor de GitLab.

Funcionalidad: Permite a los administradores gestionar todos los proyectos, incluyendo la creación, edición, y eliminación de proyectos, así como la configuración de permisos y la administración de repositorios de código. 

## Users:

Descripción: Muestra todos los usuarios registrados en el sistema GitLab.

Funcionalidad: Los administradores pueden gestionar las cuentas de usuario, lo que incluye la creación, eliminación y modificación de usuarios, así como la asignación de roles y permisos específicos.

## Groups:

Descripción: Esta opción gestiona los grupos de usuarios en GitLab.

Funcionalidad: Los grupos permiten organizar proyectos y usuarios. Los administradores pueden crear y gestionar grupos, definir permisos a nivel de grupo y facilitar la colaboración en equipo a través de la agrupación de proyectos.

## Runners:

Descripción: Lista y administra los runners configurados en el sistema GitLab.

Funcionalidad: Los runners son procesos que ejecutan las tareas de CI/CD. Aquí, los administradores pueden registrar nuevos runners, configurar los existentes y monitorear su estado y uso.

## Jobs:

Descripción: Muestra la lista de trabajos (jobs) de CI/CD que se están ejecutando o se han ejecutado en el sistema.

Funcionalidad: Permite a los administradores ver el estado de los jobs, revisar logs de ejecución, y gestionar los jobs en curso o pasados, facilitando el seguimiento de los procesos de integración y despliegue continuo.

Se le asigna un rol dependiendo la necesidad

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen12.png" alt="logo" width="1000"/></p>

#Administración despliegue de aplicaciones

Desde aquí podemos modificar y crear nuevos Jobs desde los archivos .yml hago referencia agregar mas procesos como de scaneo de código o notificaciones

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen13.png" alt="logo" width="1000"/></p>

Dependiendo el tipo de tecnología se crea el archivo .yml  con sus variables.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen14.png" alt="logo" width="1000"/></p>

Desde este repositorio se maneja la parametria a que servidor se tiene que desplegar la aplicación, así mismo la ruta donde esta ubicado el api con su archivo actualizado del config.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/BancoProyectos/GRUPO_5/imagenes/imagen15.png" alt="logo" width="1000"/></p>
































