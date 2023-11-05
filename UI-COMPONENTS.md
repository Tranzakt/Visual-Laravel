# UI Components

A critical design choice for Visual Laravel 
is the choice of Livewire UI components 
for both the development and runtime environments. 
This file is being used to compare and contrast 
various component packages to assist in selecting 
a package to use.

In the event that we choose to use two or more of these, 
at the time of writing there are likely to be significant 
name-space clashes between components with the same names.

Component libraries need to play nice with one another.


## [Filament Forms](https://filamentphp.com/docs/3.x/forms/fields/getting-started)

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

### [Filament Components plugin](https://filamentphp.com/plugins/ralphjsmit-components)

* Sidebar
* Timestamps
* UpdatedAt
* CreatedAt
* DeletedAt
* Timestamp

## [Wire UI v1](https://v1.wireui.dev/docs/get-started)

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

## [Wire UI v2](https://wireui.dev/getting-started)

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

## [Mary UI](https://mary-ui.com/)

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

## Non-Laravel components

The alternative to using one of the above is to use instead 
components written for Vue, Angular, React or Svelte 
(or ideally from a library designed to be cross-technology),
and then create a Livewire version to run alongside.

Or perhaps pick such a library and specifically create a Livewire
clone of the entire library (which would be non-trivial).
