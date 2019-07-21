<?php

namespace DTApi\Http\Controllers;

use DTApi\Models\Job;
use DTApi\Http\Requests;
use DTApi\Models\Distance;
use Illuminate\Http\Request;
use DTApi\Repository\BookingRepository;
use DTApi\Services\BookingService;

/**
 * Class BookingController
 * @package DTApi\Http\Controllers
 */
class BookingController extends Controller
{

    /**
     * @var BookingService
     */
    protected $service;

    /**
     * BookingController constructor.
     * @param BookingService $bookingService
     */
    public function __construct(BookingService $bookingService){
        $this->service = $bookingService;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $response=$this->service->index();
        return response($response);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $response=$this->service->show($id);
        return response($response);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $response=$this->service->store($request);
        return response($response);

    }
    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function update($id, Request $request)
    {
        $response=$this->service->update($id, $request);
        return response($response);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function immediateJobEmail(Request $request)
    {
        $response=$this->service->immediateJobEmail($request);
        return response($response);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getHistory(Request $request)
    {
        $response=$this->service->getHistory($request);
        return response($response);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function acceptJob(Request $request)
    {
        $response=$this->service->acceptJob($request);
        return response($response);
    }

    public function acceptJobWithId(Request $request)
    {
        $response=$this->service->acceptJobWithId($request);
        return response($response);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function cancelJob(Request $request)
    {
        $response=$this->service->cancelJob($request);
        return response($response);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function endJob(Request $request)
    {
        $response=$this->service->endJob($request);
        return response($response);
    }

    public function customerNotCall(Request $request)
    {
        $response=$this->service->customerNotCall($request);
        return response($response);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getPotentialJobs(Request $request)
    {
        $response=$this->service->getPotentialJobs($request);
        return response($response);
    }

    public function distanceFeed(Request $request)
    {
        $response=$this->service->distanceFeed($request);
        return response($response);
    }

    public function reopen(Request $request)
    {
        $response=$this->service->reopen($request);
        return response($response);
    }

    public function resendNotifications(Request $request)
    {
        $response=$this->service->resendNotifications($request);
        return response($response);
    }

    /**
     * Sends SMS to Translator
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function resendSMSNotifications(Request $request)
    {
        $response=$this->service->resendSMSNotifications($request);
        return response($response);
    }

}
