<?php
namespace App\Http\Controllers;
use App\Models\Tbl_student;
use Request;
use Redirect;
use Session;

class TraineeController extends Controller
{
	public function abcd()
	{
		$data["page"] = "ABCD";
		return view('welcome', $data);
	}
	public static function allow_logged_in_users_only()
	{
		if(session("login") != true)
		{
			return Redirect::to("/login")->send();
		}
	}
	public static function allow_logged_out_users_only()
	{
		if(session("login") == true)
		{
			return Redirect::to("/crud")->send();
		}
	}
	public function crud()
	{
		Self::allow_logged_in_users_only();
		$data["page"] = "ABCD";
		$data["_student"] = $_student = Tbl_student::get();
		return view('crud', $data);

	}
	public function add()
	{
		Self::allow_logged_in_users_only();
		return view('crud_add');
	}
	public function add_submit()
	{
		Self::allow_logged_in_users_only();
		$insert["student_name"] = Request::input("student_name");
		$insert["grade"] = Request::input("student_grade");
		Tbl_student::insert($insert);

		Redirect::to("/crud")->send();
	}
	public function edit($id)
	{
		Self::allow_logged_in_users_only();
		$data["student"] = Tbl_student::where("student_id", $id)->first();
		return view('crud_edit', $data);
	}
	public function edit_submit($id)
	{
		Self::allow_logged_in_users_only();
		$update["student_name"] = Request::input("student_name");
		$update["grade"] = Request::input("student_grade");

		Tbl_student::where("student_id", $id)->update($update);

		Redirect::to("/crud")->send();
	}
	public function delete($id)
	{
		Self::allow_logged_in_users_only();
		Tbl_student::where("student_id", $id)->delete();
		Redirect::to("/crud")->send();
	}

	public function login()
	{
		Self::allow_logged_out_users_only();
		
		$data["page"] = "login";
		return view('login', $data);
	}
	public function login_submit()
	{
		Self::allow_logged_out_users_only();
		
		$check_login = Tbl_student::where("student_name", Request::input("un"))->where("grade", Request::input("pw"))->first();

		if($check_login)
		{
			Session::put("login", true);
			return Redirect::to("/crud");
		}
		else
		{
			return Redirect::to("/login")->with("message", "Username/Passwors is incorrect.");
		}

	}
	public function logout()
	{
		Session::forget("login");
		return Redirect::to("/login");
	}
}
