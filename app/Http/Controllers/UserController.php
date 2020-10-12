<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File; 
Use App\Models\User;
Use App\Models\Inbox;
Use App\Models\Challenge;
use DB;
use Auth;
use Redirect;

class UserController extends Controller {
    //
    public function checks() {
        if(!Auth::check()){
            return redirect('login');
        }
    }

    public function addUser() {
        $this -> checks();
    	return view('add_user');
    }
    
    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function themuser(Request $request) {
    	$this -> checks();
        $account = $request->account;
    	$password = bcrypt($request->password);
    	$fullname = $request->fullname;
    	$title = $request->title;
    	$email = $request->email;
    	$phone_number = $request->phone_number;
        if($title == "Giáo viên")
    	   $role = 2;
        else
            $role = 1;
    	DB::table('users')->insert([
    		'account'=>$account, 
    		'password'=>$password , 
    		'fullname'=>$fullname,
    		'title'=>$title,
    		'email'=>$email,
    		'phone_number'=>$phone_number,
    		'role'=>$role
    	]);
        
    	return redirect('list_of_users');
    }

    public function deleteById($id) {
        User::find($id)->delete();
        return redirect('list_of_users');
    }
    
    public function deleteMess($id) {
        $inbox = Inbox::find($id);
        $inbox->delete();
        return Redirect::to("message");
    }

    public function getLogin(Request $request) {
        $this -> checks();
    	$account = $request->account;
    	$password = $request->password;

    	if(Auth::attempt(['account'=>$account , 'password'=>$password])) {
    		$data = Auth::user();
    		$request->session()->put('id' , $data['id']);
    		$request->session()->put('role' , $data['role']);
    		$request->session()->put('fullname' , $data['fullname']);
            return redirect()->route('home_page'); 
    	}
    	else {
    		return redirect('login')->withErrors(['Sai tên đăng nhập hoặc mật khẩu!']);
    	}
    }

    public function list() {
        $this -> checks();
        $users = DB::table('users')->get();
        $id = Auth::id();
        return view('list_of_users', ['users' => $users, 'id' => $id]);
    }

    public function detail($id) {
        $idSend = Auth::id();
        $this -> checks();
        $user = DB::table('users')->where('id', $id)->first();
        return view('detail', ['user' => $user, 'idReceive' => $id, 'idSend' => $idSend]);
    }

    public function edit($id) {
        $this -> checks();
        $data = DB::table('users')->where('id', $id)->first();
        $account = $data->account;
        $password = $data->password;
        $fullname = $data->fullname;
        $email = $data->email;
        $phone_number = $data->phone_number;
        return view('edit', [
            'user' => $data,
            'id' => $id,
            'account' => $account,
            'password' => $password,
            'fullname' => $fullname,
            'email' => $email,
            'phone_number' => $phone_number,
        ]);
    }

    public function update(Request $request,$id) {
        $user = User::find($id);
        if ($user !== null) {
            $user->account = $request->get('account');
            $user->phone_number = $request->get('phone_number');
            $user->email = $request->get('email');
            $user->fullname = $request->get('fullname');
            $user->password = $request->get('password');
            $user->save();
        }
        return redirect('list_of_users');
    }
    public function message() {
        $idReceive = Auth::id();
        $data = DB::table('inbox')->where('idReceive' ,$idReceive)->get();
        $dataSend = DB::table('inbox')->where('idSend' ,$idReceive)->get();
        return view('myMess',['data'=> $data, 'dataSend' => $dataSend]);
    }
    
    public function createMess($idSend, $idReceive, $content) {
        $inbox = new Inbox;
        $inbox->message = $content;
        $inbox->idReceive = $idReceive;
        $inbox->idSend = $idSend;
        $inbox->save();
        return redirect('list_of_users');
    }

    public function send(Request $request ,$idSend, $idReceive) {
        $data = DB::table('users')->where('id' ,$idSend)->first();
        $name = $data->fullname;
        $send = $name.": ".$request->content;
        
        $this->createMess($idSend, $idReceive, $send);
        return Redirect::to("list_of_users");
    }

    public function profile() {
        $this -> checks();
        $id = Auth::id();
        $data = DB::table('users')->where('id', $id)->first();
        $account = $data->account;
        $password = encrypt($data->password);
        $fullname = $data->fullname;
        $email = $data->email;
        $phone_number = $data->phone_number;
        return view('profile', [
            'id' => $id,
            'account' => $account,
            'password' => $password,
            'fullname' => $fullname,
            'email' => $email,
            'phone_number' => $phone_number,
        ]);


    }
   
    public function exercise() {
        $files = File::allFiles(public_path('Homework'));
        $filess = File::allFiles(public_path('Submission'));
        $id = Auth::id();
        $data = DB::table('users')->where('id', $id)->first();
        $role = $data->role;
        return view('exercise', [
            'role' => $role,
            'files' => $files,
            'filess' => $filess, 
            'id' => $id,
        ]);
    }


    public function uploadHomeWork(Request $request) {
        if($request->hasFile('file')) {
            $path = "Homework";
            $file = $request->file('file');
            $file->move($path, $file->getClientOriginalName());
            echo($file->getClientOriginalName());
        }
        return Redirect::to("exercise");
    }
    public function download2($file) {
        $path = public_path()."/Homework/".$file;
        return response()->download($path);
    }
    public function deleteFile2($name) {
        $path = public_path()."/Homework/".$name;
        unlink($path);
        return Redirect::to("exercise");
    }

    public function submit( Request $request,$id) {
        $data = DB::table('users')->where('id' ,$id)->first();
        $name = $data->fullname;

        if($request->hasFile('file')) {
            $path = "Submission";
            $file = $request->file('file');
            $nameFile = $name."_".$file->getClientOriginalName();
            $file->move($path, $nameFile);
            echo($file->getClientOriginalName());
        }
        return Redirect::to("exercise");
    }

    public function download22($file) {
        $path = public_path()."/Submission/".$file;
        return response()->download($path);
    }

    public function deleteFile3($name) {
        $path = public_path()."/Submission/".$name;
        unlink($path);
        return Redirect::to("exercise");
    }

    public function challenge() {
        $files = File::allFiles(public_path('Challenge'));
        $datas = Challenge::all();
        $id = Auth::id();
        $data = DB::table('users')->where('id' ,$id)->first();
        $role = $data->role;
        return view('challenge', [
            'role' => $role, 
            'datas' => $datas,
        ]);
        
    }
    public function deleteChallenge($id) {
        $data = Challenge::find($id);
        $data->delete();
        return Redirect::to("game");
    }
    public function create(Request $request) {
        if($request->hasFile('file')) {
            $path = "Challenge";
            $file = $request->file('file');
            $content = $request->content;
            echo($content."_".$file->getClientOriginalName());
            $file->move($path, $file->getClientOriginalName());
        }
        try {
            $challenge = new Challenge;
            $challenge->description = $content;
            $challenge->result = $file->getClientOriginalName();
            $challenge->save();
            return redirect('game')->with('status',"Thêm thành công");
        }
        catch(Exception $e){
            return redirect('game')->with('failed',"Thêm thất bại");
        }
    }
    public function submitChallenge(Request $request, $id) {
        $data = DB::table('challenge')->where('id', $id)->first();
        $data = json_decode( json_encode($data), true);
        $resultSubmit = $request->result.".txt";
        $result = $data['result'];
        if($result == $resultSubmit) {
            $path = public_path()."/Challenge/".$data['result'];
            // $content = file_get_contents(base_path($path));
            return view('result',['result'=>'correct', 'path' => $path]);
        }
        else {
            return view('result',['result'=>'false']);
        }
    }
}
