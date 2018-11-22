<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input ;
use App\Http\Controllers\Auth;
use DB ; 
use App\produits;
use App\user;
use App\admins;
use App\paniers;
use Image;
class AdminController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

 /// ---------------------les produits ----------------------------------
    public function insertProduit(Request $req)
    {   
        $title = $req->input('titre');
        $categorie = $req->input('categorie');
        $description = $req->input('description');
        $prixProduit = $req->input('prixProduit');

$name=$_FILES['image']['name'];
$picture = $_FILES['image']['tmp_name'];
$nom = "uploads/image/$name";
$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
$data = array('title'=>$title,'categorie'=>$categorie,'description'=>$description,'prix'=>$prixProduit,'image'=>$name);
DB::table('produits')->insert($data);
return redirect('produits');
    }

    public function deleteProduit($id)
    {    $produits = produits::find($id);
        $produits->delete();     
    return redirect('produits');
    }

//// ------------------------les clients  -----------------------

      public function deleteClient($id){
    $users = user::find($id);
        $users->delete();
    return redirect('listClient');   
    }

    public function updateClient(Request $request,$id)
  {


  $user = user::find($id) ;
  $user->name = Input::get("name");
  $user->email = Input::get("email");
  $user->password = Input::get("password");
  $user->remember_token = Input::get("password_confirmation");
  $user->save();
  return redirect('profile');


  }


public function update_image(Request $request,$id)
  {

    $name=$_FILES['image']['name'];
$picture = $_FILES['image']['tmp_name'];
$nom = "uploads/image/$name";
$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);

$user = user::find($id) ;
$user->image = $name ; 
$user->save();

return redirect('profile');
     


  }



//// ------------------- les admins ------------------------
     public function insertAdmin(Request $req)
    {   
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $rPassword = $req->input('password-confirmation');
        $data = array('name'=>$name,'email'=>$email,'password'=>$password);
        DB::table('admins')->insert($data);
        return view ('admin.sucess');
    }

     public function deleteAdmin($id){
       $admins = admins::find($id);
        $admins->delete();
    return redirect('listAdmin');       
    }

/// -------------------- PANIER ---------------------------------
      public function deletePanier($id){
       $paniers = paniers::find($id);
        $paniers->delete();
    return redirect('panier');       
    }

public function AddPanier($id,$email)
    {          $produits = produits::find($id);
              $nomProduit = $produits->title ;
              $categorieProduit = $produits->categorie ;
              $prix = $produits->prix ;
    $data = array('emailClient'=>$email,'nomProduit'=>$nomProduit,'categorieProduit'=>$categorieProduit,'prixProduit'=>$prix);
        DB::table('paniers')->insert($data);
         return redirect('panier');
    }

    function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
   {
      $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   }
   return $total;
}

}
