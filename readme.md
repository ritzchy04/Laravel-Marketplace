<p align="center"><img src="https://devitems.com/wp-content/uploads/2016/12/subas-home-02-1-768x576.png"></p>
<p align="center">
 <img alt="GitHub" src="https://img.shields.io/github/license/DesignofCp/Laravel-Authentication.svg">
 <img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/DesignofCp/Laravel-Authentication.svg">
 <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/DesignofCp/Laravel-Authentication.svg">
</p>

### Laravel eCommerce Bootstrap Template
Laravel enhanced the features of this website template. It was a pleasure to bring Laravel to this website template.

- [Laravel Framework](https://github.com/laravel/framework)
- [Laravel Documentation](https://laravel.com/docs)
- [Subas – Electronics eCommerce Bootstrap Template](https://devitems.com/item/subas-electronics-ecommerce-bootstrap-template/)
- [Laravel Website Design Template Demo](https://youtu.be/YqPMXQqKOdY)
- [Laravel Webiste Design Template of Facebook](https://www.facebook.com/277492559820597/videos/1115700328629857/)

### Requirements: 
    Working Laravel Framework (I am using Laravel 5.8)
    MySQL with database created to be used by your application.
    Configuration changes in .env file to set database properties.
    
### Step 1 : Laravel Installation:
Make sure you have a working Laravel application on your machine. Also you have configured your .env file as per the database you are using. Once you have installed laravel. It should have the following folder structure.
Laravel application already have some classes that are specific to the Authentication functionality. Controller that are specific to the authentication module are under app > Controllers > Auth
 
 ### App Service Provider:
 To aviod errores, in the file provider make changes to the AppServiceProvider.php:
 > use Illuminate\Support\Facades\Schema;
 >> Schema::defaultStringLength(191);
>>> However, the changes have been corrected.
