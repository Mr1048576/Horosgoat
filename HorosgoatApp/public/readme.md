# Exercise for using Modernizr

Input type date works in current stable Chrome and Opera but not in Firefox and a lot of other browsers.
See http://caniuse.com/#search=date

Use the [Pikaday](https://github.com/dbushell/Pikaday) polyfill (already defined in bower.json dependencies) to fix it in the other browsers.

## Get your setup sorted
Navigate to the root of this project and install the dependencies for your build system and static server:

```
$ npm install
```

The dependencies from package.json are now installed, you should be able to run `gulp` in this project.

Now, get Pikaday and Modernizr. It's defined in `bower.json` so go ahead and run:

```
$ bower install
```

## Start

Be sure all your resources are included in the page.
jQuery and Pikaday were downloaded by bower, a Modernizr build lives in `/lib`.

Start a static webserver (will run on port 4444 by default) and a live reload server by running:

```
$ gulp watch
```

You'll get to see something like.
Be sure to check if your browser extension is working.

```
[12:24:30] index.html was reloaded.
[12:24:30] Live reload server listening on: 35729
```

## To do
- Add a date input type to the page.
- Test in a couple of browsers (Blink based Chrome/Opera vs. Firefox for example). Notice the difference.
- Use Modernizr to load in the needed Pikaday resources (JS, CSS) if the date input type is not supported.
- Ensure the Pikaday library is loaded and working in full force so you can use a datepicker widget in Firefox / Safari / IE.
- When the media query does not pass, the extra Pikaday resources should not be loaded and Pikaday should not be instantiated. Use Modernizr to test for this.

```
@media all and (min-width:600px)
```

## Resources
- http://modernizr.com/docs/
- https://github.com/dbushell/Pikaday
- http://caniuse.com/#search=date
