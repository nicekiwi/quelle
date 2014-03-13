Quelle (Source) Engine
=============

A full featured web-interface for administering games based on Valve's Source Engine.

- On the fly Config editing with sheduling support
- Event creation with assigned Configs, Maps and pushied data
- Map management, Upload to Amazon S3, Shedule Maps

Initially created in PHP with Laravel and rendered with Bootstrap, moving to NodeJS at a later date.

## Current Targets for 1.0 release

First step is to ggt a basic extendable system running with the following featues:

**(Only Team Fortress 2 will be supported at this early stage).**

- Simple Config editing and sheduling.
- RCON command interface.
- Map Managment.
- Donations linked to donator rewards system.
- Basic Ban system.

## Future Ideas

- Stats intergrations, pulling form player logs.
- Global Bans database (Similar to SourceBans).
- On the fly SourceMod editing, compilation and configuring.
- Support for Additional Games (CounterStrike GO, Dota).
- Support for Non-Source Games (Minecraft).
- NodeJS support for the interface with Laravel PHP as a backend.
