# The Visual-Laravel Roadmap

### The Short-term Roadmap

The Visual Laravel project is, at the time of writing, a gleam in the eye and a design that exists only in the mind of the primary developer.

As an entire project, the envisaged Visual Laravel has a huge scope, 
covering the extensive functionality of Laravel itself,
and including support for a variety of different front-end technologies,
covering the breadth of functionality of the Laravel ecosystem,
and with interfaces to allow it to be included from other web technologies 
via API calls.

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
   As can be seen from the various roadmaps, we are looking to support a wide range of target environments,
   and building a kernel that can enable this degree of support may be a challenge.
2. Keeping a tight limit on scope and not allowing it to creep or for development to digress into non-essential areas.
3. The learning curve for the underlying technologies, and building the kernel / first plugin in each area.
   It is anticipated that once the first plugin of a type has been created,
   creating additional plugins of the same type should be a lot easier.
4. Determining and documenting the design principles and concepts.
5. Building the interactive Database Schema diagram.
6. Building in flexibility that is not yet going to be used - or at least build it in a way that this can be added without requiring rewrite.


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

1. Recuiting a sizeable group of contributors, forming them into a cooperating team, and mentoring them.
2. Prioritising the various development areas to deliver the best bang per buck and to match the various interests of the various contributors
3. Keeping control of the scope and deferring all non-essential work to a later phase.
4. Publicising the tool to garner interest.

### The Long-term Roadmap

The Long-term roadmap is concerned with extending the functionality in several directions. 
The following list is only a guess at this stage as it is expected by this point that 
scope and priorities will be driven by the community and by real-life needs rather than
the current theoretical possibilities:

1. Support for more front-end and CSS technologies (e.g. Svelte, Filament)
2. Support for a broad range of Laravel, Livewire, Filament, Vue, Svelte etc. add-in packages
3. Support for calls from other web technologies (e.g. Joomla, Wordpress) using API and with integrated security models
4. Developer support for design methodologies
   i.e. guided definition of Domain Driven Design to create domains populated at a high level,
   and which can then be filled using the existing lower-level functionality.
5. App documentation functionality - use the definitions to create developer documentation in PDF form.
6. A comprehensive documentation website, including AI translations for the most common languages
   and context-sensitive links from the development environment to the documentation website 
7. A full range of translations for the development environment