<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BoostHistory;
use App\Models\BoostPackage;
use App\Models\Transaction;
class PacksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('frontend.packs',[
            
        ]);
    }
    public function getPacksDataTable(Request $request){
        $query=BoostPackage::select();
        $rows=$query->get();
        $params['pagination']['total']=count($rows);
        $params['pagination']['page']=$request->input('pagination.page');
        $params['pagination']['perpage']=$request->input('pagination.perpage');
		$params['pagination']['pages']=round($params['pagination']['total']/$params['pagination']['perpage'])+($params['pagination']['total']%$params['pagination']['perpage']<5?1:0);
        $params['sort']['field']=$request->input('sort.field');
        $params['sort']['sort']=$request->input('sort.sort');
        if(count($rows)&&isset($params['sort']['field'])&&isset($params['sort']['sort'])&&($params['sort']['field']=='packageName'||$params['sort']['field']=='pricing'||$params['sort']['field']=='packageStar'||$params['sort']['field']=='packageId'||$params['sort']['field']=='os'||$params['sort']['field']=='created_at'||$params['sort']['field']=='updated_at'))
        {
            $query=$query->orderBy("{$params['sort']['field']}","{$params['sort']['sort']}");
        }
        $res['data']=$query
                        ->skip(($params['pagination']['page']-1)*$params['pagination']['perpage'])
                        ->take($params['pagination']['perpage'])
                        ->get();
		for($i=0;$i<count($res['data']);$i++) {
            $res['data'][$i]['packs_bought']=BoostHistory::select()->where('stars','=',$res['data'][$i]['packageStar'])->count();
		}
        $res['meta']=$params['pagination'];
        return $res;
    }
    public function savePack(Request $request){
        $id=$request->input('id');
        if(BoostPackage::select()->where('packageName',$request->input('packageName'))->count())
            if($id==0||$id!=BoostPackage::select()->where('packageName',$request->input('packageName'))->get()[0]['id'])return -1;
        $row=$id>0?BoostPackage::find($id):new BoostPackage;
        $row->packageName=$request->input('packageName');
        $row->pricing=$request->input('pricing');
        $row->packageStar=$request->input('packageStar');
        $row->packageId=$request->input('packageId');
        $row->os=$request->input('os');
        if($id==0){  
            $row->created_at=date('Y-m-d H:i:s');    
        }
        $row->updated_at=date('Y-m-d H:i:s');
        $row->save();
        return $row->id;
    }
    public function deletePack(Request $request){
        $row=BoostPackage::find($request->input('id'));
        $row->delete();
        $res=array('msg'=>'ok');
		exit(json_encode($res));
    }
    public function getPackagesByYear(Request $request){
        $res=array();
        $os=$request->input('os');
        $pack=$request->input('pack');
        $date=$request->input('date');
        for($i=1;$i<13;$i++){
            $query=Transaction::select('transactions.amount as amount')
            ->leftJoin('boost_package','transactions.productId','=','boost_package.id')
            ->whereRaw("YEAR(transactions.created_at)='{$date}'")
            ->whereRaw("MONTH(transactions.created_at)='{$i}'");
            if($os)$query=$query->where('boost_package.os','=',$os);
            if($pack)$query=$query->where('boost_package.id','=',$pack);
            $res[$i-1]=0;
            foreach($query->get() as $row)$res[$i-1]+=$row['amount'];
        }
        return $res;
    }
}
