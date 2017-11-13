<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Response;
use App\Layer;
use App\LayerGroup;

use App\ViewModels\LayerModel;
use App\ViewModels\LayersModel;


class MapController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('guest');
     }
    //

    public function index(){
        $layerGroup = LayerGroup::all();
        $groups = array();
        foreach($layerGroup as $group){
            $vmLayer = new LayersModel();
            $vmLayer->Id = $group->id;
            $vmLayer->Description = $group->description;
            $vmLayer->Active = $group->active;
            $vmLayer->Expanded = $group->expanded;
            $layers = $group->layers;
            foreach($layers as $l){
                $layer = new LayerModel();
                $layer->Id = $l->id;
                $layer->Description = $l->description;
                $layer->Visible = $l->visible;
                $layer->Opacity = $l->opacity;
                $layer->Params = $l->params;
                $layer->ServerType = $l->serverType;
                $layer->Url = $l->url;
                $layer->Source = $l->source;
                $vmLayer->Layers[] = $layer;
            }
            $groups[]= $vmLayer;
        }
        return view('map/index', compact($groups));
    }


    public function layers(){
        $layerGroup = LayerGroup::all();
        $groups = array();
        foreach($layerGroup as $group){
            $vmLayer = new LayersModel();
            $vmLayer->Id = $group->id;
            $vmLayer->Description = $group->description;
            $vmLayer->Active = $group->active;
            $vmLayer->Expanded = $group->expanded;
            $layers = $group->layers;
            foreach($layers as $l){
                $layer = new LayerModel();
                $layer->Id = $l->id;
                $layer->Description = $l->description;
                $layer->Visible = $l->visible;
                $layer->Opacity = $l->opacity;
                $layer->Params = $l->params;
                $layer->ServerType = $l->serverType;
                $layer->Url = $l->url;
                $layer->Source = $l->source;
                $vmLayer->Layers[] = $layer;
            }
            $groups[]= $vmLayer;
        }

        return Response::json(array('data' => $groups));
    }
}
