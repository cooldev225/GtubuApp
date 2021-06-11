<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ads;
class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('frontend.ads',[
            
        ]);
    }
    public function getAdsDataTable(Request $request){
        $query=Ads::select();
        $rows=$query->get();
        $params['pagination']['total']=count($rows);
        $params['pagination']['page']=$request->input('pagination.page');
        $params['pagination']['perpage']=$request->input('pagination.perpage');
		$params['pagination']['pages']=round($params['pagination']['total']/$params['pagination']['perpage'])+($params['pagination']['total']%$params['pagination']['perpage']<5?1:0);
        $params['sort']['field']=$request->input('sort.field');
        $params['sort']['sort']=$request->input('sort.sort');
        if(count($rows)&&isset($params['sort']['field'])&&isset($params['sort']['sort'])&&($params['sort']['field']=='adsType'||$params['sort']['field']=='AdsId'||$params['sort']['field']=='enable'))
        {
            $query=$query->orderBy("{$params['sort']['field']}","{$params['sort']['sort']}");
        }
        $res['data']=$query
                        ->skip(($params['pagination']['page']-1)*$params['pagination']['perpage'])
                        ->take($params['pagination']['perpage'])
                        ->get();
		//for($i=0;$i<count($res['data']);$i++) {
            
		//}
        $res['meta']=$params['pagination'];
        return $res;
    }
    public function saveAd(Request $request){
        $id=$request->input('id');
        $row=$id>0?Ads::find($id):new Ads;
        $row->adsId=$request->input('adsId');
        $row->enable=$request->input('enable');
        if($id==0){  
            $row->created_at=date('Y-m-d H:i:s');    
        }
        $row->updated_at=date('Y-m-d H:i:s');
        $row->save();
        return $row->id;
    }
}
