<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB, Hash, Validator, Session, File;

class VendorController extends Controller
{
    //
	public function vendor_order(){
/*		$user = Auth::user();
		$id = Auth::id();
		$data = DB::table('tbl_orders')
		->select('*')
		->where('created_by', $id)
		->get();*/

		$user = Auth::user();
		$id = Auth::id();
		$data = DB::table('tbl_orders')
		->join('users', 'users.id', '=', 'tbl_orders.created_by')
		->select('tbl_orders.*', 'users.name as name', 'users.email as email')
		->where('created_by', $id)
		->get();
		return view('vendorviews/vendor_order', ['data' => $data]);
	}

	public function submit_vendor_order(Request $request){
		$user = Auth::user();
		$id = Auth::id();
		// print_r($request->input('id'));

		if(array_has($request->all(),'id')){
			DB::table('tbl_orders')
			->where('id', $request->input('id'))
			->update([
				'isbn' => $request->input('isbn'),
				'author' => $request->input('author'),
				'publisher' => $request->input('publisher'),
				'yearofpub' => $request->input('yearofpub'),
				'price' => $request->input('price'),
				'quantity' => $request->input('quantity'),
				'discount' => $request->input('discount'),
				'tax' => $request->input('tax'),
				'created_by' => $id,
			]);
			Session::flash('message', ['text'=>'Order Updated Successfully','type'=>'success']);
			return redirect()->back()->with('success', 'your message,here');   
		}else{
			if(!empty($request->input('isbn')) && $request->input('isbn') != '' && $request->input('isbn') != null){
				DB::table('tbl_orders')->insert([
					'isbn' => $request->input('isbn'),
					'author' => $request->input('author'),
					'publisher' => $request->input('publisher'),
					'yearofpub' => $request->input('yearofpub'),
					'price' => $request->input('price'),
					'quantity' => $request->input('quantity'),
					'discount' => $request->input('discount'),
					'tax' => $request->input('tax'),
					'created_by' => $id,
				]);
			}
		}
		return redirect('vendor_order');
	}

	public function vendor_orders_listing(){
		$user = Auth::user();
		$id = Auth::id();
		$data = DB::table('tbl_orders')
		->join('users', 'users.id', '=', 'tbl_orders.created_by')
		->select('tbl_orders.*', 'users.name as name', 'users.email as email')
		->where('created_by', $id)
		->get();
		return view('vendorviews/vendor_orders_listing', ['data' => $data]);
	}


	public function vendor_add_admin(){
		$countries = DB::table('countries')
		->select('*')
		->get();
		$states = DB::table('states')
		->select('*')
		->get();

		$registered_vendors = DB::table('tbl_vendors_approve')
		->select('*')
		->orderBy('vendor_id', 'DESC')
		->get();
		return view('adminviews/vendor_requests_admin', ['countries' => $countries, 'states' => $states, 'registered_vendors' => $registered_vendors]);
	}

	public function vendor_add_admin_submit(Request $request){
		$fileModel = new File;
		$fileName = '';
		if($request->file()){
			$fileName = time().'_'.$request->file->getClientOriginalName();
			$filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

			// $fileModel->name = time().'_'.$request->file->getClientOriginalName();
			// $fileModel->file_path = '/storage/' . $filePath;
			// $fileModel->save();
		}
		$vendor = DB::table('tbl_vendors_approve')->insertGetId([
			'company_name' => $request->input('company_name'),
			'company_reg_no' => $request->input('company_reg_no'),
			'contact_person' => $request->input('contact_person'),
			'email' => $request->input('email'),
			'password' => $request->input('pass'),
			'company_address' => $request->input('company_address'),
			'post_code' => $request->input('post_code'),
			'state' => $request->input('state'),
			'country' => $request->input('country'),
			'tel_no' => $request->input('tel_no'),
			'supplier_contractor' => $request->input('supplier_contractor'),
			'company_bank' => $request->input('company_bank'),
			'bank_account_no' => $request->input('bank_account_no'),
			'authorize_capital' => $request->input('authorize_capital'),
			'paid_up_capital' => $request->input('paid_up_capital'),
			'doc' => $fileName,
		]);
		$vendor = DB::table('users')->insert([
			'vendor_id' => $vendor,
			'name' => $request->input('company_name'),
			'username' => str_replace(" ","",trim($request->input('company_name'))),
			'email' => $request->input('email'),
			'password' => Hash::make($request->input('pass')),
		]);
		return redirect('vendor_add_admin');
	}

	public function approverejectvendor(Request $request){
		$order_id = $request->order_id;
		$status = $request->status;
		DB::table('tbl_orders')
		->where('id', $order_id)
		->update([
			'status' => $status
		]);
		return redirect('vendor_requests');                  
	}

	public function vendor_listing_admin(Request $request){
		$registered_vendors = DB::table('tbl_vendors_approve')
		->select('*')
		->get();
		return view('adminviews/vendor_requests_admin_listing', ['registered_vendors' => $registered_vendors]);
	}

	public function vendor_reset_password(){
		return view('vendorviews/vendor_reset_password');			
	}

	public function vendor_reset_password_submit(Request $request){
		$validatedData = $request->validate([
			// 'current_password' => 'required',
			'new_password' => 'required|string|min:6|same:confirm_password',
			'confirm_password' => 'required',
		]);

		// if ($validatedData->fails()) {
		// 	return redirect('vendor_reset_password')
		// 	->withErrors($validator)
		// 	->withInput();
		// }


		$user = \Auth::user();
		// if (!\Hash::check($request->current_password, $user->password)) {
		// 	return back()->with('error', 'Current password does not match!');
		// }

		$user->password = \Hash::make($request->new_password);

        // $user->save();

		if($user->save()){
			Session::flash('message', ['text'=>'Password Updated Successfully','type'=>'success']);
			return redirect('vendor_reset_password');
		}


         // return back()->with('message', 'Password successfully changed!');
	}


	public function edit_vendor_order($order_id){
		// $order_id = $request->order_id;
		$user = Auth::user();
		$id = Auth::id();
		$data = DB::table('tbl_orders')
		->join('users', 'users.id', '=', 'tbl_orders.created_by')
		->select('tbl_orders.*', 'users.name as name', 'users.email as email')
		->where('created_by', $id)
		->get();

		$editdata = DB::table('tbl_orders')
		->join('users', 'users.id', '=', 'tbl_orders.created_by')
		->select('tbl_orders.*', 'users.name as name', 'users.email as email')
		->where('tbl_orders.id', $order_id)
		->where('tbl_orders.created_by', $id)
		->get()
		->first();
		return view('vendorviews/edit_vendor_order', ['data' => $data, 'editdata' => $editdata]);
	}

	public function delete_vendor_order($order_id){
		// $order_id = $request->order_id;
		echo $order_id;
		DB::table('tbl_orders')->where('id', $order_id)->delete();
		Session::flash('message', ['text'=>'Order Deleted Successfully','type'=>'success']);
		return redirect('vendor_order');
	}

	public function generate_vendor_order($order_id){
		$user = Auth::user();
		$id = Auth::id();
		DB::table('tbl_orders')
		->where('id', $order_id)
		->update(['generate_order_by' => $id]);
		return redirect('vendor_order');
	}



}
