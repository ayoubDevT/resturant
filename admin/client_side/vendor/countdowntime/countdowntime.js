(function ($) {
    "use strict";

    function getTimeRemaining(endtime) { 
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }

    function initializeClock(id, endtime) { 
      var daysSpan = $('.days');
      var hoursSpan = $('.hours');
      var minutesSpan = $('.minutes');
      var secondsSpan = $('.seconds');

      function updateClock() { 
        var t = getTimeRemaining(endtime);

        daysSpan.html(t.days);
        hoursSpan.html(('0' + t.hours).slice(-2));
        minutesSpan.html(('0' + t.minutes).slice(-2));
        secondsSpan.html(('0' + t.seconds).slice(-2))

        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }
      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }
//made by ayoub yafouze and gharib the future programmers =)

         $.ajax({
      url:'clock.php',
      dataType:'json',
      type:'get',
      success : function(data)
      {
        $(data.clock).each(function(index, value){
           console.log(value);
           var day =value.DAY;
           var hour =value.HOUR;
           var min =value.MINUTE;
           var sec =value.SECOND;
           
           var deadline = new Date(Date.parse(new Date()) + day * 24 * 60+hour * 60 * 1000 * 60 + min * 60 * 1000); 
    initializeClock('clockdiv', deadline);
        }); 
      }
    })



    

})(jQuery);