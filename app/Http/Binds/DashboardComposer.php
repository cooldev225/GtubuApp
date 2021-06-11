<?php

namespace App\Http\Binds;

use Illuminate\View\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Util\DbUtil;
use App\Http\Controllers\Util\NotifyUtil;
use Illuminate\Support\Facades\Cookie;

use App\Models\Customer;
use App\Models\Transaction;
use App\Models\BoostHistory;
use App\Models\BoostPackage;
class DashboardComposer
{
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $_currentUrl = str_replace(URL::to('/').'/', '', url()->current());
        $currentUrl = ucfirst($_currentUrl);
        //$userRole = Auth::user()->getUserRole();

        $view->with('_currentUrl', $_currentUrl);
        $view->with('currentUrl', $currentUrl);

        $todayRevenue=0;
        foreach(Transaction::select()->whereRaw('DATE(created_at)=CURDATE()')->get() as $row)$todayRevenue+=$row['amount'];
        $totalRevenue=0;
        foreach(Transaction::select()->get() as $row)$totalRevenue+=$row['amount'];
        $view->with('totalUser',Customer::select()->count());
        $view->with('todayBooster',BoostHistory::select()->whereRaw('DATE(created_at)=CURDATE()')->count());
        $view->with('todayPackageBought',Transaction::select()->whereRaw('DATE(created_at)=CURDATE()')->count());
        $view->with('totalPackageBought',BoostHistory::select()->count());
        $view->with('todayRevenue',$todayRevenue);
        $view->with('totalRevenue',$totalRevenue);

        if($notification=DbUtil::getDevAlert()!='')$view->with('notification', $notification);

        if(request()->get('lang')){
            app()->setLocale(request()->get('lang'));
            Cookie::queue(Cookie::make('lang', request()->get('lang'), 200));
        }else if(request()->cookie('lang')){//Cookie::get('name')
            app()->setLocale(request()->cookie('lang'));
        }else{
            Cookie::queue(Cookie::make('lang', app()->getLocale(), 200));
        }
        $lang=str_replace('_', '-', app()->getLocale());

        $language_lab=explode(",","en,br");
        $language_img=explode(",","226-united-states.svg,011-brazil.svg");
        $language_txt=explode(",","English,Brasil");
        $view->with('lang', $lang);
        $view->with('language_lab', $language_lab);
        $view->with('language_img', $language_img);
        $view->with('language_txt', $language_txt);
    }
}
