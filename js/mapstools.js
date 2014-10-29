var map,
    geocoder,
    globalIW = null;

function initializeMap() {
  var mapOptions = {
    center: { lat: 30, lng: 8},
    zoom: 2
  };
  
  map = new google.maps.Map(document.getElementById('map_canvas'),
                                mapOptions);
  
  geocoder = new google.maps.Geocoder();
  
  google.maps.event.addListener(map, 'click', function() {
    if (globalIW != null) {
      globalIW.close();
    }
  });
}

function codeAddress(address, projects) {
  geocoder.geocode({'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      
      var
          title = projects.map(function(p) { return p.name; }).join(",\n"),
          
          contentString = '<div class=infoWindow><h4>' + address + '</h4>' + 
                          projects.map(function(p){
                            return '<p><a href="index.php?action=project&id=' + p.id + '">' + 
                                        p.name + '</a></p>';
                          }).join('') + 
                          '</div>',
      
          infoWindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 250
          }),
      
          marker = new google.maps.Marker({
            map: map, 
            position: results[0].geometry.location,
            title: title
          });
      
      google.maps.event.addListener(marker, 'click', function() {
        
        if (globalIW != null) {
          globalIW.close();
        }
        
        globalIW = infoWindow;
        globalIW.open(map, marker);
      });
      
    } else {
      setTimeout(codeAddress(address, projects), 500);
    }
  });
}

function locateProjects() {
  initializeMap();
  $.ajax({
    url: '//autresclimats-jpreynat.rhcloud.com/index.php?action=projectsLocationInfo',
    dataType: 'json',
    success: function(data) {
      for (var address in data) {
        codeAddress(address, data[address]);
      }    
    }
  });
}