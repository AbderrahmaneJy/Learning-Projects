<?php
namespace App\Http\Controllers;
use Mail;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{ 
 public function getForm() 
{
 return view('validation/contact'); 
 } 
 public function postForm(ContactRequest $request) 
 { 
 return view('validation/Email_Contact')->with($request->all()); 
}}