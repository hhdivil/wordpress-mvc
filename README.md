# Wordpress MVC

A plugin that gives you a basic mvc-style framework to build Wordpress plugins with

## Example Usage

You can check out my sample project here: https://github.com/hhdivil/sample-wordpress-mvc-plugin

Put both plugins in wp-content/plugins/ and customise the sample as you see fit to get started

## Shortcodes

Make sure you add two slashes, action defaults to "index"

```
[wpmvc controller="MVCSample\\Controller\\HomeController" action="sample"]
```

## Planned Features

Please feel free to request additions, or create a pull request if you think you can implement yourself

- Composer support
- Improve autoloader
- Helper functions for getting data from $_GET and $_POST including sanitisation
