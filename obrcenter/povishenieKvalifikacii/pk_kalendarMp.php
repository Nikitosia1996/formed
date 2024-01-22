<?php class Calendar
{
/**  не забыть ********** КОД С ХАБРА https://snipp.ru/php/php-calendar
* Вывод календаря на один месяц.
*/
public static function  getMonth($month, $year, $events = array())
{
$months = array(
1  => 'Январь',
2  => 'Февраль',
3  => 'Март',
4  => 'Апрель',
5  => 'Май',
6  => 'Июнь',
7  => 'Июль',
8  => 'Август',
9  => 'Сентябрь',
10 => 'Октябрь',
11 => 'Ноябрь',
12 => 'Декабрь'
);

$month = intval($month);
$out = '
<style>
.calendar-item {
	width: 200px;
	display: inline-block;
	vertical-align: top;
	margin: 0 16px 20px;
	font: 14px/1.2 Arial, sans-serif;
}
.calendar-head {
	text-align: center;
	padding: 5px;
	font-weight: 700;
	font-size: 14px;
}
.calendar-item table {
	border-collapse: collapse;
	width: 100%;
}
.calendar-item th {
	font-size: 12px;
	padding: 6px 7px;
	text-align: center;
	color: #888;
	font-weight: normal;
}
.calendar-item td {
	font-size: 13px;
	padding: 6px 5px;
	text-align: center;
	border: 1px solid #ddd;
}
.calendar-item tr th:nth-child(6), .calendar-item tr th:nth-child(7),
.calendar-item tr td:nth-child(6), .calendar-item tr td:nth-child(7)  {
	color: #e65a5a;
}
.calendar-day.last {
	color: #999 !important;
}
.calendar-day.today {
	font-weight: bold;
}
.calendar-day.event {
	background: #ffe2ad;
	position: relative;
	cursor: pointer;
}
.calendar-day.event:hover .calendar-popup {
	display: block;
}
.calendar-popup {
	display: none;
	position: absolute;
	top: 40px;
	left: 0;
	min-width: 200px;
	padding: 15px;
	background: #fff;
	text-align: left;
	font-size: 13px;
	z-index: 100;
	box-shadow: 0 0 10px rgba(0,0,0,0.5);
	color: #000;
}
.calendar-popup:before {
	content: "";
	border: solid transparent;
	position: absolute;
	left: 8px;
	bottom: 100%;
	border-bottom-color: #fff;
	border-width: 9px;
	margin-left: 0;
}
</style>
<div class="calendar-item">
  <div class="calendar-head">' . $months[$month] . ' ' . $year . '</div>
  <table>
    <tr>
      <th>Пн</th>
      <th>Вт</th>
      <th>Ср</th>
      <th>Чт</th>
      <th>Пт</th>
      <th>Сб</th>
      <th>Вс</th>
    </tr>';

    $day_week = date('N', mktime(0, 0, 0, $month, 1, $year));
    $day_week--;

    $out.= '<tr>';

      for ($x = 0; $x < $day_week; $x++) {
      $out.= '<td></td>';
      }

      $days_counter = 0;
      $days_month = date('t', mktime(0, 0, 0, $month, 1, $year));

      for ($day = 1; $day <= $days_month; $day++) {
      if (date('j.n.Y') == $day . '.' . $month . '.' . $year) {
      $class = 'today';
      } elseif (time() > strtotime($day . '.' . $month . '.' . $year)) {
      $class = 'last';
      } else {
      $class = '';
      }

      $event_show = false;
      $event_text = array();
      if (!empty($events)) {
      foreach ($events as $date => $text) {
      $date = explode('.', $date);
      if (count($date) == 3) {
      $y = explode(' ', $date[2]);
      if (count($y) == 2) {
      $date[2] = $y[0];
      }

      if ($day == intval($date[0]) && $month == intval($date[1]) && $year == $date[2]) {
      $event_show = true;
      $event_text[] = $text;
      }
      } elseif (count($date) == 2) {
      if ($day == intval($date[0]) && $month == intval($date[1])) {
      $event_show = true;
      $event_text[] = $text;
      }
      } elseif ($day == intval($date[0])) {
      $event_show = true;
      $event_text[] = $text;
      }
      }
      }

      if ($event_show) {
        $out .= '<td class="calendar-day ' . $class . ' event" onclick="showModal()">' . $day;
        if (!empty($event_text)) {
        $out.= '<div class="calendar-popup">' . implode('<br>', $event_text) . '</div>';
        }
        $out.= '</td>';
      } else {
      $out.= '<td class="calendar-day ' . $class . '">' . $day . '</td>';
      }

      if ($day_week == 6) {
      $out.= '</tr>';
    if (($days_counter + 1) != $days_month) {
    $out.= '<tr>';
      }
      $day_week = -1;
      }

      $day_week++;
      $days_counter++;
      }

      $out .= '</tr></table></div>';
return $out;
}

/**
* Вывод календаря на несколько месяцев.
*/
public static function  getInterval($start, $end, $events = array())
{
$curent = explode('.', $start);
$curent[0] = intval($curent[0]);

$end = explode('.', $end);
$end[0] = intval($end[0]);

$begin = true;
$out = '<div class="calendar-wrp">';
  do {
  $out .= self::getMonth($curent[0], $curent[1], $events);

  if ($curent[0] == $end[0] && $curent[1] == $end[1]) {
  $begin = false;
  }

  $curent[0]++;
  if ($curent[0] == 13) {
  $curent[0] = 1;
  $curent[1]++;
  }
  } while ($begin == true);

  $out .= '</div>';
return $out;
}
}
/*$events = array(
  '16.01.2024'    => 'Заплатить ипотеку',
  '23.02.2023' => 'День защитника Отечества',
  '19.01.2024' => 'Сегодня',
  '01.01.2025' => 'Новый год'
);
*/

$dateEvent = mysqli_query($con, "SELECT   aa1_schedule_events.date  ,   aa1_events.name
                                       FROM   aa1_events   ,   aa1_schedule_events
                                       WHERE   aa1_schedule_events.id_events   =   aa1_events.id_events  ;");

$events = array();
while ($row = mysqli_fetch_assoc($dateEvent)) {
  $date = date('d.m.Y', strtotime($row['date']));
  $events[$date] = $row['name'];
}


echo Calendar::getInterval(date('n.Y'), date('n.Y', strtotime('+11 month')), $events);

?>


<div id="modalZapis" class="modal">
  <div class="modal-content">
    <span class="close">×</span>
    <h3>Event Registration</h3>
    <form id="eventForm">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>
      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" required><br>
      <input type="submit" value="Register">
    </form>
  </div>
</div>
<script>

  function showModal() {
    modal.style.display = "block";
  }

  // Get the modal
  var modal = document.getElementById("modalZapis");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  // Handle form submission
  document.getElementById("eventForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Get the form values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    // Do something with the form values, e.g., send them to a server for processing
    // ...
    // Close the modal
    modal.style.display = "none";
  });
  </script>
