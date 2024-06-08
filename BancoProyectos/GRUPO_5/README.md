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

