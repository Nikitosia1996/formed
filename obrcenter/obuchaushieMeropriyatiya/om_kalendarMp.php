<?php

class Calendar
{
  /**
   * Вывод календаря на один месяц.
   */
  public static function getMonth($month, $year, $events = array())
  {
    $months = array(
      1 => 'Январь',
      2 => 'Февраль',
      3 => 'Март',
      4 => 'Апрель',
      5 => 'Май',
      6 => 'Июнь',
      7 => 'Июль',
      8 => 'Август',
      9 => 'Сентябрь',
      10 => 'Октябрь',
      11 => 'Ноябрь',
      12 => 'Декабрь'
    );

    $month = intval($month);
    $out = '
        <link rel="stylesheet" href="dist/css/obrCenter.css">

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

    $out .= '<tr>';

    for ($x = 0; $x < $day_week; $x++) {
      $out .= '<td></td>';
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
        $date = sprintf('%02d.%02d.%04d', $day, $month, $year);
        if (array_key_exists($date, $events)) {
          $event_show = true;
          $event_text = $events[$date];
        }
      }

      if ($event_show) {
        $date = sprintf('%02d.%02d.%04d', $day, $month, $year);
        $out .= '<td class="calendar-day ' . $class . ' event "onclick="showModal(this)" id = "' . $date . '">' . $day;
        if (!empty($event_text)) {
          $out .= '<div class="calendar-popup">';
          foreach ($event_text as $text) {
            $out .= '<div>' . $text . '</div>';
          }
          $out .= '</div>';
        }
        $out .= '</td>';
      } else {
        $out .= '<td class="calendar-day ' . $class . '">' . $day . '</td>';
      }

      if ($day_week == 6) {
        $out .= '</tr>';
        if (($days_counter + 1) != $days_month) {
          $out .= '<tr>';
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
  public static function getInterval($start, $end, $events = array())
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

$dateEvent = mysqli_query($con, "SELECT  aa1_events.id_events ,aa1_events.date_kursa  ,   aa1_events.name
                                       FROM   aa1_events WHERE id_blog=2;");

$events = array();
while ($row = mysqli_fetch_assoc($dateEvent)) {
  $date = date('d.m.Y', strtotime($row['date_kursa']));
  if (!array_key_exists($date, $events)) {
    $events[$date] = array();
  }
  $events[$date][] = $row['name'];
  $eventsId = $row['id_events'];
}

?>

<div id="modalZapis" class="modal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <span class="close">×</span>

      <div class="modalContentInside">
        <div class = "formContainer">
          <form id="eventForm">
            <h3 style="margin-left:17%; font-weight: bold; margin-bottom: 2.5rem;">Записаться на мероприятие</h3>
            <input placeholder="ФИО" spellcheck="true" class="form-control" type="text" id="name" name="name" required><br>
            <!--        <label for="email">Email:</label>-->
            <input placeholder="Email"  spellcheck="true" type="email" id="email" class="form-control" name="email" required><br>
            <!--        <label for="phone">Телефон:</label>-->
            <input placeholder="Телефон" spellcheck="true" type="text" id="phone" class="form-control" name="phone" required><br>
            <div style="display:block;">
              <label style="  margin-left: 20%; font-size: 20px;" for="event">Мероприятие</label><br>
              <select onchange="selectedValue()" id="event" name="event" required>
              </select></div><br>
            <label style="  margin-left: 20%; font-size: 20px;" for="event" >Дата мероприятия</label><br>
            <input  type="date" id="dateMP" class="form-control" name="date" disabled="true"><br>
            <input id = "buttonZps" class="btn btn-primary" type="submit"  value="Записаться" onclick="validateForm()">
          </form>
        </div>
        <div id="eventDescription" ></div>
      </div>
    </div>
  </div>
</div>



<?php

echo '<h1 style="text-align: center; padding-bottom: 30px;">Календарь мероприятий</h1>';
echo Calendar::getInterval(date('n.Y'), date('n.Y', strtotime('+11 month')), $events);
echo'<script src = "dist/js/obrJs.js"> </script>';

?>
