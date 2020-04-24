<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Middleware;
use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;


class instahuntersController extends Controller
{
    /**
     * $request
     *
     * @var request
     */
    protected $request;
    /**
     * $client
     *
     * @var guzzle
     */
    protected $client;
    /**
     * $data2view
     *
     * @var string
     */
    protected $data2view;


    public function __construct(Request $request) {
        $this->request = $request;
        $this->client = new Client([
            'base_uri' => 'http://localhost/AnalisisBigData/public/'
        ]);
        $this->data2view = null;
        $this->middleware('auth');
    }

    /**
     * getFrmInstaHunter
     *
     * @return Illuminate\Contracts\Support\Renderable
     */
    public function getFrmInstaHunter()
    {
        $data2view = null;
        if ($data2view!=null) {
            return view('instahunters', compact('data2view'));
        }
        else {
            return view('instahunters' , compact('data2view'));
        }
    }

    public function getFrmInstaHunterview()
    {
            $response =  $this->client->request('GET', 'apiPreview.php');
            $allData = json_decode($response->getBody()->getContents());

            /**
             * Paginación
             */
            $allData = $this->paginate($allData);
            return $allData;

    }


    /**
     * postGuzzleRequest
     *
     * @return void
     */
    public function postGuzzleRequest()
    {
        $data2view = null;
        /* http://localhost/AnalisisBigData/public/apiInsert.php */
        $res = $this->client->request('POST', 'apiInsert.php', [
            'json' => [
                'campoSelect' => $this->request->input('campoSelect'),
                'palabraClave' => $this->request->input('palabraClave'),
                ]
            ]

        );
        $data2view = json_decode($res->getBody()->getContents());

        if ($data2view!=null) {
            $success = "<script>alert('".$data2view->message."')</script>";
            return view('instahunters', compact('success', 'data2view'));
        }
        else {
            return view('instahunters', compact('data2view'));
        }





    }


    public function getCsv()
    {
            $response = $this->client->request('GET', 'apiPreview.php');
            $posts = json_decode($response->getBody()->getContents(), true);

            $headers = ['img', 'txt','date', 'likes','comentarios'];
            $posts = array_merge([$headers], $posts);

            return (new \LaravelCsvGenerator\LaravelCsvGenerator())
                    ->setData($posts)
                    ->renderStream();
        }

    public function paginate($items)
    {

        // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a new Laravel collection from the array data
        $itemCollection = collect($items);

        // Define how many items we want to be visible in each page
        $perPage = 3;

        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $paginatedItems->setPath($this->request->url());

        return view('instahunterview', ['items' => $paginatedItems]);
    }


}
