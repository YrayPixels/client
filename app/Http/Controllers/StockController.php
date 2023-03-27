<?php



namespace App\Http\Controllers;

error_reporting(0);

use App\Mail\register_dealer;
use App\Models\Dealer;
use DB;
use Illuminate\Http\Request;
use Hash;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Mail;

class StockController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function products(Request $req)
  {
    $products = DB::table('parts')

      ->orderBy('updatedAt')
      // ->select(DB::raw('DISTINCT(name)'))
      ->get();

    $totalproducts = DB::table('parts')
      ->count();


    return view('manage_product', compact('products', 'totalproducts'));
  }

  public function addproduct(Request $req)
  {
    $pp = DB::table('parts')->count();
    $id = md5($pp + 1);
    //validate


    $fields = $req->validate([
      'article_number' => 'required',

      'maker' => 'required',
      'name' => 'required',
      'price' => 'required',
      'sub_category' => 'required',

      'property' => 'required',
      'ean' => 'required',
      'img_url_3' => 'required',
      'img_url_1' => 'required',
      'img_url_2' => 'required',
      'description' => 'required',
      'weight' => 'required',
    ]);


    $category = DB::table('sub_cat')
      ->where('sub_cat_id', $req->sub_category)
      ->first();

    //first image
    $file = $req->file('img_url_1');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('uploads/product'), $file_name);
    //second image
    $filel = $req->file('img_url_2');
    $file_name2 = time() . $filel->getClientOriginalName();
    $filel->move(public_path('uploads/product'), $file_name2);
    // third image
    $filee = $req->file('img_url_3');
    $file_name3 = time() . $filee->getClientOriginalName();
    $filee->move(public_path('uploads/product'), $file_name3);


    $priceusd = $req->price / 415;
    $data = [
      'id' => $id,
      'EAN' => $fields['ean'],
      'name' => $fields['name'],
      'img_url' =>  $file_name,
      'img_url_1' =>   $file_name2,
      'img_url_2' =>  $file_name3,
      'price' =>  $req->price,
      'category' => $category->cat_id,

      'description' => $fields['description'],
      'sub_category' => $fields['sub_category'],
      'saler_id' => $fields['maker'],
      'property_id' => $fields['property'],
      'article_number' => $fields['article_number'],
      'price' => $fields['price'],
      'weight_in_kg' => $req->weight,
      'code' => $req->code
    ];

    $insert = DB::table('parts')->insert($data);
    if ($insert) {

      //    DB::table('activities')
      //    ->insert([
      //      'activity' => 'Add Product: a product was added',
      //      'activity_type' => 'add'
      //    ]);

      return redirect()->route('viewproductproperty', ['id' => $id]);
    }
    return redirect()->route('view_product_part', ['id' => $req->sub_category_id]);
  }


  public function addproductpage()
  {
    $cats = DB::table('cats')
      ->get();
    return view('addproductpage', compact('cats'));
  }

  public function viewproduct(Request $req, $id)
  {

    $product = DB::table('parts')
      ->where('id', $id)
      ->first();

    return view('viewproduct', compact('product'));
  }

  public function viewproductproperty(Request $req, $id)
  {
    //get property_id frm part where part id = $id

    $parts = DB::table('parts')->where('id', $id)->first();


    $category_id = $parts->property_id;


    //use the property_id to get all the properties
    //select from category_property table where category_id ='property_id'
    $properties = DB::table('category_property')
      ->join('property', 'property.id', 'category_property.property_id')
      ->where('category_id', $parts->property_id)
      ->get();



    return view('productproperty', compact('properties', 'id', 'properties'));
  }


  public function viewprocat(Request $req, $id)
  {
    $get = DB::table('parts')
      ->where('category', $id)
      ->first();
    dd($get);
  }

  public function editproductpage($id)
  {
    $product = DB::table('parts')->where('id', $id)->first();
    $brands = DB::table('brands')->get();
    $pros = DB::table('property_categories')->get();
    $subcats = DB::table('sub_cat')->get();
    $models = DB::table('models')->get();
    $makers = DB::table('salers')->get();


    $properties = DB::table('product_properties')
      ->join("property", 'property.id', '=', 'product_properties.property_id')
      ->where('product_properties.part_id', $id)->get();




    $productnames = DB::table('parts')
      ->join('salers', 'salers.id', 'parts.saler_id')
      ->join('sub_cat', 'sub_cat.sub_cat_id', 'parts.sub_category')

      ->join('property', 'property.id', 'parts.property_id')
      ->where('parts.id', $id)
      ->select(
        'salers.id as id',
        'salers.name as name',
        'sub_cat.*',

        'property.id as property_id',
        'property.property as property_name'
      )
      ->first();

    return view('editproductpage', compact('product', 'productnames', 'properties', 'brands', 'pros', 'subcats', 'models', 'makers'));
  }

  public function editproduct_pictures(Request $req, $id)
  {


    $fields = $req->validate([

      'img_url_3' => 'required',
      'img_url_1' => 'required',
      'img_url_2' => 'required',

    ]);
    //first image
    $file = $req->file('img_url_1');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('uploads/product'), $file_name);

    // //second image
    $filel = $req->file('img_url_2');
    $file_name2 = time() . $filel->getClientOriginalName();
    $filel->move(public_path('uploads/product'), $file_name2);

    // // third image
    $filee = $req->file('img_url_3');
    $file_name3 = time() . $filee->getClientOriginalName();
    $filee->move(public_path('uploads/product'), $file_name3);



    $data = [

      'img_url' =>  $file_name,
      'img_url_1' =>   $file_name2,
      'img_url_2' =>  $file_name3,

    ];
    $get_product = DB::table('parts')->where('id', $id)->first();
    // $user= Auth::user()->name();

    $update = DB::table('parts')
      ->where('id', $id)
      ->update($data);
    if ($data) {
      //    DB::table('activities')
      //    ->insert([
      //      'activity' => "Edit Product Image: $get_product->name images edited by $user",
      //      'activity_type' => 'edit'
      //    ]);

      return redirect()->back()->with('success', 'Category Property Added Successfully');
      //return view('searchProducts',['search', $req->article_number]);
    }
  }

  public function editproduct(Request $req, $id)
  {

    $fields = $req->validate([
      //'article_number'=> 'required',
      'maker' => 'required',
      'sub_category' => 'required',
      'property' => 'required',
      //'ean'=> 'required',
      'category' => 'required',
      //'img_url_3'=> 'required',
      //'img_url_1'=> 'required',
      //'img_url_2'=> 'required',
      'description' => 'required',
      'name' => 'required',
      'price' => 'required',
      'part_pairs' => 'required',
      'sub_sub_category' => 'required',
      'compatibility' => 'required',
    ]);


    $priceusd = $req->price / 415;

    $data = [
      //'EAN' => $fields['ean'],
      'name' => $fields['name'],
      // 'img_url' =>  $file_name,
      // 'img_url_1' =>   $file_name2,
      // 'img_url_2' =>  $file_name3,
      'description' => $fields['description'],
      'sub_category' => $fields['sub_category'],
      'saler_id' => $fields['maker'],
      'category' => $fields['category'],
      'property_id' => $fields['property'],
      //'article_number' => $fields['article_number'],
      'price' => $fields['price'],
      'pairs' => $fields['part_pairs'],
      'weight_in_kg' => $req->weight_in_kg,
      'sub_sub_category' => $req->sub_sub_category,
      'createdAt' => Carbon::now(),
      'updatedAt' => Carbon::now(),
      'compatibility' => $req->compatibility,
    ];
    //get product
    $get_product = DB::table('parts')->where('id', $id)->first();

    //$user= Auth::user()->name();

    $update = DB::table('parts')
      ->where('id', $id)
      ->update($data);
    if ($data) {
      //    DB::table('activities')
      //    ->insert([
      //      'activity' => "Edit Product: $get_product->article_number edited by $user",
      //      'activity_type' => 'edit'
      //    ]);

      return redirect()->back()->with('success', 'Product Added Successfully');
      //return view('searchProducts',['search', $req->article_number]);
    }
  }

  public function getproperty(Request $req)
  {
    $properties = DB::table('property')
      ->where('status', '<>', 2)
      ->orderBy('id', 'desc')
      ->get();
    return view('manage-properties', compact('properties'));
  }

  public function viewpropertycategory($id)
  {
    $categoryproperties = DB::table('category_property')
      ->join('property_categories', 'property_categories.id', '=', 'category_property.category_id')
      ->join('property', 'property.id', '=', 'category_property.property_id')

      ->where(DB::raw('md5(category_property.category_id)'), '=', $id)
      ->select('property.property as property_name', 'property_categories.category as category_name', 'category_property.status as status')
      ->get();
    return view('viewpropertycategory', compact('id', 'categoryproperties'));
  }

  public function addcategoryproperty(Request $req)
  {


    $check = DB::table('property_categories')
      ->where(DB::raw('md5(id)'), $req->category_id)

      ->first();



    $add = DB::table('category_property')->insert(['category_id' => $check->id, 'property_id' => $req->property_id]);

    if ($add) {
      //$user = Auth::user()->name;
      //  DB::table('activities')
      //    ->insert([
      //      'activity' => "Add Property Category: Added by $user",
      //      'activity_type' => 'add'
      //    ]);
      return redirect()->back()->with('success', 'Category Property Added Successfully');
    }

    return redirect()->back()->with('fail', 'Category Property Added Successfully');
  }


  public function copypropertycategory($id)
  {

    $properties = DB::table('property_categories')->get();
    $categoryid = DB::table('cats')->where(DB::raw('md5(id)'), $id)->first();
    $id = $categoryid->id;


    return view('copypropertycategory', compact('properties', 'id'));
  }


  public function copyandaddcategoryproperty(Request $req)
  {



    //add the new catigory
    $check1 = DB::table('property_categories')
      ->where('category', $req->category)
      ->first();
    if ($check1) {
      return redirect()->back()->with('message', 'Category Already Exist ');
    }

    $addnewcategory = DB::table('property_categories')->insert(['category' => $req->category]);

    if ($addnewcategory) {
      //then use the name of the category to get the newcatId u just added

      $getcategory_id_by_name = DB::table('property_categories')
        ->where('category', $req->category)
        ->select('id', 'category')
        ->first();



      // get properties of category id sent
      $getcategoryproperty = DB::table('category_property')
        ->where('category_id', $req->id)
        ->get();
      if ($getcategoryproperty) {
        foreach ($getcategoryproperty as $item) {
          $data = [

            'property_id' => $item->property_id,
            'category_id' => $getcategory_id_by_name->id,

          ];

          if (DB::table('category_property')

            ->where('property_id', $item->property_id)
            ->where('category_id', $getcategory_id_by_name->id)
            ->doesntExist()
          ) {

            $add = DB::table('category_property')
              ->insert($data);

            if ($add) {
              $user = Auth::user()->name;
              DB::table('activities')
                ->insert([
                  'activity' => "Copy Property Category: $getcategory_id_by_name->category Copied by $user",
                  'activity_type' => 'Add'
                ]);
              return redirect()->back()->with('success', 'Copied Successfully');
            }
            return redirect()->back()->with('fail', 'Failed to copy');
          }
        }
      }
      return redirect()->back()->with('fail', 'property of that category does not exist');
    }

    return redirect()->back()->with('fail', 'Failed to Add Category ');
  }

  public function getpropertycategory()
  {
    $properties = DB::table('property_categories')
      // ->join('cats', 'cats.id', '=', 'property_categories.category')
      ->get();
    return view('getpropertycategory', compact('properties'));
  }

  public function addproperty(Request $req)
  {
    $data = [
      'property' => $req->property,

    ];

    $add = DB::table('property')->insert($data);
    if ($add) {

      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Add Property : $req->property Added by $user",
          'activity_type' => 'Add'
        ]);

      return redirect()->route('getproperty');
    }
  }


  public function editpropertypage(Request $req, $id)
  {
    $property = DB::table('property')->where('id', $id)->first();

    return view('editproperty', compact('property'));
  }

  public function editproperty(Request $req, $id)
  {
    //get property
    $property = DB::table('property')->where('id', $id)->first();

    $add = DB::table('property')->where('id', $id)->update(['property' => $req->property]);
    if ($add) {
      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Edit Property : $property->property Edited by $user",
          'activity_type' => 'Edit'
        ]);

      return redirect()->route('getproperty');
    }
  }



  public function getcategory(Request $req)
  {
    $get = DB::table('cats')
      ->where('status', '<>', '2')
      ->orderBy('createdAt', 'desc')
      ->get();

    return view('manage_categories', compact('get'));
  }

  public function viewcategory(Request $req, $id)
  {
    $get = DB::table('cats')

      ->where('id', $id)
      ->get();
    dd($get);
  }

  public function addcategory(Request $req)
  {

    $file = $req->file('img_url');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('uploads/category'), $file_name);

    $data = [

      'title' => $req->title,
      'slug' => $req->slug,
      'img_url' => $file_name

    ];

    $add = DB::table('cats')
      ->insert($data);
    if ($add) {

      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Add Category : " . $data['title']($data['slug']) . " Added by $user",
          'activity_type' => 'Add'
        ]);



      return redirect()->route('manage-categories');
    }
  }

  public function addpropertycategory(Request $req)
  {


    $data = [
      'category' => $req->name,
    ];

    $add = DB::table('property_categories')
      ->insert($data);
    if ($add) {

      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Add Property : " . $data['category'] . " Added by $user",
          'activity_type' => 'Add'
        ]);

      return redirect()->back()->with('success', 'Property Category Added Successfully');
    }
  }

  public function editcategorypage(Request $req, $id)
  {
    $category = DB::table('cats')->where('id', $id)->first();
    return view('editcategorypage', compact('category'));
  }

  public function editcategory(Request $req, $id)
  {
    $file = $req->file('img_url');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('uploads/category'), $file_name);

    $data = [

      'title' => $req->title,
      'slug' => $req->slug,
      'img_url' => $file_name

    ];

    $add = DB::table('cats')->where('id', $id)
      ->update($data);
    if ($add) {

      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Edited Category was edited by " . $user,
          'activity_type' => 'Edit Category'
        ]);

      return redirect()->route('manage-categories');
    }
  }


  public function unhidecategory(Request $req, $id)
  {

    $cats = DB::table('cats')->where('id', $id)->first();

    $update = DB::table('cats')->where('id', $id)->update(['status' => '1']);
    if ($update) {

      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Unhide Category: $cats->title Was Unhide by $user",
          'activity_type' => 'unhide'
        ]);
      return redirect()->route('manage-categories');
    }
    return redirect()->route('manage-categories');
  }

  public function hidecategory(Request $req, $id)
  {
    $cats = DB::table('cats')->where('id', $id)->first();

    $data = ['status' => '0'];
    $update = DB::table('cats')->where('id', $id)->update($data);
    if ($update) {

      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Hide Category: $cats->title Was Hidden by $user",
          'activity_type' => 'hide'
        ]);

      return redirect()->route('manage-categories');
    }
    return redirect()->route('manage-categories');
  }

  public function deletecategory(Request $req, $id)
  {
    $cats = DB::table('cats')->where('id', $id)->first();

    $data = ['status' => '2'];
    $update = DB::table('cats')->where('id', $id)->update($data);
    if ($update) {
      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Delete Category: $cats->title Was Deleted by $user",
          'activity_type' => 'delete'
        ]);

      return redirect()->route('manage-categories');
    }
    return redirect()->route('manage-categories');
  }

  public function delete_sub_sub_cart(Request $req, $id)
  {

    $subSub = DB::table('subsubcats')
      ->where(DB::raw('md5(id)'), '=', $id)
      ->first();

    $update = DB::table('subsubcats')->where('id', $subSub->id)->delete();
    if ($update) {
      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Delete sub-sub-category: $subSub->title Was Deleted by $user",
          'activity_type' => 'delete'
        ]);
      return redirect()->route('add_sub_sub_cat_page', ['id' => md5($subSub->sub_cat_id)]);
    }
    return redirect()->route('add_sub_sub_cat_page', ['id' => md5($subSub->sub_cat_id)]);
  }



  public function unhideproduct(Request $req, $id)
  {
    $product = DB::table('parts')->where('id', $id)->first();

    $update = DB::table('parts')->where('id', $id)->update(['status' => 1]);
    if ($update) {
      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Unhide Product: $product->name was Unhidden by $user",
          'activity_type' => 'unhide'
        ]);

      return redirect()->route('manage-product');
    }
    return redirect()->route('manage-product');
  }



  public function hideproduct(Request $req, $id)
  {
    $product = DB::table('parts')->where('id', $id)->first();


    $data = ['status' => 0];
    $update = DB::table('parts')->where('id', $id)->update($data);
    if ($update) {

      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Hide Product: $product->name was Hidden by $user",
          'activity_type' => 'Hide'
        ]);

      return redirect()->route('manage-product');
    }
    return redirect()->route('manage-product');
  }

  public function deleteproduct(Request $req, $id)
  {
    $product = DB::table('parts')->where('id', $id)->first();

    $data = ['status' => 2];
    $update = DB::table('parts')->where('id', $id)->update($data);
    if ($update) {

      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Delete Product: $product->name was Deleted by $user",
          'activity_type' => 'Delete'
        ]);

      return redirect()->route('manage-product');
    }
    return redirect()->route('manage-product');
  }

  public function unhideproperty(Request $req, $id)
  {
    $property = DB::table('property')->where('id', $id)->first();

    $update = DB::table('property')->where('id', $id)->update(['status' => '1']);
    if ($update) {

      DB::table('activities')
        ->insert([
          'activity' => "Unhide Property: $property->property was Unhidden by $user",
          'activity_type' => 'unhide'
        ]);

      return redirect()->route('manage-property');
    }
    return redirect()->route('manage-property');
  }

  public function hideproperty(Request $req, $id)
  {
    $property = DB::table('property')->where('id', $id)->first();

    $data = ['status' => 0];
    $update = DB::table('property')->where('id', $id)->update($data);
    if ($update) {

      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Hide Property: $property->property was Hidden by $user",
          'activity_type' => 'hide'
        ]);
      return redirect()->route('manage-property');
    }
    return redirect()->route('manage-property');
  }

  public function deleteproperty(Request $req, $id)
  {
    $property = DB::table('property')->where('id', $id)->first();

    $data = ['status' => 2];
    $update = DB::table('property')->where('id', $id)->update($data);
    if ($update) {

      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Delete Property: $property->property was Deleted by $user",
          'activity_type' => 'delete'
        ]);

      return redirect()->route('manage-property');
    }
    return redirect()->route('manage-property');
  }


  public function saveProperties(Request $request)
  {
    $input = $request->all();

    //dd($input['product_id']);

    $c = Count($input['property']);

    for ($i = 0; $i < $c; $i++) {
      //  dd($input['property'][$i]);
      //chk if the properties exist or not
      //         if(DB::table('product_properties')
      //         ->where('property_id', '=', $input['property'][$i])
      //         ->where('part_id', '=', $input['product_id'])

      //         ->doesntExist()){
      //             $data = [

      //                 'property_id' =>$input['property'][$i],
      //                 'part_id' => $input['product_id'],


      //             ];
      //             $insert = DB::table('product_properties')->insert($data);
      //                 if($insert){
      //                     return redirect()->route('editproductpage', ['id' => $input['product_id']]);
      //                 }

      //         }else{

      //             return redirect()->route('editproductpage', ['id' => $input['product_id']]);
      //         }

      //    }

      $input = $request->all();
      $c = Count($input['property']);

      // for($i=0; $i < $c ; $i++){

      //         dd($input);


      //     //  return redirect()->route('posts.index');
      // }
    }
  }

  public function view_product_category(Request $request, $id)
  {
    $products = DB::table('parts')
      ->where('status', '<>', 2)
      ->orderBy('createdAt', 'desc')
      ->limit(10)
      ->get();

    $cats = DB::table('sub_cat')
      ->where(DB::raw('md5(cat_id)'), '=', $id)
      ->get();

    return view('view_product_category', compact('products', 'cats'));
  }

  public function view_product_part(Request $request, $id)
  {



    $products = DB::table('parts')
      ->where('status', '<>', 2)
      ->where(DB::raw('md5(sub_category)'), '=', $id)
      ->orderBy('createdAt', 'desc')
      ->get();


    return view('view_product_part', compact('products', 'id'));
  }

  public function print_barcode(Request $request, $id)
  {


    $products = DB::table('parts')
      ->where('status', '<>', 2)
      ->where(DB::raw('md5(sub_category)'), '=', $id)
      ->orderBy('createdAt', 'desc')
      ->get();


    return view('print_barcode', compact('products', 'id'));
  }

  public function addNewproduct(Request $req, $id)
  {
    $number = rand(10, 99) . rand(61, 99) . rand(100, 9999);

    $manufacturer = DB::table('salers')
      ->orderBy('createdAt', 'desc')
      ->get();

    $property = DB::table('property_categories')
      ->orderBy('createdAt', 'desc')
      ->get();

    $sub_cat = DB::table('sub_cat')
      ->where(DB::raw('md5(sub_cat_id)'), $id)->first();


    return view('add_new_product', compact('manufacturer', 'property', 'id', 'number', 'sub_cat'));
  }

  public function add_sub_cat($id)
  {
    $cat = DB::table('cats')->where(DB::raw('md5(id)'), $id)->first();

    $subcats = $cat = DB::table('sub_cat')
      ->join('cats', 'cats.id', 'sub_cat.cat_id')
      ->where('sub_cat.cat_id', $cat->id)
      ->orderBy('sub_cat.sub_cat_id', 'desc')
      ->get();

    return view('add_sub_cat', compact('id', 'subcats'));
  }

  public function add_sub_cat_page($id)
  {
    return view('add_sub_cat_page', compact('id'));
  }

  public function add_sub_category_post(Request $req)
  {

    $file = $req->file('img_url');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('uploads/sub_category'), $file_name);


    //get category id 
    $cat = DB::table('cats')->where(DB::raw('md5(id)'), $req->cat_id)->first();
    $data = [
      'cat_id' => $cat->id,
      'sub_title' => $req->title,
      'img' => $file_name,
    ];



    $insert = DB::table('sub_cat')->insert($data);
    if ($insert) {
      $user = Auth::user()->name;
      DB::table('activities')
        ->insert([
          'activity' => "Add Sub-Category: " . $data['sub_title'] . " Added by $user",
          'activity_type' => 'Add'
        ]);

      return redirect()->route('add_sub_cat', ['id' => $req->cat_id]);
    }
    return redirect()->back()->with('alert', 'Failed TO Add Sub Category');
  }

  public function addoem($id)
  {
    $oemms = DB::table('product_oem')
      ->join('parts', 'parts.id', 'product_oem.product_id')
      ->join('oem', 'oem.oem_id', 'product_oem.oem_id')
      ->where('product_oem.product_id', $id)
      ->where('product_oem.status', '<>', '0')
      ->select('parts.name', 'product_oem.id', 'oem.oem')
      ->get();

    return view('addoem', compact('id', 'oemms'));
  }

  public function addrandmodel(Request $req)
  {

    $data = [
      'brand' => $req->brand,
      'model' => $req->car,
      'sub_model' => $req->model,
      'sub_sub_model' => $req->sub_model,
      'product_id' => $req->product_id,

    ];

    $add = DB::table('product_brand_model')
      ->insert($data);

    if ($add) {
      //     $user = Auth::user()->name;
      //    DB::table('activities')
      //    ->insert([
      //      'activity' => "Add Brand,Year,Car,Sub-Model,Model: Added By $user",
      //      'activity_type' => 'Edit'
      //    ]);

      echo 'Model/Brand added Successfully';
    } else {
      echo 'Something went wrong, Please cheack your Record again';
    }
  }

  public function deleteProductBrand($id)
  {
    $get = DB::table('product_brand_model')
      ->where(DB::raw('md5(id)'), $id)
      ->first();

    $delete = DB::table('product_brand_model')
      ->where('id', $get->id)
      ->delete();

    if ($delete) {
      DB::table('activities')
        ->insert([
          'activity' => 'Brand model has been removed from the product by',
          'activity_type' => 'Remove Brand Model'
        ]);
      return redirect()->back()->with('alert', 'Removed Successfully');
    }
    return redirect()->back()->with('alert', 'Failed');
  }

  public function delete_sub_cat($id)
  {

    $get = DB::table('sub_cat')
      ->where(DB::raw('md5(sub_cat_id)'), $id)
      ->first();


    $delete = DB::table('sub_cat')
      ->where('sub_cat_id', $get->sub_cat_id)
      ->delete();

    return redirect()->back()->with('alert', 'Removed Successfully');
  }

  public function addbrandmodel_page(Request $req, $id)
  {
    $brands = DB::table('brands')->get();
    $models = DB::table('models')->get();

    return view('addbrandmodel', compact('id', 'brands', 'models'));
  }



  public function addproductoem(Request $req)
  {
    $data = [
      'oem_id' => $req->oem,
      'product_id' => $req->product_id
    ];
    //check
    $check_oem = DB::table('product_oem')
      ->where('oem_id', $req->oem)
      ->where('product_id', $req->product_id)
      ->first();
    if ($check_oem) {
      return redirect()->back()->with('alert', 'OEM Already Exist');
    }

    $add = DB::table('product_oem')->insert($data);
    if ($add) {
      $data = [
        'status' => 1,
      ];
      DB::table('parts')->where('id', $req->product_id)->update($data);

      //    DB::table('activities')
      //    ->insert([
      //      'activity' => "Add OEM: $req->oem was Added by $user",
      //      'activity_type' => 'add'
      //    ]);
      return redirect()->back()->with('alert', 'OEM Added Successfully');
    }
    return redirect()->back()->with('alert', 'Failed to Add OEM');
  }

  public function deleteproduct_oem($id)
  {
    $product_oem = DB::table('product_oem')
      ->where(DB::raw('md5(id)'), $id)
      ->first();

    $update = DB::table('product_oem')
      ->where('id', $product_oem->id)
      ->update(['status' => '0']);
    if ($update) {
      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Delete OEM: $req->oem was Deleted by $user",
          'activity_type' => 'delete'
        ]);
      return redirect()->back()->with('alert', 'OEM Deleted Successfully');
    }
    return redirect()->back()->with('alert', 'Failed to Delete OEM');
  }



  public function saveProductProperty(Request $req)
  {

    $check = DB::table('product_properties')
      ->where('property_id', $req->property_id)
      ->where('part_id', $req->product_id)
      ->count();

    if ($check > 0) {
      $update = DB::table('product_properties')
        ->where('property_id', $req->property_id)
        ->where('part_id', $req->product_id)
        ->update(
          [
            'property_id' => $req->property_id,
            'part_id' => $req->product_id,
            'value' => $req->property_value
          ]
        );

      if ($update) {
        $user = Auth::user()->name;
        DB::table('activities')
          ->insert([
            'activity' => 'Product Property Updated by ' . $user,
            'activity_type' => 'edit'
          ]);
        return response()->json(["message" => "Record updated Successfully"], 200);
      } else {
        return response()->json(["message" => "Sorry, Could not update data"], 200);
      }
    } else {
      $insert = DB::table('product_properties')
        ->insert(
          [
            'property_id' => $req->property_id,
            'part_id' => $req->product_id,
            'value' => $req->property_value
          ]
        );

      if ($insert) {
        $user = Auth::user()->name;
        DB::table('activities')
          ->insert([
            'activity' => 'Product Property Added by ' . $user,
            'activity_type' => 'Add'
          ]);
        return response()->json(["message" => "Record updated Successfully"], 200);
      } else {
        return response()->json(["message" => "Sorry, Could not update data"], 200);
      }
    }
  }

  function searchProducts(Request $req)
  {

    $c = DB::table('parts')->where('article_number', $req->search)->count();
    if ($c > 0) {

      $product = DB::table('parts')->where('article_number', $req->search)->first();
      $id = $product->id;

      $brands = DB::table('brands')->get();
      $pros = DB::table('property_categories')->get();
      $subcats = DB::table('sub_cat')->get();
      $models = DB::table('models')->get();
      $makers = DB::table('salers')->get();

      $properties = DB::table('product_properties')
        ->join("property", 'property.id', '=', 'product_properties.property_id')
        ->where('product_properties.part_id', $id)->get();

      $productnames = DB::table('parts')
        // ->join('makers', 'makers.id', 'parts.maker_id')
        // ->join('sub_cat', 'sub_cat.sub_cat_id', 'parts.sub_category')

        // ->join('property', 'property.id', 'parts.property_id')
        ->where('id', $id)
        // ->select('makers.id as id', 'makers.name as name', 'sub_cat.*', 

        // 'property.id as property_id', 'property.property as property_name')
        ->first();


      $oemms = DB::table('product_oem')
        ->where('product_oem.product_id', $id)
        ->get();


      return view('editproductpage', compact('oemms', 'product', 'productnames', 'properties', 'brands', 'pros', 'subcats', 'models', 'makers'));
    } else {
      return view('productnotfound');
    }
  }

  public function add_sub_sub_cat_page(Request $req, $id)
  {
    $cat = DB::table('sub_cat')->where(DB::raw('md5(sub_cat_id)'), $id)->first();

    $subcats = $cat = DB::table('subsubcats')
      ->join('sub_cat', 'sub_cat.sub_cat_id', 'subsubcats.sub_cat_id')
      ->where('subsubcats.sub_cat_id', $cat->sub_cat_id)
      ->orderBy('subsubcats.id', 'desc')
      ->select('*', 'subsubcats.id as sub_sub_cart_id', 'subsubcats.img as subsubcats_img')
      ->get();

    return view('add_sub_sub_cat', compact('id', 'subcats'));
  }

  public function add_sub_sub_category_post(Request $req)
  {

    //get category id 
    $cat = DB::table('sub_cat')->where(DB::raw('md5(sub_cat_id)'), $req->cat_id)->first();
    $file = $req->file('img');
    $file_name = time() . $file->getClientOriginalName();


    $data = [
      'sub_cat_id' => $cat->sub_cat_id,
      'title' => $req->title,
      'img' => $file_name,
    ];



    if ($file->move(public_path('uploads/sub_sub_category'), $file_name)) {
      $insert = DB::table('subsubcats')->insert($data);
      if ($insert) {
        $user = Auth::user()->name;
        DB::table('activities')
          ->insert([
            'activity' => 'a sub-sub-category added by' . $user,
            'activity_type' => 'add'
          ]);
        return redirect()->route('add_sub_sub_cat_page', ['id' => $req->cat_id])->with('alert', 'Added Successfully');
      }
      return redirect()->back()->with('alert', 'Failed TO Add Sub Category');
    }
  }

  public function getSubSubCat(Request $req)
  {
    $sub_category = $req->sub_category;
    $display = '<option>--- Select Sub Sub Category ---</option>';

    $subsubcats = DB::table('subsubcats')
      ->where('sub_cat_id', $sub_category)
      ->orderBy('title')
      ->get();

    foreach ($subsubcats as $subsubcat) {

      $display .= '<option value="' . $subsubcat->id . '">' . $subsubcat->title . '</option>';
    }

    echo $display;
  }

  public function getSubModels(Request $req)
  {
    $model = $req->model;
    $display = '<option value="0">--- Select Sub-Model ---</option>';

    $subModels = DB::table('sub_model')
      ->where('model_id', $model)
      ->orderBy('sub_model_title')
      ->get();

    foreach ($subModels as $subModel) {

      $display .= '<option value="' . $subModel->id . '">' . $subModel->sub_model_title . '</option>';
    }

    echo $display;
  }

  public function getCars(Request $req)
  {
    $brand = $req->brand;
    $display = '<option>--- Select Car ---</option>';

    $allcars = DB::table('cars')
      ->where('brand_id', $brand)
      ->orderBy('name')
      ->get();

    foreach ($allcars as $allcar) {

      $display .= '<option value="' . $allcar->id . '">' . $allcar->name . '</option>';
    }

    echo $display;
  }


  public function getModels(Request $req)
  {
    $car = $req->car;
    $display = '<option>--- Select Model ---</option>';

    $allModels = DB::table('models')
      ->where('car_id', $car)
      ->orderBy('name')
      ->get();

    foreach ($allModels as $allModel) {

      $display .= '<option value="' . $allModel->id . '">' . $allModel->name . '</option>';
    }

    echo $display;
  }
  public function switchoff()
  {
    $timer = DB::table('promotimer')->where('id', 1)->first();

    if ($timer->status == 1) {
      $data = [
        'status' => 0
      ];
      $save = DB::table('promotimer')->where('id', 1)->update($data);
      if ($save) {
        return redirect()->back()->with('message', 'Saved Successfully');
      }
    } else {
      $data = [
        'status' => 1
      ];
      $save = DB::table('promotimer')->where('id', 1)->update($data);
      if ($save) {
        return redirect()->back()->with('message', 'Saved Successfully');
      }
    }
  }
  public function  saveoffertimer(Request $request)
  {
    $exist = DB::table('promotimer')->where('id', 1)->exists();
    $data = [
      'end_date' => $request->end_date,
      'promo_percent' => $request->promo_percent,
      'status' => 1,
    ];

    if ($exist) {
      $save = DB::table('promotimer')->where('id', 1)->update($data);
      if ($save) {
        return redirect()->back()->with('message', 'Saved Successfully');
      }
    } else {
      $create = DB::table('promotimer')->where('id', 1)->insert($data);
      if ($create) {
        return redirect()->back()->with('message', 'Saved Successfully');
      }
    }
  }
  public function manage_offer_slider()
  {
    return view('manage_web.offerheader');
  }

  public function manage_web()
  {


    //get top products
    $tops = DB::table('tops')
      ->join('parts', 'parts.id', 'tops.part_id')
      ->orderBy('id', 'desc')
      ->select('parts.name', 'tops.*')
      ->get();

    return view('manage_web.index', compact('tops'));
  }

  public function delete_top_product($id)
  {
    $delete = DB::table('tops')
      ->where(DB::raw('md5(id)'), $id)
      ->delete();

    if ($delete) {

      DB::table('activities')
        ->insert([
          'activity' => "Top Product Deleted By $user",
          'activity_type' => 'delete'
        ]);
      return redirect()->back()->with('alert', 'Deleted Successfully');
    }
    return redirect()->back()->with('alert', 'Oops');
  }

  public function edit_top_product_page($id)
  {
    $product = DB::table('tops')->where(DB::raw('md5(id)'), $id)->first();
    $id = $product->id;

    return view('manage_web.edit_top_product', compact('id'));
  }

  public function update_top_product(Request $req)
  {
    $check_if_exist = DB::table('parts')->where('article_number', $req->product)->exists();
    if ($check_if_exist) {
      $product = DB::table('parts')->where('article_number', $req->product)->first();

      $update = DB::table('tops')
        ->where('id', $req->id)
        ->update(['part_id' => $product->id]);

      if ($update) {
        $user = Auth::user()->name;
        DB::table('activities')
          ->insert([
            'activity' => "Top Product" . ($product->name) . " Updated by $user",
            'activity_type' => 'edit'
          ]);

        return redirect()->back()->with('message', 'Updated Successfully');
      }
      return redirect()->back()->with('message', 'Already Updated');
    }
    return redirect()->back()->with('message', 'Product Does Not Exist');
  }

  public function add_top_product(Request $req)
  {
    $fields = $req->validate([
      'product' => 'required'
    ]);

    $check_if_exist = DB::table('parts')->where('article_number', $req->product)->exists();
    if ($check_if_exist) {

      $product = DB::table('parts')->where('article_number', $fields['product'])->first();

      $add = DB::table('tops')->insert(['part_id' => $product->id]);

      if ($add) {
        $user = Auth::user()->name;

        DB::table('activities')
          ->insert([
            'activity' => "Top Product."($product->name) . " Added by $user",
            'activity_type' => 'add'
          ]);

        return redirect()->back()->with('message', 'Created Successfully');
      }
      return redirect()->back()->with('message', 'Oops');
    }
    return redirect()->back()->with('message', 'Ooops');
  }

  public function featured_product(Request $req)
  {
    //get products
    $products = DB::table('parts')->get();

    //get top products
    $featured = DB::table('featureds')
      ->join('parts', 'parts.id', 'featureds.part_id')
      ->orderBy('id', 'desc')
      ->limit(5)
      ->select('parts.name', 'featureds.*')
      ->get();

    return view('manage_web.featured_product', compact('products', 'featured'));
  }

  public function add_featured_product(Request $req)
  {
    $fields = $req->validate([
      'product' => 'required'
    ]);

    $add = DB::table('featureds')->insert(['part_id' => $fields['product']]);

    if ($add) {
      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Featured."($fields['product']) . " Product Added By $user",
          'activity_type' => 'add'
        ]);
      return redirect()->back()->with('message', 'Created Successfully');
    }
    return redirect()->back()->with('message', 'Oops');
  }

  public function delete_featured_product($id)
  {
    $delete = DB::table('featureds')
      ->where(DB::raw('md5(id)'), $id)
      ->delete();

    if ($delete) {
      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Featured Product."($delete->part_id) . " Deleted by $user",
          'activity_type' => 'delete'
        ]);

      return redirect()->back()->with('alert', 'Deleted Successfully');
    }
    return redirect()->back()->with('alert', 'Oops');
  }

  public function edit_featured_product_page($id)
  {
    $featured = DB::table('featureds')
      ->join('parts', 'parts.id', 'featureds.part_id')
      ->where(DB::raw('md5(featureds.id)'), $id)
      ->select('parts.*', 'featureds.id as f_id')
      ->first();

    //get all products
    $products = DB::table('parts')->get();

    return view('manage_web.edit_featured_product', compact('featured', 'products'));
  }

  public function update_featured_product(Request $req)
  {

    $update = DB::table('featureds')
      ->where('id', $req->id)
      ->update(['part_id' => $req->product]);

    if ($update) {
      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Featured Product."($req->product) . " Updated by $user",
          'activity_type' => 'edit'
        ]);
      return redirect()->back()->with('message', 'Updated Successfully');
    }
    return redirect()->back()->with('message', 'Already Updated');
  }

  public function web_content()
  {

    //get company 
    $company = DB::table('company')
      ->first();

    return view('manage_web.web_content', compact('company'));
  }

  public function update_web_content(Request $req)
  {
    $data = [
      'company_name' => $req->company_name,
      'company_email' => $req->company_email,
      'company_phone' => $req->company_phone,
      'address_1' => $req->address_1,
      'address_2' => $req->address_2,
      'address_3' => $req->address_3,
    ];

    $update = DB::table('company')
      ->update($data);

    if ($update) {
      $user = Auth::user()->name;

      DB::table('activities')
        ->insert([
          'activity' => "Company Profile Updated by $user",
          'activity_type' => 'edit'
        ]);

      return redirect()->back()->with('message', 'Updated Successfully');
    }
    return redirect()->back()->with('message', 'Already Updated');
  }

  public function update_website(Request $req)
  {
    $data = [
      'about' => $req->about,
      'terms' => $req->terms,
      'policy' => $req->policy,
    ];

    $update = DB::table('website')
      ->update($data);

    if ($update) {

      DB::table('activities')
        ->insert([
          'activity' => 'Policy content edited by ' . Auth::user()->name,
          'activity_type' => 'Policy content'
        ]);

      echo "Updated Successfully";
    } else {
      echo "Could not update";
    }
  }



  public function slider()
  {
    return view('manage_web.slider');
  }

  public function update_slider(Request $req)
  {
    //first image
    $file = $req->file('img');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('uploads/slider'), $file_name);
    //second image
    $filel = $req->file('img_2');
    $file_name2 = time() . $filel->getClientOriginalName();
    $filel->move(public_path('uploads/slider'), $file_name2);
    // third image
    $filee = $req->file('img_3');
    $file_name3 = time() . $filee->getClientOriginalName();
    $filee->move(public_path('uploads/slider'), $file_name3);

    $data = [
      'img' => $file_name,
      'img_2' => $file_name2,
      'img_3' => $file_name2,
    ];

    $update = DB::table('slider')
      ->update($data);

    if ($update) {

      DB::table('activities')
        ->insert([
          'activity' => 'Slider Updated by ' . Auth::user()->name,
          'activity_type' => 'Upload Slider'
        ]);

      return redirect()->back()->with('message', 'Updated Successfully');
    } else {
      return redirect()->back()->with('message', 'Could not update Slider');
    }
  }

  public function website()
  {

    $website = DB::table('website')
      ->first();

    return view('manage_web.website', compact('website'));
  }

  public function manage_oems()
  {
    $oemms = DB::table('oem')
      ->orderby('oem_id', 'desc')
      ->get();

    return view('manage_oems', compact('oemms'));
  }

  public function add_new_oem(Request $req)
  {
    if ($req->oem == "" || $req->oem == null) {
      return redirect()->route('manage_oems')->with('message', 'Please enter OEM');
    } else {
      $chk = DB::table('oem')
        ->where('oem', $req->oem)
        ->first();

      if ($chk) {
        return redirect()->route('manage_oems')->with('message', 'OEM Already Exist');
      } else {
        $insert = DB::table('oem')->insert([
          'oem' => $req->oem,
        ]);
        if ($insert) {

          DB::table('activities')
            ->insert([
              'activity' => 'OEM Added' . Auth::user()->name,
              'activity_type' => 'add'
            ]);

          return redirect()->route('manage_oems')->with('message', 'OEM Added Successfully');
        }
      }
    }
  }

  public function deleteoem(Request $req, $id)
  {
    $deleteoem = DB::table('oem')
      ->where('id', $id)
      ->delete();
    if ($deleteoem) {

      DB::table('activities')
        ->insert([
          'activity' => 'OEM Deleted' . Auth::user()->name,
          'activity_type' => 'delete'
        ]);

      return redirect()->route('manage_oems')->with('message', 'OEM Added Successfully');
    }
  }

  public function about_us()
  {

    return view('aboutus');
  }

  public function deletepropertycategory($id)
  {

    DB::table('property_categories')
      ->where(DB::raw('md5(id)'), $id)
      ->delete();

    return redirect()->back();
  }

  public function edit_sub_sub_cat_page(Request $req, $id)
  {
    //get

    $sub_sub_cat = DB::table('subsubcats')
      ->where(DB::raw('md5(id)'), $id)
      ->first();
    return view('edit_sub_sub_cat_page', compact('sub_sub_cat'));
  }

  public function edit_sub_cat_page(Request $req, $id)
  {
    //get
    $sub_cat = DB::table('sub_cat')
      ->where(DB::raw('md5(sub_cat_id)'), $id)
      ->first();
    return view('edit_sub_cat_page', compact('sub_cat'));
  }

  public function editSubcategory(Request $req)
  {
    $title = $req->title;
    $sub_cat_id = $req->sub_cat_id;

    $file = $req->file('img');
    $file_name = time() . $file->getClientOriginalName();

    $data = [
      'sub_title' => $title,
      'img' => $file_name,
    ];

    if ($file->move(public_path('uploads/sub_category'), $file_name)) {
      $sub_cat = DB::table('sub_cat')
        ->where('sub_cat_id', $sub_cat_id)
        ->update($data);

      return redirect()->back()->with('alert', 'Edited Successfully');
    }
  }


  public function editSubSubcategory(Request $req)
  {
    $title = $req->title;
    $sub_cat_id = $req->sub_cat_id;

    $file = $req->file('img');
    $file_name = time() . $file->getClientOriginalName();

    $data = [
      'title' => $title,
      'img' => $file_name,
    ];

    if ($file->move(public_path('uploads/sub_sub_category'), $file_name)) {
      $sub_cat = DB::table('subsubcats')
        ->where('id', $sub_cat_id)
        ->update($data);

      return redirect()->back()->with('alert', 'Edited Successfully');
    }
  }

  public function category_slider()
  {
    return view('manage_web.category_slider');
  }

  public function update_category_slider(Request $req)
  {
    $category_id = $req->category;

    $file = $req->file('image');
    $file_name = time() . $file->getClientOriginalName();

    $data = [
      'slider' => $file_name,
    ];

    if ($file->move(public_path('uploads/category_slider'), $file_name)) {

      $sub_cat = DB::table('sub_cat')
        ->where('sub_cat_id', $category_id)
        ->update($data);

      return redirect()->back()->with('alert', 'Added Successfully');
    }
  }


  public function sort_category()
  {

    $subcats = $cat = DB::table('sub_cat')
      ->join('cats', 'cats.id', 'sub_cat.cat_id')
      ->orderBy('sort')
      ->get();

    return view('sort_category', compact('subcats'));
  }


  public function update_sorting(Request $req)
  {
    $sub_cat_id = $req->sub_cat_id;
    $sort = $req->sort;

    $data = [
      'sort' => $sort,
    ];


    $subcats = DB::table('sub_cat')
      ->where('sub_cat_id', $sub_cat_id)
      ->update($data);

    if ($subcats) {
      return response()->json(["message" => "Record updated Successfully"], 200);
    } else {
      return response()->json(["message" => 'No Changes Made'], 201);
    }
  }

  public function addSuitablityModel(Request $req)
  {
    $model = $req->model;
    $product_id = $req->product_id;

    $data = [
      'model' => $model,
      'product_id' => $product_id
    ];

    $add = DB::table('suitability_model')
      ->insert($data);

    if ($add) {
      return response()->json(["message" => 'Added Successfully'], 200);
    } else {
      return response()->json(["message" => 'Something went wrong'], 201);
    }
  }

  public function view_suitability_model(Request $req, $id)
  {

    //get the model
    $suitSubModel = DB::table('suitability_sub_model')
      ->where('model_id', '=', $id)
      ->first();

    if ($suitSubModel->id) {
      $suitSubModel_id = $suitSubModel->id;
    }




    $suitSubModel = DB::table('suitability_model')
      ->where('id', '=', $suitSubModel_id)
      ->first();

    $name = $suitSubModel->model;

    $suitSubModel = DB::table('suitability_sub_model')
      ->where('model_id', '=', $id)
      ->get();

    return view('view_suitability_model', compact('suitSubModel', 'id', 'name'));
  }



  public function view_suitability_sub_model(Request $req, $id)
  {
    $suitSubModel = DB::table('suitability_sub_sub_model')
      ->where('sub_model_id', '=', $id)
      ->get();


    return view('view_suitability_sub_model', compact('suitSubModel', 'id'));
  }

  public function add_suitSubsubModel(Request $req)
  {
    $model = $req->submodel;
    $model_id = $req->model_id;

    $data = [
      'sub_sub_model' => $model,
      'sub_model_id' => $model_id,
    ];

    $add = DB::table('suitability_sub_sub_model')
      ->insert($data);

    if ($add) {
      return response()->json(["error" => "Added Successfully"], 200);
    }
  }





  public function manage_client()
  {
    $clients = DB::table('clients')
      ->where('status', '1')
      ->get();


    $states = DB::table('state')
      ->where('status', '1')
      ->get();

    return view('client.manage_clients', compact('clients', 'states'));
  }

  public function getLgA(Request $req)
  {
    $state_id = $req->state_id;


    $clients = DB::table('lga')
      ->where('status', '1')
      ->where('state_id', $state_id)
      ->get();

    $data = "<option>------- Select LGA -----------</option>";
    foreach ($clients as $client) {
      $data .= '<option valu="' . $client->id . '">' . $client->Lga . '</option>';
    }


    return response()->json(["data" => $data], 200);
  }

  public function add_client(Request $req)
  {
    $first_name = $req->first_name;
    $last_name = $req->last_name;
    $phone_no = $req->phone_no;
    $email = $req->email;
    $address = $req->address;
    $landmark = $req->landmark;
    $state = $req->state;
    $lga = $req->lga;
    $type = $req->type;

    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // generate a pin based on 2 * 7 digits + a random character
    $pin = mt_rand(100, 999)
      . mt_rand(100, 999)
      . $characters[rand(0, strlen($characters) - 1)];

    // shuffle the result
    $code = str_shuffle($pin);

    $data = [
      'first_name' => $first_name,
      'last_name' => $last_name,
      'phone_no' => $phone_no,
      'email' => $email,
      'address' => $address,
      'landmark' => $landmark,
      'state' => $state,
      'lga' => $lga,
      'code' => $code,
      'type' => $type,
    ];

    $dealer = Dealer::create($data);

    if ($dealer) {
      Mail::to($dealer->email)->send(new register_dealer($dealer));
      return redirect()->back()->with('alert', 'Added Successfully');
    } else {
      return redirect()->back()->with('alert', 'Something went wrong');
    }
  }



  public function view_client(Request $req, $id)
  {

    $clients = DB::table('clients')
      ->where(DB::raw('md5(id)'), '=', $id)
      ->first();


    $states = DB::table('state')
      ->where('status', '1')
      ->get();


    if ($clients->type == "Corporate Clients") {
      return view('client.view_client', compact('clients', 'states'));
    } else {
      return view('client.view_client2', compact('clients', 'states'));
    }
  }

  public function update_client(Request $req, $id)
  {



    $first_name = $req->first_name;
    $last_name = $req->last_name;
    $phone_no = $req->phone_no;
    $email = $req->email;
    $address = $req->address;
    $landmark = $req->landmark;
    $state = $req->state;
    $lga = $req->lga;
    $type = $req->type;

    $data = [
      'first_name' => $first_name,
      'last_name' => $last_name,
      'phone_no' => $phone_no,
      'email' => $email,
      'address' => $address,
      'landmark' => $landmark,
      'state' => $state,
      'lga' => $lga,
      'type' => $type,
    ];

    $add = DB::table('clients')
      ->where('id', $id)
      ->update($data);

    if ($add) {
      return redirect()->back()->with('alert', 'Updated Successfully');
    } else {
      return redirect()->back()->with('alert', 'Updated went wrong');
    }
  }

  public function update_coperate_client(Request $req, $id)
  {

    $company_name = $req->company_name;
    $cac_number = $req->cac_number;
    $company_address = $req->company_address;
    $tin_number = $req->tin_number;
    $bank_name = $req->bank_name;
    $account_number = $req->account_number;
    $account_name = $req->account_name;



    //first image
    $file = $req->file('cac_doc');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('uploads/clientDoc'), $file_name);

    //second image
    $filel = $req->file('cac_7');
    $file_name2 = time() . $filel->getClientOriginalName();
    $filel->move(public_path('uploads/clientDoc'), $file_name2);


    // third image
    $filee = $req->file('id_card');
    $file_name3 = time() . $filee->getClientOriginalName();
    $filee->move(public_path('uploads/clientDoc'), $file_name3);




    $data = [
      'company_name' => $company_name,
      'cac_number' => $cac_number,
      'company_address' => $company_address,
      'tin_number' => $tin_number,
      'bank_name' => $bank_name,
      'account_number' => $account_number,
      'account_name' => $account_name,

      'cac_doc' => $file_name,
      'cac_7' => $file_name2,
      'id_card' => $file_name3,

    ];


    $add = DB::table('clients')
      ->where('id', $id)
      ->update($data);

    if ($add) {
      return redirect()->back()->with('alert', 'Updated Successfully');
    } else {
      return redirect()->back()->with('alert', 'Updated went wrong');
    }
  }

  public function update_coperate_client2(Request $req, $id)
  {
    $store_name = $req->store_name;
    $store_address = $req->store_address;
    $bank_name = $req->bank_name;
    $account_number = $req->account_number;
    $account_name = $req->account_name;



    //first image
    $file = $req->file('evidence');
    $file_name = time() . $file->getClientOriginalName();
    $file->move(public_path('uploads/clientDoc'), $file_name);



    $data = [
      'store_name' => $store_name,
      'store_address' => $store_address,
      'bank_name' => $bank_name,
      'account_number' => $account_number,
      'account_name' => $account_name,
      'id_card' => $file_name,


    ];


    $add = DB::table('clients')
      ->where('id', $id)
      ->update($data);

    if ($add) {
      return redirect()->back()->with('alert', 'Updated Successfully');
    } else {
      return redirect()->back()->with('alert', 'Updated went wrong');
    }
  }



  public function view_client_details(Request $req, $id)
  {
    $clients = DB::table('clients')
      ->where(DB::raw('md5(id)'), '=', $id)
      ->first();


    return view('client.view_client_details', compact('clients'));
  }


  public function message_settings(Request $req)
  {

    $message = DB::table('message_settings')
      ->first();

    return view('messages.message_settings', compact('message'));
  }


  public function updateMessageSettings(Request $req)
  {
    $data = [
      'welcome' => $req->welcome,
      'confirmation' => $req->confirmation,
      'processing' => $req->processing,
    ];

    $update = DB::table('message_settings')
      ->update($data);

    if ($update) {

      DB::table('activities')
        ->insert([
          'activity' => 'Eamil Message Settings edited by ' . Auth::user()->name,
          'activity_type' => 'Message Settings'
        ]);

      echo "Updated Successfully";
    } else {
      echo "Could not update";
    }
  }


  public function add_suitSubModel(Request $req)
  {
    $data_id = $req->data_id;
    $model = $req->submodel;
    $model_id = $req->model_id;



    $data = [
      'sub_model' => $model,
      'model_id' => $model_id,
      // 'data_id' => $data_id,
    ];

    // dd($data);

    $exist = DB::table('suitability_sub_model')->where('id', $data_id)->exists();
    if ($exist) {
      $update = DB::table('suitability_sub_model')->where('id', $data_id)->update($data);
      if ($update) {
        return redirect()->back()->with('alert', 'Updated Successfully');
      }
    } else {
      $add = DB::table('suitability_sub_model')
        ->insert($data);
      if ($add) {
        return redirect()->back()->with('alert', 'Added Successfully');
      }
    }
  }


  public function delete_suitability_model(Request $req, $id)
  {
    $delete = DB::table('suitability_sub_model')
      ->where('id', $id)
      ->delete();

    if ($delete) {
      return redirect()->back()->with('alert', 'Deleted Successfully');
    }
  }


  public function delete_suitability_sub_model(Request $req, $id)
  {
    $delete = DB::table('suitability_sub_sub_model')
      ->where('id', $id)
      ->delete();

    if ($delete) {
      return redirect()->back()->with('alert', 'Deleted Successfully');
    }
  }
}
