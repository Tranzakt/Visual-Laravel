<p align="center"><a href="https://github.com/Tranzakt/Visual-Laravel/" target="_blank"><img src="https://raw.githubusercontent.com/Tranzakt/Visual-Laravel/main/assets/graphics/VisualLaravel.svg" width="400" alt="Visual Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/Tranzakt/Visual-Laravel/actions"><img src="https://github.com/Tranzakt/Visual-Laravel/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/Tranzakt/Visual-Laravel"><img src="https://img.shields.io/packagist/dt/Tranzakt/Visual-Laravel" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/Tranzakt/Visual-Laravel"><img src="https://img.shields.io/packagist/v/Tranzakt/Visual-Laravel" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/Tranzakt/Visual-Laravel"><img src="https://img.shields.io/packagist/l/Tranzakt/Visual-Laravel" alt="License"></a>
</p>

# Visual-Laravel (VL)

Visual Laravel is a web-based, no-code/low-code Laravel development environment.

Using a web browser you will be able to define database tables/fields, UI lists/forms/etc., menus and other graphical elements,
all forms of Laravel and Laravel extension objects and if needed write your own Laravel code snippets.

Visual Laravel was inspired by a Joomla CMS extension called Fabrik that did something similar (but in a clunky way).

Once you have defined the model using the Web UI, VL will then generate (compile) all the Laravel PHP code needed from this model.

It is expected that VL will provide three key benefits:

1. Access by less experienced developers, with far less programming skill and Laravel/PHP expertise needed -
   opening the Laravel ecosystem to a whole new base of developers.
   (Fabrik was a reasonable tool for inexperienced programmers wanting to deliver simple table-driven functionality.
   One web development company used it for larger professional projects,
   but my own attempts failed due to frequent bugs and a very-low productivity UX.)

2. Greater productivity for experienced developers - even with the level of utility functionality provided by Laravel, Eloquent etc.,
   coding a Laravel project still requires writing coordinated pieces of code in several places as part of the same functionality
   (e.g. migrations/factories/seeds/models/tests or routes/views/controllers/tests etc.).
   Using a single application model to generate all these files should deliver significant efficiencies.
   This will depend on having an excellent, highly performant UX, which makes creating the application easy.

3. Improved code quality - auto-generated code can be made to conform to a range of coding best practices,
   can generate code that you might not take the time to create if you were coding manually
   (like factories, seeders, functional and unit tests),
   knows what database queries will be run and so can
   determine what indexes are needed and test the queries (EXPLAIN) to confirm that indexes are used,
   only load relations and columns that are going to actually be used and avoid n+1 situations,
   automatically cache (and invalidate) read-only database queries
   etc. etc. etc.
   In addition, the UI can lead the developer to use techniques like Domain Driven Design (DDD) and
   Test Driven Development (TDD), and can provide both UI and PDF documentation like
   UML diagrams, class diagrams and Entity Relationship Diagrams.

By using Laravel (and its ecosystem) VL can take advantage of
a massive amount of functionality that is already available and mature,
and focus on providing only the additional functionality needed on top of that.

It is anticipated that we will create a lot of new functionality
which will have general applicability beyond Visual Laravel
e.g. Web Component / Livewire UI libraries,
and like Laravel itself,
we will spin-off new packages to add to the Laravel ecosystem.

### So how will it work from the user perspective?

The user will define an application, the tables and fields within the application, how these fields will be visually
represented in lists and forms, and various other types of Laravel functionality (e.g. queues, crons, etc.).

The development UI will be Livewire / Filament based, making it:

* graphical in nature i.e. dynamic Schema diagram as you build your tables, dynamic prototype of forms as you build them;
* flexible i.e. you can achieve the same results in various different ways such as using forms, clicking on a graphical element etc.;
* responsive i.e. fast response times, dynamic UI elements update in real-time.

