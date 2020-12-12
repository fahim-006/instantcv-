<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CVform extends Controller
{
    //
         public function form1() {
			return view('CVforms.form1');
		}

		public function insertDefinedInfo(Request $request, $id){
			//insert phone number
			$data1 = array();
			$data1['id_from_registration']=$id;
			$data1['title']='Phone Number';
			$data1['info']= $request->number;
			$insertNum = DB::table('cvdetails')->insert($data1);

			//insert github
			$data2 = array();
			$data2['id_from_registration']=$id;
			$data2['title']='Github';
			$data2['info']= $request->github;
			$insertgit= DB::table('cvdetails')->insert($data2);

			//insert portfolio
			$data3 = array();
			$data3['id_from_registration']=$id;
			$data3['title']='My Portfolio';
			$data3['info']= $request->portfolio;
			$insertportfolio= DB::table('cvdetails')->insert($data3);

			//insert skills
			$data4 = array();
			$data4['id_from_registration']=$id;
			$data4['title']='My skills';
			$data4['info']= $request->Skills;
			$insertskills = DB::table('cvdetails')->insert($data4);

			//insert myself
			$data5 = array();
			$data5['id_from_registration']=$id;
			$data5['title']='About Myself';
			$data5['info']= $request->yourself;
			$insertaboutme = DB::table('cvdetails')->insert($data5);

			//insert experience
			$data9 = array();
			$data9['id_from_registration']=$id;
			$data9['title']='Experience';
			$data9['info']= $request->experience;
			$insertexperience= DB::table('cvdetails')->insert($data9);

			//insert education
			$data6 = array();
			$data6['id_from_registration']=$id;
			$data6['title']='Education';
			$data6['info']= $request->education;
			$inserteducation = DB::table('cvdetails')->insert($data6);


			//insert reference
			$data7 = array();
			$data7['id_from_registration']=$id;
			$data7['title']='Reference';
			$data7['info']= $request->reference;
			$insertreference = DB::table('cvdetails')->insert($data7);

			 $image = $request->file('photo');

			if($image){
				$image_name = hexdec(uniqid());
				$ext = strtolower($image->getClientOriginalExtension());
				$image_full_name = $image_name.'.'.$ext;
				$upload_path = 'public/cv/images/';
				$image_url = $upload_path.$image_full_name;
				$success = $image->move($upload_path, $image_full_name);

				$data8 = array();
				$data8['id_from_registration']=$id;
				$data8['title']='image';
				$data8['info']= $image_url;

				$insertPhoto =  DB::table('cvdetails')->insert($data8);
			}

			if($insertNum || $insertgit || $insertportfolio || $insertskills || $insertaboutme ||          
				$insertexperience || $inserteducation || $insertreference){
				return Redirect()->back();
			}else{
				return Redirect()->back();
			}

		}
}
