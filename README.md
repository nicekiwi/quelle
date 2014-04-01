Quelle (Source)
=============

A full featured web-interface to manage servers for games based on Valve's Source Engine.

- On the fly Config editing with sheduling support
- Event creation with assigned Configs, Maps and pushied data
- Map management, Upload to Amazon S3, Shedule Maps

Initially created in PHP with Laravel and rendered with Bootstrap, moving to NodeJS at a later date.

## Current Targets for 1.0 release

First step is to ggt a basic extendable system running with the following featues:

**(Only Team Fortress 2 will be supported at this early stage).**

- Simple Config editing and sheduling.
- RCON command interface. (Similar to Pantheons)
- Map Managment. (uploads, sorting, meta info, categories, publishing json lists etc)
- Donations linked to donator rewards system. (Donation threshold or specific rewards etc.)
- Basic Ban system (Two Way).

## Future Ideas

- Config file revision, forking and snapshot support.
- Subscriptions for donators.
- Option to choose SSH, FTP or Local installation.
- Stats intergrations, pulling form server/player logs.
- Global Bans database (Similar to SourceBans).
- On the fly SourceMod editing, compilation and configuring.
- Support for Additional Games (CounterStrike GO, Dota).
- Support for Non-Source Games (Minecraft).
- NodeJS support for the interface with Laravel PHP as a backend.
- Extra Moderator Authenication. - Access and Activity logs. 
- Online SourceMod registration database for Quelle to pull from. (Similar to https://www.npmjs.org)
- SourceMod Installer, editior and compile options, manual upload or from SourceMod Index.

* **HLDJ Intergration for JukeBox**  
Search online music databases like Spotify and YouTube, Download -> convert file formats -> stream to game (Highly Illegal from a piracy POV). Pre-defined playlist setups.

Or make use of the `SourceMOD Radio Plugin` to create a playlist and stream directly to gamers ingame. Cull HLDJ completely and stream from youtube.


* **SourceMod plugin index/management tool**
An online list of plugins for sourceMods, searchable with filters and community managed. Dual functional to fully support Quelle and manual installations. 