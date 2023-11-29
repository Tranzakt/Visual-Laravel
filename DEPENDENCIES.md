# Visual Laravel Dependencies (on other Open Source code)

This file exists to document each and every dependency
that Visual Laravel relies upon and, where appropriate,
give guidance on its use and a link to the documentation.

Because of the breadth of underlying technologies that VL uses,
and the immense difficulties in being an expert in even a few of them
(much less all of them),
this sort file will be essential in helping developers to
understand how these packages are used,
and pointing them at the documentation they need to be able to both
understand existing code and write new code.

Broadly speaking, this breaks down into PHP and JS (node) packages,
into development tools, application coding and test coding,
though there will undoubtedly be exceptions.

## Overall Development Tools

| Package (doc-link) | Description |
|-|-|
| [Visual Studio Code]() | IDE |
| Docker | A containerised comprehensive development environment
| * [Devcontainers](https://containers.dev/implementors/json_reference/) | An integrated VS-Code/Execution environment + independent services in one or more Docker containers. |
| * Docker compose
| * Docker build
| * [Laravel Sail](https://laravel.com/docs/10.x/sail) | Not an actual dependency, but has been used as inspiration for our own Docker devcontainer environment. 

## PHP Packages

### Core

| Package (doc-link) | Description |
|-|-|
| [Laravel (core)]() | Core PHP technology |
| * [HTTP Client](https://laravel.com/docs/10.x/http-client) | Used for loading other web pages, based on [Guzzle](https://docs.guzzlephp.org/en/stable/).
| * Laravel Sail
| [Laravel Jetstream](https://jetstream.laravel.com/) | Livewire starter pack with full User/Team scaffolding.
| * Laravel Sanctum | Security package
| Laravel Tinker
| [Livewire](https://livewire.laravel.com/docs) || 

### Development

| Package (doc-link) | Description |
|-|-|
| Laravel Pint |
| PHPstan |
| * Larastan |
| * PHPstan Livewire
| * Bladestan
| Faker
| PHP-CS-Fixer
| Laravel Dusk | Headless browser UI testing
| Mockery
| Collision
| Laravel Mojito
| Laravel Pot
| [Pest]() |
| * Pest Laravel
| * Pest Livewire
| * Pest Watch
| * Pest Faker
| Rector
| Var Dumper
| [PHPUnit]() |
| Laravel Flux |
| Spatie Ignition |
| DebugBar |
| [Laravel Telescope](https://laravel.com/docs/10.x/telescope) | Insights into Laravel transactions - perhaps more of a production insight than a development one.

## Node / JS packages

| Package (doc-link) | Description |
|-|-|
| [NPM]() |
| [Bun]() ||
| Tailwind
| * Forms
| * Typography
| * CSS
| * Vite
| autoprefixer
| axios
| vite
| Laravel Vite
| **NOT YET INSTALLED** | **NOT YET INSTALLED** |
| [Alpine.js](https://alpinejs.dev/start-here) | Livewire is built upon Alpine.js for Javascript orchestration. |
| [CodeMirror](https://codemirror.net/docs/) | Flexible highlighting editor for web pages |
| [Custom Elements Polyfill](https://www.npmjs.com/package/@ungap/custom-elements) | Consistent cross-browser support for custom web components
| [Element behaviours](https://github.com/lume/element-behaviors) | Alternative to Custom Behaviours

## Github Actions

| Package (doc-link) | Description |
|-|-|
| Tests |
| Linting |
| Package splitting |
| 

## Deployments

| Package (doc-link) | Description |
|-|-|
| [Unpkg](https://unpkg.com/) | Fast delivery of NPM packages (complement to Bun)
