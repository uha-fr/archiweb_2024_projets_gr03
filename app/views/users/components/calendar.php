<div class="relative z-0 flex flex-col min-w-0 p-3 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">

<div id='calendar'></div>

</div>
<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'fr'
        });
        calendar.render();
      });

    </script>