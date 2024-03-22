# <h1 align="center">HISTORIA DE <strong>DEVSECOPS</strong></h1>

La evolución y los hitos clave en el desarrollo de las prácticas DevSecOps, han destacando eventos significativos, tecnologías y tendencias que han dado forma a su aparición como una metodología crítica en el desarrollo de software moderno.

<p align="center"><img src="https://www.xalt.de/wp-content/uploads/2022/08/devsecops_loop.png" alt="logo" width="200"/></p>

## Primeras raíces

### 1. **Surgimiento de DevOps**
   - DevOps surgió a finales de la década de 2000 como respuesta a la naturaleza aislada del desarrollo de software y las operaciones de TI.
   - El objetivo era derribar las barreras entre los equipos de desarrollo y operaciones para mejorar la colaboración, la agilidad y la eficiencia.

### 2. **Preocupación por la seguridad**
   - A medida que DevOps ganaba popularidad, los problemas de seguridad se hacían cada vez más evidentes.
   - Las prácticas de seguridad tradicionales se esforzaban por seguir el rápido ritmo de DevOps, lo que provocaba vulnerabilidades y brechas.

## Integración de la seguridad

### 3. **Introducción de DevSecOps**
   - DevSecOps se acuñó para subrayar la importancia de integrar la seguridad en el proceso DevOps desde el principio.
   - Su objetivo es desplazar la seguridad hacia la izquierda, lo que significa que la seguridad se aborda al principio del proceso de desarrollo.

### 4. **El auge de la automatización**
   - La automatización desempeñó un papel crucial en la integración de la seguridad en los flujos de trabajo DevOps.
   - Surgieron herramientas y marcos para automatizar las pruebas de seguridad, las comprobaciones de conformidad y los análisis de vulnerabilidades.

## Principales hitos

### 5. **El Proyecto Phoenix**
   - El "Proyecto Fénix" de Gene Kim (2013) popularizó los conceptos de DevOps, incluida la integración de la seguridad.
   - Destacó la necesidad de un enfoque holístico para la entrega de software, que abarque el desarrollo, las operaciones y la seguridad.

### 6. **Manifiesto DevSecOps**
   - El manifiesto DevSecOps se presentó como un esfuerzo de colaboración por parte de expertos del sector para definir los principios de integración de la seguridad en DevOps.
   - Hacía hincapié en el cambio cultural, la colaboración y la automatización como principios fundamentales de DevSecOps.

## Prácticas en evolución

### 7. **Enfoque por turnos**
   - DevSecOps promueve un enfoque de desplazamiento a la izquierda, en el que la seguridad se integra en una fase temprana del ciclo de vida del desarrollo.
   - Esto ayuda a identificar y mitigar las vulnerabilidades de seguridad en las primeras etapas, reduciendo el riesgo y el coste.

### 8. **Seguridad continua**
   - Las canalizaciones de integración continua/entrega continua (CI/CD) permiten aplicar prácticas de seguridad continua.
   - Las comprobaciones y pruebas de seguridad se integran en las canalizaciones CI/CD, lo que garantiza que la seguridad sea una consideración constante durante todo el proceso de desarrollo.

## Adopción por el sector

### 9. **Adopción empresarial**
   - Las empresas adoptaron cada vez más DevSecOps como medio para mejorar la postura de seguridad al tiempo que mantienen la agilidad.
   - Las industrias con requisitos reglamentarios estrictos, como las finanzas y la salud, vieron una adopción significativa de las prácticas DevSecOps.

### 10. **Ecosistema de herramientas**
   - El ecosistema de herramientas DevSecOps se expandió rápidamente, con numerosos proveedores que ofrecen soluciones para la automatización de la seguridad, la orquestación y el cumplimiento.
   - Esta proliferación de herramientas contribuyó a la adopción generalizada de las prácticas DevSecOps.

## Tendencias futuras

