This directory is specifically to host any objects from the underlying packages
such as Jetstream, Fortify or Filament that need to remain in the App namespace
because they are referred to hardcoded in the packages themselves.

At present this is limited to:
* Laravel core tables such as Migrations, Sessions etc.
* Jetstream created tables such as Users and Teams; and
* The migrations, models, factories and seeders for these