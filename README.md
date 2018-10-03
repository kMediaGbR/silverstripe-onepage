# Silverstripe One Page Module
This module provides a basic skeleton to build one-page sites easily.

## Installation
Best installed via composer. You may clone the repo or download the zip, however you should find a directory called "onepage" with all files in your silverstripe root folder.

### Using Composer
```
composer require kmedia/silverstripe-onepage master
```

### Requirements
  * Silverstripe 4

## Usage
### Basic setup
Define a page as page type "One Page Holder" and add some child pages.

### Different page types
You can of course use any page type as a slide. Simply create an own template for inclusion as a slide and add the suffix "_onepage" to it's name. 
See the included file [Page_onepage.ss](templates/Includes/Page_onepage.ss)
