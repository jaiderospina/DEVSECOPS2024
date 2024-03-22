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
    


# <h1 align="center"><strong>DEVSECOPS HOY EN DIA</strong></h1>
