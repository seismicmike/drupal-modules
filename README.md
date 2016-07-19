# Mike Lewis
Expert Drupal Engineer

This repository is just some sample code that I put up there to show off what I can do. As of 7/19/2016, this is still a work in progress, so please don't judge its incompleteness too harshly.

## Contents
 * Contact Info
 * Skills
 * Education
 * Professional Experience
 * Hobbies / Passions

## Contact Info
E-mail Address: <seismicmike@gmail.com>
Cell Phone: 513-254-1822
Home Phone: 937-831-9588

### Postal Address
1096 Glen Kegley Dr
Xenia, OH 45385

## Skills

### Expert
 * Object Oriented PHP
   - both writing my own OOP code and using third party libraries via composer.
   - I have written my own PHP packages that would be fit for Packagist.org except that the code is proprietary, so we have to use the repository configuration option in our composer.json files to pull it from our private Bitbucket account.
   - I have produced my own PHAR packages for use as command line utilities on our production webservers that do things like:
     + Update our list of drupal site aliases so cron can run on all of them
     + Update our AWStats configuration so every site is being tracked and is available for viewing by the client.
     + Update a custom back-end reporting system that tracks the disk and bandwidth footprint of each site for billing purposes.
 * Drupal 7. I know Drupal like the back of my hand. I have a good balaced skillset with Drupal on both the front-end configuration side as well as the back end development side. I have experience with the following components/systems/modules
  - Content Administration, Content Types
  - Layouts using Blocks and Panels
  - Extension using Core, Contributed and Custom Modules
  - Custom Module Development
  - Database Abstraction Layer
  - Theme System
  - The menu system, including hook_menu and hook_menu_alter
  - Cron
  - Drush
    + including creating my own drush commands.
  - Views
    + including creating my own views, often involving complex operations with relationships and contextual arguments, writing views field handlers for custom fields, exposing custom tables to views with hook_views_data, writing views style plugins, and extending/overriding core views functionality or components.
    + Views Bulk Operationss - configuration & creation of custom actions
  - Entity API, hooks, Entity Metadata Wrapper
    + including creating my own custom entities from scratch.
  - Features
    + including exporting components into a custom module using Features.
  - Panels/Page Manager
  - The Queue/Batch API
  - Drupal mail, Mailsystem, Maillog, HTMLMail & MimeMail
  - Hooks & Alter Hooks to override core or other module functionality
  - Drupal Commerce
  - Services, including REST, XML-RPC, JSON, etc
  - Composer Manager
  - XAutoload
  - Masquerade for customer support / testing
  - Organc Groups
  - ACL / Node Access
    + Including a custom application to share files with all users associatied with an Organization Entity based on the taxonomy term assigned to the node at time of posting. I created a user interface on the taxonomy term where the user can add/remove access to organizations.
 * Etapestry CRM Configuration and API Integration
  - Have an extensive knowledge of what is and is not possible in Etapestry and through the API.
  - Have written multiple advanced data conversions using the API that go beyond what can be done with Etapestry's import module.
  - Have extensive experience integrating portals built on Drupal with Etapestry's database to keep records in sync, report transactional information from Etapestry back to the Drupal based portal, and post transactional information back to Etapestry.
 * E-commerce
  - Have extensive experience creating donation systems and shopping carts from the ground up.
  - Have extensive experience creating a custom implementation of Drupal Commerce to collect donations instead of sell products.
  - I have extensive experience integrating with the Network Merchants payment gateway Direct Post API.
 * git

### Intermediate
 * Bash scripting
 * Linux Server Administration
  - I have built many a LAMP stack using CentOS from bare metal to a fully functional system.
  - Have also worked with Ubuntu
  - I'm very comfortable on the *nix command line and with configuring/administering Apache, PHP and MySQL using it.
 * Apache
  - Including HTTPS configuration
 * MySQL Server Administration, including Deployment/Configuration/Usage of Percona XtraDB Cluster
 * SQL Querying
 * GlusterFS
 * Virtualization, including VirtualBox and VMWare systems
 * Debugging with XDebug
 * Windows Servers
   - I know enough to be dangerous, but in a pinch I know my way around well enough to be of some use. I have set up Remote Desktop Services for hosted applications in Windows 2008 and 2012. The Application in question was Blackbaud's Financial Edge.
 * Guzzle

