<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\BoostHistory;
use App\Models\BoostStars;
use App\Models\BoostPackage;
use App\Models\Ads;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\Feed;
use App\Models\FollowHistory;
class CommonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function getBoostPackages(Request $request){
        header("Content-type: application/json");
        $os_name=$request->input('os');
        $res= BoostPackage::select()
        //->where('os','=',$os_name)
        ->orderBy('packageStar')->orderBy('id')->get();
        return UserController::ok($res);
    }
    public function purchaseStar(Request $request){
        header("Content-type: application/json");
        $orderId=$request->input('orderId');
        $package_name=$request->input('packageName');
        $product_id=$request->input('productId');
        $purchase_state=$request->input('purchaseState');
        $purchase_time=$request->input('purchaseTime');
        $purchase_token=$request->input('purchaseToken');
        $os=$request->input('os');
        $userId=$request->input('userId');
        if($request->input('orderId')==null){
            $data=json_decode($request->getContent());
            $orderId = $data->orderId;
            $package_name = $data->package_name;
            $product_id = $data->product_id;
            $purchase_state=$data->purchaseState;
            $purchase_time=$data->purchaseTime;
            $purchase_token=$data->purchaseToken;
            $os=$data->os;
            $userId=$data->userId;
        }
        $create_at=date('Y-m-d H:i:s');
        
        //verify_purchase(data)
        $user = Customer::find($userId);
        if($user==null)exit('user not found!');
        if($os != 'iOS'){
            if(Transaction::where('orderId','=',$orderId)->count()==0)
                exit('This order has no exist!');
        }
        $p_id = BoostPackage::where('packageId','=',$product_id);
        if($p_id->count()==0)exit('This package has no exist!');
        else $p_id=$p_id->get()[0];
        
        $stars = $p_id['packageStar']+$user->stars;
        $pricing = $p_id['pricing'];
        //$product_id = $p_id['_id'];
        $user->stars=$stars;
        $user->updated_at=$create_at;
        $user->upsert=1;
        $user->save();

        $trans=Transaction::select()->where('orderId','=',$orderId);
        if($trans->count())
            $trans=$trans->get()[0];
        else{
            $trans=new Transaction;
            $trans->created_at=$create_at;
        }
        $trans->orderId= $orderId;
        $trans->packageName= $package_name;
        $trans->productId= $product_id;
        $trans->purchaseTime= $purchase_time;
        $trans->purchaseState= $purchase_state;
        $trans->userId= $userId;
        $trans->stars= $stars;
        $trans->purchaseToken= $purchase_token;
        $trans->amount= $pricing;
        $trans->updated_at=$create_at;
        $trans->save();
        return UserController::ok(array('orderId'=>$orderId, 'stars'=> $stars));
    }
    public function config(Request $request){
        header("Content-type: application/json");
        $configs = Ads::select()->get();
        $data = array(
            'google'=> $configs
        );
        return UserController::ok($data);
    }
    public function rewardVideo(Request $request){
        $userId=$request->input('userId');
        if($request->input('userId')==null){
            $data=json_decode($request->getContent());
            $userId=$data->userId;
        }
        $user = Customer::find($user);
        if($user==null)return UserController::err('something wrong!');
        $user_stars = $user->stars;
        $user_stars += 2;
        $user->updated_at=date('Y-m-d H:i:s');
        $user->stars = $user_stars;
        $user->save();
        return UserController::ok($user);
    }
    public function rewardTiktok(Request $request){
        $userId=$request->input('userId');
        if($request->input('userId')==null){
            $data=json_decode($request->getContent());
            $userId=$data->userId;
        }
        $user = Customer::find($userId);//'hasFollowTiktok': {'$exists': False}})
        if($user==null)return UserController::err('something wrong!');
        else if($user->hasFollowTiktok)return UserController::err('You have already follow us');
        $user_stars = $user->stars;
        $user_stars += 3;
        $user->stars = $user_stars;
        $user->hasFollowTiktok = true;
        $user->updated_at=date('Y-m-d H:i:s');
        $user->save();        
        return UserController::ok($user);
    }
    public function reportApp(Request $request){
        $userId=$request->input('userId');
        $reason=$request->input('reason');
        if($request->input('userId')==null){
            $data=json_decode($request->getContent());
            $userId=$data->userId;
            $reason=$data->reason;
        }
        $user = Customer::find($userId);
        if($user==null)return UserController::err('You have already follow us');
        return UserController::ok(array('success'=>1));
    }
    public function reportUser(Request $request){
        $userId=$request->input('userId');
        $reason=$request->input('reason');
        if($request->input('userId')==null){
            $data=json_decode($request->getContent());
            $userId=$data->userId;
            $reason=$data->reason;
        }
        $user = Customer::find($userId);
        if($user==null)return UserController::err('You have already follow us');
        return UserController::ok(array('success'=>1));
    }
    public function feeds(Request $request){
        header("Content-type: application/json");
        $page_num = $request->input('page');
        $page_size = $request->input('size');
        $userId = $request->input('userid');
        if($request->input('page')==null){
            $data=json_decode($request->getContent());
            $page_num = $data->page;
            $page_size = $data->size;
            $userId = $data->userid;
        }
        $skips = $page_size * ($page_num - 1);
        $user = Customer::find($userId);
        if($user==null)exit('user no found');
        $res= Feed::select()->where('uniqueId',$user->uniqueId)->
                orderBy('boostStars','desc')
                ->orderBy('id')->skip($skips)->take($page_size)->get();
        return UserController::ok($res);
    }
    public function follow(Request $request){
        header("Content-type: application/json");
        $user_id = $request->input('userId');
        $feed_id = $request->input('feedId');
        if($request->input('userId')==null){
            $data=json_decode($request->getContent());
            $user_id=$data->userId;
            $feed_id=$data->feedId;
        }
        $user = Customer::find($user_id);
        if($user==null||$user->fans==null||$user->uniqueId==null)exit('user no found!');
        $feed = Feed::find($feed_id);
        if($feed==null)exit('user no found!');
        $tiktok = UserController::tiktok_api_get_profile($user->uniqueId);
        $tiktok_fans = $tiktok['fans'];
        $user_fans = $user->fans;
        if($tiktok_fans > $user_fans){
            # Remove 1 booster
            if($feed->boostStars!=null&&$feed->boostStars>0){
                $feed->boostStars=$feed->boostStars-1;
                $feed->updated_at=date('Y-m-d H:i:s');
                $feed->save();
            }
            # Give 1 stars reward for user
            $stars = $user->stars+1;
            $user->stars=$stars;
            $user->fans=$tiktok_fans;
            $user->upsert=1;
            $user->updated_at=date('Y-m-d H:i:s');
            $user->save();
            # CHECK IF HISTORY IS EXIST
            $history = FollowHistory::select()->where('feedId','=',$feed_id)->where('userId','=',$user_id);
            if($history->count()==0){
                $history=new FollowHistory;
                $history->feedId=$feed_id;
                $history->userId=$user_id;
                $history->created_at=date('Y-m-d H:i:s');
            }else 
                $history=$history->get()[0];
            $history_updated_at=date('Y-m-d H:i:s');
            return UserController::ok(array('success'=>1));
        }else
            return UserController::ok(array('success'=>0));        
    }
    public function getAllBoost(Request $request){
        header("Content-type: application/json");
        return UserController::ok(BoostStars::select()->get());
    }
    public function boost(Request $request){
        header("Content-type: application/json");
        $stars=$request->input('stars');
        $boost_star_id=$request->input('boostStarsId');
        $userId=$request->input('userId');
        if($request->input('userId')==null){
            $data=json_decode($request->getContent());
            $stars=$data->stars;
            $boost_star_id=$data->boostStarsId;
            $userId=$data->userId;
        }
        $user = Customer::find($userId);
        if($user==null)
            exit('something wrong! user is None!');
        $uniqueId = $user['uniqueId'];
        $real_star = $user['stars'];
        if($real_star < $stars){
            exit('something wrong!, real_star < stars!');
        }
        $feed = Feed::where('uniqueId','=',$uniqueId);
        $date = date('Y-m-d H:i:s');
        if($feed->count()==0){
            $feed=new Feed;
            $feed->uniqueId=$user->uniqueId;
            $feed->following=$user->following;
            $feed->heart=$user->heart;
            $feed->fans=$user->fans;
            $feed->covers=$user->covers;
            $feed->isNew=$user->isNew;
            $feed->tokens=$user->tokens;
            $feed->upsert=$user->upsert;
            $feed->boost_date=$user->boost_date;
            $feed->boost_completion=$user->boost_completion;
            $feed->bought_date=$user->bought_date;
            $feed->signature='';
            $feed->boostStars=0;
            $feed->created_at=$date;
        }else 
            $feed=$feed->get()[0];
        $feed->boostStars = $feed->boostStars+$stars;
        $feed->updated_at = $date;
        $feed->save();
        # User Collection
        $stars_after_used = $real_star - $stars;
        $user->stars=$stars_after_used;
        $user->upsert=1;
        $user->save();
        # History Collection
        $row=new BoostHistory;
        $row->created_at=$date;
        $row->updated_at=$date;
        $row->userId=$user->id;
        $row->profile=$uniqueId;
        $row->stars=$stars;//boostStars
        $row->boostStarsId=$boost_star_id;
        $row->save();
        return UserController::ok(array('boost'=> $stars));
    }

    public function download(Request $request)
    {
        //return response()->download(storage_path("app/{$request->route('path1')}/{$request->route('path2')}/{$request->route('filename')}"));
        $filename=$request->route('filename');
        $path = "{$request->route('path1')}/{$request->route('path2')}/{$filename}";
        //$ext = pathinfo($filename, PATHINFO_EXTENSION);
        $type = Storage::mimeType($path);
        return response()->make(file_get_contents(storage_path("app/{$path}")), 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
}
