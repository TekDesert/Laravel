Laravel version used here : 8

You can create the Laravel project with composer by doing : "composer create-project laravel/laravel myproject"

You then need to move into the project folder and go to the ".env" file.

You can from there change the Database config for MySQL and put in your credentials


Once this is done, you can test your connection by doing the following: 

1. Create a controller based on your database table : "php artisan make:controller Table_name --api" (it will be created in app/Http/controllers)

------------------------------------ Optional to test DB connection ------------------------------------

2. Specify inside the controller's index function the DB method by : 
	2.1 importing the DB class : "use Illuminate\Support\Facades\DB;"
	2.2 create and return variable to test the query in the index function: "$users = DB::select('select * from table_name);return $users;"

3. you can now test your view by going in the "routes/api.php" file:
	3.1 import the controller :"use App\Http\Controllers\yourController;"
	3.2 create a route : "Route::get('/db', [yourController::class, 'index']);" (we are calling the index function from the Controller)

Launch the server in the cmd with : "php artisan serve", you can see the result in the link http://127.0.0.1:8000/api/db
------------------------------------------------------------------------------------------------------------

2. Create the Model from the database : 
	2.1 create the model "php artisan make:model Table_name" (the model will be created in app/Models/yourModel)
	2.2 specify the table it refers to : "protected $table = 'table_name';"
	2.3 specify the fields that can be filled with POST requests "protected $fillable = ['column_name','column_name2'...];"
	2.4 if there are no "created at" column in your DB add "public $timestamps = false;"

3. Specify inside the controller's index function the Model it refers to : 
	3.1 import the Model : "use App\Models\your_Model;"
	3.2 create and return variable to test the query in the index function: "$users = your_Model:all();return $users;"

4. you can now test your view by going in the "routes/api.php" file:
	4.1 import the controller :"use App\Http\Controllers\yourController;"
	4.2 create a route : "Route::get('/db', [yourController::class, 'index']);" (we are calling the index function from the Controller)

Launch the server in the cmd with : "php artisan serve", you can see the result in the link http://127.0.0.1:8000/api/db