# <h1 align="center"> PROYECTO RAIS+ 4.0 </h1>

Integrantes:
 - Juan Peña - ID: 635668
 - Oscar Yela - ID: 433321
 - Maycol Paez - ID: 751391
 - Brigitte Rodriguez - ID: 415800
 - Alvaro Adolfo Cote Sanchez - ID: 730352
 - Sebastián ....
   
## Intoducción
En el presente trabajo se pretende explicar y conocer acerca de RAIS+ la cual es una aplicacion desarrollada por la OIEA(Organismo Internacional de Energía Atómica), donde se busca llevar registro de fuentes de radiacion y controlar niveles de radiacion teniendo en cuenta las normativas internacionales establecidas por la OIEA así como con el Código de Conducta sobre la Seguridad Tecnológica y Física de las Fuentes Radiactivas del OIEA y las Directrices sobre la Importación y Exportación de Fuentes Radiactivas y Orientaciones sobre la Gestión de las Fuentes Radiactivas en Desuso que lo acompañan.
Esta aplicación promueve un enfoque coherente y común para el control de las fuentes de radiación a escala nacional e internacional y facilita el intercambio de información entre órganos reguladores, en particular relacionada con la importación y exportación de fuentes radiactivas personalizandose en funcion del Estado miembro. 

## Misión
Desarrollar y desplegar una aplicación robusta y segura basada en RAIS+ y las directrices del OIEA, que facilite una gestión eficiente y estandarizada de las actividades y materiales radiactivos a nivel globalonales 


## Visión
La aplicación propuesta se desarrollará utilizando el Sistema Integrado de Información para la Regulación (RAIS+) en combinación con las directrices y estándares del Organismo Internacional de Energía Atómica (OIEA). Esta plataforma innovadora tiene como objetivo principal optimizar la gestión y el control de materiales y actividades radiactivas, garantizando un alto nivel de seguridad y cumplimiento regulatorio a nivel mundial.


## Objetivo
Contenerizar y gestionar el despliegue de la aplicación mediante docker en un servidor Windows.

## Dependecias nesesarias

 - dotnet-hosting-6.0.20 [Descargar](https://download.visualstudio.microsoft.com/download/pr/d7124775-38c9-460f-a269-7bc131b3dfbf/7f60bcc6030e408cf11a935d5451ffa4/dotnet-hosting-6.0.20-win.exe)
 - dotnet-hosting-7.0.9 [Descargar](https://download.visualstudio.microsoft.com/download/pr/a1918362-b09b-4593-a4b1-e5f0d9bd68b0/2470e7376871b57867655c057e878800/dotnet-hosting-7.0.9-win.exe) 
 - iisexpress [Descargar AMD64](https://download.microsoft.com/download/C/E/8/CE8D18F5-D4C0-45B5-B531-ADECD637A1AA/iisexpress_amd64_es-ES.msi)
 - SQL2019-SSEI-Expr [Descargar](https://download.microsoft.com/download/7/f/8/7f8a9c43-8c8a-4f7c-9f92-83c18d96b681/SQL2019-SSEI-Expr.exe)
 - windowsdesktop-runtime-6.0.30 [Descargar](https://download.visualstudio.microsoft.com/download/pr/b14af665-ca5f-40a5-b0a9-4c7ca9ff1072/dfc3ab88e4dfbcece4fb7ee5246c406b/windowsdesktop-runtime-6.0.30-win-x64.exe)

## Script
```
services:
 windows:
  image: dockurr/windows
  container_name: windows
  enviroment:
   VERSION: "2022"
   LANGUAGE: "Spanish"
   RAM_SIZE: "2G"
   CPU_CORES: "4"
   DISK_SIZE: "40G"
  devices:
   - /dev/kvm
  cap_add:
   - NET_ADMIN
  ports:
   - 8006:8006
   - 3389:3389/tcp
   - 3389:3389/udp
  stop_grace_period: 2m
  volumes:
   - C:\Users\...\Recursos:\oem
   - C:\Users\...\Recursos:\shared
 ```
