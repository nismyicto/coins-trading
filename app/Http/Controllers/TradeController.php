<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradeController extends Controller
{
    //
    public function __construct()
    {
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addtrade(Request $request)
    {
        //
/**
 * mama ewanne javascript obejct ekak dataSet kiyala eka oya wena wenama kada ganna
 * dataSet eke print_r ekak damma ma array ekakin ei
 * 
 * Array structure eka
 * 
 * $dataSet = array(
 *          "user_bid" =>#####,
 *          "high_or_low" =>#####,
 *          "auto_close_time" =>#####
 * 
 * 
 * );
 * 
 */
        $dataSet = $request->object;
        print_r($dataSet);

        
//Array be like
$results = array(
    "status" => 'success or not'

);

$response = array();

$response['result'] = $results;
        // Paramters tika
        /**
         * @ 
         * 
         */

         return response()->json($response);


        // Paramters tika
        /**
         * @ 
         * 
         */
    }

    public function close_manual(Request $request)
    {
        //
/**
 * mama ewanne javascript obejct ekak dataSet kiyala eka oya wena wenama kada ganna
 * dataSet eke print_r ekak damma ma array ekakin ei
 * 
 * Array structure eka
 * 
 * $dataSet = array(
 *          "current_bid" =>#####
 * 
 * 
 * );
 * 
 */
        $dataSet = $request->object;
        print_r($dataSet);

        /**
         * 
         * Mata json eka encode karala response eka ewanna
         * 
         * 
         * response eke 
         * profit eka ho paduwa
         * user thiyapu bid eka
         * close wechcha bid
         */

//Array be like
$results = array(
    "total_profit" => 'account balance eka',
    "closing_bid" => 'close wena bid eke value eka',

);


$response = array();
$results_bid = array();

//Array be like
$results_bid[0]['bid_value'] = "user thipu bid eka";
$results_bid[0]['profit'] = "e adala bid eke adala profit eka";
$results_bid[1]['bid_value'] = "user thipu bid eka";
$results_bid[1]['profit'] = "e adala bid eke adala profit eka";
$results_bid[2]['bid_value'] = "user thipu bid eka";
$results_bid[2]['profit'] = "e adala bid eke adala profit eka";

$response['result'] = $results;
$response['user_bids'] = $results_bid;
        // Paramters tika
        /**
         * @ 
         * 
         */

         return response()->json($response);


        // Paramters tika
        /**
         * @ 
         * 
         */
    }
    public function close_auto(Request $request)
    {
        //
/**
 * mama ewanne javascript obejct ekak dataSet kiyala eka oya wena wenama kada ganna
 * dataSet eke print_r ekak damma ma array ekakin ei
 * 
 * Array structure eka
 * 
 * $dataSet = array(
 *          "current_bid" =>#####
 * 
 * 
 * );
 * 
 */
        $dataSet = $request->object;
        print_r($dataSet);

        
        /**
         * 
         * Mata json eka encode karala response eka ewanna
         * 
         * 
         * response eke 
         * profit eka ho paduwa
         * user thiyapu bid eka
         * close wechcha bid
         */



//Array be like
$results = array(
    "profit" => 'account balance eka',
    "closing_bid" => 'close wena bid eke value eka',

);


$response = array();
$results_bid = array();

//Array be like
$results_bid[0]['bid_value'] = "user thipu bid eka";
$results_bid[0]['profit'] = "e adala bid eke adala profit eka";
$results_bid[1]['bid_value'] = "user thipu bid eka";
$results_bid[1]['profit'] = "e adala bid eke adala profit eka";
$results_bid[2]['bid_value'] = "user thipu bid eka";
$results_bid[2]['profit'] = "e adala bid eke adala profit eka";

$response['result'] = $results;
$response['user_bids'] = $results_bid;
        // Paramters tika
        /**
         * @ 
         * 
         */

         return response()->json($response);
        // Paramters tika
        /**
         * @ 
         * 
         */
    }


    public function user_account()
    {

        /**
         * 
         * Mata json eka encode karala response eka ewanna
         * 
         * 
         * response eke 
         * current balance eka account eke
         * last transcation time
         * user ge details tika
         */


//Array be like
$results = array(
    "current_balance" => 'account balance eka',
    "last_transaction" => 'time eka danna',
    "user_name" => 'user ge name'

);

$response = array();

$response['result'] = $results;
        // Paramters tika
        /**
         * @ 
         * 
         */

         return response()->json($response);
    }


    


}
