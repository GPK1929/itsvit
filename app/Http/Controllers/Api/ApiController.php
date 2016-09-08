<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\ConfigParameters\ParametersList;
use App\Http\Controllers\VirtualEnvironments\VirtualEnv;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use Helpers;
     /**
     * All system parameters
     *
     * @var ParametersList
     */
    protected $parameters;

    /**
     * Type of virtual environment (server virtualization)
     *
     * @var VirtualEnv
     */
    protected $virtualEnv;

    /**
     * Define for app parameter list
     * Type of virtual environment (server virtualization)
     * define in App\Providers\VirtualEnvProvider (now it is Proxmox ENV)
     *
     * Controller constructor.
     * @param ParametersList $parameters
     * @param VirtualEnv $virtualEnv
     *
     */
    public function __construct(ParametersList $parameters,  VirtualEnv $virtualEnv)
    {
        $this->parameters = $parameters;
        $this->virtualEnv = $virtualEnv;
    }
}
