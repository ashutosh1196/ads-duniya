<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\SavingAccount;
use App\Models\Loan;
use App\Models\ChooseUs;
use App\Models\Blog;
use App\Models\CreditCard;

class HomeController extends Controller
{
    public function welcome(){

        $banks = Bank::where('status',Bank::ACTIVE)->get();
        $choose_us = ChooseUs::get();
    	$blogs = Blog::get();
        
    	return view('welcome')->with([
    		'banks' => $banks,
            'choose_us' => $choose_us,
            'blogs' => $blogs,
    	]);
    }

    public function savingAccount(){
    	$saving_accounts = SavingAccount::all();
    	return view('saving-account')->with([
    		'saving_accounts' => $saving_accounts
    	]);
    }

    public function loan($type){
        $loans = Loan::where('type',$type)->get();
        return view('loan')->with([
            'type' => $type,
            'loans' => $loans,
        ]);
    }

    public function loanDetails($type,$id){
        $loan = Loan::find(base64_decode($id));
        return view('loan-details')->with([
            'type' => $type,
            'loan' => $loan,
        ]);
    }

    public function savingAccountDetails($id){
        $saving_account = SavingAccount::find(base64_decode($id));
        return view('saving-account-details')->with([
            'saving_account' => $saving_account
        ]);
    }

    public function creditCard(){
        $credit_cards = CreditCard::all();
        return view('credit-cards')->with([
            'credit_cards' => $credit_cards
        ]);
    }

    public function creditCardDetails($id){
        $credit_card = CreditCard::find(base64_decode($id));
        return view('credit-card-details')->with([
            'credit_card' => $credit_card
        ]);
    }

    public function blog($id){
        $blog = Blog::find(base64_decode($id));
        return view('blog')->with([
            'blog' => $blog
        ]);
    }
}
