# Development Environment

Part of this project is to provide a pre-defined development environment for Visual Laravel in order to:

- Provide a common development environment, and reduce or eliminate environment issues
- Make it easy to set up the complex environment needed to develop VL

In other words, to allow developers to focus on developing Visual Laravel and NOT on creating and maintaining their development environment.

**Note:** This is for people contributing to the development of
Visual Lararvel itself,
and **not** for those using Visual Laravel to develop their own
Laravel applications.

This is achieved using Dev Containers and Docker.

- Docker Composer provides a multi-container environment that can be
  created easily and quickly from standardised pre-built images.

- Dev Containers are simply container definitions
  that are associated with the project
  (with definitions in a specific project sub-directory)
  and which are launched automatically when you open the project's root folder.

This functionality is already provided by Laravel Sail,
however experience suggests that the Laravel Sail build process
is lengthy and a home-grown solution is just as easy.
Because we expect VL eventually to cover the entire Laravel ecosystem,
our container definition is a superset of the Laravel Sail one.

Whilst our Dev Containers have been developed on VSCode
it is expected that they should work as-is
with other IDEs that support Dev Containers.

This file describes the concept (above) and
gives details of what is included (with connection details).

## Dev Container Background

By creating a directory and file `.devcontainer\devcontaner.json`
in the project root directory, you indicate to VSCode that you
want the project to use a devcontainer to provide background services.

The devcontainer.json describes either a single primary container,
or points to a Docker Componse file to describe the primary container
plus a collection of additional service containers.

The primary container contains a copy of the project directories
(actually a direct link to your local copy)
plus an Apache web server instance to serve these to you for testing,
plus all the executables that you will want to execute directly
(such as php, node/npm/bun etc.).
This container is created from a pre-generated base image
modified to include additional items.
Additionally, a range of VSCode extensions will also be installed
to run against the code-base.

The service containers hold copies of all the services
that Laravel calls remotely
(like SQL/NoSql/Queue databases, search engines, database administratior tools etc.).
These microservice containers are typically  
unaltered copies of pre-generated base images,
and so take very little time to build.

If, as an individual user, you will not be working on anything
requiring some of these services,
you can comment out their definitions in the Docker Composer file
and they will not be generated or run.

## Dev Container Contents

### Primary Container - Dev

- PHP (plus necessary extensions for accessing microservices)
- Apache
- SQLITE
- Node/NPM/Bun
- SqliteBrowser (an executable Sqlite database manager)

### Service Containers

The service containers provided by the Visual Laravel Dev Container
are intended to provide a complete and comprehensive set of
services to enable all aspects of Laravel
to be run in a self-contained development and test environment.
This is **NOT** a fork of Laravel Sail,
but rather an independently created alternative,
however by intent it should provide a superset of Laravel Sail
(potentially re-implementing the `Sail` command for use outside
Visual Code).

It is intended that this same environment will
be used by GitHub actions in order to support Github testing.
In the future we can also potentially use this as the basis for
a standalone environment for single-user VL environments
for users to develop VL applications.

| Svc/Domain   | Port(s)   | Userid=Pwd | Description                                                                                     |
| ------------ | --------- | ---------- | ----------------------------------------------------------------------------------------------- |
| postgres     | 5432      | postgres   | Postgres SQL database                                                                           |
| pgadmin      | 5050      | pg@pg.com  | Postgres administration on [localhost:5050](http://localhost:5050)                              |
| mariadb      | 3306      | mariadb    | MySQL forked database                                                                           |
| mysql        | 3307      | mysql      | MySQL database                                                                                  |
| adminer      | 8282      |            | MariaDB/MySQL administration on [localhost:8282](http://localhost:8282)                         |
| phpmyadmin   | 8383      |            | MariaDB/MySQL administration on [localhost:8282](http://localhost:8383)                         |
| redis        | 6379      | -          | Cache/Queue database                                                                            |
| memcached    | 11121     | -          | Cache database                                                                                  |
| meilisearch  | 7700      | -          | Laravel Scout compatible search index                                                           |
| minio        | 9000      | minioadmin | Amazon S3 compatable storage engine. Console on [localhost:8900](http://localhost:8900)         |
| mailpit      | 1025      | -          | Fake email sending. Browse sent emails on [localhost:8025](http://localhost:8025)               |
| selenium     |           |            | Browser-based functional testing                                                                |
| soketi       | 6001/9601 | soketi     | WebSockets server used for Laravel Broadcast events - using Laravel Echo as the client listener |
| rabbitmq     | 5672      | rabbitmq   | Queue manager. Console on [localhost:15672](http://localhost:15672)                             |
| mongodb      | 27017     | mongodb    | Document database                                                                               |
| mongoexpress | 8081      | -          | MongoDB administration on [localhost:8081](http://localhost:8081)                               |

#### Notes

1. You need to install Docker on your computer
   in order to run these containers,
   and you need to install the Docker VSCode extension
   in order to get Dev Container support
   (VSCode may automatically prompt you to install this).
   You also need to install Windows Subsystem for Linux (WSL2) to support Docker.

2. When building/running the dev container on Windows you may get
   errors of the form:

   ```txt
   Error response from daemon: Ports are not available: exposing port TCP 0.0.0.0:12345 -> 0.0.0.0:0: listen tcp 0.0.0.0:12345: bind: An attempt was made to access a socket in a way forbidden by its access permissions.
   ```

   This is caused by Hyper-V reserving ports for itself.
   The way to verify this is to
   open an **administrator** command line window
   and run the following command,
   and then look for a line where the error port
   is between the start- and end-ports:

   ```cmd
   netsh interface ipv4 show excludedportrange protocol=tcp
   ```

   The fix is to enter the following command
   (copying the port number from the above error message):

   ```cmd
   netsh int ipv4 add excludedportrange protocol=tcp startport=12345 numberofports=1
   ```

   You may need to disable and re-enable Hyper-V to get this command to work.