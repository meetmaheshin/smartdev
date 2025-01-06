if(($("#country_states").attr('data-oldid')!='' && typeof($("#country_states").attr('data-oldid'))!="undefined")){
    $("#country").change();
    
}
if($("#country_state_city").attr('data-oldid')!='' && typeof($("#country_country_state_citystates").attr('data-oldid'))!="undefined"){
    $("#country_states").change();
}


var countryId = $('#country :selected').val();
var code = $('#country').find('option:selected').data('code');

getCountry(countryId);
getState(countryId);
getTimeZone(code);

// get state
$('#country').on('change',function(){
    countryId = this.value;
    code = $(this).find('option:selected').data('code');
    state ='';
    $("#country_states").html('');
    $("#country_state_city").html('');
    $('#timeZone').html('');
    getCountry(countryId);
    getState(countryId);
    getTimeZone(code);
  
});

// get city
$('#country_states').change(function(){
    var stateId = $('#country_states :selected').val();
    $("#country_state_city").html('');
    getCity(stateId);
});

function getCountry(countryId){
    console.log(countryId, " ", _token);
    $.ajax({
        type:'POST',
        url: "/fetch-country-code",
        data: {
            'countryId' : countryId,
            '_token' : _token
        },
        success: (data) => {
            if(countryId != ''){
                var countryCode = '+'+data[0].phonecode;
                $('#country_code').html(countryCode);
                getState(countryId)
            }
        }
    });
}

function getState(countryId){
    $.ajax({
        type:'POST',
        url: "/fetch-state",
        data: {
            'countryId' : countryId,
            '_token' : _token
        },
        success: (data) => {
            const countryStates = $('#country_states');
            countryStates.empty().append($('<option></option>').val('').text('Select State')); 
            $('#country_state_city').html('<option value="">Select City</option>');  
          
            $.each(data, function(key, value) {
                countryStates.append($('<option></option>').val(value.id).text(value.name));
            });
            $('#country_states [value="'+state+'"]').attr('selected', 'true');

            const oldId = countryStates.attr('data-oldid');
            if (oldId && oldId !== '') {
                countryStates.val(oldId).find(`[value="${oldId}"]`).attr('selected', 'true');
                state = jQuery("#country_states").attr('data-oldid');
            }
            if(state != ''){
                getCity(state); 
            }
        },
        error(error) {
            $(".error").html("");
            let errors = error.responseJSON.errors;
            for (let key in errors) {
                let errorDiv = $(`.error[data-error="${key}"]`);
                if (errorDiv.length) {
                    errorDiv.text(errors[key][0]);
                }else{
                    errorDiv.text('');
                }
            }
        },
    });
}

function getTimeZone(code){
    $.ajax({
        type:'POST',
        url: "/fetch-timezone-code",
        data: {
            'code' : code,
            '_token' : _token
        },
        success: (data) => {
            const timeZoneDropdown = $('#timeZone');
            timeZoneDropdown.empty().append($('<option></option>').val('').text('Select Timezone'));
            data.forEach(function(timeZone) {
                var optionValue = timeZone.zone_name + '|' + timeZone.time_start;
                timeZoneDropdown.append('<option value="' + optionValue + '">' + timeZone.zone_name + ' (' + timeZone.abbreviation + ')'+ ' (' + timeZone.time_start  +')</option>');
            });
            $('#timeZone [value="'+timezone+'"]').attr('selected', 'true');

            const oldId = timeZoneDropdown.attr('data-oldid');
            if (oldId && oldId !== '') {
                timeZoneDropdown.val(oldId).find(`[value="${oldId}"]`).attr('selected', 'true');
                timezone = jQuery("#timeZoneDropdown").attr('data-oldid');
            }


        },
        error(error) {
            $(".error").html("");
            let errors = error.responseJSON.errors;
            for (let key in errors) {
                let errorDiv = $(`.error[data-error="${key}"]`);
                if (errorDiv.length) {
                    errorDiv.text(errors[key][0]);
                }else{
                    errorDiv.text('');
                }
            }
        },
    });
}


function getCity(stateId){
    $.ajax({
        type:'POST',
        url: "/fetch-city",
        data: {
            'stateId' : stateId,
            '_token' : _token
        },
        success: (data) => {
            const countryStateCity = $('#country_state_city');
            countryStateCity.empty().append($('<option></option>').val('').text('Select City'));

            let trHTML = '';
           
            data.forEach(function(item){    
                trHTML += "<option value='"+item.id+"'>" + item.name + "</option>";
            });    
            countryStateCity.append(trHTML);
            $('#country_state_city [value="'+city+'"]').attr('selected', 'true');
           
            const oldId = countryStateCity.attr('data-oldid');
            if (oldId && oldId !== '') {
                countryStateCity.val(oldId).find(`[value="${oldId}"]`).attr('selected', 'true');
            }
        },
        error(error) {
            $(".error").html("");
            let errors = error.responseJSON.errors;
            notify.show('danger','Something went wrong');
            for (let key in errors) {
                let errorDiv = $(`.error[data-error="${key}"]`);
                if (errorDiv.length) {
                    errorDiv.text(errors[key][0]);
                }else{
                    errorDiv.text('');
                }
            }
        },
    });
}