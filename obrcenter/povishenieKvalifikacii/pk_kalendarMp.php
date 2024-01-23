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
            .calendar-item tr th:nth-child(6),
            .calendar-item tr th:nth-child(7),
            .calendar-item tr td:nth-child(6),
            .calendar-item tr td:nth-child(7) {
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
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
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
            .calendar-wrp{
            width: 60%;
            margin-left: 22%;
            }
            #eventForm{
            width:50%;
            }
            .modalContentInside{
            display: flex;
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
        $out .= '<td class="calendar-day ' . $class . ' event" onclick="showModal(this)">' . $day;
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

$dateEvent = mysqli_query($con, "SELECT  aa1_events.id_events ,aa1_schedule_events.date  ,   aa1_events.name
                                       FROM   aa1_events   ,   aa1_schedule_events
                                       WHERE   aa1_schedule_events.id_events   =   aa1_events.id_events  ;");

$events = array();
while ($row = mysqli_fetch_assoc($dateEvent)) {
  $date = date('d.m.Y', strtotime($row['date']));
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
      <h3>Записаться на мероприятие</h3>
      <div class="modalContentInside">
      <form id="eventForm">
        <label for="name">ФИО:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="phone">Телефон:</label>
        <input type="text" id="phone" name="phone" required><br>
        <label for="event">Мероприятие:</label>
        <select onchange="selectedValue()" id="event" name="event" required>
        </select><br>
        <input type="submit" value="Записаться">
      </form>
        <div id="eventDescription" style="width: 50%;"></div>
      </div>
    </div>
    </div>
  </div>

  <script>
    function showModal(element) {
      var eventPopup = element.querySelector(".calendar-popup");
      if (eventPopup) {
        var eventOptions = Array.from(eventPopup.querySelectorAll("div")).map(function (div) {
          return div.textContent;
        });
        var eventSelect = document.getElementById("event");
        eventSelect.innerHTML = "";
        for (var i = 0; i < eventOptions.length; i++) {
          var option = document.createElement("option");
          option.value = eventOptions[i];
          option.text = eventOptions[i];
          eventSelect.appendChild(option);
        }
        modal.style.display = "block";
      }
    }

    var modal = document.getElementById("modalZapis");
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
      modal.style.display = "none";
    }
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    document.getElementById("eventForm").addEventListener("submit", function (event) {
      event.preventDefault();
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var phone = document.getElementById("phone").value;
      var event = document.getElementById("event").value;
      //
      modal.style.display = "none";
    });


    document.querySelector(".calendar-day.event").addEventListener("mouseover", function (event) {
      var eventPopup = event.target.querySelector(".calendar-popup");
      if (eventPopup) {
        eventPopup.style.display = "block";
      }
    });

    document.querySelector(".calendar-day.event").addEventListener("mouseout", function (event) {
      var eventPopup = event.target.querySelector(".calendar-popup");
      if (eventPopup) {
        eventPopup.style.display = "none";
      }
    });

    document.querySelector(".calendar-day.event").addEventListener("click", function (event) {
      var eventPopup = event.target.querySelector(".calendar-popup");
      if (eventPopup) {
        var eventOptions = eventPopup.querySelectorAll("div");
        var eventSelect = document.getElementById("event");
        eventSelect.innerHTML = "";
        for (var i = 0; i < eventOptions.length; i++) {
          var option = document.createElement("option");
          option.value = eventOptions[i].textContent;
          option.text = eventOptions[i].textContent;
          eventSelect.appendChild(option);
        }
        showModal();
      }
    });

    /*я писала это!*/

    let forDescription = document.getElementById('eventDescription');

    function selectedValue(){
      let valueSelect = document.getElementById('event');

      let selectedValue1 = valueSelect.value;
      $.ajax({
        url: "ajax/getDiscription.php",
        method: "GET",
        data: {selectedValue1:selectedValue1}
      })
        .done(function( response ) {
          alert("okey");
        });
    }


  </script>

<?php
echo '<h1 style="text-align: center; padding-bottom: 30px;">Календарь мероприятий</h1>';
echo Calendar::getInterval(date('n.Y'), date('n.Y', strtotime('+11 month')), $events);
?>
