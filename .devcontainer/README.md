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

### Pre-requisites

#### Windows

* Visual Studio Code
* Windows Subsystem for Linux (WSL)
* A WSL linux distro such as Ubuntu (a good default if you have no personal preference)
* Docker Desktop

#### Linux
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
| PGadmin      | A json file is used to define the postgres service                                                                                    |
| phpMyAdmin   | A configuration file defines the MariaDB/MySQL services                                                                               |
|              | A dark theme is added                                                                                                                 |
|              | Several SQL files are used to configure the MariaDB and MySQL services to add the phpMyAdmin configuration database on first run.     |
| pgAdmin | A configuration file defines the postgres services |
