<div align="center">

# UT4-A1 Administración de servidores de aplicaciones ( PostgreSQL )

</div>

<div align="right">

#### ***Alejandro Hernández Domínguez***

#### ***2º de Ciclo Superior de Desarrollo de Aplicaciones Web***

</div>

### ÍNDICE

<div align="justify">

+ [Introducción.](#id1)
+ [Objetivos.](#id2)
+ [Material empleado.](#id3)
+ [Aplicación web.](#id4)
+ [Desarrollo.](#id5)
+ [Conclusiones.](#id6)

### Objetivo

El objetivo de esta tarea es preparar la infraestructura de la capa de datos para el resto de la unidad. En este sentido se va a trabajar con PostgreSQL.

### PostgreSQL

1. Instale PostgreSQL tanto en la máquina local (desarrollo) como en la máquina remota (producción) utilizando credenciales distintas.

```
sudo apt update
```

```
sudo apt install -y apt-transport-https
```

```
curl -fsSL https://www.postgresql.org/media/keys/ACCC4CF8.asc \
| sudo gpg --dearmor -o /etc/apt/trusted.gpg.d/postgresql.gpg
```

```
echo "deb http://apt.postgresql.org/pub/repos/apt/ $(lsb_release -cs)-pgdg main" \
| sudo tee /etc/apt/sources.list.d/postgresql.list > /dev/null
```

```
sudo apt update
```

```
apt-cache search --names-only 'postgresql-[0-9]+$' | sort
```
```
sudo apt install -y postgresql-15
```
```
psql --version
```

```
psql (PostgreSQL) 16.0 (Debian 16.0-1.pgdg120+1)
```

2. Cargue los datos de prueba para la aplicación TravelRoad tanto en desarrollo como en producción.

```
sudo -u postgres psql
psql (15.0 (Debian 15.0-1.pgdg110+1))
Digite «help» para obtener ayuda.

postgres=# CREATE USER travelroad_user WITH PASSWORD 'dpl0000';
CREATE ROLE
postgres=# CREATE DATABASE travelroad WITH OWNER travelroad_user;
CREATE DATABASE
postgres=# \q
```

```
psql -h localhost -U travelroad_user travelroad
Contraseña para usuario travelroad_user:
psql (15.0 (Debian 15.0-1.pgdg110+1))
Conexión SSL (protocolo: TLSv1.3, cifrado: TLS_AES_256_GCM_SHA384, compresión: desactivado)
Digite «help» para obtener ayuda.

travelroad=>
```

```
travelroad=> CREATE TABLE places(
id SERIAL PRIMARY KEY,
name VARCHAR(255),
visited BOOLEAN);
CREATE TABLE
```

```
travelroad=> SELECT * FROM places;
 id | name | visited
----+------+---------
(0 filas)
```

```
curl -o /tmp/places.csv https://raw.githubusercontent.com/sdelquin/dpl/main/ut4/files/places.csv
```

```
psql -h localhost -U travelroad_user -d travelroad \
-c "\copy places(name, visited) FROM '/tmp/places.csv' DELIMITER ','"
```

```
psql -h localhost -U travelroad_user travelroad
```

```
travelroad=> SELECT * FROM places;
 id |    name    | visited
----+------------+---------
  1 | Tokio      | f
  2 | Budapest   | t
  3 | Nairobi    | f
  4 | Berlín     | t
  5 | Lisboa     | t
  6 | Denver     | f
  7 | Moscú      | f
  8 | Oslo       | f
  9 | Río        | t
 10 | Cincinnati | f
 11 | Helsinki   | f
(11 filas)
```

3. Instale pgAdmin tanto en desarrollo como en producción. Para desarrollo use el dominio pgadmin.local y para producción use el dominio pgadmin.nombrealumno.es. Utilice credenciales distintas y añada certificado de seguridad en la máquina de producción.

4. Acceda a pgAdmin y conecte un nuevo servidor TravelRoad con las credenciales aportadas, tanto en desarrollo como en producción.

    💡 Incluya en el informe la URL donde está desplegado pgAdmin.

### Aplicación PHP
#### Entorno de desarrollo

1. Instale sudo apt install -y php8.2-pgsql para tener disponible la función pg_connect.

2. Desarrolle en local una aplicación PHP que se encargue de mostrar los datos de TravelRoad tal y como se ha visto en clase, atacando a la base de datos local.

3. Utilice control de versiones para alojar la aplicación dentro del repositorio: dpl/ut4/a1

4. Use el dominio php.travelroad.local para montar la aplicación en el entorno de desarrollo.

5. Utilice include en su código para incluir el fichero config.php que contendrá los datos de acceso a la base de datos y que no deberá incluirse en el control de versiones.

    💡 Incluya en el informe el enlace al código fuente de la aplicación.

#### Entorno de producción

1. Clone el repositorio en la máquina de producción.

2. Incluya el fichero config.php con las credenciales de acceso a la base de datos de producción.

3. Configure un virtual host en producción para servir la aplicación PHP en el dominio php.travelroad.nombrealumno.es.

4. Incluya certificado de seguridad y redirección www.

    💡 Incluya en el informe la URL donde está desplegada la aplicación.

#### Despliegue

1. Cree un shell-script deploy.sh (con permisos de ejecución) en la carpeta de trabajo del repositorio, que se conecte por ssh a la máquina de producción y ejecute un git pull para actualizar los cambios.

2. Pruebe este script tras haber realizado algún cambio en la aplicación.