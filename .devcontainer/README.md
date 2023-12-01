# Technical documentation for Dev Container(s)

The purpose of the Dev Containers is to provide a
pre-configured virtual environment that is both:

1. Completely comprehensive for development of Visual-Laravel; and

2. Is pre-tweaked to be performant, and to include and work with
   all the development tools you might want to use.

thus avoiding the need and effort for each developer to create
and debug and tweak their own development environment.

The cost of this saving in time and effort is a lot of one-time downloading (c. 5GB-6GB)
and a slow-ish build of the environment (for at least the first time) (c. 15min-30min).

## Pre-requisites

### Windows

* Visual Studio Code
* Windows Subsystem for Linux (WSL)
* A WSL linux distro such as Ubuntu (a good default if you have no personal preference)
* Docker Desktop

### Linux

* Visual Studio Code
* Docker

### How the devcontainer is defined

The Visual Laravel Dev Container is first defined
using `.devcontainer/devcontainer.json` which uses `docker-compose.yaml`
to define the primary and service containers.

Docker Composer uses Docker Build and a `Dockerfile-dev`
to build the primary Dev container
in order to add extra functionality to a
pre-defined Microsoft PHP Dev Container.

The service containers are built from Docker Hub images
using only Docker Composer directives to configure them.

The ports used by containers are exposed as Localhost ports
by definitions in `devcontainer.json`.

VSCode extensions required (or considered highly useful) for
Visual Laravel development are also defined in `devcontainer.json`,
as are some Dev container add-on features.

Volumes are defined in `docker-compose.yaml`
to store any data that needs to be persistent across
rebuilds of the containers.

For Service Containers,
anything that cannot be configured using
predefined environment variables
need to have local files or directories
mounted inside the container to override or add
to the predefined files
(and these configurations are summarised below).
Otherwise, detailed descriptions of each Docker Hub definition
(and possibly other web pages)
will need to be consulted to understand
the Service Container configurations.

## Service Container configurations

| Container    | Configuration                                                                                                                         |
|--------------|---------------------------------------------------------------------------------------------------------------------------------------|
| Dev - PHP    | A php.ini file is inserted                                                                                                            |
| Dev - Apache | The repo src directory is mapped to `/var/www/Visual-Laravel` and Apache is configured to use this and serve the Public subdirectory. |
| Dev - Caches | For performance reasons, various directories holding ephemeral data downloaded from the internet e.g. `vendors` and `node_modules` are cached into local docker volumes rather than being mapped back to the local environment.
| Adminer      | A non-core plugin `AdminerLoginServers` is used to configure the various database services that Adminer can login to.                 |
| pgAdmin      | A json file is used to define the postgres service                                                                                    |
| phpMyAdmin   | A configuration file defines the MariaDB/MySQL services                                                                               |
|              | A dark theme is added                                                                                                                 |
|              | Several SQL files are used to configure the MariaDB and MySQL services to add the phpMyAdmin configuration database on first run.     |

## Future improvements

This devcontainer build is inspired by
[Laravel Sail](https://laravel.com/docs/10.x/sail)
but independently created using the best-of-class Docker images.

A number of small-ish improvements have been identified
for future implementation:

* Make the Sail command (which is included in Laravel as standard)
work for our devcontainer environment.
* Integrate Adminer, PhpMyAdmin, pgAdmin and MongoExpress as virtual websites into the primary devcontainer and into Apache in order to:
  * A) Support SQLite; and
  * B) Avoid the virtualisation overhead of having separate containers for them.
  It is anticipated that this would save 1GB in image downloads, and c. 240MB of memory.
* Make all service containers optional,
and write code to read the `APP_ENV` environment variable and the
relevant `.env` file and automatically start any relevant service
containers needed by this configuration.
This should make VScode startup faster and reduce the container memory usage.
