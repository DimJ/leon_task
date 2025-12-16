<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
<a href="https://vuejs.org/" target="_blank"><img src="https://cdn.shopify.com/s/files/1/0533/2089/files/vuejs-tutorial.png?v=1509471047&originalWidth=1848&originalHeight=782&width=1800" width="400" alt="Vue JS Logo"></a>
<a href="https://www.mongodb.com/" target="_blank"><img src="https://2024.allthingsopen.org/wp-content/uploads/2024/05/Gold_MongoDB_FG.jpg" width="400" alt="MongoDB Logo"></a>
<a href="https://mailchimp.com/" target="_blank"><img src="https://easydigitaldownloads.com/wp-content/uploads/edd/2019/05/mailchimp-product-image.png" width="400" alt="MailChimp Logo"></a>
</p>

## Prerequisites
- Linux image
- Git
- Composer
- CURL
- PHP-Version >= 8.3

## Installation

- git clone https://github.com/DimJ/leon_task.git
- cd leon_task
- composer install
- composer require mongodb/mongodb --ignore-platform-reqs
- composer require jenssegers/mongodb --ignore-platform-reqs

## Setting the credentials

Go to config/app.php and change the following variables:
- mongo_uri
- mailchimp_code
- mailchimp_audience_id
- mailchimp_id  

## Check the application

Open your browser and go to http://localhost/leon_task/public/index.php/users



Enjoy!
