<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Vendor;
use App\Models\Container;
use App\Models\Container_type;
use App\Models\Customer;

class StatusController extends Controller
{
    public function index($slug)
    {
        // $p_360 = 0;
        // $p_480 = 0;

        // $today = Carbon::today();
        // $tommrow = Carbon::tomorrow();

        // $vendor = Vendor::where('slug', $slug)->first();

        // $possess = Container::where('vendor_id', $vendor->id)
        //     ->where('created_at', '>', $vendor->updated_at)
        //     ->where('status', 1)
        //     ->get();

        // if ($possess->first())
        // {
        //     foreach ($possess as $p)
        //     {
        //         $container_temp = Container_type::find($p->container_type_id);
        //         if($container_temp->decoration == 360)
        //         {
        //             $p_360++;
        //         }
        //         elseif($container_temp->decoration == 480)
        //         {
        //             $p_480++;
        //         }
        //     };
        // };

        // $es_360 = $vendor->possess_360 - $p_360;
        // $es_480 = $vendor->possess_480 - $p_480;

        // $lend_container = Container::where('vendor_id', $vendor->id)
        //     ->where('created_at', '>', $today)
        //     ->where('created_at', '<', $tommrow)
        //     ->where('status', 1)
        //     ->count();
        // $recover_container = Container::where('vendor_id', $vendor->id)
        //     ->where('created_at', '>', $today)
        //     ->where('created_at', '<', $tommrow)
        //     ->where('status', 0)
        //     ->count();

        // return view('status', compact('vendor', 'lend_container', 'recover_container', 'es_360', 'es_480'));
        
        $vendor = Vendor::where('slug', $slug)->first();
        return view('status',compact('vendor'));
    }
    public function lendstatus($slug){
        $vendor = Vendor::where('slug', $slug)->first();
        $container = Container::where('vendor_id', $vendor->id)->where('status', 1)->latest()->paginate(15);
        return view('allstatus', compact('vendor','container'));
    }
    public function recoverstatus($slug){
        $vendor = Vendor::where('slug', $slug)->first();
        $container = Container::where('vendor_id', $vendor->id)->where('status', 0)->latest()->paginate(15);
        return view('allstatus', compact('vendor','container'));
    }
}

