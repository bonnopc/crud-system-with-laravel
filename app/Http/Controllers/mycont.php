<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\stuRequest;

use DB;

class mycont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function stuview()
    {
       // return "Its my code";
       // return view('iubview');
        return view('mydbview');
    }


    public function stuprocess(){
        $sql=DB::table('stu_reg')->paginate(5);
        $data = view('crudview')->with('age',$sql);
        return $data;

    }

    public function editstu($id)
    {
        $sql=DB::select("SELECT * from stu_reg where id='$id'");
        //  dd($upp);
        $editvalue_pass = view('edit')->with('valuepass',$sql);
        return $editvalue_pass;      
    }
        


    public function urlview($id,$id1)
    {
      // $value=$request->all();
      // dd($value);
      //  $name=$request->name;
      //  $email=$request->email;
        //dd($name);
        $sql=DB::update(" UPDATE info
              SET name='$id', email='$id1' ");
        
    }


    public function welcome(stuRequest $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $uname=$request->uname;
        $email=$request->email;
        $pass=$request->pass;
        $sql=DB::insert(" INSERT INTO stu_reg (fname,lname,uname,email,pass) VALUES ('$fname','$lname','$uname','$email','$pass')");
        //return view('stureg');
        return redirect('stuprocess');

    }

    public function stuupdate(Request $request){
        $id = $request->id;
        $fnameSet=$request->fnameSet;
        $lnameSet=$request->lnameSet;
        $unameSet=$request->unameSet;
        $emailSet=$request->emailSet;
        $passSet=$request->passSet;
        //dd($Idpass);
       $sql=DB::update("UPDATE stu_reg SET fname='$fnameSet', lname='$lnameSet', uname='$unameSet', email='$emailSet', pass='$passSet' WHERE id='$id'");
       //return view('welcomeback');
       return redirect('stuprocess');
    }

    public function deletestu($id){
        $sql=DB::delete("DELETE from stu_reg where id='$id'");
        if ($sql){
            return redirect('stuprocess');
        }
    }

    public function showStu2()
    {
       // return "Its my code";
       // return view('iubview');
        return view('mydbview');
    }

    public function showReg()
    {
        return view('stureg');

    }

    public function register(){
        return view('stuwelcome');
    }

    public function regSubmit(Request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $uname=$request->uname;
        $email=$request->email;
        $pass=$request->pass;
        $sql=DB::insert(" INSERT INTO stu_reg (fname,lname,uname,email,pass) VALUES ('$fname','$lname','$uname','$email','$pass')");
        echo "<p>Successful!</p>";
    }

    public function stuEdit(Request $request){
        $sql=DB::insert("SELECT * FROM stu_reg");
        $fname=$request->fname;
        $lname=$request->lname;
        $uname=$request->uname;
        $email=$request->email;
        $pass=$request->pass;
        $id=$request->id;
        $count=1;

        return '
        @while ($count <= $id) {
            <br> id: '. $row["id"]. ' - Name: '. $row["fname"].' '. $row["lname"] . '<br>;
            $count++;
        @endwhile';
        
    }

    public function showdbnew(){
        $rec=DB::table('stu_reg')->paginate(3);
        $data=view('showtable');
        $data->show=$rec;
        return $data;
    }


}


?>