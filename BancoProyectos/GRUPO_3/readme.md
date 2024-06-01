<div align="center">
  <h1 align="center" style="color: #eee;">
    :closed_lock_with_key: GESTOR DE ARCHIVOS DOCUMENTAL :closed_lock_with_key:
    <br />
    <br />
    <img width="800" height="140" alt="DevSecOps" src="img/gestiondoc.jpg">
  </h1>
</div>

# TABLA DE CONTENIDO

- [Descripción Funcional]
- [Documento Arquitectural]
- [Diagrama de Secuencia]


## DESCRIPCIÓN FUNCIONAL  :books:
En respuesta a las crecientes necesidades de las empresas en la gestión documental, este proyecto presenta la implementación de una aplicación diseñada específicamente para optimizar estos procesos. Esta herramienta no solo facilita el control de los procedimientos administrativos, sino que también proporciona a clientes y personal interno las herramientas necesarias para agilizar sus tareas diarias. Al digitalizar los historiales documentales, la aplicación reduce significativamente el espacio físico requerido para su almacenamiento y los tiempos de búsqueda de información, mejorando así la eficiencia operativa. Además, ofrece un control más riguroso sobre el flujo de documentos, garantizando un servicio de mayor calidad y una mayor seguridad y estabilidad de los datos.
Para materializar esta visión, se ha adoptado el patrón de diseño MVC, que permite una programación más clara y escalable, junto con la metodología de desarrollo Java y los lenguajes HTML, JavaScript, MySQL y PHP. Cada uno de estos elementos se explica detalladamente, facilitando su comprensión y correcta manipulación, lo que asegura la efectividad y sostenibilidad del proyecto.

## MAPA DE IMPACTO
El Mapa de Impacto es una herramienta visual que permitirá en la planificación estratégica del proyecto a alinear las actividades del equipo con los objetivos de negocio y las necesidades de los usuarios. Facilita la identificación de los impactos deseados y las acciones necesarias para alcanzarlos, asegurando que todos los esfuerzos del equipo estén orientados hacia la creación de valor.

<div align="center">
  <img alt="ImpactMapping" src="img/Gestor Documental - Mapa de Impacto.jpg">
</div>

## MAPA DE HISTORIAS DE USUARIO
El Story Mapping mapa de historia de usuario es una técnica visual utilizada en la gestión de proyectos ágiles para planificar y organizar las tareas necesarias para completar un proyecto. Representa las actividades principales que el usuario realiza al interactuar con el producto y describen funciones o características específicas desde la perspectiva del usuario.

<div align="center">
  <img alt="StoryMapping" src="img/Gestor Documental - Story Mapping.jpg">
</div>

## DIAGRAMA DE SECUENCIA
El diagrama de secuencia muestra los pasos que sigue el usuario en el sistema para realizar y llevar a cabo las funcionalidades del mismo.
<div align="center">
  <img alt="DiagramaSecuencia" src="img/D. Secuencia.drawio.png">
</div>

## DIAGRAMA DE COMPONENTES
Como se puede observar en la figura, hay una interfaz web que da acceso a los requerimientos funcionales del sistema. Además, existe otra interfaz de administración que da acceso a características de seguridad y control del sistema. En la Lógica de Negocio, se encuentran las características de los requerimientos funcionales del sistema, además de los módulos de administración de usuarios, roles y permisos que pertenecen al módulo que maneja la seguridad del sistema. En la capa de documentación se encuentra todo lo relacionado a la gestión de documentos y datos de los usuarios, y también se realizó la creación de un bean, que permite evitar la reprogramación de todos los componentes del sistema y realizar la conexión viable con la base de datos. Por último, las capas son soportadas por un servidor de base de datos.

<div align="center">
  <img alt="StoryMapping" src="img/Gestor Documental - Diagrama de componentes.jpg">
</div>


