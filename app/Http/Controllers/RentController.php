<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

use App\RentBike;

class RentController extends Controller
{
    protected $amount;
    protected $result = 'Alquiler ok';
    //
    public function rentByHour($bikes, $familyPlan = null)
    {
        return $this->saveRent($bikes, $familyPlan, env('RENT_BY_HOUR'), env('HOUR_COST'));

    }

    public function rentByDay($bikes, $familyPlan = null)
    {
        return $this->saveRent($bikes, $familyPlan, env('RENT_BY_DAY'), env('DAY_COST'));
    }

    public function rentByWeek($bikes, $familyPlan = null)
    {
        return $this->saveRent($bikes, $familyPlan, env('RENT_BY_WEEK'), env('WEEK_COST'));

    }


    private function saveRent($bikes, $familyPlan, $type, $cost){
        $rent = new RentBike();
        $rent->bikeQuantity = $bikes;
        $rent->rentType = $type;
        if ($familyPlan){
            if ($this->familyCost($bikes,$cost)){
                $rent->familyPlan = true;
                $rent->amount = $this->amount;
                $rent->save();
            }
            else{
                $this->result = 'No corresponde descuento familiar';
            }

        }
        else{
            $rent->familyPlan = false;
            $rent->amount = $bikes * $cost;
            $rent->save();
        }

        return $this->result;
    }


    private function familyCost($bikes, $cost){
        if ($bikes >= 3 && $bikes <= 5 ){
            $this->amount = $bikes * $cost;
            $this->amount += ($this->amount * env('FAMILY_DISCOUNT'));
            $family = true;
        }
        else{
            $this->amount = 0;
            $family = false;
        }

        return $family;
    }
}
