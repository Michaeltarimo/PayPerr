
## How it works

PayPerr script defines two communities, Employer and Freelancer. Employers to post the project with all necessary details and upload it within minutes. Now freelancer browse apt projects and bid. After freelancer completed the project based on winner selected by employer, employer accept that completion and release the payment.

As well as employer can Hire freelancer. Which is used to search suitable freelancer for your projects effortlessly.
 


## Features

### Geo Location Based Listing

Ease of finding your local service provider with our Geo-based listing functionality with crystal clear accuracy.
  
### Intuitive Category Management

Whatever be your business model is, we made our script with dynamic form builder whereby you can create any service to the extent without having any difficulties.

### Dual Sign up

Take pleasure in registering to the freelancer bidding site both as freelancer or employers. It assures hassle-free registration process

### Interoperability

Tired of updating the website whenever the new trend unveils? Agriya's Getlancer Suite is power-packed with Front and Back approach. So you can have an absolute freedom to customize the website easily with your intended data metrics.

### AI Enabled Script

Most of the functionalities are automated as it feels the current stats and takes you to the intended space where you can obtain your needed data as well. We indulged with bot mechanism with the script to make it more friendly with the search engines.

## Getting Started

### Prerequisites

#### For deployment

* PostgreSQL >= 9.4
* PHP >= 5.5.9 with OpenSSL, PDO, Mbstring, JSON and cURL extensions
* Nginx (preferred) or Apache

#### For building (build tools)

* Nodejs
* Composer
* Bower
* Grunt

### Setup

* PHP dependencies are handled through `composer` (Refer `/server/php/Slim/`)
* JavaScript dependencies are handled through `bower` (Refer `/client/`)
* Needs writable permission for `/tmp/` and `/media/` folders found within project path
* Build tasks are handled through `grunt`
* Database schema `/sql/getlancer_with_empty_data.sql`
* Cron with below:
```bash
# Common
*/2 * * * * /{$absolute_project_path}/server/php/Slim/shell/main.sh 1 >> /{$absolute_project_path}/tmp/logs/shell.log 2 >> /{$absolute_project_path}/tmp/logs/shell.log
```

