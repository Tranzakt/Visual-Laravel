# Technical documentation for Dev Container(s)

The Visual Laravel Dev Container is first defined
using `devcontainer.json` which uses `docker-compose.yaml`
to define the primary and service containers.
Docker Composer uses Docker Build and a `Dockerfile-dev`
to build the primary Dev container
in order to add extra functionality to a
pre-defined PHP Dev Container.
The service containers are built from Docker Hub images
using only Docker Composer directives to configure them.

The ports used by containers are exposed as Localhost ports by definitions in `devcontainer.json`.

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
| ------------ | ------------------------------------------------------------------------------------------------------------------------------------- |
| Dev - PHP    | A php.ini file is inserted                                                                                                            |
| Dev - Apache | The repo src directory is mapped to `/var/www/Visual-Laravel` and Apache is configured to use this and serve the Public subdirectory. |
| Adminer      | A non-core plugin `AdminerLoginServers` is used to configure the various database services that Adminer can login to.                 |
| PGadmin      | A json file is used to define the postgres service                                                                                    |
| phpMyAdmin   | A configuration file defines the MariaDB/MySQL services                                                                               |
|              | A dark theme is added                                                                                                                 |
|              | Several SQL files are used to configure the MariaDB and MySQL services to add the phpMyAdmin configuration database on first run.     |
