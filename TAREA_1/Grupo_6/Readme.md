# DevSecOps
**Tabla de contenido**
* [Definición](#definici%C3%B3n)
* [Qué significa DevSecOps](#qu%C3%A9-significa-devsecops)
* [Cuál es la diferencia entre DevOps y DevSecOps](#cu%C3%A1l-es-la-diferencia-entre-devops-y-devsecops)
* [Beneficios del enfoque DevOps](#beneficios-del-enfoque-devops)
* [Desventajas del Enfoque DevOps](#desventajas-del-enfoque-devops)
* [Herramientas DevOps](#herramientas-devops)
* [Importancia de DevSecOps en la Nube](#importancia-de-devsecops-en-la-nube)
* [Herramientas DevOps](#herramientas-devops)
* [Cómo implementar DevSecOps](#c%C3%B3mo-implementar-devsecops)
* [Referencias Bibliograficas](#referencias-bibliograficas)

# Definición

DevSecOps es la integración fluida de la seguridad dentro de los procesos de DevOps, enfocándose en pruebas recurrentes, detección de vulnerabilidades, auditorías y gestión de riesgos. Este enfoque se centra en asegurar que la seguridad esté en el centro de todas las etapas del ciclo de vida del desarrollo de software. La adopción de DevSecOps está en aumento debido a los cambios culturales y a la necesidad de abordar las preocupaciones de seguridad de manera proactiva. Aunque su implementación puede variar, la mayoría de las organizaciones han adoptado al menos algunos de los principios fundamentales de DevSecOps, como la automatización de tareas de seguridad para mejorar la eficiencia y la consistencia.

![Logo de DevSecOps](https://github.com/jaiderospina/DEVSECOPS2024/blob/332f0a6d3c74c39be41a601103030620a3020a0b/TAREA_1/Grupo_6/Imagenes/Imagen_Definici%C3%B3n.jpg)
 # ¿Qué significa DevSecOps?

**DevSecOps significa desarrollo, seguridad y operaciones**. Cada término define diferentes funciones y responsabilidades de los equipos de software a la hora de crear aplicaciones de software.

- **Desarrollo:** El desarrollo es el proceso de planificación, codificación, creación y prueba de la aplicación.

- **Seguridad:** La seguridad significa introducir la seguridad en una etapa temprana del ciclo de desarrollo de software. Por ejemplo, los programadores se aseguran de que el código esté libre de vulnerabilidades de seguridad y los profesionales de la seguridad prueban el software más a fondo antes de que la empresa lo publique.

- **Operaciones:** El equipo de operaciones publica, supervisa y corrige cualquier problema que surja del software.

<p align="center">
  <img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_6/Imagenes/Devops.png" 
   alt="Imagen de DevSecOps"
 >
</p>

# ¿Cuál es la diferencia entre DevOps y DevSecOps?

La diferencia principal entre DevOps y DevSecOps radica en el enfoque adicional en seguridad por parte de este último. Ambos comparten un marco común que prioriza la integración y la colaboración fluida, pero con una atención especial hacia la seguridad.
Al igual que DevOps incorpora pruebas en cada etapa del desarrollo, implementación y monitoreo, DevSecOps integra verificaciones de seguridad en todas las fases del ciclo de vida de DevOps. Además, DevSecOps opera dentro de una tubería de Integración Continua/Desarrollo Continuo (CI/CD), aplicando prácticas de seguridad a lo largo de todo el proceso de desarrollo, en contraste con los entornos DevOps donde estos controles de seguridad, gestión de activos y auditorías periódicas se realizan principalmente antes de la liberación final.

<p align="center">
  <img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/886690e3605f4be217ed007184bfb05c20467ef7/TAREA_1/Grupo_6/Imagenes/Diferencias.jpg"
 >
</p>

# Beneficios del enfoque DevOps

- **Entrega continua**: DevOps permite entregas de software más frecuentes y confiables. Automatiza y estandariza los procesos de desarrollo, prueba e implementación, lo que resulta en entregas más rápidas y con menos errores.

- **Mayor calidad del software**: Al integrar la automatización de pruebas en el proceso de desarrollo, los equipos de DevOps pueden identificar y corregir errores de manera más rápida y eficiente, lo que conduce a una mayor calidad del software.

- **Mejora en la colaboración y comunicación**: DevOps fomenta la colaboración entre equipos de desarrollo, operaciones y calidad, al romper las barreras organizativas y promover la comunicación transparente y la responsabilidad compartida. Esto reduce los silos de información y aumenta la eficiencia en todo el ciclo de vida del desarrollo.

- **Mayor agilidad empresarial**: Al permitir una entrega más rápida y continua de software, las organizaciones pueden responder de manera más ágil a las demandas del mercado y adaptarse rápidamente a los cambios en los requisitos del cliente y del negocio.

- **Reducción del tiempo de comercialización**: DevOps acelera el tiempo que lleva pasar desde la idea hasta la implementación, lo que permite a las organizaciones llevar nuevas características y productos al mercado más rápidamente y ganar una ventaja competitiva.

- **Optimización de recursos y costos**: La automatización de procesos en el desarrollo, pruebas y despliegue de software reduce la necesidad de intervención manual y minimiza los errores humanos, lo que a su vez reduce los costos operativos y optimiza el uso de recursos.

- **Mejora en la estabilidad y confiabilidad de las operaciones**: DevOps promueve la infraestructura como código y la automatización de la configuración, lo que garantiza que los entornos de producción sean más estables, consistentes y fácilmente replicables.

- **Cultura de aprendizaje y mejora continua**: DevOps fomenta una cultura de aprendizaje, experimentación y mejora continua, donde los equipos se sienten cómodos asumiendo riesgos y aprendiendo de los fracasos para iterar y mejorar constantemente los procesos y productos.


# Desventajas del Enfoque DevOps

- **Complejidad inicial**: Implementar DevOps puede requerir cambios significativos en la cultura organizativa, procesos y herramientas existentes. Esta transición puede ser compleja y llevar tiempo, especialmente en organizaciones grandes con estructuras tradicionales rígidas.

- **Costo de implementación**: La adopción de DevOps puede implicar costos iniciales significativos, incluyendo la inversión en herramientas de automatización, capacitación de personal y reestructuración de equipos y procesos.

- **Curva de aprendizaje**: Los equipos y profesionales de TI pueden requerir tiempo para familiarizarse y dominar las prácticas y herramientas asociadas con DevOps, lo que puede afectar temporalmente la productividad.

- **Riesgo de fallos en la automatización**: La automatización es fundamental en DevOps, pero si no se implementa correctamente, puede llevar a errores costosos y fallos en la producción. Es crucial realizar pruebas exhaustivas y establecer mecanismos de control de calidad adecuados para mitigar este riesgo.

- **Dependencia de herramientas y tecnología**: DevOps depende en gran medida de herramientas de automatización y tecnología avanzada. Si estas herramientas fallan o se vuelven obsoletas, puede afectar la eficacia de la implementación de DevOps.

- **Desafíos culturales**: La adopción exitosa de DevOps requiere un cambio cultural significativo, que a menudo implica superar la resistencia al cambio y fomentar una mentalidad de colaboración, responsabilidad compartida y aprendizaje continuo en toda la organización.

- **Posibles problemas de seguridad**: La automatización y la entrega continua pueden aumentar el riesgo de vulnerabilidades de seguridad si no se implementan medidas adecuadas de seguridad en todas las etapas del ciclo de vida del desarrollo de software.

- **Dificultades en organizaciones grandes**: En organizaciones grandes y complejas, la implementación de DevOps puede ser más desafiante debido a la necesidad de coordinación entre equipos distribuidos, procesos burocráticos y una mayor resistencia al cambio.

# Herramientas DevOps

| Herramienta              | Descripción                                                                                          |
|--------------------------|------------------------------------------------------------------------------------------------------|
| OWASP Dependency-Check   | Escanea las dependencias de un proyecto para detectar vulnerabilidades conocidas en bibliotecas.     |
| SonarQube                | Realiza análisis estático de código para identificar problemas de calidad y seguridad en el código. |
| SourceClear              | Herramienta de seguridad que analiza el código fuente para identificar y solucionar vulnerabilidades.|
| Retire.js                | Detecta bibliotecas JavaScript con vulnerabilidades conocidas y obsoletas.                           |
| Checkmarx                | Realiza análisis estático de código para identificar y solucionar problemas de seguridad.           |
| Snyk                     | Analiza las dependencias del proyecto en busca de vulnerabilidades y proporciona soluciones.         |

# Métodos de DevOps

Existen varios métodos de DevOps comunes que las organizaciones usan para acelerar y mejorar el desarrollo y las publicaciones de productos. Normalmente se presentan como prácticas y metodologías de desarrollo de software. Entre los más populares están Scrum, Kanban y Agile:

- **Scrum**: Scrum define la forma en la que los miembros de un equipo deben colaborar para conseguir entre todos acelerar los proyectos de desarrollo y control de calidad. Las prácticas de Scrum incluyen flujos de trabajo principales y terminología específica (sprints, bloques de tiempo, scrum diario [reunión]), y roles designados (Scrum Master, propietario del producto [product owner]).

- **Kanban**: Kanban se originó a partir de las eficiencias que se alcanzaron en la fábrica de Toyota. Kanban prescribe que el estado «en curso» (WIP, del inglés «work in progress») de un proyecto de software debe controlarse en un tablero Kanban.

- **Agile**: Los anteriores métodos de desarrollo de software Agile siguen teniendo una gran influencia en las herramientas y las prácticas de DevOps. Muchos de estos métodos, incluidos Scrum y Kanban, han incorporado elementos de la programación Agile. Algunas de estas prácticas están asociadas a una mayor capacidad de respuesta a los continuos cambios en requisitos y necesidades, los requisitos de documentación en forma de casos prácticos, la realización de reuniones diarias para ponerse al día y la incorporación de comunicación continua con los clientes para conocer sus opiniones. En Agile también se estipulan ciclos de desarrollo de software más cortos en lugar de los tradicionales métodos de desarrollo «en cascada» que se prolongaban en el tiempo.

# Importancia de DevSecOps en la Nube

A medida que las iniciativas de DevSecOps se trasladan a la nube, las cuatro áreas principales de interés incluyen:


| Área de Interés                     | Porcentaje |
|-------------------------------------|------------|
| Seguridad de los datos              | 45%        |
| Gestión de la seguridad de la nube  | 36%        |
| Riesgos de seguridad de la cadena de suministro | 33% |
| Protección de los recursos de la nube pública | 29% |

<p align="center">
  <img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_6/Imagenes/Devops%20Nube.png"
  alt="Imagen de DevSecOps Nube"
 >
</p>

# Cómo implementar DevSecOps

Agregar seguridad al proceso de DevOps requiere una planeación cuidadosa. Comience lentamente con procesos que presenten la menor fricción para el equipo y ofrezcan la mayor recompensa en términos de seguridad. Estas son algunas maneras de agregar seguridad a un sprint típico de DevOps.

- **Planeamiento y desarrollo**: 
La introducción temprana de la seguridad en los sprints de desarrollo no solo ayuda a reducir las vulnerabilidades más adelante, sino que también ahorra tiempo porque es más fácil solucionar los problemas antes de que el código se haya compilado e integrado. Durante el planeamiento y el desarrollo, use el modelado de amenazas para identificar y mitigar posibles amenazas para la aplicación. Esto le ayudará a crear seguridad en la aplicación desde el principio. Para detectar problemas de seguridad antes de que el código se confirme en el repositorio compartido, implemente comprobaciones automatizadas, como complementos de seguridad del entorno de desarrollo integrado, que proporcionan a los desarrolladores comentarios inmediatos si hay un posible riesgo de seguridad en el código que han escrito. Durante la revisión del código, pida a alguien con experiencia en seguridad que proporcione recomendaciones para realizar mejoras.

- **Confirmación del código**:
Una de las claves para lograr un proceso de DevSecOps correcto es la integración continua. Normalmente, los desarrolladores confirman su código en un repositorio central varias veces al día para asegurarse de que los problemas de integración se detectan pronto. Es importante agregar comprobaciones de seguridad automatizadas a esta fase. Esto puede incluir el examen de bibliotecas y dependencias de terceros, pruebas unitarias y pruebas de seguridad de aplicaciones estáticas. También es importante implementar controles de acceso basados en roles para proteger la infraestructura de integración continua y entrega continua de atacantes que buscan ejecutar código malintencionado o robar credenciales.

- **Compilación y pruebas**:
La ejecución de scripts de seguridad automatizados en el entorno de prueba ayuda a descubrir posibles problemas que no se detectaron anteriormente. Algunas de las pruebas de seguridad que puede ejecutar durante esta fase incluyen pruebas de seguridad de aplicaciones dinámicas, análisis de infraestructura, análisis de contenedores, validación de la configuración en la nube y pruebas de aceptación de seguridad.

- **Producción**:
Una vez implementada la aplicación en producción, algunas organizaciones participan en pruebas de penetración para intentar encontrar puntos débiles en el entorno activo. En las pruebas de penetración, las personas adoptan la mentalidad de un atacante y buscan formas de vulnerar la aplicación.

- **Operación**:
Incluso el mejor proceso de DevSecOps no detectará todo, por lo que es fundamental supervisar continuamente las aplicaciones en busca de vulnerabilidades y amenazas. Los datos de análisis pueden ayudarle a evaluar si su posición de seguridad mejora y resalta las áreas de optimización.

# Referencias Bibliograficas
