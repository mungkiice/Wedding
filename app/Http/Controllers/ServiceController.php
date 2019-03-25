<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
	public function showService()
	{
		$services = Service::all();
		return view('service', compact('services'));
	}

	public function adminShowService()
	{
		$service = Service::first();
		return view('admin.service-form', compact('service'));    	
	}

	public function store(Request $request)
	{
		Service::create([
			'category' => $request->category,
			'photo' => $request->photo->store('service', 'public')
		]);
		return back();	
	}

	public function updateService(Request $request)
	{
		$service = Service::first();
		$service->update([
			'text' => $request->text
		]);
		return back();
	}
}
