<?php


namespace Katcher\Controllers;


use Katcher\ServiceLayers\KatcherService;
use League\Plates\Engine;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class KatcherController
{
    /**
     * @var KatcherService
     */
    protected $service;

    public function __construct(KatcherService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request, Response $response)
    {
        $response->setContent(view()->render('index'));

        return $response;
    }

    public function downloadFiles(Request $request, Response $response)
    {
        set_time_limit(0);

        $this->service->downloadFiles($request->request->all());

        return $response;
    }

    public function combiner(Request $request, Response $response, array $args)
    {
        var_dump($args);

        return $response;
    }

    public function test(Request $request, Response $response)
    {
        $response->setContent(view()->render('index'));

        return $response;
    }
}