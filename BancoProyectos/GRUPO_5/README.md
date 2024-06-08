# PROYECTO FINAL SECDEVOPS 2024-1
## Integrantes
-Johan Esteban Salinas Acosta
- Duver Salgado
- Harol Cerquera
- Pedro Orozco
- Daniel Lopez
- Sebastian Sarmiento
- Fabian Silva
- Edward Castro
- Camilo Montealegre


# Introduccion

# Casos de uso

| Caso de Uso  | Inicio de Sesión                                                 |
|--------------|------------------------------------------------------------------|
| Actor        | Usuario                                                          |
| Descripción  | Este caso de uso permite a un usuario iniciar sesión en el sistema de inventario de bodega utilizando sus credenciales. Proporciona acceso seguro a las funcionalidades del sistema, restringiendo el acceso a usuarios autorizados. |
| Características | - El usuario debe ingresar un nombre de usuario y una contraseña válidos.<br> - El sistema verifica la autenticidad de las credenciales proporcionadas.<br> - Si las credenciales son válidas, el usuario obtiene acceso al sistema y puede comenzar a utilizar las funcionalidades disponibles. |

| Caso de Uso  | Guardar un Producto                                              |
|--------------|------------------------------------------------------------------|
| Actor        | Administrador                                                    |
| Descripción  | Este caso de uso permite a un administrador agregar información sobre un nuevo producto al sistema de inventario de bodega. Al guardar un nuevo producto, se actualiza la base de datos del sistema con los detalles proporcionados. |
| Características | - El administrador introduce información detallada sobre el producto, incluyendo su código, nombre, cantidad en stock, estado actual, fecha de registro y fecha de última modificación.<br> - Una vez que se ingresan los detalles del producto, el sistema los almacena de manera segura en la base de datos del inventario de la bodega. |

| Caso de Uso  | Registrar Usuarios                                               |
|--------------|------------------------------------------------------------------|
| Actor        | Administrador                                                    |
| Descripción  | Este caso de uso permite a un administrador crear nuevas cuentas de usuario en el sistema de inventario de bodega y asignarles roles específicos. Proporciona al administrador el control sobre quién tiene acceso al sistema y qué funciones pueden realizar. |
| Características | - El administrador completa un formulario con los detalles del nuevo usuario, como nombre, dirección de correo electrónico y contraseña.<br> - Además, el administrador asigna un rol al nuevo usuario, determinando así el alcance de sus privilegios en el sistema.<br> - Una vez que se completa el registro, el nuevo usuario puede acceder al sistema utilizando las credenciales proporcionadas por el administrador. |

| Caso de Uso  | Cerrar Sesión                                                    |
|--------------|------------------------------------------------------------------|
| Actor        | Usuario                                                          |
| Descripción  | Este caso de uso permite a un usuario finalizar su sesión actual en el sistema de inventario de bodega. Proporciona una forma segura de salir del sistema y garantiza la privacidad y seguridad de la cuenta del usuario. |
| Características | - El usuario activa la función de cierre de sesión desde la interfaz del sistema.<br> - Al confirmar la solicitud de cierre de sesión, el sistema cierra la sesión del usuario y lo redirige a la página de inicio de sesión.<br> - Una vez que se cierra la sesión, el usuario ya no tiene acceso a las funcionalidades del sistema hasta que vuelva a iniciar sesión con sus credenciales. |

| Caso de Uso  | Filtrar Productos por Nombre                                    |
|--------------|------------------------------------------------------------------|
| Actor        | Usuario                                                          |
| Descripción  | Este caso de uso permite a un usuario buscar productos específicos en el inventario de la bodega utilizando el nombre del producto como criterio de búsqueda. Facilita la navegación y la localización de productos dentro del sistema. |
| Características | - El usuario ingresa el nombre o una parte del nombre del producto en el campo de búsqueda designado.<br> - El sistema realiza una búsqueda dentro de la base de datos del inventario y filtra los productos cuyos nombres coinciden con la entrada del usuario.<br> - Los resultados de la búsqueda se presentan al usuario, permitiéndole revisar y seleccionar los productos deseados de manera eficiente. |


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

##Users:

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
































