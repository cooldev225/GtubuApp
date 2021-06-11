<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BoostHistory;
use App\Models\BoostStars;
use App\Models\BoostPackage;
class BoostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('frontend.boost',[
            
        ]);
    }
    public function getBoostsDataTable(Request $request){
        $query=BoostStars::select();
        $rows=$query->get();
        $params['pagination']['total']=count($rows);
        $params['pagination']['page']=$request->input('pagination.page');
        $params['pagination']['perpage']=$request->input('pagination.perpage');
		$params['pagination']['pages']=round($params['pagination']['total']/$params['pagination']['perpage'])+($params['pagination']['total']%$params['pagination']['perpage']<5?1:0);
        $params['sort']['field']=$request->input('sort.field');
        $params['sort']['sort']=$request->input('sort.sort');
        if(count($rows)&&isset($params['sort']['field'])&&isset($params['sort']['sort'])&&($params['sort']['field']=='stars'||$params['sort']['field']=='numberOfFollower'||$params['sort']['field']=='created_at'||$params['sort']['field']=='updated_at'))
        {
            $query=$query->orderBy("{$params['sort']['field']}","{$params['sort']['sort']}");
        }
        $res['data']=$query
                        ->skip(($params['pagination']['page']-1)*$params['pagination']['perpage'])
                        ->take($params['pagination']['perpage'])
                        ->get();
		for($i=0;$i<count($res['data']);$i++) {
            $res['data'][$i]['boost_used']=BoostHistory::select()->where('stars','=',$res['data'][$i]['stars'])->count();    
		}
        $res['meta']=$params['pagination'];
        return $res;
    }
    public function saveBoost(Request $request){
        $id=$request->input('id');
        if(BoostStars::select()->where('stars',$request->input('stars'))->count())
            if($id==0||$id!=BoostStars::select()->where('stars',$request->input('stars'))->get()[0]['id'])return -1;
        $row=$id>0?BoostStars::find($id):new BoostStars;
        $row->stars=$request->input('stars');
        $row->numberOfFollower=$request->input('numberOfFollower');
        if($id==0){
            $row->boost_used=0;    
            $row->created_at=date('Y-m-d H:i:s');    
        }
        $row->updated_at=date('Y-m-d H:i:s');
        $row->save();
        return $row->id;
    }
    public function deleteBoost(Request $request){
        $row=BoostStars::find($request->input('id'));
        $row->delete();
        $res=array('msg'=>'ok');
		exit(json_encode($res));
    }
    public function getBoostByYear(Request $request){
        $res=array();
        $star=$request->input('star');
        $date=$request->input('date');
        $j=1;
        foreach(BoostPackage::select()->orderBy('created_at')->get() as $pack){
            $res[0][$j-1]=$pack['packageName'];
            for($i=1;$i<13;$i++){
                $query=BoostHistory::select('boost_history.amount as amount')
                ->leftJoin('boost_stars','boost_history.boostStarsId','=','boost_stars.id')
                ->leftJoin('boost_package','boost_package.packageStar','=','boost_history.stars')
                ->whereRaw("YEAR(boost_history.created_at)='{$date}'")
                ->whereRaw("MONTH(boost_history.created_at)='{$i}'")
                ->where('boost_package.id','=',$pack['id']);
                if($star)$query=$query->where('boost_stars.id','=',$star);
                $res[$j][$i-1]=0;
                foreach($query->get() as $row)$res[$j][$i-1]+=$row['amount'];
            }
            $j++;
        }
        return $res;
    }
}
