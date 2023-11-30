# Visual Laravel Design & Coding rules

VL is (or will be) a massive project,
and developing this in a reasonable timescale,
and maintaining / extending it over time,
will depend upon taking a structured approach,
and using architectural design and coding best practices.

## Architecture

The only way that something of this complexity can be delivered
quickly and with longevity and maintainability,
and that is to break in down into small individual components,
where creation of a new part can be kick-started by
copying and modifying an existing part,
together with a coordinating kernel that provides
the GUI and marshals the activities of these small components.

At the current time we envisage that this will break down into the following domains:

* Kernel
  * Component registration
  * GUI coordination
  * Compile coordination
  * Security
* Application settings
  * Various global settings
  * Version management
    * Version saving (Release, Pre-release, WIP)
    * GIT coordination
  * Defaults for all of the components below
* Database (Laravel Migrations and Models)
  * Tables, Columns, Indexes, Relationships
    * Column types (each of which needs to be a separate component)
* Element Data Objects
  * Laravel Types
  * Sub-data objects
  * Formatting
    * Element formatters
  * Validation
* Visualisations
  * Lists
  * Forms
  * Charts
  * Other
* Pages
  * Routing
  * Blades
  * Themes
  * CSS
* Security

Each of the individual components need to do the following:

* Register themselves and their options with the kernel
* Provide a preview function
* Provide compile functionality (to compile to native PHP code - in clear or obfuscated)
* Provide test compile functionality (to compile native Unit / Feature / Functional tests)
* Documentation creation

## Design methodology

* Domain Driven (High-Level) Design (as far as it applies to something that is essentially monolithic)
* Test Driven (Low-Level) Design - write the tests first
* Fully automated testing (both locally and via Github actions)
* Willingness to rearchitect in early days (up until betas for first production release) to avoid getting
hide-bound by early architectural decisions that turn out to be sub-optimal (or poor or bad).

## The Rules

* Until beta releases, commits direct to main branch
* From first beta release, changes only via PRs
* Strongly typed PHP - because it reduces bugs
* Automated linting - because it ensures good code quality against coding best practices
* Automated tests for everything - because it reduces bugs.
* I18n built in from the start
  * String translations
  * Time zones
  * Currencies
  * RTL? (because translations for RTL are complicated)
* Layered, building-block approach - split into separate PHP packages like Laravel.
* Loosely coupled architecture (GUI updates driven by Laravel events)
* Maximal consistency and comprehensiveness - no gaps
* Maximal use of existing open-source functionality - no reinventing of the wheel
* Maximal spin-off as separate open-source packages of layers which have more general applicability.
  * Web components
  * Livewire components
  