### 11. **Cambio a la seguridad nativa de la nube**
   - Con la adopción generalizada de arquitecturas nativas de la nube, la atención se está desplazando hacia la seguridad nativa de la nube.
   - Las prácticas DevSecOps están evolucionando para abordar los desafíos de seguridad únicos que plantean los entornos nativos de la nube.

### 12. **Integración de IA y ML**
   - La inteligencia artificial (IA) y el aprendizaje automático (ML) se están integrando en los flujos de trabajo de DevSecOps para mejorar la detección de amenazas, la detección de anomalías y el análisis de seguridad.
   - Se espera que la automatización impulsada por AI/ML agilice aún más las operaciones y la respuesta de seguridad.

##  
# **Niveles habituales del proceso de DevSecOps**

Los procesos de DevSecOps están diseñados para integrar la seguridad en cada fase del ciclo de vida del desarrollo de software, basándose en los principios de DevOps. Estas etapas son fundamentales para asegurar que los problemas de seguridad se aborden de manera proactiva y eficiente a lo largo del proceso. A continuación, se detallan estas etapas:

- **Planificación**: En esta fase, la seguridad se considera desde el inicio del proceso de desarrollo de software. Se analizan posibles amenazas y se diseñan medidas de seguridad proactivas para integrarlas en el trabajo desde el principio.

- **Codificación**: Durante la etapa de codificación, se promueve una cultura de programación defensiva mediante políticas que aborden problemas de seguridad y cumplimiento de manera proactiva.

- **Compilación**: Aquí, se implementan controles de seguridad automatizados para detectar vulnerabilidades en el código fuente antes de que lleguen a la rama principal. Se utilizan herramientas como pruebas de seguridad de aplicaciones estáticas (SAST) y análisis de composición de software (SCA) para identificar y corregir posibles problemas.

- **Prueba**: En esta fase, se desarrollan estrategias de prueba automatizadas para identificar vulnerabilidades o problemas de seguridad. Esto incluye pruebas unitarias y pruebas dinámicas de seguridad de aplicaciones (DAST) para evaluar tanto la funcionalidad como la seguridad de la aplicación.

- **Lanzamiento**: Se realizan pruebas de seguridad adicionales y escaneos de vulnerabilidades antes del lanzamiento para detectar problemas que puedan haber pasado desapercibidos en etapas anteriores. Se implementa el principio de privilegio mínimo para limitar el acceso a recursos sensibles.

- **Implementación**: Se garantiza que el código solo llegue a producción si ha pasado los controles de seguridad en todas las etapas anteriores. Se aplican pruebas automatizadas tanto al código de la aplicación como a la infraestructura subyacente.

- **Operación y Monitoreo**: En estas etapas, se utilizan métricas de infraestructura y aplicación para identificar actividades inusuales que puedan indicar una violación de seguridad. Los registros y otros instrumentos se utilizan para identificar y comprender el impacto de cualquier incidente de seguridad.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_4/Imagenes/Flujo_Devsecops.png?raw=true" alt="logo" width="630" height="357"/></p>

##

# **Principios de automatización en DevSecOps**

Cuando se implementa de manera efectiva, la automatización acelera el ciclo de vida del desarrollo de software (SDLC), permitiendo que las personas utilicen la tecnología para realizar tareas manuales repetitivas y entregar software de mayor calidad en menos tiempo. En el contexto de DevSecOps, la automatización va un paso más allá al integrar pruebas de seguridad en todas las etapas del SDLC, mejorando así la velocidad, la coherencia y la mitigación de riesgos potenciales.

Si DevSecOps establece que la seguridad es responsabilidad de todos, la automatización en DevSecOps se esfuerza por proporcionar a todos las herramientas necesarias para garantizar la seguridad del código y las configuraciones sin requerir que se conviertan en expertos en seguridad.

Al considerar dónde aplicar la automatización en su propio proceso de DevSecOps, es importante tener en cuenta los siguientes principios:

