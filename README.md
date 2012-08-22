# PyroCMS Custom String Widget

This is a simple widget that allows you to insert a string anywhere on your site, editable via the widgets panel. 

## Installation

Copy the string directory to your addons/SITE_REF/widgets or addons/shared_addons/widgets folder.

## Usage

Go into the widgets section in your PyroCMS admin section. Drag the string widget into the widget area of your choice. Give it a title, and fill in the string.

Now place the widget into the page or theme where you'd like it to show up.

```javascript
{{ widgets:area slug="string-widget" }}
```
