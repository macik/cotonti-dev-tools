# Cotonti Development tools #

> Helpful tools to maintain Cotonti CMF Coding Style and speed up development

Snippets, tools and common rules described here are actual for `Cotonti Siena` version. 

*Note: This collection is still under development and extending, but can be used «as is» now.*

There are a lot of tools for developers that can help in development process or even move your skills to a new level. If you try to be a good enough and make a good products you should know best practices for code generation, presentation and release at least.
We can not recommend any specific tool or way of programming as development stack every user choose can differ a lot from each other, but we provide info for some of it and point to some ways to do so.


## Coding standards ##

Main rules used for Cotonti project development you can find [here](https://www.cotonti.com/docs/devel/coding_style).
The page is outdated a little, but you can learn Cotonti code style basics.
In a two words, Cotonti mainly uses [PSR-2](http://www.php-fig.org/psr/psr-2/) rules, but still not fully compliant with this standard. Base difference is Tabs indentation used for Cotonti project PHP files.


## Eclipse IDE ##

All Eclipse IDE related files can be found in `eclipse` sub folder.

### Code Formatter ###

To enable: select menu `Window → Preferences→` then `PHP → Code style → Formatter` and press `Import`, select file `PHP-formatter-styles.xml`. 

This styles based on [PSR-2](http://www.php-fig.org/psr/psr-2/) rules with some changes (tabs for indentation, etc.) to meet current state of Cotonti coding style guides.

**Not implemented** in these styles:
 * multiline SQL queries formating
 * switch/case `break` operators indent
 * …may be something else — just make an [issue](https://github.com/macik/cotonti-coding_style/issues/new).

### Code snippets ###

  *…under development…*

Using code snippets can improve developing in times. It's helpful for new extension developing as a extension files templates.

For speed up extension development you can check these links:
 * `Extension template` — Cotonti plugin for fast «barebone» extension creation [GitHub link](https://github.com/macik/cot-extension_template)
 * `Cotonti Developer Tools` Windows utility for extension generation and conversion  [:ru: link](http://littledev.ru/news/cotonti/cotontidev/cotdevtools.html) 

### Emmet plugin ###

[Emmet](http://emmet.io/) is a plugin which greatly improves HTML & CSS workflow.
It's available for many modern editors and IDE. Here you can found it as [Eclipse IDE plugin](https://github.com/emmetio/emmet-eclipse#readme).

#### XTemplate snippets ####

Emmet plugin is useful itself. More over we provide some snippets to faster template (XTemplate files) development with Emmet.

To use Template snippets open Eclipse preferences and go to `Emmet` → `Snippets`.
Click `Import...` button and select the `Emmet-snippets-xtemplate.xml` file.

List of some snippets:
* `BLOCK` → `<!-- BEGIN: --> <!-- END: -->` block
* `FOR` → `<!-- FOR {KEY}, {VALUE} IN {MY_ARRAY} --> <!-- ENDFOR -->`
* `IF` → `<!-- IF () --> <!-- ENDIF -->`

### Using xDebug ###

There are many «how-to's» around the net about setting up xDebugger with Eclipse IDE. Here you can find small file `xDebug-php-ini.ini` with basic settings that provides debugging environment. This setting need to be located in you `php.ini` file of working copy of PHP install folder. Be sure for actual path in `zend_extension` parameter and that port specified in `xdebug.remote_port` are free from use of other programs.


## Third party tools and how-to's ##

Here you can found info about universal tools or specialized third party tools for developing with Cotonti.

### Git and .gitignore ###

Using you own development environment forces to exclude some development specific 
files from project (it can be logs, IDE setting files, third-party tools, etc).
The easiest way is to use `.gitignore` file. Example of this kind file for Eclipse IDE can be found in `eclipse/Eclipse.gitignore`.

Other IDE specific `.gitignore` can be [found here](https://github.com/github/gitignore) or you can build your own with [gitignore.io](https://www.gitignore.io/)


#### Cotonti project .gitignore ####

Cotonti project tries to maintain its own .gitignore file as clear as it possible. This means that adding some OS/IDE specific files (related to your specific environment) is not a good idea. So the right way to set up exclusions for these files is to [Use global .gitignore](https://help.github.com/articles/ignoring-files/#create-a-global-gitignore) or [Use explicit repository excludes](https://help.github.com/articles/ignoring-files/#explicit-repository-excludes).

### Coding standards fixer ###

[PHP Coding Standards Fixer](http://cs.sensiolabs.org/) is PHP utility (that can be installed via Composer) that helps to fix common formating inconsistency in your code. It allows to analyze and fix PHP code to conform PSR standards. 
As Cotonti used slightly different coding style rules you must tune «CS Fixer» settings to meet them. Here you can find config file (`.php_cs`) with Cottonti specific settings. Copy it to folder with your code and run «CS Fixer» with command line:
```
php php-cs-fixer.phar fix
```
You should see something like this:
```
Loaded config from "\www\sites\test\.php_cs"
Fixed all files in 0.266 seconds, 3.750 MB memory used
```

### «Editor config» ###

[Editor config](http://editorconfig.org/) is a name of standard that helps developers define and maintain consistent coding styles between different editors and IDEs. The EditorConfig project consists of a file format for defining coding styles and a collection of text editor plugins that enable editors to read the file format and adhere to defined styles.

File with editors configuration named `.editorconfig` and located in root folder.

## Sublime text ##

A [Sublime Text](http://www.sublimetext.com/) package containing frequently used snippets for [Cotonti CMF](Cotonti CMF) developers.

 > Link: https://github.com/trustmaster/sublime-cotonti

## Universal tools ##

Be sure that some of this standalone tools you can find as a plugin for your preferred IDE. Also you can find even more just with simple internat search.

### Javascript files tools ###

* [Closure compilier](https://github.com/google/closure-compiler) - **JavaScript** files minimizer (allow to create source map files)

### CSS files tools ###

[CSSComb](http://csscomb.com/) — prettify

### Graphic files tools ###

[Image Catalyst](https://github.com/lorents17/iCatalyst) — Quite possibly best tool for Windows platform to lossless image compression

