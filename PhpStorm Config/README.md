# Configuration for PhpStorm

## ````.gitignore````

````
# User-specific stuff
.idea/workspace.xml
.idea/tasks.xml
.idea/usage.statistics.xml
.idea/dictionaries
.idea/shelf


# Generated files
.idea/contentModel.xml

# Sensitive or high-churn files
.idea/dataSources/
.idea/dataSources.ids
.idea/dataSources.local.xml
.idea/sqlDataSources.xml
.idea/dynamic.xml
.idea/uiDesigner.xml
.idea/dbnavigator.xml
.idea/webServers.xml
````
###### You can add more information if its required for your project. To learn more click  **[here :)](https://intellij-support.jetbrains.com/hc/en-us/articles/206544839)**

## Copyright ©
 
### Add Timestamp
* In the Settings/Preferences dialog Ctrl+Alt+S, select Editor | File and Code Templates.

* On the Files tab, click  and specify the name, file extension, and body of the template. And put this:

````
/** 
* Created in ${PRODUCT_NAME}.
* Project Name: ${PROJECT_NAME}
* User: Name or ${USER}
* Date: ${DATE}
* Time: ${TIME}
*/
````
* Apply the changes and close the dialog.

### Copyright Update

* Copy ````Copyright```` folder from ````.idea````
* Paste it to````.idea```` folder in project
* Right click in any ````File```` then click ````Update Copyright````
* From ````Update Copyright Scope```` Window, Select ````Whole Project```` and Check mark on ````Update exiting copyrights```` and click ````OK````

## Debugger 🐞

### Xdebug