## Automatización estratégica
   - Al igual que en una práctica de DevOps, la automatización debe aplicarse estratégicamente para facilitar la velocidad y la calidad en todo el SDLC. Es crucial ser estratégico sobre cómo y cuándo se aplica la automatización en un entorno DevSecOps.

## Fomentar la creatividad humana
   - Automatice las tareas repetitivas siempre que sea posible, permitiendo así que las personas dediquen su tiempo y energía mental a trabajos más complejos. Esto garantiza que los controles se apliquen de manera consistente y a escala.

## Sistematizar la revisión de código
   - Utilice herramientas como las pruebas de seguridad de aplicaciones estáticas para automatizar partes de la revisión de su código. Sin embargo, es fundamental que la revisión de código dirigida por humanos siga siendo una práctica importante. Asegúrese de que su lista de verificación de revisión de código aborde los problemas de seguridad específicos de su tecnología y cree un ciclo de retroalimentación para incorporar nueva información, como incidentes pasados, en esta lista de verificación. Esto garantiza una mejora continua en la seguridad del código.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_4/Imagenes/Dev.png" alt="logo" width="630" height="357"/></p>

##

# <h1 align="center">CADENA DE HERRAMIENTAS EN <strong>DEVSECOPS</strong></h1>


El proceso de adopción de DevSecOps comienza con un cambio cultural que coloca la seguridad como una preocupación central para todos los involucrados en el ciclo de vida del desarrollo de software (SDLC). Esto implica la implementación de nuevos procesos y la creación de una cadena de herramientas DevSecOps que aplica pruebas de seguridad automatizadas y herramientas de seguridad a lo largo del SDLC.

Las herramientas utilizadas en DevSecOps a menudo se basan en las herramientas comunes de DevOps, como la integración continua (CI), entrega continua (CD), pruebas automatizadas, gestión de configuración y monitoreo. El objetivo principal es integrar herramientas centradas en la seguridad en cada etapa del ciclo de vida del producto.

Entre los componentes clave de la cadena de herramientas DevSecOps se encuentran:

## Pruebas de seguridad automatizadas en confirmaciones y fusiones
   - Un objetivo fundamental en cualquier práctica de DevSecOps es detectar problemas en el código antes de que puedan causar daño. Esto se logra mediante la activación de análisis automáticos a través de gatillos de confirmación previa y fusiones. Algunos de los escaneos implementados podrían incluir:
     - **Escaneo de código:** También conocido como prueba de seguridad de aplicaciones estáticas, evalúa el código en reposo para descubrir posibles vulnerabilidades sin necesidad de ejecutarlo.
     - **Escaneo de vulnerabilidades:** Las herramientas dinámicas de escaneo de aplicaciones crean e implementan la aplicación en un entorno aislado para observar cómo responde a las amenazas de seguridad conocidas.
     - **Escaneo de secretos:** Incluso con políticas de seguridad estrictas, los secretos ocasionalmente pueden filtrarse en las confirmaciones. Las herramientas de escaneo de secretos detectan estos casos antes de que se realice la confirmación. A menudo se combinan con herramientas de análisis de composición de software (SCA) para detectar vulnerabilidades en las dependencias de código abierto dentro de un repositorio específico.
    


# <h1 align="center"><strong>DEVSECOPS EN LA ACTUALIDAD</strong></h1>

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_4/Imagenes/DecSecOpshoyendia.jpeg" alt="logo" width="630" height="357"/></p>

La implementación de DevSecOps representa un enfoque integral para la integración de la seguridad en el desarrollo y despliegue de software, donde "Dev" se refiere a desarrollo, "Sec" a seguridad, y "Ops" a operaciones. Esta metodología surge como una evolución natural de DevOps, reconociendo la importancia crítica de la seguridad en el ciclo de vida del desarrollo de software y la necesidad de abordarla de manera proactiva desde las primeras etapas del proceso de desarrollo hasta la operación en producción.

