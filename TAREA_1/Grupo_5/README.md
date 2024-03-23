![imagen proceso](https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/TITULO.jpg)

<h1 align="center">¿Que es DevSecOps?</h1>

Es un concepto que como tal no esta bien definido pero se sabe que conecta tres disciplinas: desarrollo, seguridad y operaciones.

Que a su vez intenta realizar una integración de la seguridad durante todo el ciclo de vida de implementación y desarrollo de software.

Tambien tiene tanto que ver con la cultura y la responsabilidad compartida como con cualquier tecnología o técnica específica.

**Índice**
1. [Historia](#historia)
2. [¿Cuáles son los componentes de DevSecOps?](#componentes)
3. [Beneficios de DevSecOps](#beneficios)
4. [Implementación de DevSecOps](#implementacion)
5. [Diferencias entre DevSecOps y DevOps](#diferencias)
6. [Evaluación y Métricas de DevSecOps](#metricas)
7. [Desafíos y Obstáculos en la Implementación de DevSecOps](#desafios)
8. [Buenas Prácticas en DevSecOps](#practicas)
9. [Monitoreo de seguridad](#monitoreo)
10. [Referencias](#referencias)

## **Historia** <a id="historia"></a>

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/HISTORIA.png" alt="logo" width="900"/></p>

DevSecOps surgió como una respuesta a la necesidad de abordar las deficiencias en la seguridad de las aplicaciones y sistemas dentro del marco de la metodología DevOps. DevOps se centraba principalmente en la colaboración entre equipos de desarrollo y operaciones para acelerar la entrega de software, pero no abordaba de manera integral las preocupaciones de seguridad.

La creciente frecuencia y sofisticación de las amenazas cibernéticas, así como los numerosos incidentes de seguridad relacionados con aplicaciones y sistemas, llevaron a la comunidad de desarrollo de software a reconocer la importancia de integrar la seguridad desde el inicio del proceso de desarrollo. Esto condujo al nacimiento de DevSecOps como una extensión natural de DevOps, que prioriza la seguridad en todas las etapas del ciclo de vida del desarrollo de software.

La aparición de DevSecOps puede ser vista como una evolución lógica en el campo de la seguridad de la información y el desarrollo de software, donde las organizaciones comenzaron a comprender que la seguridad no puede ser una ocurrencia tardía o una barrera para la entrega rápida de software, sino que debe ser una consideración fundamental desde el principio.

Si bien no hay un punto específico en el tiempo en el que se pueda decir que DevSecOps comenzó oficialmente, su desarrollo se puede rastrear hasta mediados de la década de 2010, cuando las organizaciones comenzaron a adoptar prácticas más proactivas de seguridad en el contexto de DevOps. Desde entonces, ha ganado popularidad y ha sido adoptado por una amplia gama de organizaciones que buscan mejorar la seguridad de sus aplicaciones y sistemas.

## **Diferencias entre DevSecOps y DevOps** <a id="diferencias"></a>

DevOps no solo se trata de los equipos de desarrollo y operaciones. Si desea aprovechar al máximo la agilidad y la capacidad de respuesta del enfoque de DevOps, la seguridad de la TI debe ser una parte integral de todo el ciclo de vida de sus aplicaciones.

¿A qué se debe? En el pasado, solo un equipo específico se encargaba de la seguridad en la etapa final del desarrollo. Esto no era un problema cuando esos ciclos duraban meses o incluso años, pero esas épocas se terminaron. Un enfoque de DevOps efectivo garantiza ciclos de desarrollo frecuentes y rápidos (que suelen durar semanas o días); sin embargo, las prácticas de seguridad desactualizadas pueden revertir hasta las iniciativas más eficientes.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/IMGDEVOPS.png" alt="logo" width="600"/></p>

DevSecOps implica pensar desde el principio en la seguridad de las aplicaciones y de la infraestructura. También supone automatizar algunas puertas de seguridad para evitar que se ralenticen los flujos de trabajo de DevOps. A fin de cumplir con estos objetivos, es necesario seleccionar las herramientas adecuadas para integrar la seguridad de manera permanente, como acordar el uso de un entorno de desarrollo integrado (IDE) con funciones que permitan proteger los sistemas. Sin embargo, la seguridad efectiva de DevOps requiere más que nuevas herramientas, ya que se construye sobre los cambios culturales de este enfoque para integrar el trabajo de los equipos de seguridad lo antes posible.
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/IMGDEVSECOPS.png" alt="logo" width="900"/></p>

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/RepresentacionDevSecOps.png" alt="logo" width="900"/></p>

## **¿Cuáles son los componentes de DevSecOps?** <a id="componentes"></a>

* **Análisis de código:** El análisis del código se refiere al proceso de investigar el código fuente de una aplicación en busca de vulnerabilidades y garantizar que se ajusta a las prácticas recomendadas de seguridad.

* **Administración de cambios:** Los equipos de software utilizan herramientas de administración de cambios para realizar un seguimiento de los cambios relacionados con el software o los requisitos, así como para administrarlos e informar sobre estos. De este modo, se evitan vulnerabilidades de seguridad involuntarias ocasionadas por los cambios en el software.

* **Administración del cumplimiento:** Los equipos de software se encargan de garantizar que el software cumpla con los requisitos regulatorios. Por ejemplo, los desarrolladores pueden utilizar AWS CloudHSM para demostrar el cumplimiento de las normativas de seguridad, privacidad y antimanipulación,como HIPAA, FedRAMP y PCI.

* **Modelado de amenazas:** Los equipos de DevSecOps investigan los problemas de seguridad que puedan surgir antes y después de desplegar la aplicación. Corrigen cualquier problema conocido y lanzan una versión actualizada de la aplicación.

* **Formación en seguridad:** La formación en materia de seguridad implica capacitar a los desarrolladores de software y a los equipos de operaciones en cuanto a las directrices de seguridad más recientes. De este modo, los equipos de desarrollo y de operaciones pueden tomar decisiones de seguridad independientes a la hora de crear y desplegar la aplicación.

## **Beneficios de DevSecOps** <a id="beneficios"></a>

* **Mayor seguridad:** al integrar la seguridad en el proceso DevOps, DevSecOps puede ayudar a evitar que se introduzcan vulnerabilidades de seguridad en los sistemas de producción. 

* **Riesgo reducido:** Reduzca el riesgo de violaciones de seguridad y datos.  

* **Cumplimiento mejorado:** Automatizar procesos que ayudarán a hacer cumplir las normas de seguridad. . 

* **Eficiencia mejorada:** mejore la eficiencia del proceso de desarrollo de software automatizando controles y escaneos de seguridad. 

* **Cumplimiento mejorado:** Ayude a las organizaciones a cumplir con las normas de seguridad. 

* **Mayor colaboración:** mejore la colaboración entre los equipos de desarrollo, operaciones y seguridad , a través de un sentido de responsabilidad compartido. 

* **Tiempo de comercialización más rápido:** acelere el proceso de desarrollo de software automatizando controles y análisis de seguridad. 

* **Calidad mejorada:** mejore la calidad del software detectando vulnerabilidades de seguridad en las primeras etapas del proceso de desarrollo. 

* **Gestión de riesgos mejorada:** ayude a las organizaciones a identificar y abordar los riesgos de seguridad de manera más efectiva. 

* **Mayor satisfacción del cliente:** aumente la satisfacción del cliente ofreciendo software seguro y confiable. 

* **Costos reducidos:** Reduzca los costos asociados con la seguridad y las violaciones de datos. 

* **Visibilidad mejorada:** ayude a las organizaciones a obtener visibilidad de su postura de seguridad para identificar y abordar rápidamente los riesgos de seguridad. 

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/BENEFICIOS.png" alt="logo" width="900"/></p>

## **Implementación de DevSecOps** <a id="implementacion"></a>

- **Pruebas de seguridad automatizadas:** Los análisis de seguridad periódicos, como evaluaciones de vulnerabilidades, pruebas de penetración y revisiones de códigos de seguridad, deberían integrarse perfectamente en el proceso de desarrollo. 

- **Monitoreo y retroalimentación continuos:** El monitoreo en tiempo real ayuda a identificar y mitigar las amenazas a la seguridad en producción, lo que permite una respuesta y mitigación inmediatas.

- **Seguridad de infraestructura como código (IaC):** La implementación de prácticas de seguridad dentro del código de infraestructura ayuda a mantener configuraciones de seguridad consistentes y reduce el riesgo de configuraciones erróneas que podrían provocar infracciones.

- **Colaboración y Formación:** Se nutre de la colaboración entre los equipos de desarrollo, seguridad y operaciones. Fomentar una cultura de comunicación abierta y de intercambio de conocimientos.

- **Infraestructura inmutable:** Considere la posibilidad de adoptar prácticas de infraestructura inmutables en las que los componentes implementados se traten como entidades desechables. Cuando se detectan, las vulnerabilidades se pueden abordar reemplazando todo el componente con una versión actualizada.

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/IMPLEMENTACION.png" alt="logo" width="900"/></p>


////////////////////////////////////////////////////////////////////////////////////////////

# Evaluación y Métricas de DevSecOps <a id="metricas"></a>

<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/metricas.webp" alt="logo" width="900"/>
[Dharma Consulting. Principio de Calidad archivos - Página 3 de 6](https://dharmacon.net/tag/principio-de-calidad/page/3/)  
*Fuente: Dharma Consulting. (s. f.). Principio de Calidad archivos - Página 3 de 6.*
</p>

Las métricas en DevOps son esenciales para evaluar el rendimiento y el éxito de la metodología. Como menciona Tom Hall, defensor y profesional de DevOps, "el viejo dicho 'Si no lo puedes medir, no lo podrás mejorar' se aplica tanto al modelo DevOps como a cualquier otro" (Hall, s.f.). Para cumplir con la promesa de DevOps de lanzar productos de mayor calidad más rápido, los equipos deben recoger, analizar y medir varias métricas (Hall, s.f.).

Según Oracle (2023), "las métricas permiten supervisar de forma activa y pasiva sus recursos en la nube". Esto resalta la importancia de las métricas en el monitoreo del rendimiento de los recursos en la nube, proporcionando una visión integral del estado del sistema.

Las métricas en DevOps ayudan a realizar un seguimiento de aspectos clave como "el tiempo empleado para cada ejecución de compilación" y "el número de veces que han fallado estas ejecuciones" (Oracle, 2023). Estas métricas ofrecen una perspectiva detallada del proceso de desarrollo y despliegue, permitiendo a los equipos identificar áreas de mejora y tomar medidas correctivas.

Además, Oracle (2023) destaca que las métricas DevOps están disponibles automáticamente para todas las instancias de DevOps creadas. Esto enfatiza la importancia de la supervisión continua en el proceso de desarrollo de software, ya que las métricas son esenciales para evaluar el rendimiento y la eficacia de las prácticas de seguridad en DevSecOps.

Según Oracle (2023), las métricas en DevOps ayudan a realizar un seguimiento de aspectos clave como:

- Tiempo empleado para cada ejecución de compilación.
- Número de veces que las compilaciones se han realizado correctamente y han fallado.
- Tiempo empleado para cada despliegue.
- Número de veces que ha fallado un despliegue.
- Número de repositorios de código.
- Número de transferencias y recuperaciones realizadas en repositorios de código.
- Tamaño total del repositorio de código.

## Desafíos y Obstáculos en la Implementación de DevSecOps <a id="desafios"></a>

<p align="center">
<img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/retos_DevOps.jpg" alt="logo" width="900"/>
[Cómo responden las organizaciones españolas a los retos de DevOps.](https://haycanal.com/noticias/13844/como-responden-las-organizaciones-espanolas-a-los-retos-de-devops)  
*Fuente: Cómo responden las organizaciones españolas a los retos de DevOps. (2019, 17 diciembre).*
</p>


La adopción de la metodología de infraestructura como código (IaC) ha acelerado el desarrollo, pero también ha introducido desafíos significativos en términos de seguridad. Según Oracle (Año), "Un aumento de los procesos y la velocidad puede dar lugar a lagunas de seguridad". Esto puede resultar en la introducción de vulnerabilidades en el proceso de desarrollo y despliegue.

Integrar controles de seguridad automatizados en el pipeline de CI/CD es crucial para detectar y mitigar vulnerabilidades de manera oportuna. Oracle (Año) sugiere que durante el proceso de definición de DevSecOps, es necesario "analizar los componentes del pipeline de integración y entrega continuas en el proceso de despliegue para reforzar las defensas de seguridad".

Proteger los repositorios de código es otro desafío importante en DevSecOps. Según Oracle (Año), es fundamental "mejorar el código fuente y proteger los repositorios de código" para garantizar la seguridad del proceso de desarrollo. Esto implica implementar medidas como control de acceso, autenticación multifactor y monitorización continua.

Además, obtener visibilidad en todo el ciclo de vida de desarrollo y mantener un historial de confirmaciones de origen es crucial en DevSecOps. Según Oracle (Año), esto proporciona la capacidad de rastrear cambios y actividades, facilitando la detección y mitigación de posibles amenazas de seguridad.

Oracle Cloud Infrastructure (OCI) ofrece el servicio OCI DevOps, una plataforma completa de CI/CD que simplifica y automatiza el ciclo de vida de desarrollo de software. Este servicio aborda estos desafíos y garantiza un desarrollo y despliegue seguro de aplicaciones en entornos de infraestructura como código.

## Buenas Prácticas en DevSecOps <a id="practicas"></a>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/Buenas_practicas.png" alt="logo" width="900"/>
[La hoja de ruta de DevOps en materia de seguridad - I CLOUD SEVEN.](https://icloudseven.com/la-hoja-de-ruta-de-devops-en-materia-de-seguridad/)  
*Fuente: Saenz, R. (2021, 13 julio). La hoja de ruta de DevOps en materia de seguridad - I CLOUD SEVEN.*
</p>

La implementación exitosa de DevSecOps se fundamenta en la adopción de prácticas sólidas que promuevan la seguridad y la eficiencia en el desarrollo y operación del software. Según Oracle, existen diversas recomendaciones clave para fortalecer la seguridad en este contexto.

Una de las principales recomendaciones de Oracle es la aplicación de políticas y gobernanza adecuadas. Según el documento, "Un proceso de DevSecOps correcto cumple e implanta una gobernanza sólida centrada en las funciones de seguridad" (Oracle, 2024). Esto implica definir roles, establecer políticas de seguridad claras y proporcionar formación continua sobre las últimas técnicas de seguridad.

La automatización de procesos y herramientas de seguridad es otro aspecto esencial destacado por Oracle. La cita textual resalta que "El uso de herramientas más eficientes y la automatización da como resultado procesos de seguridad de DevOps más rápidos y aplicaciones más resistentes" (Oracle, 2024). Esto subraya la importancia de implementar herramientas automatizadas para reducir los riesgos de errores humanos e incidentes de seguridad.

La detección completa también se destaca como una buena práctica en DevSecOps. Oracle enfatiza la importancia de validar, supervisar e incluir continuamente todos los dispositivos, herramientas y cuentas de acuerdo con la política de seguridad establecida. Como afirma el documento, este proceso permite alinear los activos de Oracle Cloud Infrastructure (OCI) con un modelo de seguridad de confianza cero.

Gestionar vulnerabilidades de manera proactiva es otro aspecto crucial en DevSecOps. Oracle recomienda considerar, catalogar, validar y corregir todas las vulnerabilidades antes de que la aplicación pase a producción. La integración de la guía OWASP DevSecOps con las pruebas de seguridad específicas de DevSecOps es una práctica recomendada para mitigar eficazmente las vulnerabilidades.

Proteger el acceso con la gestión de secretos y controlar, supervisar y auditar el acceso con privilegios son prácticas esenciales para garantizar la seguridad en DevSecOps. Oracle ofrece soluciones como Vault para la gestión segura de secretos y servicios como IAM, Logging y Monitoring para un control efectivo del acceso.


## Monitoreo de seguridad <a id="monitoreo"></a>
<p align="center"><img src="https://github.com/jaiderospina/DEVSECOPS2024/blob/main/TAREA_1/Grupo_5/Imagenes/seguridad.png" alt="logo" width="900"/>
[La mentalidad DevSecOps: de la metodología lineal al "shifting left](https://www.claranet.com/es/blog/la-mentalidad-devsecops)  
*Fuente: La mentalidad DevSecOps: de la metodología lineal al "shifting left y. (2020, 10 noviembre). Claranet.*
</p>
En el contexto de DevOps, donde la rapidez en el desarrollo y despliegue de software es fundamental, la supervisión de seguridad se convierte en un aspecto crucial para garantizar la integridad y la protección de los sistemas. Según Krishna Sai, responsable de ingeniería de soluciones de TI, "con DevOps, la expectativa es desarrollar más rápido, realizar pruebas periódicas y publicar con mayor frecuencia, al mismo tiempo que se mejora la calidad y se reducen los costes" (Atlassian, s.f). En este sentido, las herramientas de supervisión de DevOps proporcionan la automatización y la visibilidad necesarias durante todo el ciclo de vida del desarrollo, desde la planificación hasta las operaciones.

La supervisión de seguridad en DevOps implica monitorizar todas las etapas del proceso de desarrollo, desde la planificación y el desarrollo hasta las pruebas, la implementación y las operaciones. Proporciona una visión completa y en tiempo real del estado de las aplicaciones, los servicios y la infraestructura en el entorno de producción (Atlassian, s.f). Esta visibilidad continua y exhaustiva es fundamental para detectar y responder rápidamente a cualquier incidente de seguridad que pueda surgir durante el ciclo de vida del software.

Una de las principales ventajas de la supervisión de seguridad en DevOps es su capacidad para optimizar la gestión de incidentes y la respuesta a estos. Según se destaca, "los equipos pueden responder a cualquier problema en la experiencia del cliente de forma rápida y automática" (Atlassian, s.f). Además, permite adoptar el enfoque "Shift Left", integrando la seguridad en etapas tempranas del desarrollo y reduciendo las interrupciones en los cambios de producción.

Es importante destacar que la supervisión de seguridad en DevOps no se limita únicamente a la detección y respuesta a incidentes, sino que también implica la colaboración automática entre diferentes equipos y funciones empresariales. Esto se logra mediante la integración de herramientas y la automatización de procesos, lo que facilita la coordinación y la comunicación eficientes entre los equipos de desarrollo, operaciones y seguridad.




## Referencias <a id="referencias">

- Atlassian. (s. f.). *4 métricas clave de DevOps* | Atlassian. [Enlace](https://www.atlassian.com/es/devops/frameworks/devops-metrics)

- Atlassian. (s. f.). *Elige herramientas para cada etapa del ciclo de vida de DevOps.* [Enlace](https://www.atlassian.com/es/devops/devops-tools)

- Atlassian. (s. f.). *Supervisión de DevOps* [Enlace](https://www.atlassian.com/es/devops/devops-tools/devops-monitoring)

- Desafíos y consideraciones de seguridad de DevOps. (2024). (C) Copyright 2024. Oracle. [Enlace](https://docs.oracle.com/es-ww/iaas/Content/cloud-adoption-framework/devsecops.htm)

- Métricas de DevOps. (2023). (C) Copyright 2023. Oracle. [Enlace](https://docs.oracle.com/es-ww/iaas/Content/devops/using/devops_metrics.htm)

- Cómo responden las organizaciones españolas a los retos de DevOps. (2019, 17 diciembre). [Enlace](https://haycanal.com/noticias/13844/como-responden-las-organizaciones-espanolas-a-los-retos-de-devops)
- Dharma Consulting. (s. f.). Principio de Calidad archivos - Página 3 de 6 - Dharma Consulting.[Enlace](https://dharmacon.net/tag/principio-de-calidad/page/3/)
- La mentalidad DevSecOps: de la metodología lineal al "shifting left y. (2020, 10 noviembre). Claranet. [Enlace](https://www.claranet.com/es/blog/la-mentalidad-devsecops)
- Saenz, R. (2021, 13 julio). La hoja de ruta de DevOps en materia de seguridad - I CLOUD SEVEN. [Enlace](https://icloudseven.com/la-hoja-de-ruta-de-devops-en-materia-de-seguridad/)



