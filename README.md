# Visual-Laravel
Visual Laravel is a web-based, no-code/low-code Laravel development environment.

Using a web browser you will be able to define database tables/fields, UI lists/forms/etc. and if needed Laravel code snippets.

It was inspired by a rather ancient Joomla extension called Fabrik which provided a similar web-based development environment,
but which due to its age was not able to take advantage of modern PHP functionality or existing open source functionalities 
like ORMs or template-engines or SPA technologies,
and which subsequently ended up with a lot of bespoke code to create these middleware layers and a UI that was somewhat clunky.

Visual Laravel creates a similar but more functional / performant / flexible environment, 
leveraging Laravel and the Laravel eco-system to the maximum extent possible.

Visual Laravel is currently in very early development, with an initial target to define the development kernel and some basic 
database/list/form functionality in order to demonstrate the viability and 
try to encourage the open source community to help build out the remaining functionality.

There are both [short-term](./roadmap-short-term.md), [medium-term](./roadmap-medium-term.md) and [long-term](./roadmap-long-term.md) road maps - 
and obviously the short-term road-map is the current focus.

### So how will it work from the user perspective?

The user will define an application, the tables and fields within the application, how these fields will be visually 
represented in lists and forms, and various other types of Laravel functionality (e.g. queues, crons, etc.).

The development UI will be Livewire based, making it: 
* graphical in nature i.e. dynamic Schema diagram as you build your tables, dynamic prototype of forms as you build them;
* flexible i.e. you can achieve the same results in various different ways such as using forms, clicking on a graphical element etc.; 
* responsive i.e. fast response times, dynamic UI elements update in real-time.

When you have defined your application, you can save a snapshot as a development, test, beta or final version,
and the definitions you have made will be compiled into PHP/Laravel code for you to test. 
Database definitions will be compiled into Laravel migrations and models,
visual definitions will be compiled into e.g. Blade templates.
Factories/seeds and functional/unit tests will also be compiled from the same definitions.

We envisage having a single development technology stack (current thinking that it will be a Filament-based solution) 
but supporting multiple runtime front-end stacks (initially just Livewire, but later Blade, Filament, Intertia/Vue, Inertia/Splade),
multiple UI libraries (initially Tailwind, but later bootstrap etc.)
and multiple front-end environments (initially only Laravel, but later through API calls from e.g. Joomla/Wordpress etc.).

We envisage having Git integration, so that saved versions can be committed to Git.

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

At this stage of design we enviasge the following types of plugins:
1. Development UI - providing major development UI building blocks for
e.g. Application options, Database tables, Visualisations (initially Lists & Forms, but could be charts or maps or whatever),
data visual Elements (for lists, read-only forms, update forms),
and Laravel-specific functionality (ideally full coverage of the entire Laravel capabilities).
2. Detailed plugins for each individual type of database column, visual element, etc.
3. Compile plugins for each of the detailed UI and detailed plugins and for each of the supported runtime technology stacks.
