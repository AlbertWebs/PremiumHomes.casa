/*---------------------------------
     //------ COUNTDOWN TIMER ------//
     ----------------------------------*/
$('#clock').countdown('2022/11/28', function (event) {
    var $this = $(this).html(event.strftime('%D <span class="font-16">Days</span> %H <span class="font-16">Hours</span> %M <span class="font-16"> Minutes</span> %S <span class="font-16"> Seconds</span>'));
});
