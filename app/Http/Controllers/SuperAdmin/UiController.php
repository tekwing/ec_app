<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormsAndDocuments;

class UiController extends Controller
{
    public function index()
    {
        return view('SuperAdmin.signin');
    }

    public function dashboard()
    {
        $data['page_name']="dashboard";
        return view('SuperAdmin.dashboard',$data);
    }

    public function ec_profile()
    {
        $data['page_name']="ec_profile";
        return view('SuperAdmin.ec_profile',$data);
    }

    public function ec_member_list()
    {
        $data['page_name']="ec_member_list";
        return view('SuperAdmin.ec_member_list',$data);
    }

    public function ec_user_roles()
    {
        $data['page_name']="ec_user_roles";
        return view('SuperAdmin.ec_user_roles',$data);
    }

    public function ec_roles_permission()
    {
        $data['page_name']="ec_roles_permission";
        return view('SuperAdmin.ec_roles_permission',$data);
    }

    public function ec_logo()
    {
        $data['page_name']="ec_logo";
        return view('SuperAdmin.ec_logo',$data);
    }

    public function letterhead()
    {
        $data['page_name']="letterhead";
        return view('SuperAdmin.letterhead',$data);
    }

    public function ec_reference()
    {
        $data['page_name']="ec_reference";
        return view('SuperAdmin.ec_reference',$data);
    }

    public function ec_meeting()
    {
        $data['page_name']="ec_meeting";
        return view('SuperAdmin.ec_meeting',$data);
    }

    public function ec_timeline()
    {
        $data['page_name']="ec_timeline";
        return view('SuperAdmin.ec_timeline',$data);
    }

    public function invoice()
    {
        $data['page_name']="invoice";
        return view('SuperAdmin.invoice',$data);
    }

    public function qr_code()
    {
        $data['page_name']="qr_code";
        return view('SuperAdmin.qr_code',$data);
    }

    public function bank_account_details()
    {
        $data['page_name']="bank_account_details";
        return view('SuperAdmin.bank_account_details',$data);
    }

    public function submissions()
    {
        $data['page_name']="submissions";
        return view('SuperAdmin.submissions',$data);
    }

    public function faq()
    {
        $data['page_name']="faq";
        return view('SuperAdmin.faq',$data);
    }

    public function initial_form()
    {
        $data['page_name']="initial_form";
        return view('SuperAdmin.initial_form',$data);
    }

    public function initial_review_form()
    {
        $data['page_name']="initial_review_form";
        return view('SuperAdmin.initial_review_form',$data);
    }

    public function add_form_document()
    {
        $data['page_name']="add_form_document";
        return view('SuperAdmin.add_form_document',$data);
    }

    public function form_sections()
    {
        $data['page_name']="form_sections";
        return view('SuperAdmin.form_sections',$data);
    }

    public function study_registration_form()
    {
        $data['page_name']="study_registration_form";
        return view('SuperAdmin.study_registration_form',$data);
    }

    public function editor()
    {
        $data['page_name']="editor";
        return view('SuperAdmin.editor',$data);
    }
}
