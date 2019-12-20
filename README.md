# AdminDashboard

A admin dashboard template. Comes with 4 built-in menus and javascript to handle opening and closing of menus.

## Getting Started

### Cloning the Repo

To get started clone this repo somewhere in your project.

```bash
> git clone https://github.com/pudge330/AdminDashboard.git
```

### Customizing the CSS

AdminSkeleton uses SASS, to customize the look and feel just override any of the settings found in `css/src/_setup.scss` and include the `main.scss` file found in the same directory.

```scss
// file: admin-skeleton.scss

// Make the header background color white
$skeleton-color-headerBackground: #fff;
// Make the menu toggles semi-transparent black
$skeleton-color-headerMenuActionFocusBackground: rgba(0, 0, 0, 0.2);

@import 'path-to-adminskeleton/css/src/main.scss';
```

Then build the final css.

```bash
> sass admin-skeleton.scss:admin-skeleton.css
```

### Setting up Your HTML

Include the skeleton's CSS file or include it in your build.

```html
<link href="/admindashboard/css/main.min.scss" type="text/css" rel="stylesheet">
```

Include the javascript.

```html
<script src="/admindashboard/js/vendor/bglib.min.js"></script>
<script src="/admindashboard/js/skeleton.min.js"></script>
```

AdminSkeleton also includes require js copies of the javascript `skeleton-requirejs.js` and `skeleton-requirejs.min.js`

I plan to update the javascript in order to remove jQuery's dependency and I also plan to bundle a custom build of bglib into it to make it a single javascript file.

### Rendering in PHP

To render the skeleton you need to include or render the `php/skeleton.html.php` template file. You can do this multiple ways. You will also need to have a `$data` variable set in the current context with an associative array containing the templates configuration options.

```php
$data = [
	// AdminSkeleton's configuration options
];
include 'path-to-adminskeleton/php/skeleton.html.php';
```

If the `$data` variable conflicts with one in your project you can wrap everything up in a function.

```php
function renderAdminSkeleton($data) {
	include 'path-to-adminskeleton/php/skeleton.html.php';	
}
renderAdminSkeleton([
	// AdminSkeleton's configuration options
]);

// or as a closure
$renderAdminSkeleton = function($data) {
	include 'path-to-adminskeleton/php/skeleton.html.php';	
};
$renderAdminSkeleton([
	// AdminSkeleton's configuration options
]);
```

## Template Configuration Options

| Name | Type | Description |
| ---  | --- | --- |
| title | String | Page header title |
| version | String | System version string/HTML, bottom of main menu |
| mainMenu | Array | * An array representing a menu |
| headerMenu | Array | * An array representing a menu |
| memberLabel | String | A label for the header's dropdown menu, usually a member |
| memberImage | String | A image for the header's dropdown menu, usually a member photo or avatar |
| lockIcon | Bool | Whether or not to show the lock icon when the main menu doesn't exists, useful for login pages |
| hideEmptyHeader | Bool | Whether or not to show output header if empty when true |
| mainMenuState | Bool | Where or not the main page menu is open (true) or closed (false) |
| appMenuState | Bool | Where or not the app page menu is open (true) or closed (false) |
| headerMenuState | Bool | Where or not the header page menu is open (true) or closed (false) |
| sideMenuState | Bool | Where or not the header page menu is open (true) or closed (false) |
| mainMenuIcon | Bool | Main menu svg icon |
| mainMenuLockIcon | Bool | Main menu lock svg icon |
| appMenuIcon | Bool | App menu svg icon |
| headerMenuIcon | Bool | Header menu svg icon |
| sideMenuIcon | Bool | Side menu svg icon |
| content | Array | + Array containing content for various parts of the page |

### * Menus

- name - the menu name
- links - the menu links
	- text
	- url
	- urlNewWindow
	- icon
	- image
	- active
	- specialContent
	- toggle
	- links
- toggleIcon - svg toggle icon

### + Content

- page
- header
- headerMenu
- mainMenu
- sideMenu
- appMenu
- topToolbar
- bottomToolbar

## Sass Variable Reference

```scss
$skeleton-breakpoint-sm: 38em !default;
$skeleton-breakpoint-md: 46em !default;
$skeleton-headerSmHeight: 40px !default;
$skeleton-headerMdHeight: 50px !default;
$skeleton-pageMenuTiming: 0.4s !default;
$skeleton-color-headerBackground: #00AAE4 !default;
$skeleton-color-headerColor: #fff !default;
$skeleton-color-headerMenuActionColor: $skeleton-color-headerColor !default;
$skeleton-color-headerMenuActionFocusColor: null !default;
$skeleton-color-headerMenuActionFocusBackground: rgba(255, 255, 255, 0.3) !default;
$skeleton-color-headerMemberColor: $skeleton-color-headerColor !default; //--unused
$skeleton-color-headerMemberFocusColor: null !default; //--unused
$skeleton-color-headerBrandingColor: null !default;
$skeleton-color-headerLogoutHover: #FFCDD2 !default;
$skeleton-color-pageBackground: #fff !default;
$skeleton-color-pageColor: #222 !default;
//--fonts
$skeleton-font-base: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif !default;
$skeleton-font-heading:  "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif !default;
$skeleton-font-nav: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif !default;
$skeleton-font-map: (
	base: $skeleton-font-base
	,heading: $skeleton-font-heading
	,nav: $skeleton-font-nav
);

$skeleton-widget-adminNav-menuLinkColor: #000 !default;
$skeleton-widget-adminNav-menuLinkBackground: null !default;
$skeleton-widget-adminNav-menuLinkFocusColor: null !default;
$skeleton-widget-adminNav-menuLinkFocusBackground: #ccc !default;
$skeleton-widget-adminNav-menuLinkFocusBorder: #aaa !default;
```
