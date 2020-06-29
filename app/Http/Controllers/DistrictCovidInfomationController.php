<?php

namespace App\Http\Controllers;

use App\Model\DistrictCovidInfomation;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\DistrictCovidInfomationRepositoryInterface;

class DistrictCovidInfomationController extends Controller
{
    private $districtInfoRepository;
    public function __construct(DistrictCovidInfomationRepositoryInterface $districtInfoRepository) {
        $this->districtInfoRepository = $districtInfoRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->districtInfoRepository->all();
    }

    public function getDistrictInfomation($id)
    {

        $district =  $this->districtInfoRepository->getByDistrictId($id);
        if(!$district) {
            return ['message' => 'error'];
        }
        
        return  $district;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function show(DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function edit(DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\DistrictCovidInfomation  $districtCovidInfomation
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistrictCovidInfomation $districtCovidInfomation)
    {
        //
    }
}
