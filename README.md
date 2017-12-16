Project 	- CMSGears (http://www.cmsgears.org)

Template  	- Application

License 	- GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

Description - The application template requires below listed modules, plugins, themes and widgets freely provided by CMSGears.

Modules
------------------------------------------
1. Core Module to manage site users, galleries, newsletters, roles and permissions.
2. Forms Module to accept forms in both Ajax and regular way.

Plugins
------------------------------------------
1. File Manager Plugin provide default component to accept uploaded files and File Uploader Widget to uploads files.

Widgets
------------------------------------------
1. CLEditor Widget can be used to edit content using CLEditor WYSIWYG editor.
2. Block Widget can be used to form pages using Blocks.
3. Nav Widget can be used to form navigation menus.
3. Login Widget can be used to login or register on site using Ajax.
4. Gallery Widget can be used to show Image Galleries.
6. Newsletter Widget can be used to allow site users to register for news and updates from site.
7. Form Widget can be used to display forms stored in database using yii way.
8. Ajax Form Widget can be used to display forms stored in database. These can be submitted using Ajax.

Themes
------------------------------------------
1. Application Theme provide layouts and views for both Core and Forms modules.

Template Details
=========================================
The Application Template is a group of directories and configuration files used to manage applications.

It also provide DB configuration having required test data. The uploads directory is uploaded by default gallery used on landing page.

Template Demo
=========================================
1. Frontend - https://demo.cmsgears.com/templates/application (demouser@cmsgears.com, test#123)

Real time emails are disabled on demo sites and the database reset is done every hour.

Template Installation
=========================================

The Application Template can be installed via composer using the below mentioned command. To install composer, please refer to their official site https://getcomposer.org.

We can install release and pre-release i.e. alpha, beta versions using composer as mentioned below. 

```
// Release Versions

php composer.phar create-project --prefer-dist --stability=stable cmsgears/template-application appdemo

or

composer create-project --prefer-dist --stability=stable cmsgears/template-application appdemo
```
We can also use below mentioned commands to access the pre release code
```
// Pre-release Versions

php composer.phar create-project --prefer-dist --stability=<alpha or beta or RC> cmsgears/template-application appdemo

or

composer create-project --prefer-dist --stability=<alpha or beta or RC> cmsgears/template-application appdemo
```

If we are using Apache web server, we need to run either of the above mentioned command under Apache web root directory. More details can be found at http://www.cmsgears.org.

We can also install the template for latest code by cloning Application Template for the pre-release branch i.e. alpha, beta. In this case, we need to install composer.json file to initialise vendor directory.

Template Configuration - New
=========================================

1. Create the database, database user and update both the environments config - environments/dev/common/config/config-env.php, environments/prod/common/config/config-env.php. The default database and database user are appdemo.
2. To trigger real-time mails in production environment, remove the config param 'useFileTransport' from the environments/prod/common/config/config-env.php.
3. Install the DB using all-in-one-d.sql provided within the console/migrations directory. We might need to change database name if it's different than appdemo.
4. Run the php script init.php to initialize the application for the predefined environments. The script will ask to choose environemnt among prod or dev.
5. Update htaccess located under template root based on your web server needs. More details about live application settings can be found at http://www.cmsgears.org.
6. Download the Application Themes and place them under <template root>/themes/app directories. 
7. Now we can run the template using our preferred browser. Example links are as mentioned below.
9. By default all the files uploaded by users will be stored in uploads directory.

```
Application - http://localhost/appdemo/application/web
```

Template Configuration - Update
=========================================

We can update the dependencies using composer.json file located at the root of template. Once done the standard composer command can be used to update dependencies.

Default Pages
=========================================

The Application Theme installed for Application Template provide views for default system pages as listed below.

Public Pages
----------------------------
1. Landing - Site index page.
2. Login - Login page allows users to login.
3. Register - Register page allows users to sign up.
4. Confirm Account - Users can confirm account by following the link sent to their email while submitting Register form.
5. Forgot Password - It can be used to generate password reset link.
6. Reset Password - Users can reset password by following the link sent to their email while submitting Forgot Password form.
7. Activate Account - User accounts added by site admin can be activated using this page.

Private Pages
----------------------------
1. User Home - Page displayed on login.
2. User Profile - User profile page allows users to configure their profile details.
3. User Settings - Settings page allows users to configure settings including account, notifications, reminders.