### Beginner:
 * Drupal 8
   - I have played around with Drupal 8 quite a bit, but we haven't done any production work with it yet. I've been itching to get into this.
 * Symfony2
   - My familiarity with Symfony 2 is the minimal required to use it for Drupal and other PHP packages that depend on it.
 * Node.js & Raw JavaScript
   - I'm familiar with Node and have played with it some, but I've never developed any production applications with it. I do most of my command line coding with PHP actually, and most of my JavaScript relies on jQuery, but I can probably ajdust to Node with a good cheat sheet and a small amount of ramp up time.
 * Perl
  - I've troubleshot some perl scripts written by others for use as command line tools. If I were to do any serious work with it, I'd probably need to spend some time learning it a bit, but I could probably figure it out.
 * Python
   - I have almost no experience with Python, to my eternal shame.
 * Zend Framework
   - I worked with Zend Framework a bit back in its infancy. Even did some production systems with it. But that was back around version 1.11, and I've lost touch with it since. I didn't really even know what I was doing back then.
 * CakePHP
 * Laravel
 * Canvas programming
 * Synchronized development environments using Docker/Vagrant development environments
   - I do most of my current development with Acquia Dev Desktop or the PHP Built-in webserver, though I have worked with Ubuntu virtual machines before.
 * C++ - haven't touched it since college
 * Java - haven't touched it since college

### Systems / Development Tools / Environments
 * Linux
   - CentOS
   - Ubuntu
 * Windows (XP, 7, 10, Server 2008, Server 2012)
 * MS Office / Outlook / OneNote 2010
 * Sublime Text (2 & 3)
 * NetBeans
 * XDebug
 * Git
 * Gitbash
 * PuTTy
 * Composer
 * Phar-Composer
 * PHPUnit (MOCK OBJECTS FTW!)
 * Guzzle
 * Acquia Dev Desktop
 * VMWare Player
 * VMWare ESXi
 * VSphere
 * VirtualBox
 * JSFiddle
 * C9.io

## Education
### Bachelor of Arts, Business Administration - Management Information Systems
Cedarville University, class of 2006

## Professional Experience
### TQI / Beracha
I have been employed by TQINet / The Beracha Foundation since July, 2008 where I have been honing my skills on various projects.

#### Projects

##### A Drupal Commerce Based Fundraising Platform for a listener-funded radio station
I, personally, didn't build every component of this system, but it:

 * Collected donations from anonymous users using a simplified Drupal Commerce checkout system
 * Allowed users to donate to multiple fundraising campaigns in a single gift
 * Reported these transactions as Donation entities in a custom Drupal views/panels based interface
 * Compiled statistics of the donation activity into a dashboard report based on views/panels
 * Synchronized donor information and transactions entered through this system into Etapestry
 * Processed transactions using the Network Merchants payment API
 * Provided a completely separate checkout workflow for volunteers who manned the phones to use to record donations that came in over the phone.
 * Created a "telethon" mode for the system where donations would not be reflected in reports or synchronized to Etapestry until they have been approved by the adiminstrative staff.
 * Allowed donors to give one-time, monthly, or a delayed one-time gifts.
 * Allowed donors to give via Credit/Debit Cards or ACH/EFT.

Skills required:
 * Custom Drupal module development
 * Drush
 * Drupal Form API (advanced usage - both creating my own, and customizing the behaviors of others, including the ones controlled by Commerce which are already pretty complex in their customizations)
 * Drupal Entity API
 * Drupal Commerce
 * Drupal Panels
 * Drupal Views
 * Drupal Queue
 * Drupal Rules
 * Drupal Features
 * Soap, using the nuSoap library, to communicate with the Etapestry API
 * cURL to communicate with Network Merchants