La filosofía de DevSecOps promueve la colaboración estrecha entre equipos de desarrollo, operaciones y seguridad, con el objetivo de integrar prácticas de seguridad de manera continua y automatizada en todo el proceso de desarrollo de software. Esto implica no solo la implementación de controles de seguridad técnicos, sino también la promoción de una cultura de seguridad en toda la organización, donde la responsabilidad de la seguridad recae en todos los miembros del equipo.


<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_4/Imagenes/AppsDevOps.jpg" alt="logo" width="630" height="357"/></p>


A continuacion, veremos algunos puntos clave donde se puede observar la implementación de DevSecOps en la actualidad


### 1. **Integración de Seguridad desde el Inicio del Ciclo de Vida del Desarrollo (SDLC)**
   - La integración de la seguridad desde el principio del SDLC implica considerar aspectos de seguridad durante la fase de diseño y planificación del software.
   - Se pueden realizar evaluaciones de riesgos y análisis de amenazas para identificar posibles vulnerabilidades y definir los requisitos de seguridad del sistema.
   - Los equipos de desarrollo pueden utilizar prácticas de diseño seguro, como la minimización de privilegios y la separación de responsabilidades, para mitigar          riesgos desde el principio.

### 2. **Automatización de Pruebas de Seguridad**
   - La automatización de pruebas de seguridad permite identificar y corregir vulnerabilidades de manera rápida y eficiente.
   - Las herramientas de seguridad automatizadas, como las pruebas de penetración automatizadas y los escáneres de vulnerabilidades, se integran en los pipelines de         desarrollo para realizar pruebas continuas del código y las aplicaciones.
   - Esto ayuda a reducir el tiempo de detección y corrección de vulnerabilidades, mejorando la seguridad del software y reduciendo el riesgo de exposición a amenazas.

### 3. **Gestión de Identidades y Accesos (IAM) Automatizada**
   - La gestión automatizada de identidades y accesos garantiza que solo las personas autorizadas tengan acceso a los recursos y datos sensibles.
   - Se implementan soluciones de IAM que ofrecen funcionalidades como autenticación multifactor, gestión de privilegios y políticas de acceso basadas en roles.
   - La automatización de IAM ayuda a reducir errores humanos y asegura el cumplimiento de políticas de seguridad, al tiempo que facilita la administración de               identidades en entornos dinámicos y escalables.

### 4. **Infraestructura como Código (IaC) Segura**
   - La infraestructura como código (IaC) permite definir y gestionar la infraestructura de manera programática y automatizada.
   - Se aplican prácticas de seguridad en el código de infraestructura para garantizar que los recursos se provisionen de manera segura y cumplan con los requisitos de      seguridad.
   - Las herramientas de IaC ofrecen funcionalidades para auditar la configuración de seguridad y aplicar políticas de cumplimiento, asegurando que la infraestructura       se mantenga segura y consistente en todo momento.

### 5. **Monitorización y Análisis de Seguridad Continuo**
   - La monitorización continua de la seguridad permite detectar y responder rápidamente a eventos de seguridad en tiempo real.
   - Se implementan soluciones de monitorización de seguridad que recopilan y analizan datos de logs, métricas de seguridad y eventos de red para identificar posibles       amenazas y anomalías.
   - La integración de herramientas de análisis de seguridad permite automatizar la detección de patrones de ataque y la generación de alertas para una respuesta            proactiva a incidentes de seguridad.

### 6. **Cultura de Seguridad y Colaboración**
   - Una cultura de seguridad promueve la concienciación y responsabilidad compartida en toda la organización.
   - Se fomenta la colaboración entre equipos de desarrollo, operaciones y seguridad para compartir conocimientos, buenas prácticas y recursos en materia de seguridad.
   - La capacitación y sensibilización en seguridad ayuda a todos los miembros del equipo a entender los riesgos de seguridad y su papel en la protección de los             activos de la organización.

