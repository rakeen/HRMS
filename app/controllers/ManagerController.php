<?php
class ManagerController extends BaseController{

	public function postNotice(){
		$n = new Notice;
		$n->notice = Input::get('notice');
		$n->posted_by=Auth::user()->userID;
		$n->posted_on= date('Y-m-d G-i-s');
		$n->save();

		return Redirect::to('notice')->with('message',"Notice posted successfully!!");
	}
}