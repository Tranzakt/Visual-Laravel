<p align="center"><a href="https://github.com/Tranzakt/Visual-Laravel/" target="_blank"><img src="https://raw.githubusercontent.com/Tranzakt/Visual-Laravel/main/src/visual-laravel/resources/graphics/VisualLaravel.svg" width="400" alt="Visual Laravel Logo"></a></p>
# The Visual-Laravel Roadmap

This file provides an overview of the short-, medium-, and long-term goals for the Visual Laravel project.

### The Short-term Roadmap

The Visual Laravel project is, at the time of writing, a gleam in the eye and a design that exists only in the mind of the primary developer.

As an entire project, the envisaged Visual Laravel has a huge scope, 
covering the extensive functionality of Laravel itself,
and including support (if needed) for a variety of different front-end technologies,
covering the breadth of functionality of the Laravel Package and web component ecosystems,
and with interfaces to allow the runtime generated HTML to be provided to other web technologies 
(i.e. other CMS such as Joomla, Wordpress, Drupal etc.)
via remote API calls.

This scope is way too large to be delivered by a single developer, 
and needs to be a collaborative delivery by a community of open-source enthusiasts.
However, forming such a community is difficult in the absence of a starter solution.

The objective of the short-term roadmap is therefore to deliver a proof of concept
consisting of:

1. A prototype kernel, supporting the full functionality to support
   the basic range of basic plugin types required for the following; 
2. A basic UI
3. Ability to define and database tables, a few basic formatting elements, basic lists and basic forms.
   Not all column types or element types will be supported.
   Only the Livewire front-end technology will be supported.
4. Some advanced / interactive functionality - specifically a dynamic Schema Diagram used to show tables together with their columns and relationships.
5. Ideally some PoC support for generation of automated functional/unit tests.
6. Support for i18n - language translations in development environment.

Within the above limited scope, we should aim to deliver a fully working prototype/PoC which clearly demonstrates the full potential, 
and which can be used to recruit a team of contributors who can help fill out the delivery.

The challenges for this phase of the project are perceived as follows:

1. Building a flexible kernel that will (ideally) not be subject to wholesale rewrite at a later stage.
   The kernel is intended to provide all the plumbing and coordination of a range of plugins,
   with the plugins themselves providing the specific functionality for their limited scope i.e.
   registering themselves with the kernel, providing the kernel with details of their options,
   and generating the PHP code required at compile time.
   As can be seen from the various roadmaps,
   we are also looking to support a wide range of target environments,
   and building a kernel that can enable this degree of support may be a challenge.
3. Keeping a tight limit on scope and not allowing it to creep or for development to digress into non-essential areas.
   Similarly keeping a focus on delivering a basic PoC without bells and whistles is seen as essential for this first phase.
4. Selecting the best core technologies to use,
   those which provide the greatest functionality whilst also enabling the greatest flexibility.
   In particular it is envisaged that a broad set of web / Livewire components will be needed,
   growing significantly short- to middle- to long-term.
5. The learning curve for the underlying technologies, and building the kernel / first plugin in each area.
   It is anticipated that once the first plugin of a type has been created,
   creating additional plugins of the same type should be a lot easier.
6. Determining and documenting the internal design principles and concepts.
7. Building the interactive Database Schema diagram.
8. Building in flexibility that is not yet going to be used - or at least build it in a way that this can be added without requiring rewrite.

### The Medium-term Roadmap

The medium term objective is to deliver a fully rounded out version of Visual Laravel that supports all
(or almost all) of the native functionality of Laravel, specifically:

1. A full Database definition domain that supports all Laravel column types
2. A variety of list, read-only form and input form UI elements covering these column types
3. Fully capable List and Form visualisations that can be used to build a basic application.
4. Support for Blade, Livewire and Inertia/Vue front-end technologies.
5. Support for various CSS technologies i.e. Tailwind and Bootstrap.
6. A demonstration application defined using VL and compiled to each of the technology targets.
7. Support for the most common packages in the Laravel ecosystem.
8. Development environment translations for the most popular languages
9. Support for i18n in the developed apps.
10. An initial documentation web site - at this stage we would depend mostly on Laravel documentation.

The end objective of the Medium-term roadmap is to have a version of VL that can be used by real developers to build and deploy real applications,
though these are likely to be limited to core Laravel functionality and the most common add-on packages.

Hopefully by this point, there will be sufficient examples to allow people who want VL to support additional packages
easily to build their own plugin support for these packages and submit these new plugins as contributions.

The challenges for this second phase are seen as:

1. Publicising the tool to garner interest.
2. Recuiting a sizeable group of contributors, forming them into a cooperating team, and mentoring them.
3. Prioritising the various development areas to deliver the best bang per buck and to match the various interests of the various contributors
4. Keeping control of the scope and deferring all non-essential work to a later phase.

### The Long-term Roadmap

The Long-term roadmap is concerned with extending the functionality in several directions. 
The following list is only a guess at this stage as it is expected by this point that 
scope and priorities will be driven by the community and by real-life needs rather than
the current theoretical possibilities:

1. If needed, support for more front-end and CSS technologies (e.g. React, Vue, Angular, Svelte)
2. Support for a broad range of existing Laravel add-in packages
3. Support for calls from other web technologies (e.g. Joomla, Wordpress) using API and with integrated security models
4. Developer support for design methodologies
   i.e. guided definition of Domain Driven Design and Test Driven Design.
5. App documentation functionality - use the definitions to create developer documentation in PDF form.
6. A comprehensive documentation website, including AI translations for the most common languages
   and context-sensitive links from the development environment to the documentation website 
7. A full range of translations for the development environment
