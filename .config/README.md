# Configuration for PhpStorm

## ````.gitignore````

````gitignore
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
> You can add more information if its required for your project. To learn more :blush: click  here for **[PhpStorm](https://intellij-support.jetbrains.com/hc/en-us/articles/206544839)** & **[Gitignore](https://github.com/github/gitignore)**

## Copyright ©
 
### Add Timestamp
* In the **Settings/Preferences** dialog **Ctrl+Alt+S**, select **Editor | File and Code Templates**.

* On the **Files** tab, click  and specify the name, file extension, and body of the template. And put this:

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

> **Note:** Some Files have different type of **blockquote**. Please ensure that, this comment work for that file; Otherwise rewrite the comment please.

### Copyright Update

* Copy ````Copyright```` folder from ````.idea````
* Paste it to````.idea```` folder in project
* Right click in any ````File```` then click **Update Copyright**
* From **Update Copyright Scope** Window, Select **Whole Project** and put Check Mark :ballot_box_with_check: on **Update exiting copyrights** and click **OK**

## Debugger 🐞

### Xdebug

* To download the ***latest version*** check this **[link](https://xdebug.org/docs/install)**
* Download the ***suitable version*** for your project click **[here](https://xdebug.org/wizard)**
* **Installing on Windows**
    * Move the downloaded file to ````C:\xampp\php\ext````
    * Update ````C:\xampp\php\php.ini```` and change the line
````zend_extension = C:\xampp\php\ext\php_xdebug-xxx.dll````

        > **Note:** ````xxx```` define the version number like ````php_xdebug-2.9.5-7.2-vc15.dll````

* **Installing on Linux & Macs**
    * You can install Xdebug through PECL on Linux & macOS: ````pecl install xdebug````
    * When that is done, you still need to add the correct line to your php.ini: (don't forget to change the path and filename to the correct one — but make sure you use the full path): ````zend_extension="/usr/local/php/modules/xdebug.so"````
    
        > **Note:** You should ignore any prompts to add ````"extension=xdebug.so"```` to ````php.ini```` — this will cause problems.
* To **enable** Xdebug, locate or create the ````[xdebug]```` section in the ````php.ini```` file and update it as follows:

    ````ini
    [xdebug]
    zend_extension="<path to xdebug extension>"
    xdebug.remote_enable=1
    xdebug.remote_port="<the port for Xdebug to listen to>" (the default port is 9000)
    ````

* Restart the web server

### Zend Debugger

* Download the **[Zend Debugger package](https://www.zend.com/downloads/zend-studio-web-debugger)** which corresponds to your operating system.
* Locate the ````ZendDebugger.so```` (Unix) or ````ZendDebugger.dll```` (Windows) file in the directory that corresponds to your version of PHP (for example ````php-7.0.x````).
* Copy the file to your Web server in a location that is accessible by the Web server.
* Open the active ````php.ini```` file in the editor:
* In the **Settings/Preferences** dialog **Ctrl+Alt+S**, click **PHP** under **Languages & Frameworks**.
* On the **PHP** page that opens, click ````...```` next to the **CLI Interpreter** field.
* In the **CLI Interpreters** dialog that opens, the **Configuration File** read-only field shows the path to the active ````php.ini```` file. Click **Open in Editor**.
* Locate or create the ````[Zend]```` section.
* To load the Zend Debugger extension, add one of the following lines inside the ````[Zend]```` section depending on your operating system:

    >| Linux     | Windows|
    >| ----------- | ----------- |
    >| zend_extension=<full_path_to_ZendDebugger.so> | zend_extension=<full_path_to_ZendDebugger.dll> |

* To enable access to Zend Debugger from PhpStorm, add the following lines:

    ````ini
    zend_extension=<full_path_to_zend_debugger_extension>
    zend_debugger.allow_hosts=127.0.0.1
    zend_debugger.expose_remotely=allowed_hosts
    zend_debugger.tunnel_min_port=<any integer value above 1024>
    zend_debugger.tunnel_max_port=<any integer value below 65535>
    ````

* The value of the ````zend_debugger.allow_hosts```` parameter is the IPs of your machine to connect to the server debugger. It could be a comma-separated list of IPs in the format ````X.X.X.X```` (for example, ````192.168.0.6````).

* Restart your Web server.

>Want to know more? :blush: click here for **[Xdebug](https://www.jetbrains.com/help/phpstorm/2020.1/configuring-xdebug.html?utm_campaign=PS&utm_content=2020.1&utm_medium=link&utm_source=product)** & **[Zend Debugger](https://www.jetbrains.com/help/phpstorm/2020.1/configuring-zend-debugger.html?utm_campaign=PS&utm_content=2020.1&utm_medium=link&utm_source=product)**
# Configuration for XAMPP

* Add **PHP PATH** Using **````SETX PATH "C:\xampp\php"````** & **````SETX /m PATH "C:\xampp\php"````** in **CMD**(Admin)
* **Alias** any **Folder** from your **PC** follow this:
    * **Open** ````httpd.conf```` file
    * Add the following line **Under** ````<IfModule alias_module>````
        ````apache
        Alias /xxx "Path to your project"
        ````
    
        >**Note:** ````xxx```` can be replaced by your desired name. Exp. A desired name like "project", so you have to add ````Alias /project "C:/Users/name/project"```` which will follow the address like ````localhost/project````.
    * Add the following line **Before** ````<IfModule headers_module>````:
    
        ````apache
        <Directory "Path to your project">
            AllowOverride All
            Options None
            Require all granted
        </Directory>
        ````
    * **Example:**
        ````apache
        <Directory "C:/Users/name/project">
            AllowOverride All
            Options None
            Require all granted
        </Directory>
        ````