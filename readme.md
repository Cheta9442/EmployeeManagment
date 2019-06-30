## Installation Steps and Commands ##

Step 1 : Clone repo in root directory using below command <br>
    <b>git clone https://github.com/Cheta9442/EmployeeManagment.git
    
Step 2 : Install composer (Run only if the vendor folder is miising after cloning)<br>
    <b>composer install </b>
    
Step 3 : Configure the database in .env file ie. datatbase name,username anad password

Step 4 : migrate the tables using command :<br>
        <b>php artisan migrate</b>
        
Step 5 : Seed the table with default record by using command : <br>
        <b>php artisan db:seed --class=EmployeesTableDataSeeder</b>
          
Step 6 : Clear all cache and configuration using command :<br>
        <b>php artisan config:clear</b><br>
        <b>php artisan config:cache</b>
        
Step 7 : Run the application using command :<br>
        <b>php artisan serve</b>
        
Step 8 : Start using the application By below credentials :<br>
        <b>email : admin@admin.com</b><br>
    <b>password : admin</b>
