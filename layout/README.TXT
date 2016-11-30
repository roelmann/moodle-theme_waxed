THEME_STAGETWO BUILDING NOTES
=============================

For the purposes of theme_waxed the layout files are only those which have been
specifically altered from those in theme_boost.
This was the obvious option, rather than cloning all the layout files from theme_boost
as it mirrors the way themes are cloned prior to the use of mustache templates.

The main consideration then becomes in the find/replace theme naming that happens when
a theme is cloned. The layout files call templates and the templates may be either in
this theme, or in the parent - templates are called as location/template_name (eg.
theme_boost/header or theme_waxed/socialicons) and so care must be take with the
renaming when cloning to ensure that template calls point to the correct location. The
alternative is to move all templates to the new theme as well - I have not done this for
theme_waxed from theme_boost as there are so many that would effectively be cloning the
entire theme and the consequent workload for ongoing maintenance. However, if then cloning
theme_waxed, that would be a possibility because of the smaller number of both layout
files and template.mustache files to manage.
