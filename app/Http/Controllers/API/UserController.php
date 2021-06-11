<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\BoostHistory;
use App\Models\BoostStars;
use App\Models\BoostPackage;
use App\Models\Customer;
use App\Models\LastLogin;
class UserController extends Controller
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
    
    public function login(Request $request){
        header("Content-type: text/html");
        $username=$request->input('username');
        if($request->input('username')==null){
            $data=json_decode($request->getContent());
            $username=$data->username;
        }
        $jsonProfile = self::tiktok_api_get_profile($username);
        if(!isset($jsonProfile['fans']))return '{}';
        $fans = $jsonProfile['fans'];
        $heart = $jsonProfile['heart'];
        $video = $jsonProfile['video'];
        $following = $jsonProfile['following'];
        $uniqueId = $jsonProfile['uniqueId'];
        $user = Customer::select()->where('uniqueId','=',$username);
        if($user->count()>0){
            $user=$user->get()[0];
        }else{
            $user=new Customer;
            $user->uniqueId=$username;
            $user->stars=5;
            $user->isNew=1;
            $user->upsert=0;
            $user->created_at=date('Y-m-d H:i:s');   
        }
        $user->following=$following;
        $user->heart=$heart;
        $user->fans=$fans;
        $user->covers=str_replace('\\u0026', '&',$jsonProfile['avatarLarger']);
        $user->isNew=0;
        $user->updated_at=date('Y-m-d H:i:s');   
        $user->save();

        $row=new LastLogin;
        $row->userId=$user->id;
        $row->time=$user->updated_at;
        $row->save();
        $data = json_encode($user);
        return self::ok($user);
    }
    public function updateToken(Request $request){
        header("Content-type: application/json");
        $token=$request->input('token');
        $user_id=$request->input('userId');
        if($request->input('token')==null){
            $data=json_decode($request->getContent());
            $token=$data->token;
            $user_id=$data->userId;
        }
        $user = Customer::find($user_id);
        $user->tokens=$token;
        $user->updated_at=date('Y-m-d H:i:s');
        $user->save();

        $row=new LastLogin;
        $row->userId=$user->id;
        $row->time=date('Y-m-d H:i:s');   
        $row->save();
        return self::ok();
    }
    public function profile(Request $request){
        header("Content-type: application/json");
        $userId=$request->input('userId');
        if($request->input('userId')==null){
            $data=json_decode($request->getContent());
            $userId=$data->userId;
        }
        $user = Customer::find($userId);
        if($user==null)return self::err('something wrong!');
        return self::ok($user);
    }

    //
    public static function tiktok_api_get_profile($username){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.tiktok.com/@'.$username.'?lang=en',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'authority: https://www.tiktok.com/',
                'path: /@'.$username,
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
                'sessionid: ',
                'tt_webid_v2: 68'.(self::id_generator(16,"0123456789")),
                'Cookie: _abck=E4C3A97FC8CF2E8C36B1CDAAA04B6570~-1~YAAQRk4rvIjGy/13AQAAD7NgFAWw5fTyS6z4URNJonu6dt6GlE3D5cOj6XKEFpfKP7lwFFZM5dlIm7rrNUQV40+oHcxFvc+DWPZLLnvf7qh0lfmkUzoOltWH/apeLzTEXZGQ+IQcdgyvB086OJIjxgJcwzDI4qs7zlWpDVJ5m0NWgGOE1UhMRHY2fwp+g4d+GTdwwxoN6OVq/4LiowX4bWM9CbEmrytMKxmU0xVZKXy77MP0kFVtjNygb2lTdqOa9rzG7oyje4sWHDBrA97BH0HNbIV/ZRN0y+yhT+jf/47I4FHPc+wgnU78YIJPgfT6ZR2GALZm8JzDDjdj0epJcYwF6HlKuu0OxPbSXbD5Ax/CwHKfMHh0woA=~-1~-1~-1; ak_bmsc=8E5186CD09DC5A9F18D40055EB95ADE9BC2B4E46DA110000B0C04660C28CE15B~plU8c9ja05qda3v5WHep3nVawabW5HkdBxRHGGd74qYLybsbS6lXCLJ7CnBswCbHRGtZdMaayX3B6GjSCeKs1xWMB4oprJUy7Bqf9yqaJh38XK1JBbay3U9QQehL2i+Or4oK8zYfuHz/IQRk1yHIq9BPVawbd4V/lELc0ooSRVvtcnqr7FJgWFtQ4MH76KOyj6QFY5xZUCQYlIt4G3guO25QV5Jr9XAT2zAtnEfC+qLFw=; bm_mi=D5242A72C729695C7F1250EFB488897F~x3BhJ+g0+pBwZzqsNGp3+UuxJ08oUTXl0sDNz9P/YgmMqG1aQLBnVjeBzds8OV+nhyXi4//M7f2E3niAIQmv0WnxtGY0lqTou8OgE8adZoAUagfu3YsUX6qRbXIvHRx7StoHCz6Aa6jlLAWJqtFQzRJvC8nqzpy+aHiW3bA6H6v0COdHjy9AZBip1e2wXO9pflN0FED+OCbbQ7dD5CswtybI/mz/i7BHP1diITk19XwYGIzNWr0raFtrIGw5S4RM; bm_sv=E7A4EF0EC0CF552BBE833B1D8AF3F842~x29QVBCz8437bp5hiqQJCq4xPWLVgfUMydu100ZWdyJiTKMlhkhHijEATwF8hELyGGvG5IpE/zHV46LJBpIU9Pna+dN+CKPGQnxNygSQ20TjmAiPc6d0Q/Bdn2pPonyuqdJTqqDYPrTeHOChni62VyOuJrEfT2OCVNaX5MMVJuM=; bm_sz=30F5AFFCE49C45C2AED68EFE81D74364~YAAQRk4rvIfGy/13AQAAD7NgFAsPiKWwvyrY7IzAYj2A/ETME6Nzvg0Qv2tX0MSfCkgi57fhPU4VIWnAYekGxvxSoPNCh8sIXf7rAhel5OHvi8B6YdvFOqzmlpErmPTW87BS7TSk5+lUiyacHAYuQzrdaanHSH2ZjTtqMNG3hZbjOzCa6MSUYqrXhkhG2g==; tt_csrf_token=cWe5DovNZcXsACj4fAgzm8KV; tt_webid=6937444132332783110; tt_webid_v2=6937444132332783110'
            ),
        ));        
        $response = curl_exec($curl);
        curl_close($curl);
        $response=explode('<script id="__NEXT_DATA__" type="application/json" crossorigin="anonymous">',$response)[1];
        $response=explode('</script>',$response)[0];//return $response;
        $response=json_decode($response);
        $data=$response->props->pageProps;
        if(isset($data->userInfo)){
            $userInfoList = $data->userInfo;
            $user = $userInfoList->user;
            $stats = $userInfoList->stats;
            $uniqueId = $user->uniqueId;
            $nickname = $user->nickname;
            $avatarLarger = $user->avatarLarger;
            $signature = $user->signature;
            $verified = $user->verified;
            $id = $user->id;
            $followingCount = $stats->followingCount;
            $followerCount = $stats->followerCount;
            $heartCount = $stats->heartCount;
            $videoCount = $stats->videoCount;

            return array(
                'signature'=> $signature,
                'nickname'=> $nickname,
                'uniqueId'=> $uniqueId,
                'tiktokId'=> $id,
                'verified'=> $verified,
                'following'=> $followerCount,
                'fans'=> $followingCount,
                'heart'=> $heartCount,
                'video'=> $videoCount,
                'avatarLarger'=> $avatarLarger,
            );
        }
        return null;
    }
    public static function id_generator($len,$str){
        $res="";
        for($i=0;$i<$len;$i++){
            $j=rand(0,$len-1);
            $res.=substr($str,$j,1);
        }
        return $res;
    }
    public static function ok($obj=null){
        if($obj==null)
            return array(
                'data'=> '',
                'message'=> 'success',
                'error'=> 0
            );
        else 
            return array(
            'data'=> $obj,
            'message'=> 'success',
            'error'=> 0
        );
    }
    public static function err($msg){
        return array(
            'data'=> '',
            'message'=> $msg,
            'error'=> 1
        );
    }
}
