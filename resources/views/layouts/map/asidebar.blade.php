<aside class="aside-menu">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-layers"></i> Capas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-chart"></i> Gráficas</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="timeline" role="tabpanel">
                    <div class="callout m-0 py-1 text-muted text-center bg-light text-uppercase">
                        <small>
                            <b>Capas Base</b>
                        </small>
                    </div>
                    <hr class="transparent mx-3 my-0">
                    <!--<div class="callout callout-info m-0 py-1">
                        <div>
                            <small class="text-muted"><i class="icon-home"></i>&nbsp; Open Street Map</small>
                        </div>
                    </div>
                    <hr class="mx-3 my-0">
                    -->
                    <div class="callout callout-info m-0 py-1">
                        <!--<div>
                            <small class="text-muted"><i class="icon-home"></i>&nbsp; Imagenes de google</small>
                        </div>-->
                        <div class="pretty p-icon p-round p-smooth p-plain p-locked">
                            <input type="checkbox" checked/>
                            <div class="state p-success-o">
                                <i class="icon fa fa-check"></i>
                                <label><small class="text-muted mr-3"><i class="icon-map"></i>&nbsp; Open Street Map</small></label>
                            </div>
                        </div>
                    </div>
                    <hr class="transparent mx-3 my-0">
                    <div class="callout m-0 py-1 text-muted text-center bg-light text-uppercase">
                        <small>
                            <b>Capas Disponibles</b>
                        </small>
                    </div>
                    <hr class="transparent mx-3 my-0">
                    <div  data-bind='foreach:Groups'>
                        <div class="callout callout-info m-0 py-1">
                            <a href="#" style="font-size: 0.780rem;" data-toggle="collapse" data-bind="text:Description, attr: {'data-target': '#group_' + $index()}">
                                Areas Naturales Protegidas
                            </a>
                            <div data-bind="foreach:Layers(),attr: { 'id': 'group_' + $index() },css: Expanded()?'show':''" class="collapse">
                                <div class="pretty p-icon p-round p-smooth p-plain">
                                    <input type="checkbox" data-bind="checked: Visible, click: function(){return $root.ShowOrHideLayer($data,$parentContext.$index(),$index());}"/>
                                    <div class="state p-success-o">
                                        <i class="icon fa fa-check"></i>
                                        <label><small class="text-muted mr-3" data-bind='text:"&nbsp;" + Description()'><i class="icon-layer"></i>&nbsp; Nombre</small></label>
                                    </div>
                                </div>
                                
                                <br/>
                            </div>
                        </div>
                        <hr class="mx-3 my-0">
                        
                    </div>
                    
                </div>
                <div class="tab-pane p-3" id="messages" role="tabpanel">
                    <div class="message">
                        <div class="text-truncate font-weight-bold">Grafica uno</div>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="text-truncate font-weight-bold">Grafica dos</div>
                    </div>
                </div>
            </div>
        </aside>