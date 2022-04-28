  

 
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

        var defaultMarker ={
            radius: 8,
            opacity: 0,
            fill: false,
            fillOpacity: 0.0
        }

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
        }),
            geojsonOpts = {
                pointToLayer: function(feature, latlng) {
                      
                      return L.circleMarker(feature.geometry.coordinates, defaultMarker);
                }
            };

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


        map.doubleClickZoom.disable();

       
        var homeButton = L.easyButton('fa-home',function(btn,map){
            map.setView(latLng, 18);
        },'Back to Manila South Cemetery').addTo(map);



      // ICON MARKER STYLING
        var icon = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#c30b82;' class='marker-pin'></div><i class='fa fa-user' aria-hidden='true'></i>",
            iconSize: [30, 42],
            iconAnchor: [15, 42]
        });

        var destinationIcon = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#c30b82;' class='marker-pin'></div><i class='fas fa-flag'></i>",
            iconSize: [31, 46],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -45]
        });

        var gateIcon = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#c30b82;' class='marker-pin'></div><i class='fas fa-archway'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -45]
        });

        var startPinLocation = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i style='position: absolute;width: 19px;height: 17px;left: 0;right: 0;margin: 12px auto;text-align: center;' class='fas fa-thumbtack'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -45]
        });

         var Occupied = L.divIcon({
          className: 'custom-div-icon',
          html: "<div style='background-color:#000;' class='marker-pin'></div><img src='../mscv2/img/grave.svg' style='position: absolute;width: 19px; height: 17px; left: 0; right: 0; margin: 10px auto;text-align: center;' alt='Grave'>",
          iconSize: [30, 40],
          iconAnchor: [15.5, 42],
          popupAnchor: [0, -25]
      });

      var Apartment = L.divIcon({
          className: 'custom-div-icon',
          html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-building' style='position:absolute;width: 22px;font-size: 17px;left: 0;right: 0;margin: 12px auto;text-align: center;'></i>",
          iconSize: [30, 40],
          iconAnchor: [15.5, 42],
          popupAnchor: [0, -25]
      });

      var Mausoleum = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-monument' style='position:absolute;width: 22px;font-size: 17px;left: 0;right: 0;margin: 12px auto;text-align: center;'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -25]
      });

      var Columbarium = L.divIcon({
            className: 'custom-div-icon',
            html: "<div style='background-color:#000;' class='marker-pin'></div><i class='fas fa-igloo' style='position:absolute;width: 22px;font-size: 17px;left: 0;right: 0;margin: 12px auto;text-align: center;'></i>",
            iconSize: [30, 40],
            iconAnchor: [15.5, 42],
            popupAnchor: [0, -25]
        });

      var icons = {
          Occupied: Occupied,
          Apartment: Apartment,
          Mausoleum: Mausoleum,
          Columbarium: Columbarium
      }

      var Available = L.divIcon({
                        className: 'circle-available',
                        iconSize: [15,15],
                      });

      var Sold = L.divIcon({
                        className: 'circle-sold',
                        iconSize: [15,15],
                      });

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

      //define styles for circle markers
      function getDotColor(d) {
            return d === 'Available' ? '#8c510a' :
                   d === 'Sold' ? '#d73027' :
                   d === 'Occupied' ? '#762a83' :
                   d === 'null' ? '#80cdc1' :
                                              '#FF99FF';
        }

      var plotData = geoGravePlot;
      var appData = geoGraveApp;
      var mauData = geoGraveMau;
      var columData = geoGraveColum;

       var categories = {},
             category;


      /*Legend specific*/
      var info = L.control({ position: "topleft" });

      info.onAdd = function(map) {
          var table = L.DomUtil.create("table", "infoTable");
          table.innerHTML += "<tbody id='infoTbody'> "+
                              "<tr><th><h6>Hover over a circle</h6></th></tr>"+
                              "</tbody>";
          return table;
      };



      info.addTo(map);
   

      function highlightDot(e) {
          var layer = e.target;
          var type = layer.feature.properties.type;
          var mausoleumtype = layer.feature.properties.mausoleumtype;

          var infoTable = document.getElementById('infoTbody');
          infoTable.innerHTML = "";
          var tr = '<tr>';

          if (type === "Lot") {
                tr += '<td style="background-color:red;color:#fff;text-align:center;font-weight:5px;" > '+ layer.feature.properties.type +'</td></tr>';
                tr += '<td> Lot: '+ layer.feature.properties.plot_number +'</td></tr>';
                tr += '<td> Section: '+ layer.feature.properties.area_name +'</td></tr>';
                tr += '<td> Size: '+ layer.feature.properties.size +' <b> sq.M </b> </td></tr>';
                tr += '<td> Price: '+ layer.feature.properties.price +'<b> Php </b> </td></tr>';
                tr += '<td> Status: '+ layer.feature.properties.status +'</td></tr><br>';
          } else if (type === "Apartment") {
                tr += '<td style="background-color:red;color:#fff;text-align:center;font-weight:5px;" >'+ layer.feature.properties.type +'</td></tr>';
                tr += '<td> Lot: '+ layer.feature.properties.lot +'</td></tr>';
                tr += '<td> Section: '+ layer.feature.properties.area +'</td></tr>';
                tr += '<td> Size: '+ layer.feature.properties.size +' <b> sq.M </b> </td></tr>';
          }else if (type === "Mausoleum") {

                if (mausoleumtype === "Public"){
                    tr += '<td style="background-color:red;color:#fff;text-align:center;font-weight:5px;" >'+ layer.feature.properties.type +'</td></tr>';
                    tr += '<td> Lot: '+ layer.feature.properties.lot +'</td></tr>';
                    tr += '<td> Section: '+ layer.feature.properties.area +'</td></tr>';
                    tr += '<td> Size: '+ layer.feature.properties.size +' <b> sq.M </b> </td></tr>';
                    tr += '<td> Type: '+ layer.feature.properties.mausoleumtype +'</td></tr>';
                } else if (mausoleumtype === "Family"){
                    tr += '<td style="background-color:red;color:#fff;text-align:center;font-weight:5px;" >'+ layer.feature.properties.type +'</td></tr>';
                    tr += '<td> Lot: '+ layer.feature.properties.lot +'</td></tr><br>';
                    tr += '<td> Section: '+ layer.feature.properties.area +'</td></tr><br>';
                    tr += '<td> Price: '+ layer.feature.properties.price +'<b> Php </b> </td></tr>';
                    tr += '<td> Size: '+ layer.feature.properties.size +' <b> sq.M </b> </td></tr>';
                    tr += '<td> Type: '+ layer.feature.properties.mausoleumtype +'</td></tr>';
                }else if (mausoleumtype === "Public Lawn Crypts") {
                    tr += '<td style="background-color:red;color:#fff;text-align:center;font-weight:5px;" >'+ layer.feature.properties.type +'</td></tr>';
                    tr += '<td> Lot: '+ layer.feature.properties.lot +'</td></tr>';
                    tr += '<td> Section: '+ layer.feature.properties.area +'</td></tr>';
                    tr += '<td> Size: '+ layer.feature.properties.size +' <b> sq.M </b> </td></tr>';
                    tr += '<td> Type: '+ layer.feature.properties.mausoleumtype +'</td></tr>';
                }
                
          }else if (type === "Columbarium") {
                tr += '<td style="background-color:red;color:#fff;text-align:center;font-weight:5px;" >'+ layer.feature.properties.type +'</td></tr>';
                tr += '<td> Lot: '+ layer.feature.properties.lot +'</td></tr>';
                tr += '<td> Section: '+ layer.feature.properties.area +'</td></tr>';
                tr += '<td> Size: '+ layer.feature.properties.size +' <b> sq.M </b> </td></tr>';
          }

          infoTable.innerHTML += tr;
          
      };


      function onEachDot(feature, layer) {
          
          var plotid = feature.properties.plot_id;
          var plotnumber = layer.feature.properties.plot_number;
          var plotprice = feature.properties.price;
          var type = feature.properties.type;
          var apartmentid = feature.properties.apartment_id;
          var mausoleumtype = feature.properties.mausoleumtype;
          var mausoleumid = layer.feature.properties.mausoleumid;
          var columbariumid = layer.feature.properties.columbariumid;
          var id = layer.feature.properties.id;

          layer.on({
              mouseover: highlightDot,
              mouseout: resetDotHighlight,
          });

          if(type === "Lot"){ // display to add grave price
                      
                      var payment_template;

                      payment_template =  '<div class="rowplot" ><form action="charge.php" method="post" >' +
                                            'Plot Number: <input type="text" class="form-control form-resize" id="inputLotName" value='+plotnumber+' readonly/>'+
                                            '<br>'+
                                            'Plot Price: <input type="text" class="form-control form-resize" name="amount" id="inputLotPrice" value='+plotprice+' readonly/>'+
                                            '<br>'+
                                            '<input type="submit" class="form-control btn-primary form-resize" id="submit" name="submit" value="Pay with GCash">'+
                                            '<br>'+
                                            '</form></div>';

                      layer.bindPopup('<h6 class="font-resize" >'+ 'Plot ID: ' + plotid +'</h6> </br>' + payment_template, {maxHeight: 120});

                       

                      for (var i = 0; i < dataTombs.length; i++) {
                            if (plotid == dataTombs[i].plot_id){
                                  
                                  payment_template =  '<li><b> This lot has already been sold. </b></li>';
                                  layer.bindPopup('<div class="sold-control" > <ul><li><h6 class="font-resize" >'+ 'Plot Number : ' + plotid +'</h6></li><br>' + payment_template +'<ul></div>' , {maxHeight: 50});
                                  
                                  feature.properties.lot_price = dataTombs[i].plot_id;
                            }
                        }//for


                       for (var i = 0; i < dataDeceased.length; i++) {

                          if (plotid == dataDeceased[i].plot_id){
                                
                              payment_template =  '<li><b> This lot has already been Occupied. </b></li>';
                              layer.bindPopup('<div class="sold-control" > <ul><li><h6 class="font-resize" >'+ 'Plot Number : ' + plotid +'</h6></li><br>' + payment_template +'<ul></div>' , {maxHeight: 50});

                          }
                      }//for 


                      feature.properties.id = plotid;

                      category = feature.properties.lot_price;
                      // Initialize the category array if not already set.
                      if (typeof categories[category] === "undefined") {
                          categories[category] = [];
                      }
                      categories[category].push(layer);


          }else if (type === "Apartment"){

              // console.log(dataDeceasedFromAp);
              var tombContent;
              var stat;


              for (var i = 0; i < dataTombsFromAp.length; i++) {
                if ( apartmentid == dataTombsFromAp[i].apartment_id) {

                        stat = dataTombsFromAp[i].status;

                              tombContent += '<div class="rowtable" >'+
                                              '<table id="tombTable" class="table table-bordered table-striped table-hover table-responsive-sm" >'+
                                                  '<form action="charge.php" method="post">' +
                                                    '<tbody>'+
                                                        '<tr colspan="6">'+
                                                        // style="margin:-0.94rem 0 0 18px;width:100px;"
                                                            '<td id="icon-control"><span id="icon-pos" ><img src="../mscv2/img/headstonegrave.svg" height="15px" width="15px"></span><input type="text" class="form-control" id="inputLotName" value='+dataTombsFromAp[i].tomb_number+' readonly/></td>'+
                                                            '<td><input type="text" class="form-control" name="amount" id="inputLotPrice" value='+dataTombsFromAp[i].tomb_price+' readonly/></td>'
                                                            if (stat == "Available"){
                                                               tombContent += '<td><input type="submit" class="form-control btn-primary" id="submit" name="submit" value="Pay with GCash"></td>'
                                                               
                                                            } else if (stat == "Occupied") {
                                                                tombContent += '<td><input type="submit" class="form-control btn-light" name="submit" value="Occupied"></td>'
                                                            } 
                                                        '</tr>'+
                                                    '</tbody>'+
                                                  '</form>'+
                                              '</table>'+
                                            '</div>';
                }
              }
              

              layer.bindPopup('<div class="rowtable">'+
                                        '<table class="table table-bordered table-striped table-hover table-responsive-sm" >'+
                                        '<thead>'+
                                                '<tr>'+
                                                      '<th colspan="6" style="text-align: center;"> LIST OF TOMB IN APARMENT NUMBER <b>' + apartmentid +'</b></th>'+
                                                '</tr>'+
                                                '<tr>'+
                                                        '<th> Tomb Number </th>'+
                                                        '<th> Tomb Price </th>'+
                                                        '<th id="action"> Action </th>'+
                                                '</tr>'+
                                        '</thead>'+
                                        '</table>'+
                                    '</div>' + tombContent , {maxWidth: 600});
              
              feature.properties.id = apartmentid;           

          }else if (type === "Columbarium"){

                  var urnContent;
                  var stat;

                  for (var i = 0; i < dataUrnFromColum.length; i++) {
                    if ( columbariumid == dataUrnFromColum[i].columbarium_id) {

                              stat = dataUrnFromColum[i].status;

                              

                                    urnContent += '<div class="rowtable" >'+
                                                    '<table id="urnTable" class="table table-bordered table-striped table-hover table-responsive-sm" >'+
                                                        '<form action="charge.php" method="post">' +
                                                          '<tbody>'+
                                                              '<tr colspan="6">'+
                                                                  '<td id="icon-control"><span id="icon-pos" ><img src="../mscv2/img/ash.svg" height="15px" width="15px" height="15px" width="15px"></span><input type="text" class="form-control" id="inputLotName" value='+dataUrnFromColum[i].urn_number+' readonly/></td>'+
                                                                  '<td><input type="text" class="form-control" name="amount" id="inputLotPrice" value='+dataUrnFromColum[i].status+' readonly/></td>'
                                                                  if (stat == "Available"){
                                                                     urnContent += '<td><input type="submit" class="form-control btn-warning" name="submit" value="Contact Us"><a href="contactus.php"></td>'
                                                                      
                                                                  } else if (stat == "Occupied") {
                                                                      urnContent += '<td><input type="submit" class="form-control btn-secondary" name="submit" value="No Action"></td>'
                                                                  } 
                                                              '</tr>'+
                                                          '</tbody>'+
                                                        '</form>'+
                                                    '</table>'+
                                                  '</div>';
                                    
                      }
                    }
                  

                    layer.bindPopup('<div class="rowtable" >'+
                                              '<table class="table table-bordered table-striped table-hover table-responsive-sm">'+
                                              '<thead>'+
                                                      '<tr>'+
                                                            '<th colspan="6"> LIST OF URN IN COLUMBARIUM NUMBER <b>' + columbariumid +'</b></th>'+
                                                      '</tr>'+
                                                      '<tr>'+
                                                              '<th> Urn No. </th>'+
                                                              '<th> Urn Status </th>'+
                                                              '<th> Action </th>'+
                                                      '</tr>'+
                                              '</thead>'+
                                              '</table>'+
                                          '</div>' + urnContent , {maxWidth: 600});

                    feature.properties.id = columbariumid;

          }else if (type === "Mausoleum"){

                  var publicCryptContent,famCryptContent,publicLawnCryptContent;
                  var stat;

                  for (var i = 0; i < dataCryptFromMau.length; i++) {
                    if ( mausoleumid == dataCryptFromMau[i].mausoleum_id) {

                              stat = dataCryptFromMau[i].status;

                              publicCryptContent += '<div class="rowtable table-responsive-sm" >'+
                                                      '<table id="cryptTable" class="table table-bordered table-striped table-hover table-responsive-sm">'+
                                                          '<form action="charge.php" method="post">' +
                                                            '<tbody>'+
                                                                '<tr colspan="6">'+
                                                                    '<td id="icon-control"><span id="icon-pos" ><img src="../mscv2/img/coffin.svg" height="15px" width="15px"></span><input type="text" class="form-control" id="inputLotName" value='+dataCryptFromMau[i].crypt_number+' readonly/></td>'+
                                                                    '<td><input type="text" class="form-control" name="amount" id="inputLotPrice" value='+dataCryptFromMau[i].status+' readonly/></td>'
                                                                    if (stat == "Available"){
                                                                publicCryptContent += '<td><input type="submit" class="form-control btn-warning" name="submit" value="Contact Us"><a href="contactus.php"></td>'
                                                                        
                                                                    } else if (stat == "Occupied") {
                                                                publicCryptContent += '<td><input type="submit" class="form-control btn-secondary" name="submit" value="No Action"></td>'
                                                                    } 
                                                                '</tr>'+
                                                            '</tbody>'+
                                                          '</form>'+
                                                      '</table>'+
                                                    '</div>';

                              famCryptContent += '<div class="rowtable table-responsive-sm" >'+
                                                    '<table id="cryptTable" class="table table-bordered table-striped table-hover table-responsive-sm">'+
                                                        '<form action="charge.php" method="post">' +
                                                          '<tbody>'+
                                                              '<tr colspan="6">'+
                                                                  '<td id="icon-control"><span id="icon-pos" ><img src="../mscv2/img/coffin.svg" height="15px" width="15px"></span><input type="text" class="form-control" id="inputLotName" value='+dataCryptFromMau[i].crypt_number+' readonly/></td>'+
                                                                  '<td><input type="text" class="form-control" name="amount" id="inputLotPrice" value='+dataCryptFromMau[i].status+' readonly/></td>'
                                                                  if (stat == "Available"){
                                                                famCryptContent += '<td><input type="submit" class="form-control btn-warning" name="submit" value="Contact Us"></td>'
                                                                      
                                                                  } else if (stat == "Occupied") {
                                                                famCryptContent += '<td><input type="submit" class="form-control btn-secondary" name="submit" value="No Action"></td>'
                                                                  } 
                                                              '</tr>'+
                                                          '</tbody>'+
                                                        '</form>'+
                                                    '</table>'+
                                                  '</div>';

                              publicLawnCryptContent += '<div class="rowtable table-responsive-sm" >'+
                                                            '<table id="cryptTable" class="table table-bordered table-striped table-hover table-responsive-sm">'+
                                                                '<form action="charge.php" method="post">' +
                                                                  '<tbody>'+
                                                                      '<tr colspan="6">'+
                                                                          '<td id="icon-control"><span id="icon-pos" ><img src="../mscv2/img/coffin.svg" height="15px" width="15px"></span><input type="text" class="form-control" id="inputLotName" value='+dataCryptFromMau[i].crypt_number+' readonly/></td>'+
                                                                          '<td><input type="text" class="form-control" name="amount" id="inputLotPrice" value='+dataCryptFromMau[i].status+' readonly/></td>'
                                                                          if (stat == "Available"){
                                                                publicLawnCryptContent += '<td><input type="submit" class="form-control btn-warning" name="submit" value="Contact Admin"></td>'
                                                                              
                                                                          } else if (stat == "Occupied") {
                                                                publicLawnCryptContent += '<td><input type="submit" class="form-control btn-secondary" name="submit" value="No Action"></td>'
                                                                          } 
                                                                      '</tr>'+
                                                                  '</tbody>'+
                                                                '</form>'+
                                                            '</table>'+
                                                          '</div>';
                      }
                    }
                    
                    if (mausoleumtype === "Public") {
                            
                            layer.bindPopup('<div class="rowtable table-responsive-sm" >'+
                                              '<table class="table table-bordered table-striped table-hover table-responsive-sm" >'+
                                              '<thead>'+
                                                      '<tr>'+
                                                            '<th colspan="6" > LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' MAUSOLEUM</th>'+
                                                      '</tr>'+
                                                      '<tr>'+
                                                              '<th> Crypt Number </th>'+
                                                              '<th> Crypt Price </th>'+
                                                              '<th> Action </th>'+
                                                      '</tr>'+
                                              '</thead>'+
                                              '</table>'+
                                    '</div>' + publicCryptContent , {maxWidth: 600});

                    } else if (mausoleumtype === "Family") {

                            layer.bindPopup('<div class="rowtable table-responsive-sm" >'+
                                              '<table class="table table-bordered table-striped table-hover table-responsive-sm" >'+
                                              '<thead>'+
                                                      '<tr>'+
                                                            '<th colspan="6" > LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' MAUSOLEUM</th>'+
                                                      '</tr>'+
                                                      '<tr>'+
                                                              '<th> Crypt Number </th>'+
                                                              '<th> Crypt Price </th>'+
                                                              '<th> Action </th>'+
                                                      '</tr>'+
                                              '</thead>'+
                                              '</table>'+
                                    '</div>' + famCryptContent , {maxWidth: 600});

                     } else if (mausoleumtype === "Public Lawn Crypts") {

                            layer.bindPopup('<div class="rowtable table-responsive-sm" >'+
                                              '<table class="table table-bordered table-striped table-hover table-responsive-sm" >'+
                                              '<thead>'+
                                                      '<tr>'+
                                                            '<th colspan="6" > LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' MAUSOLEUM</th>'+
                                                      '</tr>'+
                                                      '<tr>'+
                                                              '<th> Crypt Number </th>'+
                                                              '<th> Crypt Price </th>'+
                                                              '<th> Action </th>'+
                                                      '</tr>'+
                                              '</thead>'+
                                              '</table>'+
                                    '</div>' + publicLawnCryptContent , {maxWidth: 600});

                     } else {

                             layer.bindPopup('<div class="rowtable table-responsive-sm" >'+
                                              '<table class="table table-bordered table-striped table-hover table-responsive-sm" >'+
                                              '<thead>'+
                                                      '<tr>'+
                                                            '<th colspan="6" > LIST OF CRYPT IN '+mausoleumtype.toUpperCase()+' MAUSOLEUM</th>'+
                                                      '</tr>'+
                                                      '<tr>'+
                                                              '<th> Crypt Number </th>'+
                                                              '<th> Crypt Price </th>'+
                                                              '<th> Action </th>'+
                                                      '</tr>'+
                                              '</thead>'+
                                              '</table>'+
                                    '</div>' + famCryptContent , {maxWidth: 600});
                     }

                    feature.properties.id = mausoleumid;

                    

          }//end of nested if


          
  
      }; // onEachDot


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


      var status;
      function resetDotHighlight(e) {
          var layer = e.target;        
          var type = layer.feature.properties.type;
          var plotid = layer.feature.properties.plot_id;
          status = layer.feature.properties.lotstatus;

            if (type === "Lot"){
             
                if (status === 'Available'){
                    var infoTable = document.getElementById('infoTbody');
                    infoTable.innerHTML = "";
                    var tr = '<tr>';

                    tr += '<th><h6> Hover over a circle </h6></th></tr>';

                    infoTable.innerHTML += tr;
                    return;
                }
                else if (status === 'Sold'){
                    var infoTable = document.getElementById('infoTbody');
                    infoTable.innerHTML = "";
                    var tr = '<tr>';

                    tr += '<th><h6> Hover over a circle </h6></th></tr>';

                    infoTable.innerHTML += tr;

                    return;
            
                }else{
                    var infoTable = document.getElementById('infoTbody');
                    infoTable.innerHTML = "";
                    var tr = '<tr>';

                    tr += '<th><h6> Hover over a circle </h6></th></tr>';

                    infoTable.innerHTML += tr;
                    return;
                }

            }

          var infoTable = document.getElementById('infoTbody');
          infoTable.innerHTML = "";
          var tr = '<tr>';

          tr += '<th><h6> Hover over a circle </h6></th></tr>';
          infoTable.innerHTML += tr;

      };


      var appLayer = L.geoJson(appData, {
            pointToLayer: function (feature, latlng) {
                for (var i = 0; i < dataGraveApp.length; i++) {
                    return L.marker(feature.geometry.coordinates, { icon: icons[dataGraveApp[i]['type']] });
                }
            },
            onEachFeature: onEachDot
      }).addTo(apartment);


      var mauLayer = L.geoJson(mauData, {
            pointToLayer: function (feature, latlng) {
              
                for (var i = 0; i < dataGraveMau.length; i++) {
                    return L.marker(feature.geometry.coordinates, { icon: icons[dataGraveMau[i]['type']] });
                }
            },
            onEachFeature: onEachDot
      }).addTo(mausoleum);

      var columLayer = L.geoJson(columData, {
            pointToLayer: function (feature, latlng) {
               
                for (var i = 0; i < dataGraveColum.length; i++) {     
                    return L.marker(feature.geometry.coordinates, { icon: icons[dataGraveColum[i]['type']] });
                }


            },
           onEachFeature: onEachDot
      }).addTo(columbarium);


      var poiLayers = L.layerGroup([
          L.geoJson(plotData, geojsonOpts),
          L.geoJson(appData, geojsonOpts),
          L.geoJson(columData, geojsonOpts),
          L.geoJson(mauData,geojsonOpts)
      ]).addTo(map);


      var overlaysObj = {},
        categoryName,
        categoryArray,
        categoryLG;

        for (categoryName in categories) {
            categoryArray = categories[categoryName];
            categoryLG = L.layerGroup(categoryArray);
            categoryLG.categoryName = categoryName;
            overlaysObj[categoryName] = categoryLG;
        }

      // Create an empty LayerGroup that will be used to emulate adding / removing all categories.
        var allPointsLG = L.layerGroup();
        overlaysObj["All Graves"] = poiLayers;

      // Control menu
        L.control.layers(baseLayers, overlays, overlaysObj).addTo(map);

      var searchControl = new L.control.search({
            layer: poiLayers,
            initial: false,
            propertyName: 'id',
            textPlaceholder: 'Search for the Plot ID',
            buildTip: function(text, val) {
                var ttype = val.layer.feature.properties.type;
                var sstatus = val.layer.feature.properties.status;
                var pprice = val.layer.feature.properties.price;
                var pid = val.layer.feature.properties.id;
                var mautype = val.layer.feature.properties.mausoleumtype;
                
                if(ttype === "Lot"){
                    return '<a href="#" class="'+ttype+'">'+ ' Plot Number: <b> ' +pid+' </b>  Price: <b> '+pprice+'</b> Type: <b>' + ttype + '</b> Status: <b>' + sstatus + '</b></a> ';
                } else if (ttype === "Apartment"){
                    return '<a href="#" class="'+ttype+'">'+ ' Apartment No: <b> ' +pid+' </b> Type: <b>' + ttype + '</b> </a> ';
                } else if (ttype === "Mausoleum"){
                    if (mautype === "Family"){
                        return '<a href="#" class="'+ttype+'">'+ ' Mausoleum No: <b> ' +pid+' </b>  Price: <b> '+pprice+'</b> Type: <b>' + mautype + '</b> </a> ';
                    } else {
                        return '<a href="#" class="'+ttype+'">'+ ' Mausoleum No: <b> ' +pid+' </b>  Type: <b>' + mautype + '</b> </a> ';
                    }
                    
                } else if (ttype === "Columbarium"){
                    // return '<a href="#" class="'+ttype+'">'+ ' Plot Number: <b> ' +pid+' </b> Type: <b>' + ttype + '</b> </a> ';
                }
                
                
            }
      });

       searchControl.on('search:locationfound', function(e) {
          
          e.layer.setStyle({fillColor: '#8c510a', color: '#8c510a'});
          if(e.layer._popup) {
                e.layer.openPopup();
                e.layer._zoom;
          }
           

      }).on('search:collapsed', function(e) {

          poiLayers.eachLayer(function(layer) { //restore feature color
              poiLayers.resetStyle(layer);
          }); 
      });

      map.addControl( searchControl );  //inizialize search control


        let gatePoint;
      // Map creation start
        for (var i=0; i < dataMapStart.length ; i++) {
            gatePoint = [ dataMapStart[i].latitude, dataMapStart[i].longitude ];
        }
        var myMarker = L.marker(gatePoint, { icon: startPinLocation });
        myMarker.addTo(map);


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
                        label: "Started Location",
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

