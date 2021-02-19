<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserBid;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{

    private $profit_percentage;

    public function __construct()
    {
        $this->profit_percentage = 105;
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
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function addtrade(Request $request)
    {
        /**
         *
         * array
         *
         * high_or_low
         * amount
         * auto_close_time
         * user_bid
         */

        $data = $request->object;

        if (!empty($data)) {
            $data['user_id'] = Auth::user()->id;
            $data['session_id'] = $request->session()->getId();
            $bid = UserBid::create($data);
            $response['result'] = array(
                'status' => 'success',
                'bid' => $bid,
                'session_id' => $request->session()->getId()
            );
        } else {
            $response['result'] = array(
                'status' => 'failed',
                'session_id' => $request->session()->getId()
            );
        }

        return response()->json($response);

    }

    public function close_manual(Request $request)
    {


    }

    public function close_auto(Request $request)
    {

        /**
         * array
         *
         * closing_bid
         *
         */
        $data = $request->object;

        if (!empty($data)) {
            $all_closed_bids = array();

            $all_open_bids = UserBid::where('user_id', Auth::user()->id)
                ->where('auto_close_time', '>=', now());

            foreach ($all_open_bids as $bid) {

                if ($bid->high_or_low == "high") {
                    $pro_bid_value = $data->closing_bid - $bid->user_bid;
                    if ($pro_bid_value > 0) {
                        $profit = ($bid->amount / 100) * $this->profit_percentage;
                    } else {
                        $profit = -1 * $bid->amount;
                    }

                    //update user bid
                    $user_bid = UserBid::find($bid->id);
                    $user_bid->profit = $profit;
                    $user_bid->closing_bid = $data->closing_bid;
                    $all_closed_bids[] = $user_bid->update();

                    //update user acc balance
                    $user = User::find(Auth::user()->id);
                    $user->coins += $profit;
                    $user->update();


                } else {
                    $pro_bid_value = $data->closing_bid - $bid->user_bid;
                    if ($pro_bid_value < 0) {
                        $profit = ($bid->amount / 100) * $this->profit_percentage;
                    } else {
                        $profit = -1 * $bid->amount;
                    }

                    //update user bid
                    $user_bid = UserBid::find($bid->id);
                    $user_bid->profit = $profit;
                    $user_bid->closing_bid = $data->closing_bid;
                    $user_bid->update();

                    //update user acc balance
                    $user = User::find(Auth::user()->id);
                    $user->coins += $profit;
                    $all_closed_bids[] = $user->update();

                }


            }

            $response['result'] = array(
                'status' => 'success',
                'all_closed_bids' => $all_closed_bids,
                'user_acc_bal' => \Auth::user()->coins
            );

            return response()->json($response);
        } else {
            $response['result'] = array(
                'status' => 'failed',
                'user_acc_bal' => \Auth::user()->coins
            );

            return response()->json($response);
        }


    }


    public function user_account()
    {

        $results = array(
            "current_balance" => \Auth::user()->coins,
            "last_transaction" => UserBid::where('user_id', Auth::user()->id)->orderByDesc('id')->first(),
            "user_name" => Auth::user()->name
        );

        $response = array();

        $response['result'] = $results;

        return response()->json($response);
    }


}
