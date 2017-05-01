THEME_WAXED
===========

Theme_Waxed is a child theme of Moodle's new core theme Boost.

It is built on Bootstrap4 and Mustache templates.

In addition to Boost's preset settings, Wax adds:

1. Presets - presets added by ftp/ssh to the theme/scss/presets folder will
be automatically added to the presets drop down, in addition to those uploaded
via the user interface.
2. Colours - additional brand colour pickers to fine tune the selected presets,
along with the standard pre/post raw scss custom settings.
3. Content - a footnote setting to add standard content into the footer space
4. Heading and images - add a page background image and a default heading background
image - the heading image can be overridden at a course level by adding an image
banner to the course summary files. A separate login page background image can also
be added.
5. Social networking icons - a panel of social icons can be created, including self-
defined icons.

Waxed is intended to be the stable release version of development work and
experimentation being carried out in theme_stagetwo. So if you would like to
make suggestions for further development or improvements, feel free to contact
me through https://github.com/roelmann and see any testing and development being
carried out on stagetwo prior to release here on theme_waxed.

Richard

CHANGELOG
---------
3.3.0.1         Add default images to body, page-header and login page
3.3.0.0         Change setting to reflect new scsscode setting type
                Changes to default preset/default background images
                Replace fontawesome CDN with Moodle core use of FA
3.2.2.0         Tidy up all the classes etc to remove the ones not edited
                in Waxed
                Code tidy to allow further use as a development base
3.2.1.0a        Add thirdpartylibs.xml to cover preset bootswatch files
                Add fonts.css to call fonts for presets due to bug in reading font imports
3.2.0.0.f       Change default preset to be based on Cerulean rather than Flatly (Issue#5)
                Correct minor typos and suggestions found in plugin submission review
                Add Travis.yml for automated testing

3.2.0.0.e       Adapt presets for changes in core (loses font link to googleapis)
3.2.0.0.d       GitHub Issue #1 - Missing settings cog in activities
                                - updated core_renderer
3.2.0.0.c       MDL-56586
3.2.0.0.b       MDL-57232
