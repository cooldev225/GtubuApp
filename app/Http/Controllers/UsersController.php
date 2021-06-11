<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\BoostHistory;
use App\Models\BoostPackage;
use App\Models\LastLogin;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('frontend.users',[
            
        ]);
    }
    public function getUsersDataTable(Request $request){
        $query=Customer::select();
        $rows=$query->get();
        $params['pagination']['total']=count($rows);
        $params['pagination']['page']=$request->input('pagination.page');
        $params['pagination']['perpage']=$request->input('pagination.perpage');
		$params['pagination']['pages']=round($params['pagination']['total']/$params['pagination']['perpage'])+($params['pagination']['total']%$params['pagination']['perpage']<5?1:0);
        $params['sort']['field']=$request->input('sort.field');
        $params['sort']['sort']=$request->input('sort.sort');
        if(count($rows)&&isset($params['sort']['field'])&&isset($params['sort']['sort'])&&($params['sort']['field']=='uniqueId'||$params['sort']['field']=='following'||$params['sort']['field']=='heart'||$params['sort']['field']=='fans'||$params['sort']['field']=='covers'||$params['sort']['field']=='stars'||$params['sort']['field']=='boost_date'||$params['sort']['field']=='bought_date'||$params['sort']['field']=='boost_completion'||$params['sort']['field']=='created_at'||$params['sort']['field']=='updated_at'))
        {
            $query=$query->orderBy("{$params['sort']['field']}","{$params['sort']['sort']}");
        }
        $res['data']=$query
                        ->skip(($params['pagination']['page']-1)*$params['pagination']['perpage'])
                        ->take($params['pagination']['perpage'])
                        ->get();
		for($i=0;$i<count($res['data']);$i++) {
            $res['data'][$i]['numOfTransaction']=Transaction::select()->where('userId',$res['data'][$i]['id'])->count();
            $res['data'][$i]['transaction']=Transaction::select()->where('userId',$res['data'][$i]['id'])->orderBy('created_at')->get();
            $res['data'][$i]['numOfBoost']=BoostHistory::select()->where('userId',$res['data'][$i]['id'])->count();
            $res['data'][$i]['boosthistory']=BoostHistory::select()->where('userId',$res['data'][$i]['id'])->orderBy('created_at')->get();
		}
        $res['meta']=$params['pagination'];
        return $res;
    }
    public function editUser(Request $request){
        $id=$request->route('id');
        return view('frontend.edituser',[
            'user'=>Customer::find($id),
            'numOfBoost'=>BoostHistory::select()->where('userId',$id)->count(),
            'boosthistory'=>BoostHistory::select()->where('userId',$id)->orderBy('created_at')->get(),
            'numOfTransaction'=>Transaction::select()->where('userId',$id)->count(),
            'transaction'=>Transaction::select('transactions.*','boost_package.packageName')
                ->leftJoin('boost_package','transactions.productId','=','boost_package.id')
                ->where('transactions.userId',$id)->orderBy('transactions.created_at')->get(),            
        ]);
    }
    public function saveUser(Request $request){
        $id=$request->input('id');
        //if($id==0&&count(Customer::select()->where('unigueId',$request->input('unigueId'))->get()))return -1;
        $row=$id>0?Customer::find($id):new Customer;
        $row->following=$request->input('following');
        $row->fans=$request->input('fans');
        $row->heart=$request->input('heart');
        $row->stars=$request->input('stars');
        $row->updated_at=date('Y-m-d H:i:s');
        $row->save();
        return $row->id;
    }
    public function deleteUser(Request $request){
        $row=Customer::find($request->input('id'));
        $row->delete();
        $res=array('msg'=>'ok');
		exit(json_encode($res));
    }
    public function getLastLoginByMonth(Request $request){
        $res=array();
        $date=explode("-",$request->input('date'));
        $j=0;
        for($i=mktime(0,0,0,$date[1],1,$date[0]);$i<($date[1]<12?mktime(0,0,0,$date[1]+1,1,$date[0]):mktime(0,0,0,1,1,$date[0]+1));$i+=86400){
            $d=date("Y-m-d",$i);
            $res[$j++]=LastLogin::select()->whereRaw("DATE(time)='{$d}'")->count();
        }
        return $res;
    }
}
