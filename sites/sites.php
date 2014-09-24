<?php 
/**
 * @file
 * Configuration file for Drupal's multi-site directory aliasing feature.
 *
 * Drupal searches for an appropriate configuration directory based on the
 * website's hostname and pathname. A detailed description of the rules for
 * discovering the configuration directory can be found in the comment
 * documentation in 'sites/default/default.settings.php'.
 *
 * This file allows you to define a set of aliases that map hostnames and
 * pathnames to configuration directories. These aliases are loaded prior to
 * scanning for directories, and they are exempt from the normal discovery
 * rules. The aliases are defined in an associative array named $sites, which
 * should look similar to the following:
 *
 * $sites = array(
 *   'devexample.com' => 'example.com',
 *   'localhost.example' => 'example.com',
 * );
 *
 * The above array will cause Drupal to look for a directory named
 * "example.com" in the sites directory whenever a request comes from
 * "example.com", "devexample.com", or "localhost/example". That is useful
 * on development servers, where the domain name may not be the same as the
 * domain of the live server. Since Drupal stores file paths into the database
 * (files, system table, etc.) this will ensure the paths are correct while
 * accessed on development servers.
 *
 * To use this file, copy and rename it such that its path plus filename is
 * 'sites/sites.php'. If you don't need to use multi-site directory aliasing,
 * then you can safely ignore this file, and Drupal will ignore it too.
 */

/**
 * Multi-site directory aliasing:
 *
 * Edit the lines below to define directory aliases. Remove the leading hash
 * signs to enable.
 */
$sites = array (
  'www.givingsomething.o1.albatrossdemos.com' => 'givingsomething.o1.albatrossdemos.com',
  'www.evanshagen.com' => 'evanshagen.com',
  'bouldersec.com' => 'bouldersmartenergy.com',
  'bouldersmartenergycoalition.com' => 'bouldersmartenergy.com',
  'www.bouldersec.com' => 'bouldersmartenergy.com',
  'www.bouldersmartenergy.com' => 'bouldersmartenergy.com',
  'www.bouldersmartenergycoalition.com' => 'bouldersmartenergy.com',
  'reclaimedfurnituredenver.com' => 'revamptgoods.com',
  'revampedgoods.com' => 'revamptgoods.com',
  'www.reclaimedfurnituredenver.com' => 'revamptgoods.com',
  'www.revampedgoods.com' => 'revamptgoods.com',
  'www.revamptgoods.com' => 'revamptgoods.com',
  'www.cohealthinitiative.org1' => 'cohealthinitiative.org1',
  'www.bouldersmartenergy.com1' => 'bouldersmartenergy.com1',
  'www.revamptgoods.com1' => 'revamptgoods.com1',
  'alpinesource.dev.o1.albatrossdemos.com' => 'thealpinesource.com',
  'www.thealpinesource.com' => 'thealpinesource.com',
  'corpsgiving.dev.o1.albatrossdemos.com' => 'corpsgiving.com',
  'www.corpsgiving.com' => 'corpsgiving.com',
  'www.clancyphilbrick.com' => 'clancyphilbrick.com',
  'oasiscenterinc.info' => 'oasiscenterinc.com',
  'oasiscenterinc.net' => 'oasiscenterinc.com',
  'oasiscenterinc.org' => 'oasiscenterinc.com',
  'www.oasiscenterinc.com' => 'oasiscenterinc.com',
  'www.oasiscenterinc.info' => 'oasiscenterinc.com',
  'www.oasiscenterinc.net' => 'oasiscenterinc.com',
  'www.oasiscenterinc.org' => 'oasiscenterinc.com',
  'www.dev.givingsomething.com' => 'dev.givingsomething.com',
  'killmerlane.com' => 'kln-law.com',
  'www.killmerlane.com' => 'kln-law.com',
  'www.kln-law.com' => 'kln-law.com',
  'www.givingsomething.dev.albatrossdemos.com' => 'givingsomething.dev.albatrossdemos.com',
  'www.test1.albatrossdemos.com' => 'test1.albatrossdemos.com',
  'cohealthaccess.com' => 'cohealthinitiative.org',
  'cohealthaccess.net' => 'cohealthinitiative.org',
  'cohealthaccess.org' => 'cohealthinitiative.org',
  'cohealthaccess.us' => 'cohealthinitiative.org',
  'cohealthinitiative.net' => 'cohealthinitiative.org',
  'cohealthinitiative.us' => 'cohealthinitiative.org',
  'www.cohealthaccess.com' => 'cohealthinitiative.org',
  'www.cohealthaccess.net' => 'cohealthinitiative.org',
  'www.cohealthaccess.org' => 'cohealthinitiative.org',
  'www.cohealthaccess.us' => 'cohealthinitiative.org',
  'www.cohealthinitiative.net' => 'cohealthinitiative.org',
  'www.cohealthinitiative.org' => 'cohealthinitiative.org',
  'www.cohealthinitiative.us' => 'cohealthinitiative.org',
);
