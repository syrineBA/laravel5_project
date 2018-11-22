<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
     $admins = DB::table('admins')->get();                       
    return view('welcome')->with('admins', $admins); 
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/update', function () {
    return view('update');
});
Route::post('updateClient/{id}','AdminController@updateClient');

Route::post('profile/{id}','AdminController@update_image');


 // ------------ AUTHENTIFICATION -----------------------------
Route::auth();
Route::get('/home', 'HomeController@index');


// ---------------  USERS---------------------------------

      /*categorie*/
    Route::get('/computers', function () {
$produits = DB::table('produits')->get();
    return View ('categorie.computers')->with('produits', $produits); 
});

  Route::get('/phones', function () {
    $produits = DB::table('produits')->get();
    return View ('categorie.phones')->with('produits', $produits); 
});
  Route::get('/printers', function () {
    $produits = DB::table('produits')->get();
    return View ('categorie.printers')->with('produits', $produits); 
});
    Route::get('/laptops', function () {
$produits = DB::table('produits')->get();
    return View ('categorie.laptops')->with('produits', $produits); 
});
   Route::get('/see_more', function () {
    $produits = DB::table('produits')->get();
    return View ('produit')->with('produits', $produits); 
});

   /* panier */ 

      Route::get('/panier', function () {
    $paniers = DB::table('paniers')->get();
    return View ('panier')->with('paniers', $paniers); 
});
Route::get('deletePanier/{id}','AdminController@deletePanier');

Route::get('AddPanier/{id}/{email}','AdminController@AddPanier');

Route::get('/delivery', function () {
    $paniers = DB::table('paniers')->get();
    return View ('delivery')->with('paniers', $paniers); 
});



// ---------------------------ADMIN -----------------
   

                /*produit*/
 Route::get('/admin', function () {
 $admins = DB::table('admins')->get();                       
    return view('admin.admin')->with('admins', $admins); 
});

 
 Route::get('/produits', function () {
 	$produits = DB::table('produits')->get();
    return View ('admin.produitA')->with('produits', $produits); 
});
Route::get('/ajout_produit', function () {
  //$admins = DB::table('admins')->get();                       
    return view('admin.ajout_produit');//->with('admins', $admins); 
});
Route::post('/insertProduit', 'AdminController@insertProduit');
Route::get('deleteProduit/{id}','AdminController@deleteProduit');


            /*client*/
Route::get('/listClient', function () {
    $users = DB::table('users')->get();
    return view('admin.listClient')->with('users', $users);
});
Route::get('deleteClient/{id}','AdminController@deleteClient');




        /*admins*/
Route::get('/listAdmin', function () {
    $admins = DB::table('admins')->get();
    return view('admin.listAdmin')->with('admins', $admins);
});
Route::get('deleteAdmin/{id}','AdminController@deleteAdmin');

Route::get('/register_admin', function () {
 // $admins = DB::table('admins')->get();                       
    return view('admin.register_admin');//->with('admins', $admins);
});
Route::post('/insertAdmin', 'AdminController@insertAdmin');





