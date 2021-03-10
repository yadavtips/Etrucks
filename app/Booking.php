<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'booking' ,
        'attach' ,
        'load_date' ,
        'load_point' ,
        'upload_point' ,
        'truck_num' ,
        'truck_type' ,
        'driver_num' ,
        'owner_name' ,
        'owner_num' ,
        'tpt_name' ,
        'tpt_mob' ,
        'mobile2' ,
        'tpt_account_name' ,
        'tpt_account_num' ,
        'tpt_ifsc_code' ,
        'gaadi_rate' ,
        'advance_2_tpt_details' ,
        'advance_total_tpt' ,
        'neft_txn_id' ,
        'prize_money_tpt' ,
        'driver_adv' ,
        'bal_tpt_paid' ,
        'pod_doc_rec' ,
        'party_name2' ,
        'party_num' ,
        'party_rate' ,
        'adv_by_party' ,
        'adv_total_party' ,
        'imps_txn_details' ,
        'prize_money_party' ,
        'bal_on_party' ,
        'profit' ,
        'pod_sent' ,
        'gst_bill_num' ,
        'verify_docs' ,
        'status1' ,
        'status2' ,
        'status3' ,
        'call_status' 
    ];
  
}
