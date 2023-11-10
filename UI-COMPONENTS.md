# UI Components

A critical design choice for Visual Laravel 
is the choice of Livewire UI components 
for both the development and runtime environments.

At this early stage the plan is:
1. For the development environment to be based on Laravel Livewire;
2. The the initial runtime environment to be based only on Livewire.

Both of these environments will need a wide variety of (open-source) Livewire components,
and this web page gives the current state of research into how to provide these.

At this stage it is not clear what the runtime requirements will be long-term,
i.e. whether supporting Livewire 
(using lightweight AlpineJs under the covers)
will be sufficient to work alongside all other front-end technologies 
without needing directly and separately to support those technologies
or whether these other technologies will need VL to support them directly.
In other words, 
if other parts of an existing web site are in InertiaJs/Vue or IntertiaJs/React
or the VL is being called using an API from e.g. Joomla which is using something else,
then will Livewire work seamlessly with these other technologies, 
or will we need to support these other technologies and compile the Visual Laravel model
to code that uses these other technologies natively.

(In the research below we have not had the time to compare and contrast
all the various component libraries, 
however for a very high level comparison
we have summarised the number of components in each library).

## Using existing Livewire libraries

At the time of writing we had identified the following 
existing Livewire component libraries:

* [Livewire](): 0?
* [Jetstream](): ?
* [Filament Forms](https://filamentphp.com/docs/3.x/forms/fields/getting-started): 24
(inc. 6 from a 3rd party -
but there is a vibrant plugins library which provides many more though there may be technical and visual incompatibilities when using components from
many different sources with varying degrees of support)
* [Wire UI v2](https://wireui.dev/): c. 28
* [Mary UI](https://mary-ui.com/): 30

## Porting non-Livewire libraries to Livewire

The current research into Livewire components suggests that compared to other frameworks
there are relatively few components available (see below),
and it seems pretty likely that we will need to look to other frameworks (like Vue or React)
to provide components that can be ported over to Livewire,
and we will want these components to be visually consistent
(which is most likely when they are part of a substantial existing framework).

We also will want our components to support:
* I18n (definitely)
* Accessibility (almost certainly)
* TailwindCSS (maybe)

On obvious potential source for components is Vue;
research suggests that porting Vue components to Livewire is technically possible
(see Google, but for one (easy) example see [DevDojo](https://devdojo.com/episode/converting-vue-into-livewire),
and Vue (for example) has a large base of component libraries
e.g. 

* [BootstrapVue](https://bootstrap-vue.org/): c. 50
* [Flowbite Vue 3](https://flowbite-vue.com/): 34
* [Nuxt](https://nuxt.com/); 0
(which seems to be more about enhancing the overall Vue JS capabilities than components, and so may be less relevant to us)
* [NuxtUI](https://ui.nuxt.com/): 36 (requires Nuxt and so may to over complex for our needs)
* [PrimeVue](https://primevue.org/): 123!
* [Quasar](https://quasar.dev/): 102
* [Vuesax](https://vuesax.com/): 17 
* [VueTailwind](https://vuetailwind.com/): 45 (note no-hyphen in URL)
* [VueTailwind](https://www.vue-tailwind.com/): 20 (note URL is hyphenated)
* [Vuetify](https://vuetifyjs.com/): 71
* etc.

and it seems likely that React and some other technologies may have a similar breadth of compponents.

However, in the future event that we need to directly support these other technologies,
we would not want to have to port all the e.g. Vue->Livewire components over to these other frameworks
if we can avoid this by thinking ahead now.
Fortunately a number of cross-technology component libraries are already available e.g.

* [StencilJs](https://stenciljs.com/) (more of a cross-framework compiler than a component library)
* [Material Design for Bootstrap](https://mdbootstrap.com): 49
* [IBM's Carbon Design](https://carbondesignsystem.com/)
* [Material Components for Web](https://material-components.github.io/material-components-web-catalog/#/)
* [Ant Design](https://ant.design/)
* [AgnosticUI](https://www.agnosticui.com/)
* [Graphite](https://graphitedesignsystem.com/)
* [Svelte in Angular/Vue/React](https://phptuts.github.io/svelte-docs/webcomponents/)

Given the number and breadth of these libraries,
a reasonably comprehensive evaluation will be quite time consuming,
especially if we need to prototype the conversion to Livewire
in order to confirm that such a conversion is technically feasible
and reasonably easy.

However from a brief look, 
of the technologies listed above 
Ant Design stands out because it has a cross technology graphics framework AntV
which would likely be useful in the development back-end to create 
e.g. an interactive Schema Diagram.

So the short-term plan is to review these cross-technology libraries for breadth of components,
and compare it to the few existing Livewire component libraries,
to see whether the existing libraries will meet our needs or
whether we need to select a more general library and convert it to Livewire
(contributing the Livewire library back to the community as we go).

We should not that at the time of writing this design note,
the existing Livewire component libraries do not use
a library-specific namespace,
and so it is likely that there will be namespace clashes between
e.g. Livewire or Filament etc.
and whatever package we choose,
more so if we find we need to use existing Livewire components
from more than one library.

**Note to library writers:** 
Your component library needs to coexist nicely with other libraries.
Since components with the same name are likely to have some differences anyway
and are likely not to be plug-and-play interchangeable with each other without some code changes,
at the time of writing I am unclear why library authors do not namespace their components.

# Appendix - Existing Livewire Components
## Existing Livewire libraries
### [Filament Forms](https://filamentphp.com/docs/3.x/forms/fields/getting-started)

* [Builder](https://filamentphp.com/docs/3.x/forms/fields/builder)  
* [Checkbox](https://filamentphp.com/docs/3.x/forms/fields/checkbox)  
* [Checkbox list](https://filamentphp.com/docs/3.x/forms/fields/checkbox-list)  
* [Color picker](https://filamentphp.com/docs/3.x/forms/fields/color-picker)  
* [Custom fields](https://filamentphp.com/docs/3.x/forms/fields/custom)  
* [Date-time picker](https://filamentphp.com/docs/3.x/forms/fields/date-time-picker)  
* [File upload](https://filamentphp.com/docs/3.x/forms/fields/file-upload)  
* [Hidden](https://filamentphp.com/docs/3.x/forms/fields/hidden)  
* [Key-value](https://filamentphp.com/docs/3.x/forms/fields/key-value)  
* [Markdown editor](https://filamentphp.com/docs/3.x/forms/fields/markdown-editor)  
* [Radio](https://filamentphp.com/docs/3.x/forms/fields/radio)  
* [Repeater](https://filamentphp.com/docs/3.x/forms/fields/repeater)  
* [Rich editor](https://filamentphp.com/docs/3.x/forms/fields/rich-editor)  
* [Select](https://filamentphp.com/docs/3.x/forms/fields/select) 
* [Tags input](https://filamentphp.com/docs/3.x/forms/fields/tags-input)  
* [Text input](https://filamentphp.com/docs/3.x/forms/fields/text-input)
* [Textarea](https://filamentphp.com/docs/3.x/forms/fields/textarea)  
* [Toggle](https://filamentphp.com/docs/3.x/forms/fields/toggle)  

In addition to the above provided with Filament itself, 
there are one or more Filament plugins that provide similar functionality:

#### [Filament Components plugin](https://filamentphp.com/plugins/ralphjsmit-components)

* Sidebar
* Timestamps
* UpdatedAt
* CreatedAt
* DeletedAt
* Timestamp

### [Wire UI v1](https://v1.wireui.dev/docs/get-started)

At the time of writing v2 is announced and documented but not available.

#### Form Components

* [Buttons](https://v1.wireui.dev/docs/buttons)
* [Cards](https://v1.wireui.dev/docs/cards)
* [Checkbox](https://v1.wireui.dev/docs/checkbox)
* [Color Picker](https://v1.wireui.dev/docs/color-picker)
* [Errors](https://v1.wireui.dev/docs/errors)
* [Inputs](https://v1.wireui.dev/docs/inputs)
* [Native Select](https://v1.wireui.dev/docs/native-select)
* [Number Input](https://v1.wireui.dev/docs/inputs-number)
* [Password Input](https://v1.wireui.dev/docs/inputs-password)
* [Radio](https://v1.wireui.dev/docs/radio)
* [Select](https://v1.wireui.dev/docs/select)
* [Textarea](https://v1.wireui.dev/docs/textarea)
* [Toggle](https://v1.wireui.dev/docs/toggle)

#### UI Components
* [Avatar](https://v1.wireui.dev/docs/avatar)
* [Badges](https://v1.wireui.dev/docs/badges) 
* [Dropdown](https://v1.wireui.dev/docs/dropdown) 
* [Icon - Hero Icons](https://v1.wireui.dev/docs/heroicons) 
* [Modal](https://v1.wireui.dev/docs/modal)
* [Table - Livewire-PowerGrid](https://github.com/Power-Components/livewire-powergrid) 

#### Livewire components
* [Currency Input](https://v1.wireui.dev/docs/currency-input)
* [Datetime Picker](https://v1.wireui.dev/docs/datetime-picker)
* [Maskable Inputs](https://v1.wireui.dev/docs/maskable-inputs)
* [Phone Input](https://v1.wireui.dev/docs/phone-input)
* [Time Picker](https://v1.wireui.dev/docs/time-picker)
* [Usage](https://v1.wireui.dev/docs/livewire-usage)

#### Actions
* [Dialogs](https://v1.wireui.dev/docs/dialogs)
* [Notifications](https://v1.wireui.dev/docs/notifications) 

#### Advanced

* [Hooks](https://v1.wireui.dev/docs/hooks)

### [Wire UI v2](https://wireui.dev/getting-started)

This v2 list appears to be backwardly compatible with v1, 
with the addition of `alert` and `link` components.

#### UI Components

* [Alert](https://wireui.dev/components/alert) 
* [Avatar](https://wireui.dev/components/avatar) 
* [Badge](https://wireui.dev/components/badge) 
* [Button](https://wireui.dev/components/button) 
* [Card](https://wireui.dev/components/card) 
* [Dropdown](https://wireui.dev/components/dropdown) 
* [Icon](https://wireui.dev/components/icon) 
* [Link](https://wireui.dev/components/link) 
* [Modal](https://wireui.dev/components/modal) 
* [Table - Livewire-Powergrid](https://livewire-powergrid.com) 

#### Form Components

* [Checkbox](https://wireui.dev/components/checkbox) 
* [Color Picker](https://wireui.dev/components/color-picker) 
* [Currency](https://wireui.dev/components/currency) 
* [Datetime Picker](https://wireui.dev/components/datetime-picker) 
* [Errors](https://wireui.dev/components/errors) 
* [Input](https://wireui.dev/components/input) 
* [Maskable](https://wireui.dev/components/maskable) 
* [Native Select](https://wireui.dev/components/native-select) 
* [Number](https://wireui.dev/components/number) 
* [Password](https://wireui.dev/components/password) 
* [Phone](https://wireui.dev/components/phone) 
* [Radio](https://wireui.dev/components/radio) 
* [Select](https://wireui.dev/components/select) 
* [Textarea](https://wireui.dev/components/textarea) 
* [Time Picker](https://wireui.dev/components/time-picker) 
* [Toggle](https://wireui.dev/components/toggle) 

#### Actions

* [Dialogs](https://wireui.dev/actions/dialogs) 
* [Notifications](https://wireui.dev/actions/notifications) 

#### Advanced

* [Hooks](https://wireui.dev/advanced/hooks) 

### [Mary UI](https://mary-ui.com/)

At the time of writing Mary was still a very new library 
(literally only a week or so since full release).
[We were able to persuade the author to add name-space support](https://github.com/robsontenorio/mary/issues/110)
to avoid clashes between Mary and components with identical names
in other libraries (in this case [a report about a clash with Jetstream](https://github.com/robsontenorio/mary/issues/62).

#### Forms

* [Checkbox](https://mary-ui.com/docs/components/checkbox)
* [Choices](https://mary-ui.com/docs/components/choices)
* [Date Time](https://mary-ui.com/docs/components/datetime)
* [File Upload](https://mary-ui.com/docs/components/file)
* [Form](https://mary-ui.com/docs/components/form)
* [Input](https://mary-ui.com/docs/components/input)
* [Radio](https://mary-ui.com/docs/components/radio)
* [Select](https://mary-ui.com/docs/components/select)
* [Textarea](https://mary-ui.com/docs/components/textarea)
* [Toggle](https://mary-ui.com/docs/components/toggle)

#### List data

* [List Item](https://mary-ui.com/docs/components/list-item)
* [Table](https://mary-ui.com/docs/components/table)

#### Menus

* [Dropdown](https://mary-ui.com/docs/components/dropdown)
* [Menu](https://mary-ui.com/docs/components/menu)

#### Dialogs

* [Drawer](https://mary-ui.com/docs/components/drawer)
* [Modal](https://mary-ui.com/docs/components/modal)
* [Toast](https://mary-ui.com/docs/components/toast)

#### UI

* [Alert](https://mary-ui.com/docs/components/alert)
* [Badges](https://mary-ui.com/docs/components/badges)
* [Button](https://mary-ui.com/docs/components/button)
* [Card](https://mary-ui.com/docs/components/card)
* [Header](https://mary-ui.com/docs/components/header)
* [Icon](https://mary-ui.com/docs/components/icon)
* [Statistic](https://mary-ui.com/docs/components/statistic)
* [Tabs](https://mary-ui.com/docs/components/tabs)
* [Timeline](https://mary-ui.com/docs/components/timeline)

#### Third-party

* [Calendar](https://mary-ui.com/docs/components/calendar)
* [Chart](https://mary-ui.com/docs/components/chart)
* [Date Picker](https://mary-ui.com/docs/components/datepicker)
* [Diff](https://mary-ui.com/docs/components/diff)