### 7. **Evaluación y Gestión de Riesgos Continua**
   - La evaluación continua de riesgos permite identificar y mitigar posibles vulnerabilidades y amenazas de seguridad.
   - Se realizan evaluaciones periódicas de riesgos de seguridad para evaluar la efectividad de los controles de seguridad y adaptar las estrategias de mitigación           según sea necesario.
   - La gestión proactiva de riesgos ayuda a reducir la exposición a amenazas y garantiza la continuidad del negocio en caso de incidentes de seguridad.}

### 8. **Compliance y Normativas de Seguridad**
   - La garantía de cumplimiento con normativas y estándares de seguridad es fundamental para proteger los datos y la reputación de la organización.
   - Se implementan controles de seguridad que aseguran el cumplimiento de regulaciones como GDPR, HIPAA, PCI-DSS, entre otras.
   - La automatización de controles de cumplimiento ayuda a simplificar el proceso de auditoría y garantizar que se cumplan los requisitos de seguridad en todo momento.

### 9. **Formación y Concienciación en Seguridad**
   - La formación y concienciación en seguridad son clave para promover una cultura de seguridad en toda la organización.
   - Se ofrecen programas de formación en seguridad que cubren temas como prácticas seguras de codificación, gestión de riesgos y cumplimiento normativo.
   - La concienciación en seguridad ayuda a sensibilizar a los empleados sobre los riesgos de seguridad y les proporciona las habilidades necesarias para proteger los       activos y datos de la organización.

### 10. **Integración de Herramientas de Seguridad en Pipelines de Desarrollo**
   - La integración de herramientas de seguridad en los pipelines de desarrollo garantiza la detección temprana y la corrección automatizada de problemas de seguridad.
   - Se utilizan herramientas de análisis estático y dinámico de código, escáneres de vulnerabilidades, y pruebas de penetración automatizadas para evaluar la               seguridad del software durante todo el ciclo de vida de desarrollo.
   - La integración de herramientas de seguridad en los pipelines de CI/CD facilita la entrega continua de software seguro y minimiza el riesgo de exposición a              vulnerabilidades de seguridad.
    
   # <h1 align="center"><strong>CONCLUSIÓN</strong></h1>


   - DevSecOps representa un enfoque integral y proactivo para abordar la seguridad en el desarrollo de software, desde las primeras etapas del ciclo de vida        hasta la operación en producción. Esta metodología reconoce la importancia crítica de la seguridad en un entorno de desarrollo ágil y colaborativo, donde       la velocidad y la calidad son fundamentales.

   - A lo largo de su evolución, DevSecOps ha pasado de ser un concepto emergente a convertirse en una práctica estándar en muchas organizaciones,        especialmente aquellas con requisitos regulatorios estrictos. La integración de la seguridad en cada fase del proceso de desarrollo, junto con la automatización de pruebas y controles, ha demostrado ser efectiva para identificar y mitigar vulnerabilidades de manera temprana y continua.

   - Además, el cambio cultural hacia una mentalidad de "seguridad como responsabilidad de todos" ha promovido una mayor colaboración entre equipos de desarrollo, operaciones y seguridad. Esta colaboración facilita la identificación y resolución de problemas de seguridad de manera más eficiente, al tiempo que fomenta una cultura de concienciación y responsabilidad en toda la organización.

   - En el futuro, se espera que DevSecOps siga evolucionando para abordar los desafíos emergentes, como la seguridad en entornos nativos de la nube y la integración de inteligencia artificial y aprendizaje automático en los flujos de trabajo de seguridad. A medida que las organizaciones continúen adoptando DevSecOps y refinando sus prácticas, será fundamental seguir promoviendo una cultura de seguridad sólida y adaptarse a las cambiantes amenazas y regulaciones en el panorama de seguridad cibernética.
