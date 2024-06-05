<div align="center">
  <h1 align="center" style="color: #eee;">
    :closed_lock_with_key: GESTOR DE ARCHIVOS DOCUMENTAL :closed_lock_with_key:
    <br />
    <br />
    <img width="800" height="140" alt="DevSecOps" src="img/gestiondoc.jpg">
  </h1>
</div>

# TABLA DE CONTENIDO

- [Descripción Funcional](#DESCRIPCIÓN-FUNCIONAL)
- [Mapa de Impacto](#MAPA-DE-IMPACTO)
- [Mapa de Historia de Usuario](#MAPA-DE-HISTORIAS-DE-USUARIO)
- [Diagrama de Secuencia](#DIAGRAMA-DE-SECUENCIA)
- [Diagrama de Arquitectura](#DIAGRAMA-DE-ARQUITECTURA)
- [Diagrama Entidad - Relación](#DISEÑO-DEL-MODELO-ENTIDAD-RELACIÓN)
- [Diagrama de Arquitectura de Hardware](#ARQUITECTURA-DE-HARDWARE)
- [Manual de Usuario](#MANUAL-DE-USUARIO)


## DESCRIPCIÓN FUNCIONAL  :books:
En respuesta a las crecientes necesidades de las empresas en la gestión documental, este proyecto presenta la implementación de una aplicación diseñada específicamente para optimizar estos procesos. Esta herramienta no solo facilita el control de los procedimientos administrativos, sino que también proporciona a clientes y personal interno las herramientas necesarias para agilizar sus tareas diarias. Al digitalizar los historiales documentales, la aplicación reduce significativamente el espacio físico requerido para su almacenamiento y los tiempos de búsqueda de información, mejorando así la eficiencia operativa. Además, ofrece un control más riguroso sobre el flujo de documentos, garantizando un servicio de mayor calidad y una mayor seguridad y estabilidad de los datos.
Para materializar esta visión, se ha adoptado el patrón de diseño MVC, el cual permite una programación más clara y escalable. Además, se utiliza la metodología de desarrollo Java, así como los lenguajes HTML, JavaScript, MySQL y PHP, junto con la contenedorización en Docker. Cada uno de estos elementos se explica detalladamente, facilitando su comprensión y correcta manipulación, lo que asegura la efectividad y sostenibilidad del proyecto.

## MAPA DE IMPACTO
El Mapa de Impacto es una herramienta visual que permitirá en la planificación estratégica del proyecto a alinear las actividades del equipo con los objetivos de negocio y las necesidades de los usuarios. Facilita la identificación de los impactos deseados y las acciones necesarias para alcanzarlos, asegurando que todos los esfuerzos del equipo estén orientados hacia la creación de valor.

<div align="center">
  <img alt="ImpactMapping" src="img/Gestor Documental - Mapa de Impacto.jpg">
</div>

## MAPA DE HISTORIAS DE USUARIO
El Story Mapping mapa de historia de usuario es una técnica visual utilizada en la gestión de proyectos ágiles para planificar y organizar las tareas necesarias para completar un proyecto. Representa las actividades principales que el usuario realiza al interactuar con el producto y describen funciones o características específicas desde la perspectiva del usuario.

<div align="center">
  <img alt="StoryMapping" src="img/Story Mapping.jpg">
</div>

## DIAGRAMA DE SECUENCIA
El diagrama de secuencia muestra los pasos que sigue el usuario en el sistema para realizar y llevar a cabo las funcionalidades del mismo.
<div align="center">
  <img alt="DiagramaSecuencia" src="img/D. Secuencia.drawio.png">
</div>

## DIAGRAMA DE COMPONENTES
Como se puede observar en la figura, hay una interfaz web que da acceso a los requerimientos funcionales del sistema. Además, existe otra interfaz de administración que da acceso a características de seguridad y control del sistema. En la Lógica de Negocio, se encuentran las características de los requerimientos funcionales del sistema, además de los módulos de administración de usuarios, roles y permisos que pertenecen al módulo que maneja la seguridad del sistema. En la capa de documentación se encuentra todo lo relacionado a la gestión de documentos y datos de los usuarios, y también se realizó la creación de un bean, que permite evitar la reprogramación de todos los componentes del sistema y realizar la conexión viable con la base de datos. Por último, las capas son soportadas por un servidor de base de datos.

<div align="center">
  <img alt="Diagramadecomponentes" src="img/Diagrama de componentes.jpg">
</div>

## DIAGRAMA DE ARQUITECTURA
El diagrama de arquitectura proporciona al proyecto una vista clara y concisa de cómo los diferentes componentes de la aplicación interactúan y se integran. Usar Docker para contenerizar los diferentes servicios de una aplicación PHP permite un desarrollo más ágil, escalabilidad y facilidad de despliegue. Este diagrama es fundamental para entender la infraestructura del proyecto y garantizar que todos los miembros del equipo tengan una visión común del sistema.

<div align="center">
  <img alt="Diagramadearquitectura" src="img/D. Arquitectura.png">
</div>

## DISEÑO DEL MODELO ENTIDAD - RELACIÓN

Es un modelo de datos para representar las Entidades de información (Conjunto de datos) y las relaciones que las componen. En este modelo, se considera labase de datos como un conjunto de relaciones, las cuales se almacenan en una tabla (Conjunto de filas).

A continuación, se presenta el diseño del modelo relacional de la base de datos para el subsistema de seguridad con la respectiva especificación.

<div align="center">
  <img alt="Diseño del modelo Entidad – Relación" src="img/Diseño del modelo Entidad – Relación.jpg">
</div>

## ARQUITECTURA DE HARDWARE

<div align="center">
  <img alt="Arquitectura Hardware" src="img/Arquitectura Hardware.JPG">
</div>

## MANUAL DE USUARIO

Para más información, puedes consultar el siguiente documento:

[Manual de Usuario](BancoProyectos/GRUPO_3/Documentos/Manual_de_Usuario.pdf)

