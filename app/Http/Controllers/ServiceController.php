<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
	public function showService()
	{
		$service = Service::first();
		return view('service', compact('service'));
	}

	public function adminShowService()
	{
		$service = Service::first();
		return view('admin.service-form', compact('service'));    	
	}

	public function updateService(Request $request)
	{
		$service = Service::first();
		$service->update([
			'text' => $request->text
		]);
		return redirect()->back();
	}
}