![image](https://github.com/Tranzakt/Visual-Laravel/assets/3001893/3f1aa559-9237-4a2e-967d-d68cecc2da2f)

We anticipate providing as much live feedback as possible. For example:

* Database definitions using tables and forms will update a Schema diagram in real-time,
  and hopefully the schema diagram will be updateable directly as an alternative.
* Form definitions will create an example form in real time which can be tried, and hopefully you will be able
  to make some changes (e.g. of position or tab sequence) interactively in the example.

When you have defined your application, you can save a snapshot as a development, beta or final version,
and the definitions you have made will be compiled into PHP/Laravel code and autonated tests will be run,
and the application will then be available for you to test manually.
Database definitions will be compiled into Laravel migrations and models,
visual definitions will be compiled into e.g. Blade templates, etc. etc. etc.
Factories/seeds and functional/unit tests will also be compiled from the same definitions.
We anticipate providing additional facilities to aid with human testing such as user impersonation,
performance diagnosis, logging etc.

To give some idea of the likely scope,
looking only at supporting the full range of Laravel functionality
will require UI/Model/Compile functionality for the following "domains":

* Database (Tables/Columns/Elements (Columns or JSON sub-columns)/Test Data compiled to Migrations/Models/Seeds/Factories/Data objects)
* Views (Lists/Forms/Menus/Routes/Middleware/Validations/CSS compiled to Routes/Controllers/Views/Blade Templates)
* Other (Services/Broadcasting/Events/Queues/Files/RPC/I18N/Mail/Notifications/Queues/Schedules)
* Settings/Defaults (for e.g. Validations, formatting etc.)

### Further documentation

* [Contributing to this project](./CONTRIBUTING.md)
* [Code-of-conduct for Contributors](./CODE-OF-CONDUCT.md)
* [Code-of-conduct for Contributors](./CODE-OF-CONDUCT.md)
* [Development environment for code contributors](./DEV-ENVT.md)
* [Project Governance](./GOVERNANCE.md)
* [Choosing UI Components](./UI-COMPONENTS.md)
* [Code License](./LICENSE.md)
* [Acknowledgements](./ACKNOWLEDGEMENTS.md)

### Code Contributor Guidance

* [Development environment for code contributors](./DEV-ENVT.md)
* [Design & Development Coding rules](./CODING-RULES.md)
* [Dependencies - and their documentation](./DEPENDENCIES.md)

### The Inspiration for this project

**Visual-Laravel** was inspired by a rather ancient Joomla extension called Fabrik which provided a similar web-based development environment,
and a huge debt of gratitude is owed to the original author of that package,
[Rob Clayburn](https://github.com/pollen8),
not only for that extension but also for his
inspirational thoughts given to me personally several years ago
about how he would have developed Fabrik if he was starting again.

Unfortunately, due to its age
(dating back to 2011 from when PHP v5 was a mess)
Fabrik was not able to take advantage of
modern PHP object-oriented capabilities or
newer open source functionalities
like ORMs / template-engines /or SPA technologies,
which consequently ended up being bespoke spaghetti code
with a few huge objects, difficult or impossible to maintain,
and a UI that was somewhat clunky.

When combined with the regular architectural rewrites of
the underlying Joomla technology (v1 to v2 to v3 to v4)
(and of course the evolution of php regularly deprecating stuff)
this became impossible to maintain.

### Current Status

Visual Laravel is currently in very early development, with an initial target to define the development kernel and some basic
database/list/form functionality in order to demonstrate the viability and
try to encourage the open source community to help build out the remaining functionality.

There are both [short-term](./ROADMAP.md#the-short-term-roadmap), [medium-term](./ROADMAP.md#the-medium-term-roadmap) and [long-term](./ROADMAP.md#the-long-term-roadmap) road maps -
and obviously the short-term road-map is the current focus.

We envisage having Git integration, so that saved versions can be committed to Git,
and then automation can be used to deploy releases into test, staging or production environments.

We envisage having a single development technology stack (current thinking that it will be a Livewire-based solution)
but if needed supporting multiple runtime front-end stacks
(initially just Livewire, but later vanilla Blade, Intertia/Vue, Intertia/React, Inertia/Splade),
multiple UI/CSS libraries (initially Tailwind, but later bootstrap etc.)
and multiple front-end environments (initially only Laravel, but later through API calls from e.g. Joomla/Wordpress etc.).

Note: The purpose of supporting multiple environments is to facilitate co-existence with existing sites
by supporting the technology base already used by these sites.
The difficulty with supporting multiple environments is needing to either:

1. limit functionality to the lowest common denominator; or
2. make the full power of each environment available where components exist and have gaps where they don't.

At this early stage it remains to be determined which approach we will follow.

Once the Laravel basics are in place, we can also start to take advantage of all the existing PHP/Laravel/Javascript package ecosystem,
building additional Visual Laravel plugins around these existing packages.

But of course a lot of this is for the future - we need to get the basics running first,
and we need to try to get the kernel architecture as right as we possibly can from the outset,
not only to support the basic functionality, but also to support later technology
without requiring a wholesale rewrite of the kernel or existing plugins
or (worse still) obsoleting existing application definitions (requiring a recreation from scratch)
or (not quite so bad) requiring a migration of app definitions from one version to another.

### So how will it work from a technical perspective?

The core of Visual Laravel is the kernel which provides the following functionality:

1. Ability for various types of plugins to register themselves.
Externalising as much functionality to plugins allows for the greatest flexibility
and the greatest ease for adding new functionality.
2. Providing basic UI framework functionality,
with development UI plugins providing domain-specific UI functionality within the UI framework.
3. Providing generic helper functions for plugins to use,
and coordinating functionality between various types of plugins and between plugins themselves.

At this stage of design we envisage the following types of plugins:

1. Development UI - providing major development UI building blocks for
e.g. Application options, Database tables, Visualisations (initially Lists & Forms, but could be charts or maps or whatever),
data visual Elements (for lists, read-only forms, update forms),
and Laravel-specific functionality (ideally full coverage of the entire Laravel capabilities).
2. Detailed plugins for each individual type of database column, visual element, etc.
3. Compile plugins for each supported run-time environment for each of the above plugins.

The choice of web component libraries is a significant one,
and to assist the current research into choices has been [documented separately](./UI-COMPONENTS.md).
