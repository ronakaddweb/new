#!/bin/sh

MODULES="\
admin_menu-6.x-1.5.tar.gz \
advanced_help-6.x-1.2.tar.gz \
calendar-6.x-2.2.tar.gz \
cck-6.x-2.6.tar.gz \
context-6.x-2.0-beta7.tar.gz \
date-6.x-2.4.tar.gz \
dirtyforms-6.x-1.1.tar.gz \
gmap-6.x-1.1-rc1.tar.gz \
jquery_ui-6.x-1.3.tar.gz \
onbeforeunload-6.x-1.0.tar.gz \
print-6.x-1.10.tar.gz \
quicktabs-6.x-2.0-rc3.tar.gz \
remember_me-6.x-2.1.tar.gz \
views-6.x-2.7.tar.gz \
workflow-6.x-1.3.tar.gz"

for i in $MODULES
do
	wget http://ftp.drupal.org/files/projects/$i
	tar -xzvf $i
	rm $i
done

