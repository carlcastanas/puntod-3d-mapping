    
 
        var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw',
        esri_Url = 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';

        var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, maxZoom: 22, minZoom: 18, zoomOffset: -1, attribution: mbAttr}),
        streets  = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, maxZoom: 22, minZoom: 18, zoomOffset: -1, attribution: mbAttr}),
        Esri_WorldImagery = L.tileLayer(esri_Url, {tileSize: 512, maxZoom: 22, minZoom: 18, zoomOffset: -1, attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'});

      // Draw all layers in Control Layer Menu
        var apartment = L.layerGroup();
        var mausoleum = L.layerGroup();
        var columbarium = L.layerGroup();

      // Manage all vcctor points (markers) into Leaflet featureGroup
        var lot = new L.featureGroup();

        let latLng;
      // Map creation start
        for (var i=0; i < dataMap.length ; i++) {
            latLng = [ dataMap[i].latitude, dataMap[i].longitude ];
        }
        // let latLng = [14.566487504935854 , 121.01717062033508];

        var map = L.map('map', {
            // center: [14.5657, 121.0194],
            center: latLng,
            zoom: 20,
            zoomControl: false, 
            layers: [grayscale, lot, apartment, columbarium, mausoleum]
        });
         L.control.zoom({
             position:'topright'
        }).addTo(map);
      // map creation end


      // Baselayers overlay
        var baseLayers = {
            "Grayscale": grayscale,
            "Streets": streets,
            "World_Imagery": Esri_WorldImagery
        };

      // Vector overlays
        var overlays = {
            "Lot": lot,
            "Apartment": apartment,
            "Mausoleum": mausoleum,
            "Columbarium": columbarium
        };

      // Control menu
        L.control.layers(baseLayers, overlays).addTo(map);

        map.doubleClickZoom.disable();


        // Easy Button
        var home = {
          lat: 14.566484,
          lng: 121.017207,
          zoom: 18
        }; 


       
        var homeButton = L.easyButton('fa-home',function(btn,map){
          map.setView(latLng, home.zoom);
        },'Back to Manila South Cemetery').addTo(map);


        // var icon = L.divIcon({
        //   className: 'custom-div-icon',
        //     html: "<div style='background-color:#c30b82;' class='marker-pin'></div><i class='material-icons'>weekend</i>",
        //     iconSize: [30, 42],
        //     iconAnchor: [15, 42]
        // });

      // ICON MARKER STYLING
        var icon = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-street-view' aria-hidden='true'></i>",
            iconSize: [30, 42],
            iconAnchor: [15, 42]
        });

        var destinationIcon = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-flag'></i>",
            iconSize: [31, 46],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -45]
        });

        var gateIcon = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-archway'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -45]
        });

        var startPinLocation = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-thumbtack'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -45]
        });


        var crosshairs_enabled = false;
        var crosshairs_enabled_app = false;
        var crosshairs_enabled_colum = false;
        var crosshairs_enabled_mau = false;
        var crosshairs_enabled_map = false;
        var startLat;
        var startLng;
        var mapContent;


        // mouse cursor for adding LOT
          var lotToggle = L.easyButton({
              id: 'animated-marker-toggle',
              type: 'animate',
              states: [{
                stateName: 'add-markers',
                // icon: 'fas fa-map-marker-alt',
                icon: 'fas fa-circle',
                
                title: 'add some Lot',
                onClick: function(control) {
                
                  control.state('remove-markers');
                  L.DomUtil.addClass(map._container, 'crosshair-cursor-enabled');
                  crosshairs_enabled = true;

                      //modal to add marker
                      map.on('click', function(e) {
                          if ( crosshairs_enabled == true){
                              $('#mymarkermodal').modal('show');
                                console.log(e.latlng);
                                modLat = e.latlng.lat;
                                modLng = e.latlng.lng;

                                document.querySelector("#modalLat").value = modLat;
                                document.querySelector("#modalLng").value = modLng;
                          }   
                      });

                }
              }, {
                stateName: 'remove-markers',
                title: 'remove markers',
                icon: 'fa-undo',
                onClick: function(control) {
                
                  control.state('add-markers');
                  L.DomUtil.removeClass(map._container, 'crosshair-cursor-enabled');
                  crosshairs_enabled = false;
                }
              }]
            });
            lotToggle.addTo(map);


            // mouse cursor for adding apartment
              var apartmentToggle = L.easyButton({
                  id: 'animated-marker-toggle',
                  type: 'animate',
                  states: [{
                    stateName: 'add-markers',
                    icon: 'fas fa-building',
                    title: 'add some apartment',
                    onClick: function(control) {
                    
                      control.state('remove-markers');
                      L.DomUtil.addClass(map._container, 'crosshair-cursor-enabled');
                      crosshairs_enabled_app = true;

                          //modal to add marker
                          map.on('click', function(e) {
                              if ( crosshairs_enabled_app == true){
                                  $('#myappartmentmodal').modal('show');
                                    console.log(e.latlng);
                                    modLat = e.latlng.lat;
                                    modLng = e.latlng.lng;

                                    document.querySelector("#modalLatApp").value = modLat;
                                    document.querySelector("#modalLngApp").value = modLng;
                              }   
                          });

                    }
                  }, {
                    stateName: 'remove-markers',
                    title: 'remove markers',
                    icon: 'fa-undo',
                    onClick: function(control) {
                    
                      control.state('add-markers');
                      L.DomUtil.removeClass(map._container, 'crosshair-cursor-enabled');
                      crosshairs_enabled_app = false;
                    }
                  }]
                });
                apartmentToggle.addTo(map);


          // mouse cursor for adding mausoleum
              var mausoleumToggle = L.easyButton({
                  id: 'animated-marker-toggle',
                  type: 'animate',
                  states: [{
                    stateName: 'add-markers',
                    icon: 'fas fa-monument',
                    title: 'add some mausoleum',
                    onClick: function(control) {

                      control.state('remove-markers');
                      L.DomUtil.addClass(map._container, 'crosshair-cursor-enabled');
                      crosshairs_enabled_mau = true;

                          //modal to add marker
                          map.on('click', function(e) {
                              if ( crosshairs_enabled_mau == true){
                                  $('#mymausoleummodal').modal('show');
                                    console.log(e.latlng);
                                    modLat = e.latlng.lat;
                                    modLng = e.latlng.lng;

                                    document.querySelector("#modalLatMau").value = modLat;
                                    document.querySelector("#modalLngMau").value = modLng;
                              }   
                          });

                    }
                  }, {
                    stateName: 'remove-markers',
                    title: 'remove markers',
                    icon: 'fa-undo',
                    onClick: function(control) {
                    
                      control.state('add-markers');
                      L.DomUtil.removeClass(map._container, 'crosshair-cursor-enabled');
                      crosshairs_enabled_mau = false;
                    }
                  }]
                });
                mausoleumToggle.addTo(map);


            // mouse cursor for adding columbarium
              var columbariumToggle = L.easyButton({
                  id: 'animated-marker-toggle',
                  type: 'animate',
                  states: [{
                    stateName: 'add-markers',
                    icon: 'fas fa-igloo',

                    title: 'add some columbarium',
                    onClick: function(control) {
                    
                      control.state('remove-markers');
                      L.DomUtil.addClass(map._container, 'crosshair-cursor-enabled');
                      crosshairs_enabled_colum = true;

                          //modal to add marker
                          map.on('click', function(e) {
                              if ( crosshairs_enabled_colum == true){
                                  $('#mycolumbariummodal').modal('show');
                                    console.log(e.latlng);
                                    modLat = e.latlng.lat;
                                    modLng = e.latlng.lng;

                                    document.querySelector("#modalLatColum").value = modLat;
                                    document.querySelector("#modalLngColum").value = modLng;
                              }   
                          });

                    }
                  }, {
                    stateName: 'remove-markers',
                    title: 'remove markers',
                    icon: 'fa-undo',
                    onClick: function(control) {
                    
                      control.state('add-markers');
                      L.DomUtil.removeClass(map._container, 'crosshair-cursor-enabled');
                      crosshairs_enabled_colum = false;
                    }
                  }]
                });
                columbariumToggle.addTo(map);


            // mouse cursor for adding columbarium
              var startLocation = L.easyButton({
                  id: 'animated-marker-toggle',
                  type: 'animate',
                  states: [{
                    stateName: 'add-markers',
                    // icon: 'fas fa-flag',
                    icon: 'fas fa-thumbtack',
                  

                    title: 'Add Start Location',
                    onClick: function(control) {
                    
                      control.state('remove-markers');
                      L.DomUtil.addClass(map._container, 'crosshair-cursor-enabled');
                      crosshairs_enabled_map = true;

                          //modal to add marker
                          map.on('click', function(e) {
                              if ( crosshairs_enabled_map == true){
                                  // $('#mycolumbariummodal').modal('show');
                                  //   console.log(e.latlng);
                                  //   modLat = e.latlng.lat;
                                  //   modLng = e.latlng.lng;

                                  //   document.querySelector("#modalLatColum").value = modLat;
                                  //   document.querySelector("#modalLngColum").value = modLng;

                                  map.on('click', function(e) {
                                        startLat = e.latlng.lat;
                                        startLng = e.latlng.lng;
                                        mapContent = '<form action="insertStartLocation.php" method="post" id-"mapLatLng">'+
                                                          '<input id="input-startLat" class="form-control" type="hidden" name="input-startLat" value='+startLat+'/>'+
                                                          '<input id="input-startLng" class="form-control" type="hidden" name="input-startLng" value='+startLng+'/>'+
                                                          '<button type="submit" class="btn btn-dark btn-block"> Start from this Location </button> '+
                                                          '</form>';
                                              L.popup({maxHeight:50})
                                                  .setContent(mapContent)
                                                  .setLatLng(e.latlng)
                                                  .openOn(map);

                                              // insert latlng info to database
                                               $('#mapLatLng').on('submit', function(event){
                                                      event.preventDefault();

                                                      $.ajax({
                                                          url: "insertStartLocation.php",
                                                          method: "POST",
                                                          data: $('#mapLatLng').serialize(),
                                                          success: function(data)
                                                          {

                                                              alert("Start from this location Added Successfully!");

                                                          },
                                                          error: function(){
                                                              alert("Something went wrong!");
                                                          }
                                                      });
                                                       
                                                }); // ajax end


                                  });


                              }// if end
                          });

                    }
                  }, {
                    stateName: 'remove-markers',
                    title: 'remove markers',
                    icon: 'fa-undo',
                    onClick: function(control) {
                    
                      control.state('add-markers');
                      L.DomUtil.removeClass(map._container, 'crosshair-cursor-enabled');
                      crosshairs_enabled_map = false;
                    }
                  }]
                });
                startLocation.addTo(map);


      // set sidebar scrpit start
        var sidebar = L.control.sidebar('sidebar', {
            closeButton: true,
            position: 'left'
        });
        map.addControl(sidebar);

        var sidebarCrypt = L.control.sidebar('sidebarCrypt', {
            closeButton: true,
            position: 'left'
        });
        map.addControl(sidebarCrypt);

        var sidebarUrn = L.control.sidebar('sidebarUrn', {
            closeButton: true,
            position: 'left'
        });
        map.addControl(sidebarUrn);

        var sidebarEdit = L.control.sidebar('sidebarEdit', {
            closeButton: true,
            position: 'left'
        });
        map.addControl(sidebarEdit);


        var sidebarEditCrypt = L.control.sidebar('sidebarEditCrypt', {
            closeButton: true,
            position: 'left'
        });
        map.addControl(sidebarEditCrypt);


        var sidebarEditUrn = L.control.sidebar('sidebarEditUrn', {
            closeButton: true,
            position: 'left'
        });
        map.addControl(sidebarEditUrn);

        

        setTimeout(function () {
            // sidebar.show();
        }, 500);

        let mapClick;
        map.on('click', function () {
            sidebar.hide();
            sidebarCrypt.hide();
            sidebarUrn.hide();
            sidebarEdit.hide();
            sidebarEditCrypt.hide();
            sidebarEditUrn.hide();

        });

    

        function resetHighlight(e) {

            featuresLayer.resetStyle(e.target);
            console.log(e.target.feature.properties);
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function addDeceasedFromTomb(tid,x,y){
            console.log("Open Tomb sidebar", tid);
            myClick("on");
            document.querySelector("#idTomb").value = tid;
            document.querySelector("#tombLatitude").value = x;
            document.querySelector("#tombLongitude").value = y;
        }


        function addDeceasedFromApartment(tid,x,y){ 
            console.log("Open Apartment Sidebar", tid);
            console.log("HOW TO GET ID OF FRON BUTTNO INSIDE PHP");
            myClick("on");
            document.querySelector("#idTomb").value = tid;
            document.querySelector("#tombLatitude").value = x;
            document.querySelector("#tombLongitude").value = y;
        }

        function addDeceasedFromCrypt(tid,x,y){ 
            console.log("Open Crypt sidebar", tid);
            myClickCrypt("on");
            document.querySelector("#idCrypt").value = tid;
            document.querySelector("#cryptLatitude").value = x;
            document.querySelector("#cryptLongitude").value = y;
        }

        function addDeceasedFromUrn(tid,x,y){ 
            console.log("Open Urn sidebar", tid);
            myClickUrn("on");
            document.querySelector("#idUrn").value = tid;
            document.querySelector("#urnLatitude").value = x;
            document.querySelector("#urnLongitude").value = y;
        }



        jQuery("body").on('click', '.update', function(e){ //button to update deceased info in tomb from tomb and apartment
                 myClickToUpdate("on");
        });

        jQuery("body").on('click', '.updateCrypt', function(e){ //button to update deceased info in crypt from mausoleum
                 myClickToUpdateCryptDeceased("on");
        });

        jQuery("body").on('click', '.updateUrn', function(e){ //button to update deceased info in crypt from mausoleum
                 myClickToUpdateUrnDeceased("on");
        });

        jQuery("body").on('click', '.archive', function(e){
                console.log("CLICKKKKKKKKKKKKK");
                $('#archivemodal').modal('show');

        });

        jQuery("body").on('click', '.delete', function(e){

                $('#deleteplotsold').modal('show');

        });


        jQuery("body").on('click', '.changephoto', function(e){
                          
                $('#changephotomodal').modal('show');

        });


        function myClick(value){
            if (value == "on") {
                sidebar.show();

            }else if (value == "off") {
                sidebar.hide();
            }
        }

        function myClickToUpdate(value){ //fucntion to open tomb sidebar
            if (value == "on") {
                sidebarEdit.show();

            }else if (value == "off") {
                sidebarEdit.hide();
            }
        }

        function myClickToUpdateCryptDeceased(value){ // function to open crypt sidebar
            if (value == "on") {
                sidebarEditCrypt.show();

            }else if (value == "off") {
                sidebarEditCrypt.hide();
            }
        }

        function myClickToUpdateUrnDeceased(value){ // function to open crypt sidebar
            if (value == "on") {
                sidebarEditUrn.show();

            }else if (value == "off") {
                sidebarEditUrn.hide();
            }
        }

        function myClickCrypt(value){
            if (value == "on") {
                sidebarCrypt.show();

            }else if (value == "off") {
                sidebarCrypt.hide();
            }
        }

        function myClickUrn(value){
            if (value == "on") {
                sidebarUrn.show();

            }else if (value == "off") {
                sidebarUrn.hide();
            }
        }



        L.DomEvent.on(sidebar.getCloseButton(), 'click', function () {
            console.log('Close button clicked.');
        });
        
        
      //define styles for circle markers

        var radiusColour ={
            stroke: true,
            color: "#bdbdbd",
            weight: 1,
            opacity: 1,
            fill: true,
            dashArray: "10 5",
            fillOpacity: 0.4
        }

        var radiusColourHighlight ={
            stroke: true,
            color: "#e31a1c",
            weight: 2,
            opacity: 1,
            fill: true,
            dashArray: "10 5",
            fillOpacity: 0.5
        }


        function getDotColor(d) {
            return d === 'Available' ? '#006d2c' :
                   d === 'Sold' ? '#7f0000' :
                   d === 'null' ? '#80cdc1' :
                                              '#FF99FF';
        }

        var plotData = geoGravePlot;
        var appData = geoGraveApp;
        var mauData = geoGraveMau;
        var columData = geoGraveColum;
        var geoTombData = geoTomb;
        console.log(geoTombData);
        var plotRadius;


        function highlightDot(e) {
            var layer = e.target;
            layer.setStyle(radiusColourHighlight);
        };

        function resetDotHighlight(e) {
            var layer = e.target; 
            layer.setStyle(radiusColour);
            
        };


      

      function onEachDot(feature, layer) {

          var plotid = feature.properties.plot_id;
          var type = feature.properties.type;
          var plotsize = feature.properties.plot_size;
          var apartmentid = feature.properties.apartment_id;
          var mausoleumid = layer.feature.properties.mausoleumid;
          var mausoleumtype = feature.properties.mausoleumtype;
          var columbariumid = layer.feature.properties.columbariumid;
          var size = layer.feature.properties.size;
          console.log("mausoleumtype",mausoleumtype);

          var radius;
          function calculateDiameterOfAnArea(sqm){
              var divarea = (sqm / Math.PI);
              var sqrtarea = Math.sqrt(divarea) * 2;
              radius = (sqrtarea / 2);

              // console.log("radius",radius);
                  if(Number.isNaN(radius)){
                      return;
                  }else{
                      plotRadius = L.circle(feature.geometry.coordinates, radius ).bindTooltip(radius.toFixed(4) + " meters radius at this point").addTo(lot);             
                      plotRadius.setStyle(radiusColour);

                      plotRadius.on({
                          mouseover: highlightDot,
                          mouseout: resetDotHighlight,
                          // click: zoomToFeature,
                      });
                  }

          }

          calculateDiameterOfAnArea(plotsize);
          calculateDiameterOfAnArea(size);

          if(type === "Lot"){ // display to add grave price
              var insertTombForm = '<form action="insertTombInfo.php" method="post" id="lot-popup-form">\
                                        <h5> Add Tomb Info </h5>\
                                        <input id="input-plotid" class="form-control" type="hidden" name="input-plotid" value='+ plotid +' /><br>\
                                        <label for="input-tombNumber">Tomb Number:</label>\
                                        <input style="font-size:10px;" id="input-tombNumber" class="form-control" type="number" name="input-tombNumber"/><br>\
                                        <input id="input-tombStatus" class="form-control" type="hidden" name="input-tombStatus" value="Sold" readonly/><br>\
                                        <button style="font-size:10px;" class="btn btn-success btn-block" id="submitFromPlot" name="submitFromPlot" type="submit"> <i class="fa fa-save"></i> Save</button>\
                                        <button style="font-size: 10px;position:fixed;top:0;left:0;margin-top:185px;margin-left:20px;width:130px;" class="btn btn-danger" id="deleteFromPlot" name="deleteFromPlot"> <i class="fas fa-archive"></i> Delete </button>\
                                    </form>';
                                    layer.bindPopup(insertTombForm, {maxHeight: 170});


                                  // insert tomb info to database
                                   $('#lot-popup-form').on('submit', function(event){
                                          // event.preventDefault();

                                          $.ajax({
                                              url: "insertTombInfo.php",
                                              method: "POST",
                                              data: $('#lot-popup-form').serialize(),
                                              success: function(data)
                                              {

                                                  alert("Lot Added Successfully!");

                                              },
                                              error: function(){
                                                  alert("Something went wrong!");
                                              }
                                          });
                                           
                                    }); // ajax end


                                    for (var i = 0; i < dataTombs.length; i++) {
                                            if (plotid == dataTombs[i].plot_id) { // display when plot had interment tomb
                                            
                                                var tombTemplate =  '<div>'+
                                                                        '<table class="popup-table table-bordered table-striped table-hover">'+
                                                                          '<h5> Tomb Details </h5>'+
                                                                          '<input type="hidden" value='+ dataTombs[i].tomb_id +' >'+
                                                                          '<input type="hidden" value='+ dataTombs[i].latitude +' >'+
                                                                          '<input type="hidden" value='+ dataTombs[i].longitude +' >'+
                                                                          '<tr class="popup-table-row">'+
                                                                              '<th class="popup-table-header">Section</th>'+
                                                                              '<td id="lotStatus" class="popup-table-data">'+ dataTombs[i].area_name +'</td>'+
                                                                          '</tr>'+
                                                                          '<tr class="popup-table-row">'+
                                                                              '<th class="popup-table-header">Plot no.</th>'+
                                                                              '<td id="lotPrice" class="popup-table-data">'+ dataTombs[i].plot_number +'</td>'+
                                                                          '</tr>'+
                                                                          '<tr class="popup-table-row">'+
                                                                              '<th class="popup-table-header">Plot Price</th>'+
                                                                              '<td id="lotPrice" class="popup-table-data">'+ dataTombs[i].plot_price +'</td>'+
                                                                          '</tr>'+
                                                                          '<tr class="popup-table-row">'+
                                                                              '<th class="popup-table-header">Plot size</th>'+
                                                                              '<td id="lotPrice" class="popup-table-data">'+ dataTombs[i].plot_size +' <strong>sq.M</strong></td>'+
                                                                          '</tr>'+
                                                                          '<tr class="popup-table-row">'+
                                                                              '<th class="popup-table-header">Tomb No.</th>'+
                                                                              '<td id="lotPrice" class="popup-table-data">'+ dataTombs[i].tomb_number +'</td>'+
                                                                          '</tr>'+
                                                                        '</table>'+
                                                                    '</div>'+
                                                                    '<center>'+
                                                                    '<button style="font-size:10px;" class="btn btn-info btn-block" onclick="return addDeceasedFromTomb('+dataTombs[i].tomb_id+','+ dataTombs[i].latitude +','+ dataTombs[i].longitude +')" > <i class="fa fa-plus"></i> Add Deceased Info</button>'+
                                                                    "<button style='font-size: 10px;position:fixed;top:0;left:0;margin-top:180px;margin-left:90px;' type='button' class='delete btn btn-danger btn-sm' onclick='return deletePlot("+dataTombs[i].tomb_id+")' ><i class='fas fa-archive'></i> Delete </td></button>"+
                                                                    '</center>';

                                                                    layer.bindPopup(tombTemplate , {maxHeight: 160});
                                                                    
                                            } 
                                    }

                                                                    
                                    for (var i = 0; i < dataDeceased.length; i++) {
                                       if (plotid == dataDeceased[i].plot_id) {


                                            tomb = '<table id="tablePlot" class="table-striped table-hover style="overflow-y:hidden;" >'+
                                                      '<tbody>'+
                                                      '<tr class="popup-table-row">'+
                                                          '<td colspan="2" class="img-container" ><img src="mapping/assets/img/grave_img/' + dataDeceased[i].image +' " alt="grave image" class="stretchy" /></td>'+
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          '<th class="popup-table-header">Deceased ID:</th>'+
                                                          '<td>'+ dataDeceased[i].deceased_id+'</td>'+
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          '<th class="popup-table-header">Plot ID:</th>'+
                                                          '<td>'+ dataDeceased[i].plot_id+'</td>'+
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          '<th class="popup-table-header">Lastname:</th>'+
                                                          '<td>'+ dataDeceased[i].last_name+'</td>'+
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          '<th class="popup-table-header">Firstname:</th>'+
                                                          '<td>'+ dataDeceased[i].first_name+'</td>'+
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          '<th class="popup-table-header">Middlename:</th>'+
                                                          '<td>'+ dataDeceased[i].middle_name+'</td>'+
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          '<th class="popup-table-header">Yearborn:</th>'+
                                                          '<td>'+ dataDeceased[i].year_born+'</td>'+
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          '<th class="popup-table-header">Yeardied:</th>'+
                                                          '<td>'+ dataDeceased[i].year_died+'</td>'+
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          "<td><button style='font-size: 10px;width: 100px;' class='btn btn-info' onclick='return locateMe("+dataDeceased[i].latitude + "," + dataDeceased[i].longitude+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td>"+
                                                          '<td><label class="btn btn-primary" style="font-size:10px;padding:7px;" >'+
                                                              '<i class="fa fa-image"></i> Change Photo <button class="changephoto" onclick="return passIDChangePhoto('+dataDeceased[i].deceased_id+')" type="button" style="display: none;" id="changeFile" name="changeFile" >'+
                                                          '</label>'+
                                                          '</td>'+                                                        
                                                      '</tr>'+
                                                      '<tr class="popup-table-row">'+
                                                          "<td><button type='button' style='font-size: 10px;width: 100px;' class='archive btn btn-danger btn-sm' onclick='return passArchiveIdValueToArchieve("+dataDeceased[i].deceased_id+")' ><i class='fas fa-archive'></i> Archive </td></button>"+
                                                          '<td><button style="font-size: 10px;width: 100px;" class="update btn btn-warning btn-sm" onclick="return passUpdateIdValueFromPlot('+dataDeceased[i].deceased_id+')" ><i class="fas fa-edit"></i> Edit </button></td>'+
                                                      '</tr>'+
                                                      '</tbody>'+
                                                    '</table>';

      
                                            layer.bindPopup(tomb, {maxHeight: 380});
                                            

                                            // document.querySelector("#changephotodid").value = dataDeceased[i].deceased_id;
                                            document.querySelector("#did").value = dataDeceased[i].deceased_id;
                        

                                       }//if end
                                    }//for end
        
            


              // layer.bindPopup("THIS IS LOT: "+ feature.properties.area);
          }else if (type === "Apartment"){


                    var tombContent;
            

                    for (var i = 0; i < dataTombsFromAp.length; i++) {
                      if ( apartmentid == dataTombsFromAp[i].apartment_id) {
                              

                              tombContent += '<div class="main">'+
                                                    '<table id="tombTable" class="table table-bordered table-striped table-hover">'+ 
                                                        '<tbody>'+
                                                            '<tr>'+
                                                                '<td style="padding-left:0;position:block"><img src="../mscv2/img/headstonegrave.svg" height="15px" width="15px" >'+ dataTombsFromAp[i].tomb_id+'</img></td>'+
                                                                '<td>'+ dataTombsFromAp[i].tomb_number+'</td>'+
                                                                '<td>'+ dataTombsFromAp[i].area_number_app+'</td>'+
                                                                '<td>'+ dataTombsFromAp[i].lot_number_app+'</td>'
                                                                if (dataTombsFromAp[i].status == "Available") {
                                                                    tombContent += '<td style="padding:10px;"><button class="btn btn-light btn-block"> Available </button> </td>'
                                                                } else if (dataTombsFromAp[i].status == "Occupied"){
                                                                    tombContent +='<td style="padding:10px;" ><button class="btn btn-light btn-block" > Occupied </button></td>'
                                                                    
                                                                }
                                          tombContent += '</tr>'+
                                                          '<tr>'+
                                                           '<td colspan="6">'+
                                                                    '<div>'
                                                                    if (dataTombsFromAp[i].status === "Occupied") {
                                                                        tombContent += '<button id="showHide" class="showHide2 btn btn-info btn-block" id="mymenu" onclick="return insertDataTableApartment('+dataTombsFromAp[i].tomb_id+'), showHideDeceased(this)" > <i class="fa fa-eye"></i> Show Deceased Data</button>'
                                                                    } else if (dataTombsFromAp[i].status === "Available") {
                                                                        tombContent +='<button id="showAddDeceased" class="btn btn-danger btn-block addDeceased" onclick="return addDeceasedFromApartment('+dataTombsFromAp[i].tomb_id+','+dataTombsFromAp[i].latitude_app+','+dataTombsFromAp[i].longitude_app+')"> <i class="fa fa-plus"></i> Add Deceased </button>'
                                                                    }
                                                                    '</div>'
                                            tombContent +=   '</td>'+
                                                          '</tr>'+
                                                        '</tbody>'+
                                                    '</table>'+
                                                '</div>';

                               
                      }
                    }
              

              layer.bindPopup('<div class="sidetable" >'+
                                  '<table id="sideID" class="sidetext table-striped table-hover" >'+
                                      '<tbody id="tbody" ></tbody>'+
                                  '</table>'+
                              '</div>'+
                              '<div class="main">'+
                                '<table id="ctable" class="table table-bordered">'+
                                    '<thead>'+
                                            '<tr>'+
                                                  '<th colspan="6" style="text-align: center;"> LIST OF TOMB IN APARMENT No. <b>' + apartmentid +'</b></th>'+
                                            '</tr>'+
                                            '<tr>'+
                                                  '<th colspan="6" style="text-align: center;"> Tomb </th>'+
                                            '</tr>'+
                                            '<tr>'+
                                                    '<th style="width:14%;"> ID </th>'+
                                                    '<th> No. </th>'+
                                                    '<th> Section </th>'+
                                                    '<th> Lot No. </th>'+
                                                    '<th style="width:26%;"> Status </th>'+
                                            '</tr>'+
                                    '</thead>'+
                                '</table>'+
                            '</div>'+ tombContent + 
                        '<div class="main" >'+
                            '<div class="mainFooter" style="margin-left:170px;" ><center>'+
                               '<button class="btn btn-success addLotFromAp" onclick="return passApartmentID('+ apartmentid +')"> <i class="fa fa-plus"></i> Add Tomb </button>'+
                            '</center></div>'+
                        '</div>', {maxWidth: 580});


            $(document).on('click','.addLotFromAp',function() {
                         
                  // alert("You clicked the add button");
                  $('#addTomb').modal('show');
          
              });

                            
              // layer.bindPopup("THIS IS APARTMENT: "+ feature.properties.area);
          }else if (type === "Columbarium"){
              
                var urnContent;


                for (var i = 0; i < dataUrnFromColum.length; i++) {
                      if ( columbariumid == dataUrnFromColum[i].columbarium_id) {

                          // if (){

                          // }

                              urnContent += '<div class="main">'+
                                                    '<table id="urnTable" class="table table-bordered table-striped table-hover">'+ 
                                                        '<tbody>'+
                                                            '<tr colspan="6">'+
                                                                '<td style="padding-left:0;position:block" ><img src="../mscv2/img/ash.svg" height="15px" width="15px">'+ dataUrnFromColum[i].urn_id+'</img></td>'+
                                                                '<td>'+ dataUrnFromColum[i].urn_number+'</td>'+
                                                                '<td>'+ dataUrnFromColum[i].area_number_colum+'</td>'+
                                                                '<td>'+ dataUrnFromColum[i].urn_size+'</td>'+
                                                                '<td>'+ dataUrnFromColum[i].lot_number_colum+'</td>'
                                                                if (dataUrnFromColum[i].status === "Available") {
                                                                    urnContent +='<td style="padding:10px;" ><button class="btn btn-light btn-block"> Available </button></td>'
                                                                } else if (dataUrnFromColum[i].status === "Occupied") {
                                                                    urnContent +='<td style="padding:10px;" ><button class="btn btn-light btn-block" > Occupied </button></td>'
                                                                }
                                            urnContent +='</tr>'+
                                                            '<tr>'+
                                                                '<td colspan="6">'+
                                                                    '<div>'
                                                                    if (dataUrnFromColum[i].status === "Occupied") {
                                                                        urnContent +='<button id="showHide" class="btn btn-info btn-block" onclick="return insertDataTableColumbarium('+dataUrnFromColum[i].urn_id+'), showHideDeceased(this)" > <i class="fa fa-eye"></i> Show Deceased Data</button>'
                                                                    } else if (dataUrnFromColum[i].status === "Available") {
                                                                        urnContent +='<button id="showAddDeceased" class="btn btn-danger btn-block addDeceased" onclick="return addDeceasedFromUrn('+dataUrnFromColum[i].urn_id+','+dataUrnFromColum[i].latitude_colum+','+dataUrnFromColum[i].longitude_colum+')"> <i class="fa fa-plus"></i> Add Deceased </button>'
                                                                    }
                                                      urnContent +='</div>'+
                                                                '</td>'+
                                                            '</tr>'+
                                                        '</tbody>'+
                                                    '</table>'+
                                                '</div>';
                              
                      }
                    }

            layer.bindPopup('<div class="sidetable" >'+
                                  '<table id="sideID" class="sidetext table-striped table-hover" >'+
                                      '<tbody id="tbodyUrn" ></tbody>'+
                                  '</table>'+
                            '</div>'+
                            '<div class="main">'+
                                  '<table id="ctable" class="table table-bordered">'+
                                      '<thead>'+
                                              '<tr>'+
                                                    '<th colspan="6" style="text-align: center;"> LIST OF NICHES IN COLUMBARIUM No. <b>' + columbariumid +'</b></th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                    '<th colspan="6" style="text-align: center;"> NICHES </th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                      '<th style="width:14%;"> ID </th>'+
                                                      '<th> No. </th>'+
                                                      '<th> Section </th>'+
                                                      '<th> Size </th>'+
                                                      '<th> Lot No. </th>'+
                                                      '<th style="width:26%;"> Status </th>'+
                                              '</tr>'+
                                      '</thead>'+
                                  '</table>'+
                              '</div>'+ urnContent + 
                          '<div class="main" >'+
                              '<div class="mainFooter" ><center>'+
                                 '<button class="btn btn-success addUrnFromColum" onclick="return passColumID('+ columbariumid +')" > <i class="fa fa-plus"></i> Add Urn </button>'+
                              '</center></div>'+
                          '</div>', {maxWidth: 580});

              // L.circle(feature.geometry.coordinates, radius ).addTo(columbarium);

              $(document).on('click','.addUrnFromColum', function(){

                    $('#addUrn').modal('show');

              });


              // layer.bindPopup("THIS IS COLUMBARIUM: "+ feature.properties.area);

          }else if (type === "Mausoleum"){
              // layer.bindPopup("THIS IS MAUSOLEUM: "+ feature.properties.area);
                var publicCryptContent,famCryptContent,publicLawnCryptContent;

                for (var i = 0; i < dataCryptFromMau.length; i++) {
                      if ( mausoleumid == dataCryptFromMau[i].mausoleum_id) {

                                publicCryptContent += '<div class="main">'+
                                                      '<table id="cryptTable" class="table table-bordered table-striped table-hover">'+ 
                                                          '<tbody>'+
                                                              '<tr colspan="6">'+
                                                                  '<td style="padding-left:0;position:block" ><img src="../mscv2/img/coffin.svg" height="15px" width="15px">'+ dataCryptFromMau[i].crypt_number+'</img></td>'+
                                                                  '<td>'+ dataCryptFromMau[i].crypt_location+'</td>'+
                                                                  '<td>'+ dataCryptFromMau[i].crypt_spacetype+'</td>'+
                                                                  '<td>'+ dataCryptFromMau[i].crypt_price+'</td>'
                                                                  if (dataCryptFromMau[i].status === "Available") {
                                                                      publicCryptContent +='<td style="padding:10px;" ><button id="showAddDeceased" class="btn btn-danger addDeceased" onclick="return addDeceasedFromCrypt('+dataCryptFromMau[i].crypt_id+','+dataCryptFromMau[i].latitude_mau+','+dataCryptFromMau[i].longitude_mau+')"> <i class="fa fa-plus"></i> Add Deceased </button></td>'
                                                                  } else if (dataCryptFromMau[i].status === "Occupied") {
                                                                      publicCryptContent +='<td style="padding:10px;" ><button class="btn btn-light btn-sm" > Occupied </button></td>'
                                                                  }
                                              publicCryptContent +='</tr>'+
                                                              '<tr>'+
                                                                  '<td colspan="6">'+
                                                                      '<div>'
                                                                      if (dataCryptFromMau[i].status === "Occupied") {
                                                                          publicCryptContent +='<button id="showHide" class="btn btn-info btn-block" onclick="return insertDataTableMausoleum('+dataCryptFromMau[i].crypt_id+'), showHideDeceased(this)" > <i class="fa fa-eye"></i> Show Deceased Data</button>'
                                                                      } else if (dataCryptFromMau[i].status === "Available") {
                                                                          publicCryptContent +='<button class="btn btn-light btn-block"> Available </button>'
                                                                      }
                                                        publicCryptContent +='</div>'+
                                                                  '</td>'+
                                                              '</tr>'+
                                                          '</tbody>'+
                                                      '</table>'+
                                                  '</div>';

                                publicLawnCryptContent += '<div class="main">'+
                                                      '<table id="cryptTable" class="table table-bordered table-striped table-hover">'+ 
                                                          '<tbody>'+
                                                              '<tr colspan="6">'+
                                                                  '<td style="padding-left:0;position:block" ><img src="../mscv2/img/coffin.svg" height="15px" width="15px">'+ dataCryptFromMau[i].crypt_number+'</img></td>'+
                                                                  '<td>'+ dataCryptFromMau[i].crypt_spacetype+'</td>'+
                                                                  '<td>'+ dataCryptFromMau[i].crypt_price+'</td>'
                                                                  if (dataCryptFromMau[i].status === "Available") {
                                                                      publicLawnCryptContent +='<td style="padding:10px;" ><button id="showAddDeceased" class="btn btn-danger addDeceased" onclick="return addDeceasedFromCrypt('+dataCryptFromMau[i].crypt_id+','+dataCryptFromMau[i].latitude_mau+','+dataCryptFromMau[i].longitude_mau+')"> <i class="fa fa-plus"></i> Add Deceased </button></td>'
                                                                  } else if (dataCryptFromMau[i].status === "Occupied") {
                                                                      publicLawnCryptContent +='<td style="padding:10px;" ><button class="btn btn-light btn-sm" > Occupied </button></td>'
                                                                  }
                                              publicLawnCryptContent +='</tr>'+
                                                              '<tr>'+
                                                                  '<td colspan="6">'+
                                                                      '<div>'
                                                                      if (dataCryptFromMau[i].status === "Occupied") {
                                                                          publicLawnCryptContent +='<button id="showHide" class="btn btn-info btn-block" onclick="return insertDataTableMausoleum('+dataCryptFromMau[i].crypt_id+'), showHideDeceased(this)" > <i class="fa fa-eye"></i> Show Deceased Data</button>'
                                                                      } else if (dataCryptFromMau[i].status === "Available") {
                                                                          publicLawnCryptContent +='<button class="btn btn-light btn-block"> Available </button>'
                                                                      }
                                                        publicLawnCryptContent +='</div>'+
                                                                  '</td>'+
                                                              '</tr>'+
                                                          '</tbody>'+
                                                      '</table>'+
                                                  '</div>';

                                famCryptContent += '<div class="main">'+
                                                          '<table id="cryptTable" class="table table-bordered table-striped table-hover">'+ 
                                                              '<tbody>'+
                                                                  '<tr colspan="6">'+
                                                                      '<td style="padding-left:0;position:block" ><img src="../mscv2/img/coffin.svg" height="15px" width="15px">'+ dataCryptFromMau[i].crypt_id+'</img></td>'+
                                                                      '<td>'+ dataCryptFromMau[i].crypt_number+'</td>'+
                                                                      '<td>'+ dataCryptFromMau[i].area_number_mau+'</td>'+
                                                                      '<td>'+ dataCryptFromMau[i].crypt_size+'</td>'+
                                                                      '<td>'+ dataCryptFromMau[i].lot_number_mau+'</td>'
                                                                      if (dataCryptFromMau[i].status === "Available") {
                                                                          famCryptContent +='<td style="padding:10px;" ><button id="showAddDeceased" class="btn btn-danger addDeceased" onclick="return addDeceasedFromCrypt('+dataCryptFromMau[i].crypt_id+','+dataCryptFromMau[i].latitude_mau+','+dataCryptFromMau[i].longitude_mau+')"> <i class="fa fa-plus"></i> Add Deceased </button></td>'
                                                                      } else if (dataCryptFromMau[i].status === "Occupied") {
                                                                          famCryptContent +='<td style="padding:10px;" ><button class="btn btn-light btn-sm" > Occupied </button></td>'
                                                                      }
                                                  famCryptContent +='</tr>'+
                                                                  '<tr>'+
                                                                      '<td colspan="6">'+
                                                                          '<div>'
                                                                          if (dataCryptFromMau[i].status === "Occupied") {
                                                                              famCryptContent +='<button id="showHide" class="btn btn-info btn-block" onclick="return insertDataTableMausoleum('+dataCryptFromMau[i].crypt_id+'), showHideDeceased(this)" > <i class="fa fa-eye"></i> Show Deceased Data</button>'
                                                                          } else if (dataCryptFromMau[i].status === "Available") {
                                                                              famCryptContent +='<button class="btn btn-light btn-block"> Available </button>'
                                                                          }
                                                            famCryptContent +='</div>'+
                                                                      '</td>'+
                                                                  '</tr>'+
                                                              '</tbody>'+
                                                          '</table>'+
                                                      '</div>';
                      }// if
                }// for


                if (mausoleumtype === "Public") {
                      
                                                layer.bindPopup('<div class="sidetable" >'+
                                                                  '<table id="sideID" class="sidetext table-striped table-hover" >'+
                                                                      '<tbody id="tbodyCrypt" ></tbody>'+
                                                                  '</table>'+
                                                              '</div>'+
                                                              '<div class="main">'+
                                                                      '<table id="ctable" class="table table-bordered table-hover">'+
                                                                          '<thead>'+
                                                                                  '<tr>'+
                                                                                        '<th colspan="6" style="text-align: center;"> LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' MAUSOLEUM No. <b>' + mausoleumid +'</b></th>'+
                                                                                  '</tr>'+
                                                                                  '<tr>'+
                                                                                        '<th colspan="6" style="text-align: center;"> Crypt </th>'+
                                                                                  '</tr>'+
                                                                                  '<tr>'+
                                                                                            '<th style="width:14%;"> No. </th>'+
                                                                                            '<th> Location </th>'+
                                                                                            '<th> Space Type </th>'+
                                                                                            '<th> Price </th>'+
                                                                                            '<th style="width:26%;"> Status </th>'+
                                                                                  '</tr>'+
                                                                          '</thead>'+
                                                                      '</table>'+
                                                              '</div>'+ publicCryptContent + 
                                                              '<div class="main" >'+
                                                                  '<div class="mainFooter" ><center>'+
                                                                     '<button class="btn btn-success addPublicCryptFromMau" onclick="return passMauID('+ mausoleumid +')" > <i class="fa fa-plus"></i> Add Crypt </button>'+
                                                                  '</center></div>'+
                                                              '</div>', {maxWidth: 580});
                    
       

                } else if (mausoleumtype === "Family") {
                      
                                   layer.bindPopup('<div class="sidetable" >'+
                                                        '<table id="sideID" class="sidetext table-striped table-hover" >'+
                                                            '<tbody id="tbodyCrypt" ></tbody>'+
                                                        '</table>'+
                                                    '</div>'+
                                                    '<div class="main">'+
                                                            '<table id="ctable" class="table table-bordered table-hover">'+
                                                                '<thead>'+
                                                                        '<tr>'+
                                                                              '<th colspan="6" style="text-align: center;"> LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' MAUSOLEUM No. <b>' + mausoleumid +'</b></th>'+
                                                                        '</tr>'+
                                                                        '<tr>'+
                                                                              '<th colspan="6" style="text-align: center;"> Crypt </th>'+
                                                                        '</tr>'+
                                                                        '<tr>'+
                                                                                '<th style="width:14%;"> ID </th>'+
                                                                                '<th> No. </th>'+
                                                                                '<th> Section </th>'+
                                                                                '<th> Size </th>'+
                                                                                '<th> Lot No. </th>'+
                                                                                '<th style="width:26%;"> Status </th>'+
                                                                        '</tr>'+
                                                                '</thead>'+                                                              
                                                            '</table>'+
                                                    '</div>'+ famCryptContent + 
                                                    '<div class="main" >'+
                                                        '<div class="mainFooter" ><center>'+
                                                           '<button class="btn btn-success addCryptFromMau" onclick="return passMauID('+ mausoleumid +')" > <i class="fa fa-plus"></i> Add Crypt </button>'+
                                                        '</center></div>'+
                                                    '</div>', {maxWidth: 580});

                  
                  } else if (mausoleumtype === "Public Lawn Crypts") {

                           layer.bindPopup('<div class="sidetable" >'+
                                            '<table id="sideID" class="sidetext table-striped table-hover" >'+
                                                '<tbody id="tbodyCrypt" ></tbody>'+
                                            '</table>'+
                                            '</div>'+
                                            '<div class="main">'+
                                                    '<table id="ctable" class="table table-bordered table-hover">'+
                                                        '<thead>'+
                                                                '<tr>'+
                                                                      '<th colspan="6" style="text-align: center;"> LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' MAUSOLEUM No. <b>' + mausoleumid +'</b></th>'+
                                                                '</tr>'+
                                                                '<tr>'+
                                                                      '<th colspan="6" style="text-align: center;"> Crypt </th>'+
                                                                '</tr>'+
                                                                '<tr>'+
                                                                          '<th style="width:14%;"> No. </th>'+
                                                                          '<th> Space Type </th>'+
                                                                          '<th> Price </th>'+
                                                                          '<th style="width:26%;"> Status </th>'+
                                                                '</tr>'+
                                                        '</thead>'+
                                                    '</table>'+
                                            '</div>'+ publicLawnCryptContent + 
                                            '<div class="main" >'+
                                                '<div class="mainFooter" ><center>'+
                                                   '<button class="btn btn-success addPublicLawnCryptFromMau" onclick="return passMauID('+ mausoleumid +')" > <i class="fa fa-plus"></i> Add Crypt </button>'+
                                                '</center></div>'+
                                            '</div>', {maxWidth: 580});
                    
                  }else {

                        layer.bindPopup('<div class="sidetable" >'+
                                                        '<table id="sideID" class="sidetext table-striped table-hover" >'+
                                                            '<tbody id="tbodyCrypt" ></tbody>'+
                                                        '</table>'+
                                                    '</div>'+
                                                    '<div class="main">'+
                                                            '<table id="ctable" class="table table-bordered table-hover">'+
                                                                '<thead>'+
                                                                        '<tr>'+
                                                                              '<th colspan="6" style="text-align: center;"> LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' MAUSOLEUM No. <b>' + mausoleumid +'</b></th>'+
                                                                        '</tr>'+
                                                                        '<tr>'+
                                                                              '<th colspan="6" style="text-align: center;"> Crypt </th>'+
                                                                        '</tr>'+
                                                                        '<tr>'+
                                                                                '<th style="width:14%;"> ID </th>'+
                                                                                '<th> No. </th>'+
                                                                                '<th> Section </th>'+
                                                                                '<th> Size </th>'+
                                                                                '<th> Lot No. </th>'+
                                                                                '<th style="width:26%;"> Status </th>'+
                                                                        '</tr>'+
                                                                '</thead>'+                                                              
                                                            '</table>'+
                                                    '</div>'+ famCryptContent + 
                                                    '<div class="main" >'+
                                                        '<div class="mainFooter" ><center>'+
                                                           '<button class="btn btn-success addCryptFromMau" onclick="return passMauID('+ mausoleumid +')" > <i class="fa fa-plus"></i> Add Crypt </button>'+
                                                        '</center></div>'+
                                                    '</div>', {maxWidth: 580});
                        
                  }

              
              $(document).on('click','.addPublicCryptFromMau', function(){

                    $('#addPublicCrypt').modal('show');

              });

              $(document).on('click','.addCryptFromMau', function(){

                    $('#addCrypt').modal('show');

              });

              $(document).on('click','.addPublicLawnCryptFromMau', function(){

                    $('#addPublicLawnCrypt').modal('show');

              });  



          }//end of nested if

          
  
      }; // onEachDot

      
      function showHideDeceased(el){
          
            el.classList.toggle("btn-dark");
            
            
            if ( el.className.match(/(?:^|\s)btn-dark(?!\S)/)  ){
                document.getElementById('sideID').classList.remove('hide');
                // el.innerText = 'Hide Deceased Data';
                el.innerHTML = "<i class='fa fa-eye-slash'></i> Hide Deceased Data";

            }else {
                document.getElementById('sideID').classList.add('hide');
                // el.innerText = 'Show Deceased Data';
                el.innerHTML = " <i class='fa fa-eye'></i> Show Deceased Data";
            }
            

            var clist = el.classList.toString();
            // console.log(clist);

      }

      function insertDataTableColumbarium(tid){
            console.log(tid);
            var tbodyUrn = document.getElementById('tbodyUrn');
            tbodyUrn.innerHTML = "";
             for (var i = 0; i < dataDeceasedFromUrn.length; i++) {
                if (tid == dataDeceasedFromUrn[i].urn_id) {
                        var tr = "<tr>";
                        tr += '<td colspan="2" class="img-container" ><img src="mapping/assets/img/grave_img/' + dataDeceasedFromUrn[i].image +' " alt="grave image" class="stretchy" /></td></tr>';
                        tr += '<td> Deceased ID: </td>'+ '<td>'+ dataDeceasedFromUrn[i].deceased_id+'</td></tr>';
                        tr += '<td> Urn ID: </td>'+ '<td>'+ dataDeceasedFromUrn[i].urn_id+'</td></tr>';
                        tr += '<td> Urn number: </td>'+'<td>'+  dataDeceasedFromUrn[i].urn_number+'</td></tr>';
                        tr += '<td> Lastname: </td>'+ '<td>'+ dataDeceasedFromUrn[i].last_name+'</td></tr>';
                        tr += '<td> Firstname: </td>'+ '<td>'+ dataDeceasedFromUrn[i].first_name+'</td></tr>';
                        tr += '<td> Middlename: </td>'+ '<td>'+ dataDeceasedFromUrn[i].middle_name+'</td></tr>';
                        tr += '<td> Yearborn: </td>'+ '<td>'+ dataDeceasedFromUrn[i].year_born+'</td></tr>';
                        tr += '<td> Yeardied: </td>'+ '<td>'+ dataDeceasedFromUrn[i].year_died+'</td></tr>';
                        tr += "<td><button class='btn btn-info' onclick='return locateMe("+dataDeceasedFromUrn[i].latitude_colum + "," + dataDeceasedFromUrn[i].longitude_colum+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td>"+
                              '<td><label class="btn btn-primary" style="font-size:10px;" >'+
                                  '<i class="fa fa-image"></i> Change Photo <button class="changephoto" onclick="return passIDChangePhoto('+dataDeceasedFromUrn[i].deceased_id+')" type="button" style="display: none;" id="changeFile" name="changeFile" >'+
                              '</label>'+
                            "</td></tr>";
                        tr += "<td><button type='button' class='archive btn btn-danger btn-sm btn-block' onclick='return passArchiveIdValueToArchieve("+dataDeceasedFromUrn[i].deceased_id+")' ><i class='fas fa-archive'></i> Archive </td></button>"+
                              '<td><button class="updateUrn btn btn-warning btn-sm btn-block" onclick="return passUpdateIdValueFromUrn('+dataDeceasedFromUrn[i].deceased_id+')" ><i class="fas fa-edit"></i> Edit </td></button>'+
                              "</tr>";
                        tr += "<hr>";
                        tbodyUrn.innerHTML += tr;
                  
                }//if
            }//for 

      }


      function insertDataTableMausoleum(tid){
            console.log(tid);
            var tbodyCrypt = document.getElementById('tbodyCrypt');
            tbodyCrypt.innerHTML = "";
             for (var i = 0; i < dataDeceasedFromCrypt.length; i++) {
                if (tid == dataDeceasedFromCrypt[i].crypt_id) {
                        var tr = "<tr>";
                        tr += '<td colspan="2" class="img-container" ><img src="mapping/assets/img/grave_img/' + dataDeceasedFromCrypt[i].image +' " alt="grave image" class="stretchy" /></td></tr>';
                        tr += '<td> Deceased ID: </td>'+ '<td>'+ dataDeceasedFromCrypt[i].deceased_id+'</td></tr>';
                        tr += '<td> Crypt ID: </td>'+ '<td>'+ dataDeceasedFromCrypt[i].crypt_id+'</td></tr>';
                        tr += '<td> Crypt number: </td>'+'<td>'+  dataDeceasedFromCrypt[i].crypt_number+'</td></tr>';
                        tr += '<td> Lastname: </td>'+ '<td>'+ dataDeceasedFromCrypt[i].last_name+'</td></tr>';
                        tr += '<td> Firstname: </td>'+ '<td>'+ dataDeceasedFromCrypt[i].first_name+'</td></tr>';
                        tr += '<td> Middlename: </td>'+ '<td>'+ dataDeceasedFromCrypt[i].middle_name+'</td></tr>';
                        tr += '<td> Yearborn: </td>'+ '<td>'+ dataDeceasedFromCrypt[i].year_born+'</td></tr>';
                        tr += '<td> Yeardied: </td>'+ '<td>'+ dataDeceasedFromCrypt[i].year_died+'</td></tr>';
                        tr += "<td><button class='btn btn-info' onclick='return locateMe("+dataDeceasedFromCrypt[i].latitude_mau + "," + dataDeceasedFromCrypt[i].longitude_mau+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td>"+
                              '<td><label class="btn btn-primary" style="font-size:10px;" >'+
                                  '<i class="fa fa-image"></i> Change Photo <button class="changephoto" onclick="return passIDChangePhoto('+dataDeceasedFromCrypt[i].deceased_id+')" type="button" style="display: none;" id="changeFile" name="changeFile" >'+
                              '</label>'+
                            "</td></tr>";
                        tr += "<td><button type='button' class='archive btn btn-danger btn-sm btn-block' onclick='return passArchiveIdValueToArchieve("+dataDeceasedFromCrypt[i].deceased_id+")' ><i class='fas fa-archive'></i> Archive </td></button>"+
                              '<td><button class="updateCrypt btn btn-warning btn-sm btn-block" onclick="return passUpdateIdValueFromCrypt('+dataDeceasedFromCrypt[i].deceased_id+')" ><i class="fas fa-edit"></i> Edit </td></button>'+
                              "</tr>";
                        tr += "<hr>";
                        tbodyCrypt.innerHTML += tr;
                  
                }//if
            }//for 
      }


      function insertDataTableApartment(tid){
            console.log(tid);
            var tbody = document.getElementById('tbody');
            tbody.innerHTML = "";
            for (var i = 0; i < dataDeceasedFromAp.length; i++) {
                if (tid == dataDeceasedFromAp[i].tomb_id) {
                        var tr = "<tr>";
                        tr += '<td colspan="2" class="img-container" ><img src="mapping/assets/img/grave_img/' + dataDeceasedFromAp[i].image +' " alt="grave image" class="stretchy" /></td></tr>';
                        tr += '<td> Deceased ID: </td>'+ '<td>'+ dataDeceasedFromAp[i].deceased_id+'</td></tr>';
                        tr += '<td> Tomb ID: </td>'+ '<td>'+ dataDeceasedFromAp[i].tomb_id+'</td></tr>';
                        tr += '<td> Tomb number: </td>'+'<td>'+  dataDeceasedFromAp[i].tomb_number+'</td></tr>';
                        tr += '<td> Lastname: </td>'+ '<td>'+ dataDeceasedFromAp[i].last_name+'</td></tr>';
                        tr += '<td> Firstname: </td>'+ '<td>'+ dataDeceasedFromAp[i].first_name+'</td></tr>';
                        tr += '<td> Middlename: </td>'+ '<td>'+ dataDeceasedFromAp[i].middle_name+'</td></tr>';
                        tr += '<td> Yearborn: </td>'+ '<td>'+ dataDeceasedFromAp[i].year_born+'</td></tr>';
                        tr += '<td> Yeardied: </td>'+ '<td>'+ dataDeceasedFromAp[i].year_died+'</td></tr>';
                        tr += "<td><button class='btn btn-info' onclick='return locateMe("+dataDeceasedFromAp[i].latitude_app + "," + dataDeceasedFromAp[i].longitude_app+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td>"+
                              '<td><label class="btn btn-primary" style="font-size:10px;" >'+
                                  '<i class="fa fa-image"></i> Change Photo <button class="changephoto" onclick="return passIDChangePhoto('+dataDeceasedFromAp[i].deceased_id+')" type="button" style="display: none;" id="changeFile" name="changeFile" >'+
                              '</label>'+
                            "</td></tr>";
                        tr += "<td><button type='button' class='archive btn btn-danger btn-block btn-sm' onclick='return passArchiveIdValueToArchieve("+dataDeceasedFromAp[i].deceased_id+")' ><i class='fas fa-archive'></i> Archive </td></button>"+
                              '<td><button class="update btn btn-warning btn-block btn-sm" onclick="return passUpdateIdValueFromApartment('+dataDeceasedFromAp[i].deceased_id+')" ><i class="fas fa-edit"></i> Edit </td></button>'+
                              "</tr>";
                        tr += "<hr>";
                        tbody.innerHTML += tr;
                  
                }//if
            }//for 

      }


      function passApartmentID(apid){

            document.querySelector("#input-apartmentid").value = apid;

      }
      
      function passColumID(cid){

            document.querySelector("#input-columbariumid").value = cid;

      }

      function passMauID(cid){

            document.querySelector("#input-mausoleumid").value = cid;
            document.querySelector("#publicmausoleumid").value = cid;
            document.querySelector("#publiclawnmausoleumid").value = cid;
            
      }

      function passUpdateIdValueFromPlot(id){

        console.log(id);

        for (var i = 0; i < dataDeceased.length; i++) {
              if (id == dataDeceased[i].deceased_id) {
                          document.querySelector("#deceasedid").value = dataDeceased[i].deceased_id;
                          document.querySelector("#lnameUp").value = dataDeceased[i].last_name;
                          document.querySelector("#fnameUp").value = dataDeceased[i].first_name;
                          document.querySelector("#mnameUp").value = dataDeceased[i].middle_name;
                          document.querySelector("#yearbornUp").value = dataDeceased[i].year_born;
                          document.querySelector("#yeardiedUp").value = dataDeceased[i].year_died;
              }//if
        }//for 

      }


      function passUpdateIdValueFromApartment(id){
      
        // console.log(id);

        for (var i = 0; i < dataDeceasedFromAp.length; i++) {
              if (id == dataDeceasedFromAp[i].deceased_id) {
                        document.querySelector("#deceasedid").value = dataDeceasedFromAp[i].deceased_id;
                        document.querySelector("#lnameUp").value = dataDeceasedFromAp[i].last_name;
                        document.querySelector("#fnameUp").value = dataDeceasedFromAp[i].first_name;
                        document.querySelector("#mnameUp").value = dataDeceasedFromAp[i].middle_name;
                        document.querySelector("#yearbornUp").value = dataDeceasedFromAp[i].year_born;
                        document.querySelector("#yeardiedUp").value = dataDeceasedFromAp[i].year_died;
              }//if
        }//for 

      }

      function passUpdateIdValueFromCrypt(id){
      
        // console.log(id);

        for (var i = 0; i < dataDeceasedFromCrypt.length; i++) {
              if (id == dataDeceasedFromCrypt[i].deceased_id) {
                        document.querySelector("#deceasedidCrypt").value = dataDeceasedFromCrypt[i].deceased_id;
                        document.querySelector("#lnameUpCrypt").value = dataDeceasedFromCrypt[i].last_name;
                        document.querySelector("#fnameUpCrypt").value = dataDeceasedFromCrypt[i].first_name;
                        document.querySelector("#mnameUpCrypt").value = dataDeceasedFromCrypt[i].middle_name;
                        document.querySelector("#yearbornUpCrypt").value = dataDeceasedFromCrypt[i].year_born;
                        document.querySelector("#yeardiedUpCrypt").value = dataDeceasedFromCrypt[i].year_died;
              }//if
        }//for 

      }


      function passUpdateIdValueFromUrn(id){
      
        // console.log(id);

        for (var i = 0; i < dataDeceasedFromUrn.length; i++) {
              if (id == dataDeceasedFromUrn[i].deceased_id) {
                        document.querySelector("#deceasedidUrn").value = dataDeceasedFromUrn[i].deceased_id;
                        document.querySelector("#lnameUpUrn").value = dataDeceasedFromUrn[i].last_name;
                        document.querySelector("#fnameUpUrn").value = dataDeceasedFromUrn[i].first_name;
                        document.querySelector("#mnameUpUrn").value = dataDeceasedFromUrn[i].middle_name;
                        document.querySelector("#yearbornUpUrn").value = dataDeceasedFromUrn[i].year_born;
                        document.querySelector("#yeardiedUpUrn").value = dataDeceasedFromUrn[i].year_died;
              }//if
        }//for 

      }
      

      function passIDChangePhoto(id){
      
        // console.log(id);

          for (var i = 0; i < dataDeceased.length; i++) {
                if (id == dataDeceased[i].deceased_id) {
                          document.querySelector("#changephotodid").value = dataDeceased[i].deceased_id;
                
                }//if
          }//for 
        
          for (var i = 0; i < dataDeceasedFromAp.length; i++) {
                if (id == dataDeceasedFromAp[i].deceased_id) {
                          document.querySelector("#changephotodid").value = dataDeceasedFromAp[i].deceased_id;
                
                }//if
          }//for 

          for (var i = 0; i < dataDeceasedFromCrypt.length; i++) {
                if (id == dataDeceasedFromCrypt[i].deceased_id) {
                          document.querySelector("#changephotodid").value = dataDeceasedFromCrypt[i].deceased_id;
                
                }//if
          }//for 

          for (var i = 0; i < dataDeceasedFromUrn.length; i++) {
                if (id == dataDeceasedFromUrn[i].deceased_id) {
                          document.querySelector("#changephotodid").value = dataDeceasedFromUrn[i].deceased_id;
                
                }//if
          }//for 



      }
      
      function passArchiveIdValueToArchieve(id){
      
        console.log(id);

          for (var i = 0; i < dataDeceased.length; i++) {
                if (id == dataDeceased[i].deceased_id) {
                          document.querySelector("#did").value = dataDeceased[i].deceased_id;
                
                }//if
          }//for 


          for (var i = 0; i < dataDeceasedFromAp.length; i++) {
                if (id == dataDeceasedFromAp[i].deceased_id) {
                          document.querySelector("#did").value = dataDeceasedFromAp[i].deceased_id;
                
                }//if
          }//for 

          for (var i = 0; i < dataDeceasedFromCrypt.length; i++) {
                if (id == dataDeceasedFromCrypt[i].deceased_id) {
                          document.querySelector("#did").value = dataDeceasedFromCrypt[i].deceased_id;
                
                }//if
          }//for 

          for (var i = 0; i < dataDeceasedFromUrn.length; i++) {
                if (id == dataDeceasedFromUrn[i].deceased_id) {
                          document.querySelector("#did").value = dataDeceasedFromUrn[i].deceased_id;
                
                }//if
          }//for 

      }

      function deletePlot(id){

          console.log(id);

          for (var i = 0; i < dataTombs.length; i++) {
                if (id == dataTombs[i].tomb_id) {
                          document.querySelector("#tid").value = dataTombs[i].tomb_id;
                
                }//if
          }//for 

      }

      var Occupied = L.divIcon({
          className: 'custom-div-icon',
          html: "<div style='background-color:#000;' class='marker-pin'></div><img src='../mscv2/img/grave.svg' alt='Grave'>",
          iconSize: [30, 40],
          iconAnchor: [15.5, 42],
          popupAnchor: [0, -25]
      });

      var Apartment = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-building' ></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -25]
        });

      var Mausoleum = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-monument'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -25]
        });

      var Columbarium = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-igloo'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -25]
        });


      var defaultMap = L.divIcon({
            className: 'custom-div-text',
            html: "<div style='background-color:red;' class='default-pin'><span style='position:absolute;text-align: center;transform: rotate(45deg);left:0;right:0; font-size:10px; color:#000;margin: 10px 10px 0 3px;z-index:1;'><strong>Click Me</strong> to make this as a default map! </span></div>",
            iconSize: [150, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -45]
        });

      var icons = {
            Occupied: Occupied,
            Apartment: Apartment,
            Mausoleum: Mausoleum,
            Columbarium: Columbarium
      }

      var Available = L.divIcon({
                        className: 'circle-available',
                        iconSize: [20,20],
                      });

      var Sold = L.divIcon({
                        className: 'circle-sold',
                        iconSize: [20,20],
                      });

      var lotLayer = L.geoJson(plotData, {
         // style: function(feature){
         //           let plotid = feature.properties.plot_id;
         //              for (var i = 0; i < dataPlots.length; i++) {
         //                      if (plotid == dataPlots[i].plot_id){

         //                          feature.properties.lotstatus = dataPlots[i].status;
         //                          status = feature.properties.lotstatus;

         //                      }
         //                }
         //              for (var i = 0; i < dataTombs.length; i++) {
         //                    if (plotid == dataTombs[i].plot_id){

         //                          feature.properties.lotstatus = dataTombs[i].status;
         //                          status = feature.properties.lotstatus;

         //                    }
         //              }     

         //            return {
         //                  fillColor: getDotColor(feature.properties.lotstatus),
         //                  radius: 8,
         //                  stroke: true,
         //                  color: getDotColor(feature.properties.lotstatus),
         //                  weight: 2,
         //                  opacity: 1,
         //                  fill: true,
         //                  // fillColor: "#FF0000",
         //                  fillOpacity: 0.5
         //            };

         //            // L.circle(feature.geometry.coordinates, radius).addTo(map);
         //    },
            pointToLayer: function (feature, latlng) {
                  if (feature.properties.status == "Occupied" ) {
                        // var radius = feature.properties.plot_size / 3;

                        return L.marker(feature.geometry.coordinates, { icon: icons[feature.properties.status] });

                        // L.circle(feature.geometry.coordinates, radius).addTo(map);
                  }else if (feature.properties.status == "Available" ){
                        return L.marker(feature.geometry.coordinates,   {icon: Available} );  
                  }else if (feature.properties.status == "Sold" ){
                        return L.marker(feature.geometry.coordinates,   {icon: Sold} );  
                  }
                    
          
             }
            ,
           onEachFeature: onEachDot,

      }).addTo(lot);

      var appLayer = L.geoJson(appData, {
       // style: style,
         
            pointToLayer: function (feature, latlng) {
                // return L.marker(feature.geometry.coordinates, {icon: gateIcon});
                for (var i = 0; i < dataGraveApp.length; i++) {
                    return L.marker(feature.geometry.coordinates, { icon: icons[dataGraveApp[i]['type']] });
                    // return L.circleMarker(feature.geometry.coordinates, { icon: gateIcon });
                }
            }
            ,
            onEachFeature: onEachDot
      }).addTo(apartment);


      var mauLayer = L.geoJson(mauData, {
       // style: style,
            pointToLayer: function (feature, latlng) {
                // return L.marker(feature.geometry.coordinates, {icon: gateIcon});
                for (var i = 0; i < dataGraveMau.length; i++) {
                    // var radius = feature.properties.size / 3;

                    return L.marker(feature.geometry.coordinates, { icon: icons[dataGraveMau[i]['type']] });

                    // L.circle(feature.geometry.coordinates, 1.85806 ).addTo(map);
                }
            }
            ,
           onEachFeature: onEachDot
      }).addTo(mausoleum);

      var columLayer = L.geoJson(columData, {
       // style: style,
            pointToLayer: function (feature, latlng) {
                // return L.marker(feature.geometry.coordinates, {icon: gateIcon});
                for (var i = 0; i < dataGraveColum.length; i++) {
                    // var radius = feature.properties.size / 3;

                    return L.marker(feature.geometry.coordinates, { icon: icons[dataGraveColum[i]['type']] });

                    // L.circle(feature.geometry.coordinates, radius).addTo(map);
                }


            }
            ,
           onEachFeature: onEachDot
      }).addTo(columbarium);


      // Search for spatial location
       var searchControl = new L.Control.Search({
        url: 'https://nominatim.openstreetmap.org/search?format=json&q={s}',
        jsonpParam: 'json_callback',
        propertyName: 'display_name',
        textPlaceholder: 'Type the cemetery name here ...',
        propertyLoc: ['lat','lon'],
        // marker: L.marker([0,0]).bindPopup('title: HELLO'),
        // openPopup: true,
        // marker: L.circleMarker([0,0],{radius:30}).on('click', getLatLon),
        marker: L.marker([0,0], {icon: defaultMap}).addTo(map).on('click', getLatLon),
        // marker: L.marker([0,0], {icon: Mausoleum}).bindPopup("HEYYY").openPopup(),
        autoCollapse: true,
        autoType: false,
        minLength: 2
      }) ;
      // searchControl.on('search_locationfound', function(e) {
      //       console.log("THIS IS MAP",e);
      //       // e.layer.openPopup();
      //   });
      map.addControl( searchControl );


      var newlat;
      var newlng;
      function getLatLon(e) {
        
        newlat = e.latlng.lat;
        newlng = e.latlng.lng;

        console.log(newlat);
        // var newMap = '<form>'+
        //               '<table>'+
        //                 '<th> MAKE THIS AS THE DEFAULT MAP LOCATION</th>'+
        //                 '<tr>'+
        //                     '<td><input type="text" name="newMapLat" value='+ newlat +'></td>'+
        //                 '</tr>'+
        //                 '<tr>'+
        //                     '<td><input type="text" name="newMapLng" value='+ newlng +'></td>'+
        //                 '</tr>'+
        //               '</table>'+
        //               '</form>';
        $('#mymodal').modal('show');
        document.querySelector("#input-defaultLat").value = newlat;
        document.querySelector("#input-defaultLng").value = newlng;
        //    var popup = new L.Popup();
        //        //set latlng
        //        // popup.setLatLng([x,y]);
        //        //set content
        //        popup.setContent(newMap);
        //        // map.setView([x,y],22, {animation:true, duration:5.8});
        //         //display popup
        //        popup.addTo(map);
      }


      // insert Plot from modalk
      $(document).ready(function(){

          $('#insert_form').on('submit', function(event){
                event.preventDefault();


                      $.ajax({
                          url: "insertPlot.php",
                          method: "POST",
                          data: $('#insert_form').serialize(),
                          success: function(data)
                          {

                              $('#insert_form')[0].reset();
                              $('#mymarkermodal').modal('hide');
                              alert("Lot Added Successfully!");

                          },
                          error: function(){
                              alert("Something went wrong!");
                          }
                      });

                 
                
          });

      });


      $(document).ready(function(){

          $('#insert_form_app').on('submit', function(event){
                event.preventDefault();

                      $.ajax({
                          url: "insertGraveApartment.php",
                          method: "POST",
                          data: $('#insert_form_app').serialize(),
                          success: function(data)
                          {

                              $('#insert_form_app')[0].reset();
                              $('#myappartmentmodal').modal('hide');
                              alert("Lot Apartment Added Successfully!");

                          },
                          error: function(){
                              alert("Something went wrong!");
                          }
                      });

                 
                
          });

      });


      $(document).ready(function(){

          $('#insert_form_mau').on('submit', function(event){
                event.preventDefault();
                if ($('#modalAreaNumberMau').val() == ""){

                    alert("Area Number is required");

                 }
                 else if ($('#modalLotNumberMau').val() == ""){

                    alert("Lot Number is required");

                 }
                 else {

                      $.ajax({
                          url: "insertGraveMausoleum.php",
                          method: "POST",
                          data: $('#insert_form_mau').serialize(),
                          success: function(data)
                          {

                              $('#insert_form_mau')[0].reset();
                              $('#mymausoleummodal').modal('hide');
                              alert("Lot Mausoleum Added Successfully!");

                          },
                          error: function(){
                              alert("Something went wrong!");
                          }
                      });

                 }
                
          });

      });


      $(document).ready(function(){

          $('#insert_form_colum').on('submit', function(event){
                event.preventDefault();
                if ($('#modalAreaNumberColum').val() == ""){

                    alert("Area Number is required");

                 }
                 else if ($('#modalLotNumberColum').val() == ""){

                    alert("Lot Number is required");

                 }
                 else {

                      $.ajax({
                          url: "insertGraveColumbarium.php",
                          method: "POST",
                          data: $('#insert_form_colum').serialize(),
                          success: function(data)
                          {

                              $('#insert_form_colum')[0].reset();
                              $('#mycolumbariummodal').modal('hide');
                              alert("Lot Columbarium Added Successfully!");
 
                          },
                          error: function(){
                              alert("Something went wrong!");
                          }
                      });

                 }
                
          });

      });


       // Routing Machine
        // var gatePoint = [14.566487504935854 , 121.01717062033508];

        let gatePoint;
      // Map creation start
        for (var i=0; i < dataMapStart.length ; i++) {
            gatePoint = [ dataMapStart[i].latitude, dataMapStart[i].longitude ];
        }


        var myMarker = L.marker(gatePoint, { icon: startPinLocation });

        myMarker.addTo(map);
        // myMarker.bindPopup(
        //   '<b>Main Gate</b><div><img style="width:100%" src="leaflet/images/gate.png" alt="image"/></div>',
        //     {minWidth : 256}
        //   );
        
        var control = L.Routing.control(L.extend(window.lrmConfig, {
            waypoints: [
                  gatePoint
            ],
            // serviceUrl: 'http://my-osrm/route/v1',
            // serviceUrl: 'http://router.project-osrm.org/viaroute',
            geometryPrecision: 6 ,
            geocoder: L.Control.Geocoder.nominatim(),
            draggableWaypoints: false,
            routeWhileDragging: false,
            reverseWaypoints: true,
            showAlternatives: true,
            altLineOptions: {
              styles: [
                {color: 'black', opacity: 0.15, weight: 9},
                {color: 'white', opacity: 0.8, weight: 6},
                {color: 'blue', opacity: 0.5, weight: 2}
              ]
            },
          createMarker: function (i, start, n){
              var marker_icon = null
                if (i == 0) {
                    // This is the first marker, indicating start
                    marker_icon = startPinLocation
                } else if (i == n -1) {
                    //This is the last marker indicating destination
                    marker_icon =destinationIcon
                }
                var marker = L.marker (start.latLng, {
                            draggable: false,
                            bounceOnAdd: false,
                            bounceOnAddOptions: {
                                duration: 1000,
                                height: 800, 
                                function(){
                                    (bindPopup(myPopup).openOn(map))
                                }
                            },
                            icon: marker_icon
                })
              return marker
          }

        }))
        control.addTo(map);

        function locateMeStart(lat,lng){
            var latlng = L.latLng(lat,lng);
            control.spliceWaypoints(0, 1, latlng);

        }

        function locateMe(lat,lng){
              var latlng = L.latLng(lat,lng);
              control.spliceWaypoints(control.getWaypoints().length - 1, 1, latlng);
        }

        const legend = L.control.Legend({
                    position: "bottomright",
                    collapsed: false,
                    title: 'MAP LEGENDS',
                    symbolWidth: 24,
                    opacity: 1,
                    column: 3,
                    legends: [{
                        label: "Apartment",
                        type: "image",
                        url: "../mscv2/img/building-solid.svg",
                    },{
                        label: "Mausoleum",
                        type: "image",
                        url: "../mscv2/img/monument-solid.svg",
                    },{
                        label: "Columbarium",
                        type: "image",
                        url: "../mscv2/img/igloo-solid.svg",
                    },{
                        label: "Entrance Point",
                        type: "image",
                        url: "../mscv2/img/thumbtack-solid.svg",
                    },{
                        label: "Destination",
                        type: "image",
                        url: "../mscv2/img/flag-solid.svg",
                    },{
                        label: "User Location",
                        type: "image",
                        url: "../mscv2/img/street-view-solid.svg",
                    },{
                        label: " Available Lot",
                        type: "circle",
                        radius: 5,
                        color: "#006d2c",
                        fillColor: "#006d2c",
                        fill: true,
                        opacity: 1,
                    },{
                        label: " Sold Lot",
                        type: "circle",
                        radius: 5,
                        color: "#7f0000",
                        fillColor: "#7f0000",
                        fill: true,
                        opacity: 1,
                    }, {
                        label: " Occupied Lot",
                        type: "image",
                        url: "../mscv2/img/grave.svg",
                    }]
                })
                .addTo(map);






