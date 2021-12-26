$(function(){
/*    
  var areas = [
        { value: 'Model Town - Lahore', data: 'AFN' },
	{ value: 'Gulberg - Lahore', data: 'AFN' },
	{ value: 'Defence - Lahore', data: 'AFN' },
	{ value: 'Shalimar Town - Lahore', data: 'AFN' },
	{ value: 'Samanabad Town - Lahore', data: 'AFN' },
	{ value: 'Iqbal Town - Lahore', data: 'AFN' },
	{ value: 'Lahore Cantt - Lahore', data: 'AFN' },
	{ value: 'Garden Town - Lahore', data: 'AFN' },
	
	{ value: 'Faisal Town - Lahore', data: 'AFN' },
	{ value: 'Johor Town - Lahore', data: 'AFN' },
	{ value: 'Bahria Town - Lahore', data: 'AFN' },
	{ value: 'Wapda Town - Lahore', data: 'AFN' },
	{ value: 'Shadman - Lahore', data: 'AFN' },
	{ value: 'Eden Gardens - Lahore', data: 'AFN' },
	{ value: 'TECH Society - Lahore', data: 'AFN' },
	{ value: 'PCSIR - Lahore', data: 'AFN' },
	{ value: 'State Life Housing Society - Lahore', data: 'AFN' },
	{ value: 'Canal View Housing Society - Lahore', data: 'AFN' },
	{ value: 'Punjab Housing Society - Lahore', data: 'AFN' },
  ];
  
  var services = [
{ value: 'Interior design consultancy - Interior Designer', data: 'AFN' },
{ value: 'Curtain & Drapes Making and Installation - Interior Designer', data: 'AFN' },
{ value: 'Wallpaper Supply / Installation - Interior Designer', data: 'AFN' },
{ value: 'Space Planning / Furniture Positioning - Interior Designer', data: 'AFN' },
{ value: 'Illustration / 2 D Or 3 D Animation - Interior Designer', data: 'AFN' },
{ value: 'OTHER (if any other services you offer) - Interior Designer', data: 'AFN' },



{ value: 'Plumbing repair - Construction & renovation', data: 'AFN' },
{ value: 'Plumbing installation - Construction & renovation', data: 'AFN' },
{ value: 'Water heater installation - Construction & renovation', data: 'AFN' },
{ value: 'Water heater repair - Construction & renovation', data: 'AFN' },
{ value: 'Geyser repair/installation - Construction & renovation', data: 'AFN' },
{ value: 'Water proofing repair/installation - Construction & renovation', data: 'AFN' },
{ value: 'Water tank repair/installation - Construction & renovation', data: 'AFN' },
{ value: 'Other (specify any other service you offer) - Construction & renovation', data: 'AFN' },



{ value: 'Wiring/PowerPoint - Electric & wiring', data: 'AFN' },
{ value: 'Lighting installation - Electric & wiring', data: 'AFN' },
{ value: 'Lighting repair - Electric & wiring', data: 'AFN' },
{ value: 'Fan installation - Electric & wiring', data: 'AFN' },
{ value: 'phase wiring - Electric & wiring', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Electric & wiring', data: 'AFN' },


{ value: 'Repair and maintenance - Carpenter', data: 'AFN' },
{ value: 'Installation and construction - Carpenter', data: 'AFN' },
{ value: 'Other (specify any other service you offer) - Carpenter', data: 'AFN' },


{ value: 'Tiling Repair - Renovation & improvement', data: 'AFN' },
{ value: 'Tiling Installation - Renovation & improvement', data: 'AFN' },
{ value: 'Flooring Repair / Replacement - Renovation & improvement', data: 'AFN' },
{ value: 'Plastering - Renovation & improvement', data: 'AFN' },
{ value: 'Aluminum Work - Renovation & improvement', data: 'AFN' },
{ value: 'Ironwork - Renovation & improvement', data: 'AFN' },
{ value: 'Window Tinting - Renovation & improvement', data: 'AFN' },
{ value: 'General contracting / Handyman - Renovation & improvement', data: 'AFN' },
{ value: 'Painter - Renovation & improvement', data: 'AFN' },
{ value: 'Roofing Installation - Renovation & improvement', data: 'AFN' },
{ value: 'Ceiling And Flooring Design - Renovation & improvement', data: 'AFN' },
{ value: 'Cabinetry - Renovation & improvement', data: 'AFN' },
{ value: 'Glasswork - Renovation & improvement', data: 'AFN' },
{ value: 'Flooring Installation - Renovation & improvement', data: 'AFN' },
{ value: 'Door Installation - Renovation & improvement', data: 'AFN' },
{ value: 'Concreting - Renovation & improvement', data: 'AFN' },
{ value: 'Window Installation - Renovation & improvement', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer - Renovation & improvement', data: 'AFN' },


{ value: 'Air-condition service and repair - Appliance service & repair', data: 'AFN' },
{ value: 'Home Appliance Installation - Appliance service & repair', data: 'AFN' },
{ value: 'Air-condition (installation) - Appliance service & repair', data: 'AFN' },
{ value: 'Ups repair and install - Appliance service & repair', data: 'AFN' },
{ value: 'Air-condition supply - Appliance service & repair', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Appliance service & repair', data: 'AFN' },


{ value: 'Design and planning - Architecture', data: 'AFN' },
{ value: 'AutoCAD - Architecture', data: 'AFN' },
{ value: 'Managing - Architecture', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Architecture', data: 'AFN' },



{ value: 'Gardener - Landscaping & gardening', data: 'AFN' },
{ value: 'Planning - Landscaping & gardening', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Landscaping & gardening', data: 'AFN' },



{ value: 'Car tinting - Automotive & Transport', data: 'AFN' },
{ value: 'Car wax and polish - Automotive & Transport', data: 'AFN' },
{ value: 'Car repair and services - Automotive & Transport', data: 'AFN' },
{ value: 'Car carpeting - Automotive & Transport', data: 'AFN' },
{ value: 'Oil change - Automotive & Transport', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Automotive & Transport', data: 'AFN' },


{ value: 'Movers - Movers and relocators', data: 'AFN' },
{ value: 'Local moving - Movers and relocators', data: 'AFN' },
{ value: 'Long distance moving - Movers and relocators', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Movers and relocators', data: 'AFN' },



{ value: 'Buy a car - Car rental & buying', data: 'AFN' },
{ value: 'Rent a car - Car rental & buying', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Car rental & buying', data: 'AFN' },



{ value: 'New developments - Real estate', data: 'AFN' },
{ value: 'For rent - Real estate', data: 'AFN' },
{ value: 'For sale - Real estate', data: 'AFN' },
{ value: 'Plots - Real estate', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Real estate', data: 'AFN' },


{ value: 'Engagement/Wedding/Birthday/bridal & baby shower Planning - Event planners', data: 'AFN' },
{ value: 'AV Equipment - Event planners', data: 'AFN' },
{ value: 'Tents/ marquee - Event planners', data: 'AFN' },
{ value: 'Chairs/Tables Rental - Event planners', data: 'AFN' },
{ value: 'Gifts/ bid designing/Goody bags - Event planners', data: 'AFN' },
{ value: 'Lighting - Event planners', data: 'AFN' },
{ value: 'Florist - Event planners', data: 'AFN' },
{ value: 'space rental - Event planners', data: 'AFN' },
{ value: 'Wedding Card (Printing/Design) - Event planners', data: 'AFN' },
{ value: 'DJ - Event planners', data: 'AFN' },
{ value: 'Other (specify any other service you offer) - Event planners', data: 'AFN' },



{ value: 'Custom Cakes - Food and beverage', data: 'AFN' },
{ value: 'Wedding Cakes - Food and beverage', data: 'AFN' },
{ value: 'Birthday cake - Food and beverage', data: 'AFN' },
{ value: 'Engagement cake - Food and beverage', data: 'AFN' },
{ value: 'Corporate cake - Food and beverage', data: 'AFN' },
{ value: 'Cookies & Pastries - Food and beverage', data: 'AFN' },
{ value: 'Custom cakes (tiered) - Food and beverage', data: 'AFN' },
{ value: 'Caterer (One-off) - Food and beverage', data: 'AFN' },
{ value: 'Caterer - Food and beverage', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Food and beverage', data: 'AFN' },


{ value: 'Wedding / Bridal Makeup - Saloon services', data: 'AFN' },
{ value: 'Pre Wedding Hair Styling - Saloon services', data: 'AFN' },
{ value: 'Event hair and makeup - Saloon services', data: 'AFN' },
{ value: 'Event makeup - Saloon services', data: 'AFN' },
{ value: 'Party / Formal Makeup - Saloon services', data: 'AFN' },
{ value: 'Fashion Show Makeup - Saloon services', data: 'AFN' },
{ value: 'Musical / Theatre Makeup - Saloon services', data: 'AFN' },
{ value: 'Photo / Video Shoot Hair Styling - Saloon services', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Saloon services', data: 'AFN' },



{ value: 'Tents/marquee - Office events & space rental', data: 'AFN' },
{ value: 'Band - Office events & space rental', data: 'AFN' },
{ value: 'Offline printing/design - Office events & space rental', data: 'AFN' },
{ value: 'Corporate Event planning - Office events & space rental', data: 'AFN' },
{ value: 'Space rental (Temporary Office Rental (Agency) - Office events & space rental', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Office events & space rental', data: 'AFN' },



{ value: 'Search optimization (SEO) - Web designers', data: 'AFN' },
{ value: 'Website development - Web designers', data: 'AFN' },
{ value: 'Graphic illustration - Web designers', data: 'AFN' },
{ value: 'Web hosting - Web designers', data: 'AFN' },
{ value: 'Domain registration - Web designers', data: 'AFN' },
{ value: 'Product photography - Web designers', data: 'AFN' },
{ value: 'Facebook marketing - Web designers', data: 'AFN' },
{ value: 'Animation - Web designers', data: 'AFN' },
{ value: 'Social media marketing - Web designers', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Web designers', data: 'AFN' },


{ value: 'Repair - IT & Mobile', data: 'AFN' },
{ value: 'Pin unlock - IT & Mobile', data: 'AFN' },
{ value: 'Used mobile phone - IT & Mobile', data: 'AFN' },
{ value: 'New mobile phone - IT & Mobile', data: 'AFN' },
{ value: 'Mobile phone cases - IT & Mobile', data: 'AFN' },
{ value: 'Laptop and desktop repair - IT & Mobile', data: 'AFN' },
{ value: 'Buy laptop and desktop - IT & Mobile', data: 'AFN' },
{ value: 'Printers & scanners - IT & Mobile', data: 'AFN' },
{ value: 'Wi-Fi devices - IT & Mobile', data: 'AFN' },
{ value: 'PC & Mac Hardware / Software Update - IT & Mobile', data: 'AFN' },
{ value: 'PC & Mac Hardware / Software repair - IT & Mobile', data: 'AFN' },
{ value: 'Networking - Installation / Configuration - IT & Mobile', data: 'AFN' },
{ value: 'Apple - IT & Mobile', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - IT & Mobile', data: 'AFN' },



{ value: 'Wedding photography - Photographers & videographers', data: 'AFN' },
{ value: 'Wedding videography - Photographers & videographers', data: 'AFN' },
{ value: 'Events photography - Photographers & videographers', data: 'AFN' },
{ value: 'Events videography - Photographers & videographers', data: 'AFN' },
{ value: 'Portrait/studio photography - Photographers & videographers', data: 'AFN' },
{ value: 'Commercial photography - Photographers & videographers', data: 'AFN' },
{ value: 'Family portrait photography - Photographers & videographers', data: 'AFN' },
{ value: 'Pre wedding videography - Photographers & videographers', data: 'AFN' },
{ value: 'Pre wedding photography - Photographers & videographers', data: 'AFN' },
{ value: 'Studio photography - Photographers & videographers', data: 'AFN' },
{ value: 'Maternity photography - Photographers & videographers', data: 'AFN' },
{ value: 'Baby photography - Photographers & videographers', data: 'AFN' },
{ value: 'OTHER (specify any other service you offer) - Photographers & videographers', data: 'AFN' },

  ]; */
  
  // setup autocomplete function pulling from currencies[] array
  //$('#autocomplete').autocomplete({
  //  lookup: currencies,
  //  onSelect: function (suggestion) {
  //    var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
  //    $('#outputcontent').html(thehtml);
  //  }
  //});
  
  // setup autocomplete function pulling from currencies[] array
  $('#areas').autocomplete({
    lookup: areas,
    onSelect: function (suggestiona) {
      var thehtml = '<strong> Name:</strong> ' + suggestiona.value + ' <br> <strong>Symbol:</strong> ' + suggestiona.data;
      $('#outputcontent').html(thehtml);
    }
  });
  
  // setup autocomplete function pulling from currencies[] array
  $('#services').autocomplete({
    lookup: services,
    onSelect: function (suggestionb) {
      var thehtml = '<strong> Name:</strong> ' + suggestionb.value + ' <br> <strong>Symbol:</strong> ' + suggestionb.data;
      $('#outputcontent').html(thehtml);
    }
  });
  
  

});