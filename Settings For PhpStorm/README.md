## Add Copyright with Timestamp in *File* in PHP Storm
* In the Settings/Preferences dialog Ctrl+Alt+S, select Editor | File and Code Templates.

* On the Files tab, click  and specify the name, file extension, and body of the template. And put this:

````
/** 
* Created in ${PRODUCT_NAME}.
* Project Name: ${PROJECT_NAME}
* User: Woliul Hasan
* Date: ${DATE}
* Time: ${TIME}
*/
````
* Apply the changes and close the dialog.

## Add and update *Copyright* for every file in PHP Storm

* Copy ````Copyright```` folder from ````.idea````
* Paste it to````.idea```` folder in project