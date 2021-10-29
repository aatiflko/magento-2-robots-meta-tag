“Neo-Robots Meta Tag” extension
=====================
Magento 2 "Robots Meta Tag" extension add a feature which allow admin to add robot meta tag dynamically to category and product from admin panel.
Extension homepage: 

## INSTALLATION

### COMPOSER INSTALLATION
* run composer command:
>`$> composer require aatiflko/magento-2-robots-meta-tag`

### MANUAL INSTALLATION
* extract files from an archive

* deploy files into Magento2 folder `app/code/Neo/RobotsMetaTag`

### ENABLE EXTENSION
* enable extension (use Magento 2 command line interface \*):
>`$> php bin/magento module:enable Neo_RobotsMetaTag`

* to make sure that the enabled module is properly registered, run 'setup:upgrade':
>`$> php bin/magento setup:upgrade`

* [if needed] re-compile code and re-deploy static view files:
>`$> php bin/magento setup:di:compile`
>`$> php bin/magento setup:static-content:deploy`


## HOW TO USE IT:
* to add robots meta tag login to admin panel and navigate to Store => Configuration. At configuration page search for "Neo" tab. Under the tab click on "Neosoft Robots Meta Tag settings" and select the meta tag option. The selected options will appears for each product and category section as a dropdown option "Search Engine Robots" under "Search Engine Optimization" tab. 


Enjoy!

Best regards,
Neosoft Technologies

-------------
