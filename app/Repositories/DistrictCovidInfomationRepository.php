<?php
namespace App\Repositories;

use App\Model\DistrictCovidInfomation;
use App\Repositories\Interfaces\DistrictCovidInfomationRepositoryInterface;

class DistrictCovidInfomationRepository implements DistrictCovidInfomationRepositoryInterface
{
    public function all()
    {
        $districtCovidInfomation = DistrictCovidInfomation::with('district')->get();
        return $districtCovidInfomation;
    }
    public function getByDistrictId($id)
    {
    
        $district = DistrictCovidInfomation::where('district_id',$id)->with('district') ->get();
        
        return $district; 
    }


}