##### Receipt generation system
This system took a CSV file of donation transactions as an import and generated a PDF document with printable receipts formatted to match the customer's stationary. There were several key features to this system:

 * The input file could contain multiple donations per donor and it needed to compile them into a single receipt for each donor that listed all of that donor's donations on a single page.
 * In the event that there were more donations for a given donor than would fit on the page, break to a second page, but maintain all the formatting
 * Output all of this to a PDF file and compile all the receipt PDFs into a single PDF document which was delivered to the user as a download via the browser.
 * The formatted output of the receipt was controlled by a tpl.php file in the module folder, which was loaded via the theme system. I even wrote this in such a way that if we wanted to do the same thing for other clients who had a different format for their receipts, all we would have to do was write a small module with a customized tpl.php file and an alter hook that changed which format to use.

##### Insurance Quote System
This was a web system that collected insurance quotes from website visitors via a multi-step form system. There were 5-6 different types of insurance policies they could request quotes for.

On the back end, these quotes would be stored in the database and then matched up to Insurance Agents who had registered with the site and subscribed to receive leads from the site. It would match the lead with an agent depending on those filters and various business rules that made sure they were distributed fairly. Filters included, the type of insurance, certain risk factors to include or exclude, and location of the applicant.

##### Time keeping system
As part of a team, we developed an in-house time keeping system that provided an HTML/JavaScript interface for logging the time we spent on our work. The reason we did this instead of using other systems was because we set it up so that we could enter all our clients and their projects in the system and we could tag each time entry to a client and project, which gave us a powerful ability to create reports for billing and management purposes.

##### Server Move
This one is non-programming related, and demonstrates my versatility. I oversaw the migration of our servers from one data center to another. At that time we had only one data center and our provider was closing down, so we had to move to a new provider. My role was to take care of the operating system/software configurations of the systems so that the DNS, Web and Mail servers that were being moved would land in the new data center with their new Public IP addresses without too much disruption of service. There was an unavoidable period of down time, but I was able to prepare the systems sufficiently that that downtime was limited to the time it took to physically unmount them, move them, get them remounted and rewired and booted back up. Once that happened there were only a few clicks here and there and we were up.

These were mostly Linux servers running Apache, MySQL, BIND and Qmail

##### Customer Portals
I have built numerous user portals for organizations. Each one has their own quirks. A lot of them require Organic Groups. Others don't. They all require some sort of custom access control set up. I know how to listen to customer specifications about what needs to happen and come up with ways to control user access using roles, permissions, node access, organic groups, views access configurations, entity field access, and custom access hooks/callbacks if needed.

One such portal was for a missionary organization who recorded their donations in Etapestry. Our portal downloaded those donations and make them available for the missionaries to view.

Another portal was for a group that had a hierarchical club organization structure. My team developed a way for organic groups to be sub-groups of each other, which would allow content posted at the top level to appear in subgroup feeds.

##### Etapestry Import Hub
I developed an Entity / Batch API based Import hub for an organization who's database was too complex to import into Etapestry via their file import module (The csv files they had were NOT normalized, having information for up to 3 separate constituents in each line, AND having the same constituent sometimes show up in multiple lines!)

I identified the gotchas of their system and coded an import that would take the CSV files and upload it the way they needed it to. Then I created an Entity / Batch API based system that gave them a place to upload the CSV files for import without having to ask me to do it all the time.

##### Etapsestry Sync Middleware
Another application I developed was for a business client who developed a software that they wanted to sync with Etap. For some reason I don't remember, they couldn't communicate to Etapestry directly. I think there was some limitation in their system that would not allow them to use SOAP, so I developed a webservice that would accept information from their system in XML, reformat it, and transmit it back to Etapestry according to the business rules they needed me to follow.

## Hobbies / Passions
I have lots of interests. My primary passion is for the Lord Jesus Christ. He is my Lord and Savior, and everything I do is ultimately for his glory and to advance his kingdom.

My primary mode of doing this is to care for my family andn serve in my church. There I participate in music ministry. I play Trombone, Guitar and Bass. I also teach the 8-12 year old Sunday School Class. I also serve on our church's Missions Advisory Council.

I also dabble in Reading, Writing, Political/Economic Commentary, Video Games, Board Games, Puzzles - particularly logic puzzles!
