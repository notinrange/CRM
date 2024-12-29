
# CRM Using Laravel 9.52.18 and PHP 8.0.28

## Used Spatie for Authentication of Admin Permissions

## Database Structure

### 1. Users
```
$table->string('first_name');
$table->string('last_name');
$table->string('email')->unique();
$table->timestamp('email_verified_at')->nullable();
$table->string('password');
$table->rememberToken();
$table->timestamps();
```
### 2. Client
```
$table->string('contact_email')->unique;
$table->string('contact_phone_number');
$table->string('company_name');
$table->string('company_address');
$table->string('company_city');
$table->string('company_zip');
$table->string('company_vat');
```
### 3. Projects
```
$table->string('contact_email')->unique;
$table->string('contact_phone_number');
$table->string('company_name');
$table->string('company_address');
$table->string('company_city');
$table->string('company_zip');
$table->string('company_vat');
```
### 4.Tasks
```
$table->string('title');
$table->text('description');
$table->foreignId('user_id')->constrined();
$table->foreignId('client_id')->constained();
$table->foreignId('project_id')->constrained();
$table->date('deadline_at');
$table->string('status');   
```


## Steps to Run Project

### Step 1 [Install PHP](https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/)


### Step 2 [Install Composer and Laravel Setup](https://gist.github.com/bradtraversy/7485f928e3e8f08ee6bccbe0a681a821) 

Give minicrm as PROJECT_NAME 

### Step 3 
Create Database in any Database (I used Sql of PhpMyAdmin) and fill details in  .env file of project
### Step 4 RUN these commands in terminal windows

To migrate all data in Database
```
php artisan migrate
```

To Seed fake data for testing
```
php artisan db:seed
```

To Run Project
```
php artisan migrate
```

### Step 5
Login as Admin 
```
username = admin@admin.com
password = secretadmin
```

### [Project Demo Link](https://drive.google.com/file/d/1Xyh2kwmJIkeYlhw0K5U7cd0MpoYCRohY/view?usp=sharing)