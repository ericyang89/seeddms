VERSION=4.3.12
SRC=CHANGELOG inc conf utils index.php languages views op out README.md README.Notification README.Ubuntu drop-tables-innodb.sql styles js TODO LICENSE Makefile webdav install restapi
# webapp

PHPDOC=~/Downloads/phpDocumentor-2.8.1/bin/phpdoc

dist:
	mkdir -p tmp/seeddms-$(VERSION)
	cp -a $(SRC) tmp/seeddms-$(VERSION)
	(cd tmp; tar --exclude=.svn -czvf ../seeddms-$(VERSION).tar.gz seeddms-$(VERSION))
	rm -rf tmp

pear:
	(cd SeedDMS_Core/; pear package)
	(cd SeedDMS_Lucene/; pear package)
	(cd SeedDMS_Preview/; pear package)

webdav:
	mkdir -p tmp/seeddms-webdav-$(VERSION)
	cp webdav/* tmp/seeddms-webdav-$(VERSION)
	(cd tmp; tar --exclude=.svn -czvf ../seeddms-webdav-$(VERSION).tar.gz seeddms-webdav-$(VERSION))
	rm -rf tmp

webapp:
	mkdir -p tmp/seeddms-webapp-$(VERSION)
	cp -a restapi webapp tmp/seeddms-webapp-$(VERSION)
	(cd tmp; tar --exclude=.svn -czvf ../seeddms-webapp-$(VERSION).tar.gz seeddms-webapp-$(VERSION))
	rm -rf tmp

doc:
	$(PHPDOC) -d SeedDMS_Core --ignore 'getusers.php,getfoldertree.php,config.php,reverselookup.php' --force -t html

.PHONY: webdav webapp
