<?PHP 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\customer ;

use function PHPUnit\Framework\isNull;

class CustomerRegistration extends Controller
{
    public function index()
    {
        return view('customer');
    }

    public function add( Request $request)
    {
        $request->validate([             
            'customer_name'     => 'required', 
            'customer_address'  => 'required' ,
            'customer_city'     => 'required',
            'customer_state'    => 'required',
            'customer_country'  => 'required'
        ]); 

        if($request['customer_id'] == 0 )
        {
            $customer = new customer() ;            
        }else{
            $cust_id  = $request['customer_id']; 
            $customer = Customer::find($cust_id);                 
        }

        $customer->customer_name  = $request['customer_name']; 
        $customer->address        = $request['customer_address']; 
        $customer->city_id        = $request['customer_city']; 
        $customer->state_id       = $request['customer_state']; 
        $customer->country        = $request['customer_country'];
        $customer->save();  
        
        return redirect('/customer'); 
    }

    public function list_show()
    {
        $customer = Customer::all();  
        
        //printr($customer->toArray());  
        $data = compact('customer'); 
        return view('customer_list')->with($data); 
    }

    public function delete($id)
    {
        $customer = Customer::find($id);   
        if(! is_null($customer))
        {
            $customer->delete() ; 
        }
        return redirect()->back();          
    }

    public function edit($id){ 
        $customer = Customer::find($id); 
        if(is_null($customer))
        {
           echo "Not Found";
           return redirect()->back(); 
        }else{
           $data = compact('customer'); 
           return view('customer')->with($data); 
        }
    }
}
