 

 
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


      //define styles for circle markers
      var Occupied = L.divIcon({
          className: 'custom-div-icon',
          html: "<div style='background-color:#000;' class='marker-pin'></div><img src='../mscv2/img/grave.svg' alt='Grave'>",
          iconSize: [30, 40],
          iconAnchor: [15.5, 42],
          popupAnchor: [0, -25]
      });

      var Apartment = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-building'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -25]
        });

      var Mausoleum = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-monument'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -25],
            shadowUrl: "../mscv2/img/marker-shadow.png",
        });

      var Columbarium = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-igloo'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -25],
            // shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
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


      var plotData = geoGravePlot;
      var appData = geoGraveApp;
      var mauData = geoGraveMau;
      var columData = geoGraveColum;
      var newtomb;
      // var cryptContent;
    

      function onEachDot(feature, layer) {

          var plotid = feature.properties.plot_id;
          var plotnumber = feature.properties.plot_number;
          var type = feature.properties.type;
          var apartmentid = feature.properties.apartment_id;
          var mausoleumtype = feature.properties.mausoleumtype;
          var mausoleumid = layer.feature.properties.mausoleumid;
          var columbariumid = layer.feature.properties.columbariumid;
          console.log("type",type);


          if(type === "Lot"){ // display to add grave price

                      layer.bindPopup('<h4> No Data Available </h4>', {maxHeight: 30});
                              


                       for (var i = 0; i < dataTombs.length; i++) {
                              if (plotid == dataTombs[i].plot_id) { // display when plot had interment tomb

                                  layer.bindPopup('<h4> No Data Available </h4>', {maxHeight: 30});
                                  // var tombTemplate = '<table class="popup-table table-striped table-hover">'+
                                  //                     '<h4> Tomb Details </h4>'+
                                  //                     '<tr class="popup-table-row">'+
                                  //                         '<th class="popup-table-header">AREA NAME:</th>'+
                                  //                         '<td id="lotStatus" class="popup-table-data">'+ dataTombs[i].area_name +'</td>'+
                                  //                     '</tr>'+
                                  //                     '<tr class="popup-table-row">'+
                                  //                         '<th class="popup-table-header">PLOT NUMBER:</th>'+
                                  //                         '<td id="lotPrice" class="popup-table-data">'+ dataTombs[i].plot_number +'</td>'+
                                  //                     '</tr>'+
                                  //                     '<tr class="popup-table-row">'+
                                  //                         '<th class="popup-table-header">PLOT PRICE:</th>'+
                                  //                         '<td id="lotPrice" class="popup-table-data">'+ dataTombs[i].plot_price +'</td>'+
                                  //                     '</tr>'+
                                  //                     '<tr class="popup-table-row">'+
                                  //                         '<th class="popup-table-header">PLOT SIZE:</th>'+
                                  //                         '<td id="lotPrice" class="popup-table-data">'+ dataTombs[i].plot_size +'</td>'+
                                  //                     '</tr>'+
                                  //                     '<tr class="popup-table-row">'+
                                  //                         '<th class="popup-table-header">TOMB NUMBER:</th>'+
                                  //                         '<td id="lotPrice" class="popup-table-data">'+ dataTombs[i].tomb_number +'</td>'+
                                  //                     '</tr>'+
                                  //                     '</table>';
                                                      // layer.bindPopup(tombTemplate , {maxHeight: 130});
                                                      
                              }
                                  
                              
                      }


                      for (var i = 0; i < dataDeceased.length; i++) {
                         if (plotid == dataDeceased[i].plot_id) {
                              
                            tomb = '<table id="tablePlot" class="table-striped table-hover style="overflow-y:hidden;width:450px" >'+
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
                                          "<td colspan='2' ><button style='font-size: 10px;width: 100%;' class='btn btn-info btn-block' onclick='return locateMe("+dataDeceased[i].latitude + "," + dataDeceased[i].longitude+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td>"+
                                      '</tr>'+    
                                    '</table>';
                              layer.bindPopup(tomb, {maxHeight: 320});
                              
                         }//if end
                      }//for end



              // layer.bindPopup("THIS IS LOT: "+ feature.properties.area);
          }else if (type === "Apartment"){

                
                    var tombContent;
            

                    for (var i = 0; i < dataTombsFromAp.length; i++) {
                      if ( apartmentid == dataTombsFromAp[i].apartment_id) {
                              

                              tombContent += '<div class="main">'+
                                                    '<table id="tombTable" class="table table-bordered table-striped table-hover table-responsive-sm" >'+ 
                                                        '<tbody>'+
                                                            '<tr>'+
                                                                '<td style="padding-left:0;position:block"><img src="../mscv2/img/headstonegrave.svg" height="15px" width="15px" >'+ dataTombsFromAp[i].tomb_id+'</img></td>'+
                                                                '<td >'+ dataTombsFromAp[i].tomb_number+'</td>'+
                                                                '<td >'+ dataTombsFromAp[i].area_number_app+'</td>'+
                                                                '<td >'+ dataTombsFromAp[i].tomb_size+'</td>'+
                                                                '<td >'+ dataTombsFromAp[i].lot_number_app+'</td>'
                                                                if (dataTombsFromAp[i].status == "Available") {
                                                                    tombContent += '<td id="avail" style="color:blue;">Available</td>'
                                                                    // '<td><button style="font-size:10px;word-wrap: break-word;width:30%;" class="btn btn-light"> Available </button></td>'
                                                                } else if (dataTombsFromAp[i].status == "Occupied"){
                                                                    tombContent +='<td id="occu" style="color:red;">Occupied</td>'
                                                                    // '<td><button style="font-size:10px;word-wrap: break-word;width:30%;" class="btn btn-light btn-block" > Occupied </button></td>'
                                                                    
                                                                }
                                          tombContent += '</tr>'+
                                                          '<tr>'+
                                                           '<td colspan="6">'+
                                                                    '<div>'
                                                                    if (dataTombsFromAp[i].status === "Occupied") {
                                                                        tombContent += '<button id="showHide" style="font-size:10px;" class=" btn btn-info btn-block btn-sm" onclick="return insertDataTableApartment('+dataTombsFromAp[i].tomb_id+'), showHideDeceased(this)" >Show Deceased Data</button>'
                                                                    } else if (dataTombsFromAp[i].status === "Available") {
                                                                        // tombContent +='<button style="font-size:10px;" class="btn btn-light btn-block"> Available </button>'
                                                                    }
                                                      tombContent +='</div>'+
                                                                '</td>'+
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
                                '<table id="ctable" class="table table-bordered table-responsive-sm">'+
                                    '<thead>'+
                                            '<tr>'+
                                                  '<th colspan="6" style="text-align: center;"> LIST OF TOMB IN APARMENT NUMBER <b>' + apartmentid +'</b></th>'+
                                            '</tr>'+
                                            '<tr>'+
                                                  '<th colspan="6" style="text-align: center;"> Tomb </th>'+
                                            '</tr>'+
                                            '<tr>'+
                                                    '<th> ID </th>'+
                                                    '<th> No. </th>'+
                                                    '<th> Area Name </th>'+
                                                    '<th> Size </th>'+
                                                    '<th> Lot No. </th>'+
                                                    '<th> Status </th>'+
                                            '</tr>'+
                                    '</thead>'+
                                '</table>'+
                              '</div>'+ tombContent, {maxWidth: 580});

              // layer.bindPopup("THIS IS APARTMENT: "+ feature.properties.area);

          }else if (type === "Columbarium"){
              
                 var urnContent;


                for (var i = 0; i < dataUrnFromColum.length; i++) {
                      if ( columbariumid == dataUrnFromColum[i].columbarium_id) {

                              urnContent += '<div class="main">'+
                                                    '<table id="urnTable" class="table table-bordered table-striped table-hover table-responsive-sm">'+ 
                                                        '<tbody>'+
                                                            '<tr colspan="6">'+
                                                                '<td style="padding-left:0;position:block" ><img src="../mscv2/img/ash.svg" height="15px" width="15px">'+ dataUrnFromColum[i].urn_id+'</img></td>'+
                                                                '<td> <b>'+ dataUrnFromColum[i].urn_number+'</b></td>'+
                                                                '<td> <b>'+ dataUrnFromColum[i].area_number_colum+'</b></td>'+
                                                                '<td> <b>'+ dataUrnFromColum[i].urn_size+'</b></td>'+
                                                                '<td> <b>'+ dataUrnFromColum[i].lot_number_colum+'</b></td>'
                                                                if (dataUrnFromColum[i].status === "Available") {
                                                                    urnContent += '<td id="avail" style="color:blue;">Available</td>'
                                                                    // '<td><button style="font-size:10px;background-color:red;" id="showAddDeceased" class="btn btn-danger addDeceased" onclick="return addDeceasedFromUrn('+dataUrnFromColum[i].urn_id+','+dataUrnFromColum[i].latitude_colum+','+dataUrnFromColum[i].longitude_colum+')"> Add Deceased </button></td>'
                                                                } else if (dataUrnFromColum[i].status === "Occupied") {
                                                                    urnContent += '<td id="occu" style="color:red;">Occupied</td>'
                                                                    // '<td><button style="font-size:10px;" class="btn btn-light btn-block" > Occupied </button></td>'
                                                                }
                                            urnContent +='</tr>'+
                                                            '<tr>'+
                                                                '<td colspan="6">'+
                                                                    '<div>'
                                                                    if (dataUrnFromColum[i].status === "Occupied") {
                                                                        urnContent +='<button id="showHide" style="font-size:10px;" class="btn btn-info btn-block btn-sm" onclick="return insertDataTableColumbarium('+dataUrnFromColum[i].urn_id+') , showHideDeceased(this)" >Show Deceased Data</button>'
                                                                    } else if (dataUrnFromColum[i].status === "Available") {
                                                                        // urnContent +='<button style="font-size:10px;" class="btn btn-light btn-block"> Available </button>'
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
                                                    '<th colspan="6" style="text-align: center;"> LIST OF URN IN COLUMBARIUM NUMBER <b>' + columbariumid +'</b></th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                    '<th colspan="6" style="text-align: center;"> URN </th>'+
                                              '</tr>'+
                                              '<tr>'+
                                                      '<th> ID </th>'+
                                                      '<th> No. </th>'+
                                                      '<th> Area Name </th>'+
                                                      '<th> Size </th>'+
                                                      '<th> Lot No. </th>'+
                                                      '<th> Status </th>'+
                                              '</tr>'+
                                      '</thead>'+
                                  '</table>'+
                              '</div>'+ urnContent, {maxWidth: 580});


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
                                                                    publicCryptContent += '<td id="avail" style="color:blue;">Available</td>'

                                                                } else if (dataCryptFromMau[i].status === "Occupied") {
                                                                    publicCryptContent += '<td id="occu" style="color:red;">Occupied</td>'

                                                                }
                                            publicCryptContent +='</tr>'+
                                                            '<tr>'+
                                                                '<td colspan="6">'+
                                                                    '<div>'
                                                                    if (dataCryptFromMau[i].status === "Occupied") {
                                                                        publicCryptContent +='<button id="showHide" style="font-size:10px;" class="btn btn-info btn-block btn-sm" onclick="return insertDataTableMausoleum('+dataCryptFromMau[i].crypt_id+'), showHideDeceased(this)" >Show Deceased Data</button>'
                                                                    } else if (dataCryptFromMau[i].status === "Available") {
                                                                        // cryptContent +='<button style="font-size:10px;" class="btn btn-light btn-block"> Available </button>'
                                                                    }
                                                      publicCryptContent +='</div>'+
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
                                                                      famCryptContent += '<td id="avail" style="color:blue;">Available</td>'

                                                                  } else if (dataCryptFromMau[i].status === "Occupied") {
                                                                      famCryptContent += '<td id="occu" style="color:red;">Occupied</td>'

                                                                  }
                                              famCryptContent +='</tr>'+
                                                              '<tr>'+
                                                                  '<td colspan="6">'+
                                                                      '<div>'
                                                                      if (dataCryptFromMau[i].status === "Occupied") {
                                                                          famCryptContent +='<button id="showHide" style="font-size:10px;" class="btn btn-info btn-block btn-sm" onclick="return insertDataTableMausoleum('+dataCryptFromMau[i].crypt_id+'), showHideDeceased(this)" >Show Deceased Data</button>'
                                                                      } else if (dataCryptFromMau[i].status === "Available") {
                                                                          // cryptContent +='<button style="font-size:10px;" class="btn btn-light btn-block"> Available </button>'
                                                                      }
                                                        famCryptContent +='</div>'+
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
                                                              publicLawnCryptContent += '<td id="avail" style="color:blue;">Available</td>'

                                                                } else if (dataCryptFromMau[i].status === "Occupied") {
                                                              publicLawnCryptContent += '<td id="occu" style="color:red;">Occupied</td>'

                                                                }
                                      publicLawnCryptContent +='</tr>'+
                                                            '<tr>'+
                                                                '<td colspan="6">'+
                                                                    '<div>'
                                                                    if (dataCryptFromMau[i].status === "Occupied") {
                                                                  publicLawnCryptContent +='<button id="showHide" style="font-size:10px;" class="btn btn-info btn-block btn-sm" onclick="return insertDataTableMausoleum('+dataCryptFromMau[i].crypt_id+'), showHideDeceased(this)" >Show Deceased Data</button>'
                                                                    } else if (dataCryptFromMau[i].status === "Available") {
                                                                        // cryptContent +='<button style="font-size:10px;" class="btn btn-light btn-block"> Available </button>'
                                                                    }
                                                publicLawnCryptContent +='</div>'+
                                                                '</td>'+
                                                            '</tr>'+
                                                        '</tbody>'+
                                                    '</table>'+
                                                '</div>';
                              
                      }//if
                    }//for

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
                                                                      '<th colspan="6" style="text-align: center;"> LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' NUMBER <b>' + mausoleumid +'</b></th>'+
                                                                '</tr>'+
                                                                '<tr>'+
                                                                      '<th colspan="6" style="text-align: center;"> Crypt </th>'+
                                                                '</tr>'+
                                                                '<tr>'+                                                                   
                                                                        '<th> No. </th>'+
                                                                        '<th> Location </th>'+
                                                                        '<th> Space Type </th>'+
                                                                        '<th> Price </th>'+
                                                                        '<th> Status </th>'+
                                                                '</tr>'+
                                                        '</thead>'+
                                                    '</table>'+
                                                '</div>'+ publicCryptContent , {maxWidth: 580});

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
                                                                      '<th colspan="6" style="text-align: center;"> LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' NUMBER <b>' + mausoleumid +'</b></th>'+
                                                                '</tr>'+
                                                                '<tr>'+
                                                                      '<th colspan="6" style="text-align: center;"> Crypt </th>'+
                                                                '</tr>'+
                                                                '<tr>'+
                                                                        '<th> ID </th>'+
                                                                        '<th> No. </th>'+
                                                                        '<th> Area Name </th>'+
                                                                        '<th> Size </th>'+
                                                                        '<th> Lot No. </th>'+
                                                                        '<th> Status </th>'+
                                                                '</tr>'+
                                                        '</thead>'+
                                                    '</table>'+
                                                '</div>'+ famCryptContent , {maxWidth: 580});

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
                                                                      '<th colspan="6" style="text-align: center;"> LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' NUMBER <b>' + mausoleumid +'</b></th>'+
                                                                '</tr>'+
                                                                '<tr>'+
                                                                      '<th colspan="6" style="text-align: center;"> Crypt </th>'+
                                                                '</tr>'+
                                                                '<tr>'+
                                                                        '<th> No. </th>'+
                                                                        '<th> Space Type </th>'+
                                                                        '<th> Price </th>'+
                                                                        '<th> Status </th>'+
                                                                '</tr>'+
                                                        '</thead>'+
                                                    '</table>'+
                                                '</div>'+ publicLawnCryptContent , {maxWidth: 580});

                     }


          }//end of nested if

          
  
      }; // onEachDot


      function showHideDeceased(el){
    
            el.classList.toggle("btn-dark");
            
            
            if ( el.className.match(/(?:^|\s)btn-dark(?!\S)/)  ){
                document.getElementById('sideID').classList.remove('hide');
                el.innerText = 'Hide Deceased Data';

            }else {
                document.getElementById('sideID').classList.add('hide');
                el.innerText = 'Show Deceased Data';
            }
            

            var clist = el.classList.toString();
            console.log(clist);

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
                        tr += '<td> Yeardied: </td>'+ '<td>'+ dataDeceasedFromAp[i].year_died+'</td></tr><br>';
                        tr += "<td colspan='2' ><button class='btn btn-info btn-block btn-sm' onclick='return locateMe("+dataDeceasedFromAp[i].latitude_app + "," + dataDeceasedFromAp[i].longitude_app+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td></tr>";
                        tbody.innerHTML += tr;
                  
                }//if
            }//for 

            // document.getElementById('showHide').innerText = 'Deceased Showed';
            // if ( document.getElementById("showHide").className.match(/(?:^|\s)btn-info(?!\S)/) ){

            //     document.getElementById('showHide').classList.remove('btn-info');
            //     document.getElementById('showHide').classList.add('btn-dark');

            // }
            
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
                        tr += '<td> Yeardied: </td>'+ '<td>'+ dataDeceasedFromUrn[i].year_died+'</td></tr><br>';
                        tr += "<td colspan='2' ><button class='btn btn-info btn-block' onclick='return locateMe("+dataDeceasedFromUrn[i].latitude_colum + "," + dataDeceasedFromUrn[i].longitude_colum+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td></tr>";
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
                        tr += '<td> Yeardied: </td>'+ '<td>'+ dataDeceasedFromCrypt[i].year_died+'</td></tr><br>';
                        tr += "<td colspan='2' ><button class='btn btn-info btn-block' onclick='return locateMe("+dataDeceasedFromCrypt[i].latitude_mau + "," + dataDeceasedFromCrypt[i].longitude_mau+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td></tr>";
                        tbodyCrypt.innerHTML += tr;
                  
                }//if
            }//for 
      }


      function locateOn(x,y,z){



            for (var i = 0; i < dataAllDeceased.length; i++) {
                    if (z == dataAllDeceased[i].deceased_id ){

                      newtomb = '<table class="table-striped table-hover style="overflow-y:hidden;width:450px;" >'+
                                  '<tbody>'+
                                  '<tr>'+
                                      '<td colspan="2" class="img-container" ><img src="mapping/assets/img/grave_img/' + dataAllDeceased[i].image +' " alt="grave image" class="stretchy" /></td>'+
                                  '</tr>'+
                                  '<tr>'+
                                      '<th class="popup-table-header">Deceased ID:</th>'+
                                      '<td>'+ dataAllDeceased[i].deceased_id+'</td>'+
                                  '</tr>'+
                                  '<tr>'+
                                      '<th class="popup-table-header">Lastname:</th>'+
                                      '<td>'+ dataAllDeceased[i].last_name+'</td>'+
                                  '</tr>'+
                                  '<tr>'+
                                      '<th class="popup-table-header">Firstname:</th>'+
                                      '<td>'+ dataAllDeceased[i].first_name+'</td>'+
                                  '</tr>'+
                                  '<tr>'+
                                      '<th class="popup-table-header">Middlename:</th>'+
                                      '<td>'+ dataAllDeceased[i].middle_name+'</td>'+
                                  '</tr>'+
                                  '<tr>'+
                                      '<th class="popup-table-header">Yearborn:</th>'+
                                      '<td>'+ dataAllDeceased[i].year_born+'</td>'+
                                  '</tr>'+
                                  '<tr>'+
                                      '<th class="popup-table-header">Yeardied:</th>'+
                                      '<td>'+ dataAllDeceased[i].year_died+'</td>'+
                                  '</tr>'+
                                  '<tr>'+
                                      "<td colspan='2' ><button style='font-size: 10px;width: 100px;' class='btn btn-info' onclick='return locateMe("+dataAllDeceased[i].latitude + "," + dataAllDeceased[i].longitude+")'><i class='fas fa-map-marker-alt'></i> Locate Me! </button></td>"+
                                  '</tr>'+ 
                                  '</tbody>'+   
                                '</table>';
                } //if
            } //for

        //initialize the popup;
        var popup = new L.Popup({maxHeight:350});
             //set latlng
             popup.setLatLng([x,y]);
             //set content
             popup.setContent(newtomb);
             map.setView([x,y],22, {animation:true, duration:5.8});
              //display popup
             popup.addTo(map);
        
      }


      var lotLayer = L.geoJson(plotData, {
            pointToLayer: function (feature, latlng) {
                  if (feature.properties.status == "Occupied" ) {

                        return L.marker(feature.geometry.coordinates, { icon: icons[feature.properties.status] });

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


        let gatePoint;
        for (var i=0; i < dataMapStart.length ; i++) {
            gatePoint = [ dataMapStart[i].latitude, dataMapStart[i].longitude ];
        }

       // Routing Machine
        // var gatePoint = [14.566487504935854 , 121.01717062033508];

        var myMarker = L.marker(gatePoint, { icon: gateIcon });
        myMarker.addTo(map);
        myMarker.bindPopup(
          '<b>Main Gate</b><div><img style="width:100%" src="leaflet/images/gate.png" alt="image"/></div>',
            {minWidth : 256}
          );
        
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




     // Set GPS
      var gps = new L.Control.Gps({
        //autoActive:true,
        autoCenter:true
      });//inizialize control

      gps
      .on('gps:located', function(e) {
      //  e.marker.bindPopup(e.latlng.toString()).openPopup()
            var foundLat = e.latlng.lat;
            var foundLng = e.latlng.lng;

            L.marker(e.latlng, {icon: icon}).addTo(map)
              .bindPopup("<b>You are here!</b><br>" + 
              "<button class='btn btn-info' style='font-size:10px;' onclick='return locateMeStart("+ foundLat + "," + foundLng +")'>Start from this location</buttton>", {maxHeight: 60}).openPopup();
      })
      .on('gps:disabled', function(e) {
        e.marker.closePopup()
        startWaypoint = gatePoint;
      });
      gps.addTo(map);


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
                        label: "User",
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