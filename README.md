# Silverstripe One Page Module
[![license - bsd 3 clause](https://img.shields.io/:license-BSD%203--Clause-blue.svg)](https://opensource.org/licenses/BSD-3-Clause)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kMediaGbR/silverstripe-onepage/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kMediaGbR/silverstripe-onepage/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/kMediaGbR/silverstripe-onepage/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/kMediaGbR/silverstripe-onepage/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/kMediaGbR/silverstripe-onepage/badges/build.png?b=master)](https://scrutinizer-ci.com/g/kMediaGbR/silverstripe-onepage/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/kMediaGbR/silverstripe-onepage/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

This module provides a basic skeleton to build one-page sites easily.

## Installation
Best installed via composer. You may clone the repo or download the zip, however you should find a directory called "onepage" with all files in your silverstripe root folder.

### Using Composer
```
composer require kmedia/silverstripe-onepage
```

### Requirements
  * Silverstripe 4

## Usage
### Basic setup
Define a page as page type "One Page Holder" and add some child pages.

### Different page types
You can of course use any page type as a slide. Simply create an own template for inclusion as a slide and add the suffix "_onepage" to it's name. 
See the included file [Page_onepage.ss](templates/Includes/Page_onepage.ss)
