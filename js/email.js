function sendMail() {
    var name = $('#name').val();
    var email = $('#email').val();
    var address = $('#address').val();
    var phone = $('#phone').val();
    var eventDesc = $('#eventDesc').val();
    var dateEvent = $('#dateEvent').val();
    var start = $('#start').val();
    var finish = $('#finish').val();
    var eventType = $('#eventType').val();
    var own = $('#own').val();
    var vaddress = $('#vaddress').val();
    var additionalInfo = $('#additionalInfo').val();
    var message = 'Name: ' + name + '%0D%0A'
     + 'Address: ' + address + '%0D%0A'
     + 'Phone: ' + phone + '%0D%0A'
     + 'Email: ' + email + '%0D%0A'
     + 'Event Description: ' + eventDesc + '%0D%0A'
     + 'Event Date: ' + dateEvent + '%0D%0A'
     + 'Event start time: ' + start + '%0D%0A'
     + 'Event finnish time' + finish + '%0D%0A'
     + 'Event Type: ' + eventType + '%0D%0A'
     + 'Design your own: ' + own + '%0D%0A'
     + 'Venue Adress: ' + vaddress + '%0D%0A'
     + 'Aditional information: ' + additionalInfo + '%0D%0A' ;
    window.location.href = 'mailto:shorty.les@gmail.com?subject=The subject - booking request for ' + name + ' (' + email + ')' + '&body=' + message;
};
