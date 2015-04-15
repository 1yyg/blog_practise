$name = Input::get("name");

$name = Input::post("name");


if(has::put("name")){
}


$input = Input::all();


$input = Input::onley("username","password");

$input = Input::except("credit_card");

$input = Input::get("products.o.name");

$value = Cookie::get("name");
$response = Cookie::make("hello Word");

$response ->withCookie(Cookie::make('name',''value'm$minutes));


Cookie::queue($name,$value,$minutes);

$cookie = Cookie::forever("name","value");


return Redirect::to("form")->withInput();

return Redirect::to("form")->withInput(Input::except("password"))

$file = Input::file("photo");

if(Input::hasFile("photo")){

}


if(Input::;file("photo")->isValid()){


}


$path  = Input::;file('photo')->getRealPath();

$name = Input::file("photo")->getClientOriginalName();

$uri = Request::path();



$url = Request::url();



if(Request::ajax()){

}



if(Request::wantsJson()){
}


return Response::make($content)->withCookie($cookie);



return Redirect::to("user/login")->with;

return Redirect::to("user/login")->width("message","error");

return Redirect::route("login");

return Redirect::route("profile",array("user"=>1));

return Redirect::action("HomeContolller@index");

$url = URL::action("FooController@method");

$url = action("FooController@method");

$action Route::currentRouteAction();



Route::get("profile",array("before"=>"auth","users"=>"UserController@showProfile));

<?PHP

Route::resource("photo","PhotoController");

$results = DB::select("select*from users where id=?",array(2));


DB::insert("insert into users (id,name) values(?,?)",array(1,"my_name"));

DB::update("update users set votes=100 where name=?",array("my_name"));

DB::delete("delete from users");


DB::statement("drop table users");

DB::listen( function($sql,$bindings.$time){
    
});

DB::trasaction(function(){
    DB::table("users")->update(array("votes"=>1);
    
    DB::table("posts")->delete();
    
    
    
})


DB::beginTransaction();



DB::rollback();

DB::commit();

$users = DB::connection(“foo”)->select();

$pdo = DB::conection()->getPdo();


DB::reconnect(“foo”);

        
 $users = DB::table("users")->get();


        
$user  = DB::table("users")->where("name","john")->first();
$name = DB::table("users")->where("name","john")->plunt("name");

$roles = DB::table("roles")->lists("title");


$roles = DB::table("roles")->lists("title","name");

$users = Db::table("usrs")->select("name","email")->get();

$users = DB::table("users")->disinct()->get();


$users = DB::table("usres")->select('name as usre_name')->get();

$query = DB::table("users")->select("name");

$users = $query->addSelect("age")->get();



$users = DB::table("users")->where("votes",">",100)->get();



$users = DB::table("users")->where("votes",'>',100)->orWhere("name","john")->get();



$users = DB::table("users")->whreBetween("votes",array(1.100))->get();

$users = DB::table("users")->whereIn("id",array(1,2,3,5)))->get();

$usrs = DB::table("users")->whereNotIn("id",array(1,2,3))->get();

$users = DB::table("users")->whereNll("updated_at")->get();


$users = DB::table("users")->orderBy("name","desc")->groupBy("count")->having("count",">",100)->get();

$users = DB::table("users")->skip(10)->take(5)->get();




DB::table("users")
        ->join("contacts",'users.id','=','contacts.user_id')
        ->join('ordres','users.id','=','orders.user_id')
        ->select('users.id','contacts.phone','orders.prie')
        ->get();

DB::table("users")=>leftJoin("posts","users.id","="."posts.user_id");

DB::table("users")->join("contacts",function($join){
    $join->on("users.id",'=','contacts.user_id')->orOn(...);
)}->get();


DB::table("users")->where("name","=","john")->orWhere(function($query)){
    $query->where(function($querey)){}
})











?>