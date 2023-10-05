
<div align="center">

# Documentación y sistema de control de versiones
***Alejandro Hernández Domínguez:***
***Curso:*** 2º de Ciclo Superior de Desarrollo de Aplicaciones Web.

</div>

<div align="justify">

### ÍNDICE

+ [Introducción.](#id1)
+ [Objetivos.](#id2)
+ [Material empleado.](#id3)
+ [Desarrollo.](#id4)
+ [Conclusiones.](#id5)


#### ***Introducción***. <a name="id1"></a>

1. Implantar una aplicación PHP que funcione como una calculadora usando Nginx + PHP-FPM.

2. Realizar el despliegue en la máquina local con la url http://localhost tanto para entorno nativo como para entorno dockerizado.

#### ***Objetivos***. <a name="id2"></a>

1. Utilizar una interfaz similar a la siguiente:

<img src="template.png">

2. Incluir esta imagen de la calculadora que se adjunta.
3. Incluir un fichero .css con unos estilos básicos.
4. La "calculadora nativa" debe tener como título h1 "Calculadora en entorno nativo" y la "calculadora dockerizada" debe tener como título h1 "Calculadora en entorno dockerizado".
5. Trabajar en una carpeta dentro del $HOME.

#### ***Material empleado***. <a name="id3"></a>

1. Se ha empleado el equipo del aula
2. Las máquinas virtuales configuradas para el despliegue. 
3. Despliegue nativo haciendo uso de servidor nginx.
4. Despliegue dokerizado, mediante docker compose.

#### ***Desarrollo***. <a name="id4"></a>

<h3>Calculadora en entorno nativo.</h3>

<img src="capt1_nginx.png">

<h3>Calculadora en entorno dockerizado.</h3>

<img src="capt1_docker.png">
<img src="capt2_docker.png">
<img src="capt3_docker.png">
<img src="capt4_docker.png">
<img src="capt5_docker.png">

#### ***Conclusiones***. <a name="id5"></a>

En términos generales la práctica ha servido para diferencias dos maneras de desplegar la misma aplicación, viendo las ventajas y desventajas entre un método y otro.

Partiendo de esto último, se considera que "dockerizando" la aplicación se facilita el despliegue y se considera un método de mayor versatilidad.