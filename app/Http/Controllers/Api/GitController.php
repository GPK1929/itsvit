<?php

namespace App\Http\Controllers\Api;


use App\Http\Requests;
use App\Http\Controllers\Api\ApiController;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;

/**
 * API Class for work with GitHub
 *
 * Class GitController
 * @package App\Http\Controllers\Api
 */
class GitController extends ApiController
{
    /**
     * Get list GitHub branches
     */
    public function listBranches()
    {
        //Get list of branches from GitHub repo $this->reponame of $this->gituser user
        try {
            $gitBranches = GitHub::gitData()->references()->branches($this->parameters->gituser, $this->parameters->gitreponame);
            $branches = array_map(function ($branch) {
                $branch = $branch['ref'];
                $branch = preg_replace('/refs\/heads\//', "", $branch);
                return $branch;
            }, $gitBranches);
            $message = ['error' => 0, 'message' => ['branches' => $branches, 'def_branch' => $this->parameters->def_branch]];
        } catch (\Exception $e) {
            $message = ['error' => 1, 'message' => "Unable to get list of branches of " . $this->parameters->gituser . "/" . $this->parameters->gitreponame];
        }
        echo json_encode($message);
    }

}
