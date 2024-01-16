<style>.select-css {
    display: block;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 700;
    color: #444;
    line-height: 1.3;
    padding: .6em 1.4em .5em .8em; width: 100%;
    max-width: 100%;
    box-sizing: border-box;
    margin: 0;
    border: 1px solid #aaa;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
    border-radius: .5em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'), linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
    background-repeat: no-repeat, repeat;
    background-position: right .7em top 50%, 0 0;
    background-size: .65em auto, 100%;
  }
  .select-css::-ms-expand { display: none; }
  .select-css:hover { border-color: #888; }
  .select-css:focus { border-color: #aaa;
    box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
    box-shadow: 0 0 0 3px -moz-mac-focusring;
    color: #222;
    outline: none;
  }
  .select-css option { font-weight:normal; }
  *[dir="rtl"] .select-css, :root:lang(ar) .select-css, :root:lang(iw) .select-css {
    background-position: left .7em top 50%, 0 0;
    padding: .6em .8em .5em 1.4em;
  }
</style>
<div class="col-12">
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Медицинские калькуляторы</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">

    <select id="first"   class="select-css" data-show-subtext="true" data-live-search="true" onchange="qwe(this)">
      <option value="imt">Калькулятор индекса массы тела (ИМТ)</option>
      <option value="skf">Скорость клубочковой фильтрации (СКФ)</option>
      <option value="zesp">Затраты энергии в состоянии покоя (ЗЭСП)</option>
      <option value="anionr">Анионная разница</option>
      <option value="infuz">Расчет скорости инфузии препарата через линеомат (скорость титрования)</option>
      <option value="depress">Гериатрическая шкала депрессии</option>
      <option value="alcohol">Калькулятор алкоголя в крови</option>
      <option value="qt">Расчет корригированного QT</option>
      <option value="klireatinin">Клиренс креатинина (измеренный)</option>
      <option value="cha2vasc">Оценка фибрилляции предсердий по шкале CHA(2)DS(2)-VASc для определения риска инсульта</option>
      <option value="comaglaz">Шкала комы Глазго</option>
      <option value="gepatitc">Вероятность цирроза при гепатите С</option>
      <option value="datarodov">Определение срока беременности и даты родов</option>
      <option value="davlenie">Среднее артериальное давление</option>

    </select>


    <!--заполинили таб имт контентом ---------------------- -->
    <div class="tab-content">
      <!--заполняем имт ---------------------- -->
      <div class="tab-pane fade show active" id="imt" role="tabpanel" aria-labelledby="bmi-tab">
        <div class ="textimt">
          <br></br>
          <p>
          На данной странице с помощью калькулятора ИМТ вы можете рассчитать свой показатель. Достаточно ввести вес и рост в поля ниже.
          </p>
          <p>Индекс Массы Тела рассчитывается по формуле: ИМТ= вес (кг) / рост (м)2. </p>
        </div>
        <form id="bmiForm">
          <div class="form-group">
            <label for="height">Рост (см):</label>
            <input type="number" class="form-control" id="heightimt" required>
          </div>
          <div class="form-group">
            <label for="weight">Вес (кг):</label>
            <input type="number" class="form-control" id="weightimt" required>
          </div>
          <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>
        <div id="bmiResult" style="display: none;">
          <h2>Ваш индекс массы тела (ИМТ): <span id="bmiValue"></span></h2>
          <p id="bmiCategory"></p>
        </div>
        <br></br>
        <div class ="textimt"> <p>
            Расчёт индекса массы тела определяет в каком соотношении находятся вес и рост, калькулятор подходит для взрослых мужчин и женщин.</p>
            <p>В таблице ниже можно посмотреть разъяснение показателей согласно рекомендациям Всемирной Организации Здравоохранения (ВОЗ): </p>
        </div>

        <table border="1" bordercolor="" width="50%" bgcolor="">
          <tr>
            <td style = "text-align: center"> Индекс массы тела </td>
            <td style = "text-align: center"> Соответствие между массой человека и его ростом </td>
          </tr>
          <tr>
            <td> 16 и менее </td>
            <td> Выраженный дефицит массы тела </td>
          </tr>
          <tr>
            <td> 16-18,5 </td>
            <td> Недостаточная (дефицит) масса тела </td>
          </tr>
          <tr>
            <td> 18,5-25 </td>
            <td> Норма </td>
          </tr>
          <tr>
            <td> 25-30 </td>
            <td> Избыточная масса тела (предожирение) </td>
          </tr>
          <tr>
            <td> 30-35 </td>
            <td> Ожирение первой степени </td>
          </tr>
          <tr>
            <td> 35-40 </td>
            <td> Ожирение второй степени </td>
          </tr>
          <tr>
            <td> 40 и более </td>
            <td> Ожирение третьей степени (морбидное) </td>
          </tr>
        </table>


        <br></br>
        <div class ="textimt"> <p>
            В частности, результат ИМТ является одним из факторов для выполнения бариатрической операции. </p>
          <p>Но стоит помнить, что результат носит рекомендательный характер. </p>
          <p>Перед принятием решения необходима консультация бариатрического хирурга.</p>
        </div>

      </div>
      <!--закрыли имт ---------------------- -->










      <!--открыли гепатит с ---------------------- -->
      <div class="tab-pane fade" id="gepatitc" role="tabpanel" aria-labelledby="gepatitc-tab">
        <form id="gepatitc-form">
          <br>
          <br>
          <div class ="textimt"> <p>
              Оценка вероятности цирроза при гепатите С по нескольким показателям
            </p>
           <p> Используемые уравнения <p>
            <p>LogOddsLok = (1.26 * АСТ / АЛТ) + (5.27 * МНО) - (0.0089 * Тромбоциты) - 5.56<p>
            <p>ИндексЛока = e(LogOddsLok) / (1 + e(LogOddsLok))<p>
            <p>GUCI = (АСТ / ВерхняяНормаАСТ) * МНО * 100 / Тромбоциты<p>
            <p>APRI = (АСТ / ВерхняяНормаАСТ) * (100 / Тромбоциты)<p>
            <p>FIB4 = Возраст * АСТ / (Тромбоциты * sqr(АЛТ))<p>
          </div>

          <label for="agec">Возраст (лет):</label><br>
          <input type="number" id="agec" name="agec" required><br><br>

          <label for="trombocit">Тромбоциты (10^9/L):</label> <br>
          <input type="number" id="trombocit" name="trombocit"><br>

          <label for="alte"> АЛТ (U/L):</label> <br>
          <input type="number" id="alte" name="alte"><br>

          <label for="ast"> АСТ (U/L):</label> <br>
          <input type="number" id="ast" name="ast"><br>

          <label for="verhast">Верхняя норма АСТ (U/L):</label> <br>
          <input type="number" id="verhast" name="verhast"><br>

          <label for="mno">МНО (ratio):</label> <br>
          <input type="number" id="mno" name="mno"><br><br>

          <button  type="submit" class="btn btn-primary">Рассчитать</button><br><br>
        </form>

        <div id="gepatitc-result"></div>
        <div id="gepatitc-result1"></div>
        <div id="gepatitc-result2"></div>
        <div id="gepatitc-result3"></div>
        <div id="gepatitc-result4"></div>





        <h2>Интерпретация индекса Лока</h2>

        <table border="1" bordercolor="" width="50%" bgcolor="">

          <tr>
            <td>Фракция < 0.2:	Цирроз печени менее вероятен</td>
          </tr>
          <tr>
            <td>Фракция >= 0.2 И <= 0.5:	Неточный</td>
          </tr>
          <tr>
            <td>Фракция > 0.5:	Цирроз печени более вероятен</td>

          </tr>

        </table>



        <h2>Интерпретация GUCI</h2>
        <table border="1" bordercolor="" width="50%" bgcolor="">

          <tr>
            <td>Баллы < 1:	Цирроз печени менее вероятен</td>
          </tr>
          <tr>
            <td>Баллы >= 1:	Цирроз печени более вероятен</td>
          </tr>


        </table>

        <h2>Интерпретация APRI</h2>
        <table border="1" bordercolor="" width="50%" bgcolor="">

          <tr>
            <td>Баллы <= 0.5:	Значительный фиброз или цирроз печени менее вероятен</td>
          </tr>
          <tr>
            <td>Баллы > 0.5 И <= 1:	Значительный фиброз неточный, цирроз печени менее вероятен</td>
          </tr>
          <tr>
            <td>Баллы > 1 И <= 1.5:	Значительный фиброз более вероятен, цирроз неточный</td>

          </tr>
          <tr>
            <td>Баллы > 1.5 И <= 2:	Значительный фиброз более вероятен, но цирроз неточный</td>

          </tr>
          <tr>
            <td>Баллы > 2:	Значительный фиброз и цирроз печени более вероятен</td>

          </tr>

        </table>

        <h2>Интерпретация FIB-4</h2>
        <table border="1" bordercolor="" width="50%" bgcolor="">

          <tr>
            <td>Баллы < 1.45:	Цирроз печени менее вероятен</td>
          </tr>
          <tr>
            <td>Баллы >= 1.45 И <= 3.25:	Неточный</td>
          </tr>
          <tr>
            <td>Баллы > 3.25:	Цирроз печени более вероятен</td>

          </tr>

        </table>

<br>
        <br>
        <p>Примечания
        <p>Тромбоциты — это количество тромбоцитов. АЛТ — аланинаминотрансфераза. АСТ — аспартатаминотрансфераза и МНО — международное нормализованное отношение (показатель протромбинового времени).</p>
        <p> Балл по шкале дискриминантной оценки цирроза печени (Cirrhosis Discriminant Scores, CDS)> 7 имеет высокую прогностическую ценность в отношении прогноза цирроза печени со специфичностью > 90 %</p>
        <p>В исследовании Лока при индексе Лока< 0,2 было упущено только 7,8 % пациентов с циррозом, а при индексе Лока> 0,5 было неверно диагностировано 14,8 % пациентов с циррозом.</p>
        <p>В исследовании Islam при использовании индекса цирроза печени Гётеборгского университета (Goteborg University Cirrhosis Index, GUCI) пороговое значение 1,0 имело чувствительность 80 % и специфичность 78 %.</p>
        <p>При использовании индекса Ваи соотношения АСТ к числу тромбоцитов (AST to Platelet Ratio Index, APRI) пороговые значения помогают прогнозировать как значительный фиброз, так и цирроз печени.</p>
        <p>При использовании индекса FIB 4 диагностические пороговые значения представляют прогностическую ценность отрицательного результата 94,7 % с чувствительностью 73,4 %, а прогностическую ценность положительного результата 82,1 % со специфичностью 98,2 %.</p>






      </div>
      <!--закрыли гепатит с ---------------------- -->


      <!--открыли precice ---------------------- -->
      <div class="tab-pane fade" id="klireatinin" role="tabpanel" aria-labelledby="klireatinin-tab">
        <form id="clearance-form">
          <br>
          <br>
          <div class ="textimt"> <p>
              Используемые уравнения:</p>
              <p>Клиренс креатинина = Креатинин мочи * Объем суточн. мочи / Креатинин сыворотки / 1440
            </p>

          </div>
          <label for="urine-creatinine">Креатинин мочи (mg/dL):</label> <br>
          <input type="number" id="urine-creatinine" name="urine-creatinine"><br>

          <label for="serum-creatinine">Креатинин сыворотки (mg/dL):</label><br>
          <input type="number" id="serum-creatinine" name="serum-creatinine"><br>

          <label for="urine-volume">Объем суточной мочи (mL):</label><br>
          <input type="number" id="urine-volume" name="urine-volume"><br><br>

          <button  type="submit" class="btn btn-primary">Рассчитать</button><br><br>
        </form>

        <div id="clearance-result"></div>
      </div>
      <!--закрыли precice ---------------------- -->





      <!--открыли дату родов ---------------------- -->
      <div class="tab-pane fade" id="datarodov" role="tabpanel" aria-labelledby="datarodov-tab">
        <form id="datarodovForm">
          <br>
          <label for="lastMenstruation">Дата последней менструации:</label><br>
          <input type="date" id="lastMenstruation" required><br><br>
          <br>
          <label for="cycleLength">Длина менструального цикла (в днях):</label><br>
          <input type="number" id="cycleLength" required><br><br>
          <br>
          <button type="submit" class="btn btn-primary">Рассчитать</button><br><br>
        </form>

        <div id="datarodov-result"></div>
        <div id="datarodov-result1"></div>
        <div id="datarodov-result2"></div>

<br>
        <p>В среднем срок срок вынашивания плода у человека длится 266 дней. Как легко посчитать это вовсе не 40 недель, а 38.</p>
        <p>Цифра длительности беременности в 40 недель возникла из первого способа подсчета - акушерского, когда к дате первого дня последней менструации прибавляется 280 дней (получается как раз 40 недель) - акушерский срок беременности.</p>
        <p> Беременность начинается со дня оплодотворения яйцеклетки, которое может произойти во время овуляции (выхода яйцеклетки из яичника), происходящей в середине менструального цикла. </p>
        <p> Срок родов высчитывается прибавлением к этой дате 266 дней (38 недель) - эмбриональный срок беременности. </p>
        <p>Но так как дату оплодотворения яйцеклетки определить сложно - она зависит от многих факторов (даты овуляции, скорости продвижения сперматозоидов к яйцеклетке), в отличии от дня начала месячных, более употребимым является расчет акушерского срока беременности и, соответственно, даты родов.</p>
        <p>Кроме описанных выше способов существует еще несколько.</p>
        <p> По дате первого шевеления плода - к дате первого шевеления ребенка прибавляется 20 недель. Способ в основном актуален для первородящих женщин. </p>
        <p> Точность способа невысока, помимо того, что женщины с непервой беременностью ощущают шевеление раньше, за шевеление плода беременные женщины часто принимают перистальтические движения кишечника.</p>
        <p>По УЗИ. Определение даты родов по УЗИ наиболее точно до 12 недель беременности, когда размер плодного яйца строго коррелирует со сроком беременности. В последующем размеры плода и его частей тела подвержены индивидуальным особенностям.</p>
        <p>По объективным признакам беременности - величине матки, объему живота, высоте стояния дна матки, длине плода и размерам его головки. Метод также не вполне точен, так как многое зависит от состояния здоровья матери, плода и их индивидуальных особенностей.</p>
      </div>
      <!--закрыли дату родов ---------------------- -->






      <!--открыли Среднее арт давление ---------------------- -->
      <div class="tab-pane fade" id="davlenie" role="tabpanel" aria-labelledby="davlenie-tab">

        <p>Артериальное давление это давление оказываемое кровью на стенки сосудов. Систолическое давление - давление крови в момент сокращения сердца (систолы), диастолическое в момент его расслабления (диастолы).</p>
        <p>Кроме понятий систолического и диастолического артериального давления, существует такое понятие как среднее артериальное давление.</p>
        <p>Средним артериальным давлением называется давление во время всех фаз сердечного цикла. Нормальное его значение колеблется в пределах 70-110 мм.рт.ст.</p>
        <form id="pressureForm">
          <div>
            <label for="systolic">Систолическое давление (верхнее)</label><br>
            <input type="number" id="systolic" required><br><br>
          </div>
          <div>
            <label for="diastolic">Диастолическое давление (нижнее)</label><br>
            <input type="number" id="diastolic" required><br><br>
          </div>
          <button type="button" class="btn btn-primary" onclick="calculatePressure()">Рассчитать</button><br><br>
        </form>

        <div id="result"></div>
        <br><br>
        <p>Формула для расчета среднего артериального давления</p>
        <p>(САД) = 1/3 * Систолическое АД + 2/3 * Диастолическое АД.</p>
        <p>Как видно по формуле расчета САД не является средним арифметическим между систолическим и диастолическим АД, а расчитывается исходя из того, что 2/3 сердечного цикла приходится на фазу диастолы.</p>
        <p>Ориентируясь на среднее артериальное давление можно более полно о судить о снабжении тканей кровью, чем по показателям систолического и диастолического АД.</p>
        <p>В тоже время при некоторых патологических состояниях, САД, оставаясь в нормальном диапазоне (70-110) может вводить в заблуждение.</p>
        <p>Например, такая ситуация наблюдается при кардиогенном шоке - низкий сердечный выброс и высокое периферическое сопротивление приводят при расчете к приемлемым цифрам среднего артериального давления.</p>

    </div>
      <!--закрыли Среднее арт давление ---------------------- -->





      <!--заполинили таб имт контентом ---------------------- -->
      <!--заполняем скф ---------------------- -->
      <div class="tab-pane fade" id="skf" role="tabpanel" aria-labelledby="text-tab">
        <div class ="textskf">
          <br></br>
          <p>Скорость клубочковой фильтрации (СКФ) – количество крови очищаемой почками за определенный период времени.</p>
          <p> СКФ является основным показателем для оценки функции почек и стадии почечной недостаточности.</p>
          <p>Для расчёта СКФ используются формулы (алгоритмы) MDRD, CKD-EPI</p>
          <p>186 * СерумКреатинин^-1.154 * возраст^-0.203 * КоэфициентРасы </p>
          <p>'Белый': 1,
            'Черный': 1.159,
            'Азиат': 0.813,
            'Другой': 1.018</p>
        </div>

        <label for="age">Возраст (лет):</label><br>
        <input type="number" id="ageskf" name="age" required><br><br>

        <label for="gender">Пол:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Мужской</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Женский</label><br><br>

        <label for="serumCreatinine">Креатинин в сыворотке крови (мг/дл):</label><br>
        <input type="number" step="0.01" id="serumCreatinineskf" name="serumCreatinine" required><br><br>

        <label for="race">Раса:</label><br>
        <select id="raceskf" name="race" required>
          <option value="white">Белая</option>
          <option value="black">Афроамериканская</option>
          <option value="asian">Азиатская</option>
          <option value="other">Другая</option>
        </select><br><br>

        <button type="submit" id="calculate" class="btn btn-primary">Рассчитать</button>
        <div id="result"></div>


        <table border="1" bordercolor="" width="50%" bgcolor="">
          <tr>
            <td style = "text-align: center"> Стадия </td>
            <td style = "text-align: center"> СКФ (мл/мин/1.73м2) </td>
            <td style = "text-align: center"> Описание </td>
          </tr>
          <tr>
            <td> C1 </td>
            <td> В> 90 </td>
            <td> Нормальный уровень СКФ </td>
          </tr>
          <tr>
            <td> C2 </td>
            <td> 60 - 90 </td>
            <td> Незначительно сниженный уровень СКФ </td>
          </tr>
          <tr>
            <td> C3a </td>
            <td> 45 - 60 </td>
            <td> Умеренно сниженный уровень СКФ </td>
          </tr>
          <tr>
            <td> C3b </td>
            <td> 30 - 45 </td>
            <td> Существенно сниженный уровень СКФ </td>
          </tr>
          <tr>
            <td> C4 </td>
            <td> 15 - 30 </td>
            <td> Резко сниженный уровень СКФ </td>
          </tr>
          <tr>
            <td> C5 </td>
            <td> < 15 </td>
            <td> Терминальная почечная недостаточность </td>
          </tr>
        </table>

        <div class ="textskf">
          <br></br>
          <p>Если результат ниже 60 мл/мин/1,73 м2, то это говорит о наличии патологий, что является причиной для постановки диагноза хронической болезни почек (ХБП).</p>
          <p>Повышение СКФ отмечается при развитии сахарного диабета, гипертонической болезни, а также появления нефротического синдрома. </p>
          <p>Снижение свидетельствует о том, что почки не выполняют свои функции в полном объеме, что может быть вызвано сердечной недостаточностью, дегидратацией или шоком. </p>
          <p> Если у пациента пиелонефрит, то каналы нефронов поражаются и СКФ снижается позднее. </p>
          <p> Если пациент беременна, имеет ожирение или истощение, а также заболевания, связанные с работой почек, формула определения СКФ может давать недостоверные результаты. </p>
          <p> В данном случае нужно определять клиренс креатинина по пробе Реберга. </p>

        </div>
      </div>
      <!--закрыли скф ---------------------- -->



      <!--создали зесп ---------------------- -->
      <div class="tab-pane fade" id="zesp" role="tabpanel" aria-labelledby="text-tab">

        <div class ="textzesp">
          <br></br>
          <p> Формула Миффлина-Сан Жеора – это одна из самых последних формул расчета калорий для оптимального похудения или сохранения нормального веса.</p>
          <p> Она была выведена в 2005 году и все чаще стала заменять классическую формулу Харриса-Бенедикта.</p>
          <p> Формула Миффлина-Сан Жеора, разработанная группой американских врачей-диетологов под руководством докторов Миффлина и Сан Жеора</p>
          <p> существует в двух вариантах – упрощенном и доработанном и выдает необходимое количество килокалорий (ккал) в сутки для каждого конкретного человека.</p>

          <p>Используемые уравнения</p>
          <p>REE = (10 * Вес) + (6.25 * Рост) - (5 * Возраст) + Пол (для мужчин - 5, для женщин - 161); --- (БОВ * суточный расход энергии)</p>
        </div>

        <div id="calculationForm" class ="zespform">
          <label for="height">Рост (см):</label>
          <input type="number" class="form-control" id="heightzesp" required>
          <br>
          <label for="weight">Вес (кг):</label>
          <input type="number" class="form-control" id="weightzesp" required>
          <br>

          <label for="age">Возраст (лет):</label><br>
          <input type="number" id="agezesp" name="age" required>
          <br></br>
          <label for="gender">Пол:</label> <br>
          <select class = "selzesp" id="genderzesp" required><br>
            <option value="male">Мужской</option>
            <option value="female">Женский</option>
          </select>
          </br>


          <label for="activity">Уровень физической нагрузки:</label><br>
          <select id="activityzesp" name="activityz" required>
            <option value="basework">Основной (базовый) уровень обмена веществ</option>
            <option value="minnagr">Минимальные нагрузки (сидячая работа)</option>
            <option value="3razweek">Необременительные тренировки 3 раза в неделю</option>
            <option value="5razweek">Тренировки 5 раз в неделю (работа средней тяжести)</option>
            <option value="5intensrazweek">Интенсивные тренировки 5 раз в неделю</option>
            <option value="evday">Ежедневные тренировки</option>
            <option value="evintday2">Ежедневные интенсивные тренировки или занятия 2 раза в день</option>
            <option value="hardwork2day">Тяжелая физическая работа или интенсивные тренировки 2 раза в день</option>
          </select><br><br>
        <br></br>
          <button class="btn btn-primary" type="button" onclick="calculateREE()">Рассчитать</button>
        </form>
        <div id="resultzesp"></div>
<br>
          <p>Не забывайте, что данная формула актуальна только для лиц в возрасте от 13 до 80 лет.</p></br>

        </div>
      </div>
      <!--закрыли зесп ---------------------- -->







      <!--открыли анион ---------------------- -->
      <div class="tab-pane fade" id="anionr" role="tabpanel" aria-labelledby="anionr-tab">
        <div class ="textanionr">
          <br></br>
          <p>Используемые уравнения: АР = Na (Натрий) - (Cl (Хлор) + HCO3 (Бикарбонат))
          </p>
        </div>
        <form id="anionrForm">
          <div class="form-group">
            <label for="natrii">Na (Натрий mEq/L):</label><br>
            <input type="number" step="0.01" id="natriianionr" name="natrii" required><br><br>
          </div>
          <div class="form-group">
            <label for="clor">Cl (Хлор mEq/L):</label><br>
            <input type="number" step="0.01" id="cloranion" name="clor" required onchange="checkClorValue(this)"><br>
            <span id="clor-error" style="color: red;"></span><br>
          </div>

          <div class="form-group">
            <label for="bicarbonat">HCO3 (Бикарбонат mEq/L):</label><br>
            <input type="number" step="0.01" id="bicarbonatanionr" name="bicarbonat" required><br><br>
          </div>

          <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>
        <div id="AnionrResult" style="display: none;">
          <h2>Результат: <span id="AnionrValue"></span></h2>
        </div>
        <br></br>

      </div>

      <!--закрыли анион ---------------------- -->


      <!--открыли скорости инфузии---------------------- -->
      <div class="tab-pane fade" id="infuz" role="tabpanel" aria-labelledby="infuz-tab">
        <div class ="textinfuz">
          <div>
            <br>
            </br>
          <p><strong>Об этом калькуляторе</strong></p>
          <p>Этот калькулятор позволяет расчитать скорость инфузии препарата через линеомат (скорость титрования в мл/час) при известном количестве препарата в милиграммах в известном объеме раствора. Также необходимо указать вес пациента и дозировку, определяемую либо в мкг*кг/мин, либо в мл/час.</p>
          <p>Например, 4% раствор дофамина объемом 5 мл содержит 200 мг чистого вещества (4% - 40 мг, 40*5=200). Ампула препарата (5 мл) разведена физ. раствором до объема 20 мл. Соответственно, 200 мг - это количество препарата, а 20 мл - общий объем раствора. Вес пациента - 70 кг и используется почечная дозировка дофамина (2 мкг*кг/час). Таким образом, скорость введения составит 0,84 мл/час.</p>
          <p>Скорость в мл/час автоматически пересчитывается в скорость в каплях в минуту при указании дозировки препарата в микрограммах на килограмм в минуту. При этом в рачет берется то, что в 1 милилитр содержит 20 капель.</p>
          <p>Если скорость в каплях в минуту менее 1 капли в минуту, калькулятор предлагает выбрать меньшее разведение и перейти с капельного введения на введение с помощью линеомата.</p>
          <p>Также калькулятор позволяет рассчитать скорость инфузии в мкг*кг/мин при известной дозировке препарата в мл/час.</p>
          <p>Для того, чтобы использовать калькулятор при расчете доз препаратов, не зависящих от веса, в поле "Вес пациента" введите значение равное 1.</p>
          <p><strong>Формула</strong></p>
          <p>Скорость инфузии = масса тела пациента (кг) * доза препарата (мкг/кг*мин) / (количество препарата в инфузионном растворе (мг) * (1 000/общий объем инфузионного раствора))*60</p>
        </div>
        </div>
        <form id="infuzForm">

          <div class="form-group">
            <label for="kolpr" title="Содержание препарата в милиграммах в общем объеме раствора"> Количество препарата, мг: </label><br>
            <input type="number" step="0.01" id="kolprinfuz" name="kolpr" required><br><br>
          </div>

          <div class="form-group">
            <label for="obem" >Общий объем раствора, мл:</label><br>
            <input type="number" step="0.01" id="obeminfuz" name="obem" required><br><br>
          </div>

          <div class="form-group">
            <label for="vespac" title="Если вы применяете препарат, для расчета дозирования которого не используется вес тела, поставьте в этом поле цифру 1">Вес пациента, кг:</label><br>
            <input type="number" step="0.01" id="vespacinfuz" name="vespac" required><br><br>
          </div>

          <div class="form-group">
            <label for="dozamin">Дозировка в мкг*кг/мин:</label><br>
            <input type="number" step="0.01" id="dozamininfuz" name="dozamin" required><br><br>
          </div>


          <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>
        <div id="infuzResult" style="display: none;">
          <h2>Скорость инфузии (мкг*кг/мин): <span id="infuzValue"></span></h2>

        </div>
        <br></br>
        <div class ="textinfuz">
        <div>
          <h3>Диапазон доз и начальные скорости введения некоторых распространенных препаратов для пациента с массой тела 70 кг при разведении до общего объема раствора равным 20 мл</h3>
        </div>


          <table border="1" bordercolor="" width="50%" bgcolor="">
            <tr>
              <th>Препарат</th>
              <th>Диапазон доз, (мкг/кг*мин)</th>
              <th>Количество препарата в 1 мл стандартной формы выпуска, мг</th>
              <th>Скорость, мл/час</th>
            </tr>
            <tr>
              <td>Адреналин (гидрохлорид)</td>
              <td>0,05-0,4</td>
              <td>1 (0.1% - 1,0)</td>
              <td>4.2</td>
            </tr>
            <tr>
              <td>Норадреналин (левонор)</td>
              <td>0,03-1</td>
              <td>1 (0.1% - 1,0)</td>
              <td>2.5</td>
            </tr>
            <tr>
              <td>Дофамин</td>
              <td>1-20</td>
              <td>200 (4% - 5,0)</td>
              <td>0.4</td>
            </tr>
            <tr>
              <td>Нитроглицерин</td>
              <td>10-400 мкг/мин</td>
              <td>20 (1% - 2,0)</td>
              <td>0.6</td>
            </tr>
            <tr>
              <td>Фенилэфрин (мезатон)</td>
              <td>0.3-2</td>
              <td>10 (1% - 1,0)</td>
              <td>2.5</td>
            </tr>
          </table>

          <div>
            <h3>Краткие замечания по описанным препаратам:</h3>
          </div>
          <div>
            <p><strong>Дофамин</strong></p>
            <p>Если скорость инфузии > 20—30 мкг/кг/мин, дофамин целесообразно заменить другим сосудосуживающим средством (адреналин, норадреналин).</p>
            <p>Действие на гемодинамику зависит от дозы:</p>
            <ul>
              <li>Низкая доза: 1—5 мкг/кг/мин, увеличивает почечный кровоток и диурез.</li>
              <li>Средняя доза: 5—15 мкг/кг/мин, увеличивает почечный кровоток, ЧСС, сократимость миокарда и сердечный выброс.</li>
              <li>Высокая доза: > 15 мкг/кг/мин, оказывает сосудосуживающее действие.</li>
            </ul>
          </div>
          <div>
            <p><strong>Фенилэфрин</strong></p>
            <p>Можно вводить болюсно по 25 - 100 мкг. Через несколько часов развивается тахифилаксия.</p>
          </div>

      </div>

    </div>
      <!--закрыли скорости инфузии---------------------- -->





      <!--открыли скорости депрессию---------------------- -->
      <div class="tab-pane fade" id="depress" role="tabpanel" aria-labelledby="depress-tab">
        <br>
        </br>
         <h4>Выберите лучший ответ, описывающий то, как вы чувствовали себя на прошлой неделе:</h2>
        <form id="depression-form">
          <h5>1. Вы в основном довольны своей жизнью?</h5>
          <input type="radio" name="hap1" value="0"> Да
          <input type="radio" name="hap1" value="1"> Нет
          <br>
          </br>
          <h5>2. Вы прекратили заниматься многими видами деятельности и хобби?</h5>
          <input type="radio" name="hap2" value="1"> Да
          <input type="radio" name="hap2" value="0"> Нет
          <br>
          </br>
          <h5>3.Вы считаете, что ваша жизнь пуста?</h5>
          <input type="radio" name="hap3" value="1"> Да
          <input type="radio" name="hap3" value="0"> Нет
          <br>
          </br>
          <h5>4. Часто скучаете?</h5>
          <input type="radio" name="hap4" value="1"> Да
          <input type="radio" name="hap4" value="0"> Нет
          <br>
          </br>
          <h5>5. Вы в хорошем настроении большую часть времени?</h5>
          <input type="radio" name="hap5" value="0"> Да
          <input type="radio" name="hap5" value="1"> Нет
          <br>
          </br>
          <h5>6. Боитесь ли вы, что с вами случится что-то плохое?</h5>
          <input type="radio" name="hap6" value="1"> Да
          <input type="radio" name="hap6" value="0"> Нет
          <br>
          </br>
          <h5>7. Вы чувствуете себя счастливым большую часть времени?</h5>
          <input type="radio" name="hap7" value="0"> Да
          <input type="radio" name="hap7" value="1"> Нет
          <br>
          </br>
          <h5>8. Вы часто чувствуете себя беспомощным?</h5>
          <input type="radio" name="hap8" value="1"> Да
          <input type="radio" name="hap8" value="0"> Нет
          <br>
          </br>
          <h5>9. Вы предпочитаете оставаться дома, чем гулять и заниматься чем-то новым?</h5>
          <input type="radio" name="hap9" value="1"> Да
          <input type="radio" name="hap9" value="0"> Нет
          <br>
          </br>
          <h5>10. Считаете ли вы, что у вас больше проблем с памятью, чем у большинства людей?</h5>
          <input type="radio" name="hap10" value="1"> Да
          <input type="radio" name="hap10" value="0"> Нет
          <br>
          </br>
          <h5>11. Как вы думаете, замечательно, ли быть живым сейчас?</h5>
          <input type="radio" name="hap11" value="0"> Да
          <input type="radio" name="hap11" value="1"> Нет
          <br>
          </br>
          <h5>12. Считаете ли вы свое существование довольно бесполезным?</h5>
          <input type="radio" name="hap12" value="1"> Да
          <input type="radio" name="hap12" value="0"> Нет
          <br>
          </br>
          <h5>13. Считаете ли вы себя полным энергии?</h5>
          <input type="radio" name="hap13" value="0"> Да
          <input type="radio" name="hap13" value="1"> Нет
          <br>
          </br>
          <h5>14. Вы считаете, что ваша ситуация безнадежна?</h5>
          <input type="radio" name="hap14" value="1"> Да
          <input type="radio" name="hap14" value="0"> Нет
          <br>
          </br>
          <h5>15. Вы думаете, что большинству людей лучше, чем вам?</h5>
          <input type="radio" name="hap15" value="1"> Да
          <input type="radio" name="hap15" value="0"> Нет


          <br><br>
          <input type="button"  class="btn btn-primary" value="Рассчитать" onclick="calculateDepression()">
        </form>
           <br>
           </br>

        <div id="resultdepress"></div>
           <br></br>

           <table border="1" bordercolor="" width="50%" bgcolor="">

             <tr>
               <td>10 - 15 баллов:	Депрессия, скорее всего, присутствует</td>
             </tr>
             <tr>
               <td>6 - 9 баллов:	Депрессия возможна</td>
             </tr>
             <tr>
               <td>0 - 5 баллов:	Депрессии, скорее всего, нет</td>

             </tr>

           </table>
      </div>



      <!--закрыли  депрессию---------------------- -->









      <!--открыли кому глазго---------------------- -->
      <div class="tab-pane fade" id="comaglaz" role="tabpanel" aria-labelledby="comaglaz-tab">
        <br>
        </br>
        <div class ="textimt" style = "line-height: 5px">
          <br></br>
          <p>
            Шкала комы Глазго (ШКГ, Глазго – шкала тяжести комы, The Glasgow Coma Scale, GCS) – </p>
          <p> шкала для оценки степени нарушения сознания и комы детей старше 4-х лет и взрослых.</p>
          <p>  Шкала была опубликована в 1974 году профессорами нейрохирургии Грэхэмом Тиздейлом</p>
          <p> и Б. Дж. Дженнетт Института Неврологических наук Университета Глазго.
          </p>
        </div>
        <br>
        <div class ="textimt" style = "line-height: 5px">
          <p>Шкала состоит из трёх тестов, оценивающих реакцию открывания глаз (E),</p>
          <p>а также речевые (V) и двигательные (M) реакции. За каждый тест начисляется определённое количество баллов.</p>
          <p> В тесте открывания глаз от 1 до 4, в тесте речевых реакций от 1 до 5, а в тесте на двигательные реакции от 1 до 6 баллов.</p>
          <p>Таким образом, минимальное количество баллов – 3 (глубокая кома), максимальное – 15 (ясное сознание).</p>
        </div>


         <h2> Шкала комы Глазго</h2><br>
          <form id="comaglaz-form">
            <h5>1. Открывание глаз</h5>
            <input type="radio" name="hap1" value="4"> произвольное <br>
            <input type="radio" name="hap1" value="3"> реакция на голос<br>
            <input type="radio" name="hap1" value="2"> реакция на боль<br>
            <input type="radio" name="hap1" value="1"> отсутствует<br>
            <br>
            </br>
            <h5>2. Речевая реакция</h5>
            <input type="radio" name="hap2" value="5"> больной ориентирован, быстрый и правильный ответ на заданный вопрос<br>
            <input type="radio" name="hap2" value="4"> больной дезориентирован, спутанная речь<br>
            <input type="radio" name="hap2" value="3"> словесная окрошка, ответ по смыслу не соответствует вопросу<br>
            <input type="radio" name="hap2" value="2"> нечленораздельные звуки в ответ на заданный вопрос<br>
            <input type="radio" name="hap2" value="1"> отсутствие речи<br>
            <br>
            </br>
            <h5>3. Двигательная реакция</h5>
            <input type="radio" name="hap3" value="6"> выполнение движений по команде<br>
            <input type="radio" name="hap3" value="5"> целенаправленное движение в ответ на болевое раздражение (отталкивание)<br>
            <input type="radio" name="hap3" value="4"> отдёргивание конечности в ответ на болевое раздражение<br>
            <input type="radio" name="hap3" value="3"> патологическое сгибание в ответ на болевое раздражение<br>
            <input type="radio" name="hap3" value="2"> патологическое разгибание в ответ на болевое раздражение<br>
            <input type="radio" name="hap3" value="1"> отсутствие движений<br>
            <br><br>
            <input type="button"  class="btn btn-primary" value="Рассчитать" onclick="calculateComaGlazgo()">
          </form>
          <br>
          </br>

          <div id="resultGlazgo"></div>
          <br></br>

          <table border="1" bordercolor="" width="50%" bgcolor="">

            <tr>
              <td>Сознание ясное</td>
              <td>15 баллов</td>
            </tr>
            <tr>
              <td>Умеренное оглушение</td>
              <td>14 - 13 баллов</td>
            </tr>
            <tr>
              <td>Глубокое оглушение</td>
              <td>12 - 11 баллов</td>
            </tr>
            <tr>
              <td>Сопор</td>
              <td>10 - баллов</td>
            </tr>
            <tr>
              <td>Умеренная кома</td>
              <td>7 - 6 баллов</td>
            </tr>
            <tr>
              <td>Глубокая кома</td>
              <td>5 - 4 баллов</td>
            </tr>
            <tr>
              <td>Терминальная кома, смерть мозга</td>
              <td>3 балла</td>
            </tr>

          </table>
        <br><br>
        <div class ="textimt" style = "line-height: 5px">
          <p>Дополнительные сведения:</p>
          <p>Корреляция между показателями шкалы комы Глазго и летальностью высоко достоверна.</p>
          <p>Количество баллов от 3 до 8 соответсвует летальности 60%;</p>
          <p>от 9 до 12 – 2%;</p>
          <p> 15 балов – около 0 (Д. Р. Штульман, Н. Н. Яхно, 1995)</p>
          <p>Переключение в режим "ребенок" целесообразно производить при возрасте ребенка до 4 - х лет.</p>
        </div>
        <br>

        <h2> Шкала комы Глазго для детей младше 4-х лет</h2><br>
        <form id="comaglaz1-form">
          <h5>1. Открывание глаз</h5>
          <input type="radio" name="hap11" value="4"> произвольное <br>
          <input type="radio" name="hap11" value="3"> реакция на голос<br>
          <input type="radio" name="hap11" value="2"> реакция на боль<br>
          <input type="radio" name="hap11" value="1"> отсутствует<br>
          <br>
          </br>
          <h5>2. Речевая реакция</h5>
          <input type="radio" name="hap22" value="5"> ребёнок улыбается, ориентируется на звук, следит за объектами, интерактивен<br>
          <input type="radio" name="hap22" value="4"> ребёнка при плаче можно успокоить, интерактивность неполноценная<br>
          <input type="radio" name="hap22" value="3"> при плаче успокаивается, но ненадолго, стонет<br>
          <input type="radio" name="hap22" value="2"> не успокаивается при плаче, беспокоен<br>
          <input type="radio" name="hap22" value="1"> плач и интерактивность отсутствуют<br>
          <br>
          </br>
          <h5>3. Двигательная реакция</h5>
          <input type="radio" name="hap33" value="6"> выполнение движений по команде<br>
          <input type="radio" name="hap33" value="5"> целенаправленное движение в ответ на болевое раздражение (отталкивание)<br>
          <input type="radio" name="hap33" value="4"> отдёргивание конечности в ответ на болевое раздражение<br>
          <input type="radio" name="hap33" value="3"> патологическое сгибание в ответ на болевое раздражение<br>
          <input type="radio" name="hap33" value="2"> патологическое разгибание в ответ на болевое раздражение<br>
          <input type="radio" name="hap33" value="1"> отсутствие движений<br>
          <br><br>
          <input type="button"  class="btn btn-primary" value="Рассчитать" onclick="calculateComaGlazgo1()">
        </form>
        <br>

        <div id="resultGlazgo1"></div>
        <br>
        <br></br>

        <table border="1" bordercolor="" width="50%" bgcolor="">

          <tr>
            <td>Сознание ясное</td>
            <td>15 баллов</td>
          </tr>
          <tr>
            <td>Умеренное оглушение</td>
            <td>14 - 13 баллов</td>
          </tr>
          <tr>
            <td>Глубокое оглушение</td>
            <td>12 - 11 баллов</td>
          </tr>
          <tr>
            <td>Сопор</td>
            <td>10 - баллов</td>
          </tr>
          <tr>
            <td>Умеренная кома</td>
            <td>7 - 6 баллов</td>
          </tr>
          <tr>
            <td>Глубокая кома</td>
            <td>5 - 4 баллов</td>
          </tr>
          <tr>
            <td>Терминальная кома, смерть мозга</td>
            <td>3 балла</td>
          </tr>

        </table>
        <br><br>

      </div>



      <!--закрыли  кому глазго---------------------- -->











      <!--открыли cha2---------------------- -->
      <div class="tab-pane fade" id="cha2vasc" role="tabpanel" aria-labelledby="cha2vasc-tab">
        <br>
        </br>
        <br>

          <form id="cha2-form">
            <h5> Клинические признаки</h5>
            <label for="cb_ischemic">
              <input type="checkbox" id="cb_ischemic" name="clinical_signs" value="1">
              Ишемическая болезнь сердца или дисфункция левого желудочка(1 балл)
            </label>
            <br>

            <label for="cb_hypertension">
              <input type="checkbox" id="cb_hypertension" name="clinical_signs" value="1">
              Гипертензия(1 балл)
            </label>
            <br>

            <label for="cb_diabetes">
              <input type="checkbox" id="cb_diabetes" name="clinical_signs" value="1">
              Сахарный диабет(1 балл)
            </label>
            <br>

            <label for="cb_stroke">
              <input type="checkbox" id="cb_stroke" name="clinical_signs" value="2">
              Наличие в анамнезе инсульта, ТИА или тромбоэмболии(2 балла)
            </label>
            <br>

            <label for="cb_vascular_disease">
              <input type="checkbox" id="cb_vascular_disease" name="clinical_signs" value="1">
              Наличие в анамнезе заболеваний сосудистой системы (1 балл)
            </label>
            <br>
            <br>
            </br>
            <h5>2. Возраст</h5>
            <input type="radio" name="hap2" value="1"> 65-74 (1 балл) <br>
            <input type="radio" name="hap2" value="0"> ≥ 75 лет (2 балла(ов)) <br>
            <br>

            <h5>3. Пол</h5>
            <input type="radio" name="hap3" value="1"> Женщины (1 балл) <br>
            <input type="radio" name="hap3" value="0"> Мужчины (0 балла(ов))
            <br><br>
            <input type="button"  class="btn btn-primary" value="Рассчитать" onclick="calculatecha2()">
          </form>
          <br>
          </br>

          <div id="resultcha2"></div>
          <br></br>

          <table border="1" bordercolor="" width="50%" bgcolor="">

            <tr>
              <td>0 балла(ов):	0% в год</td>
            </tr>
            <tr>
              <td>1 балла(ов):	1.3% в год</td>
            </tr>
            <tr>
              <td>2 балла(ов):	2.2% в год</td>
            </tr>
            <tr>
              <td>3 балла(ов):	3.2% в год</td>
            </tr>
            <tr>
              <td>4 балла(ов):	4% в год</td>
            </tr>
            <tr>
              <td>5 балла(ов):	6.7% в год</td>
            </tr>
            <tr>
              <td>6 балла(ов):	9.8% в год</td>
            </tr>
            <tr>
              <td>7 балла(ов):	9.6% в год</td>
            </tr>
            <tr>
              <td>8 балла(ов):	6.7% в год</td>
            </tr>
            <tr>
              <td>9 балла(ов):	15.2% в год</td>
            </tr>

          </table>
      </div>



      <!--закрыли  депрессию---------------------- -->









      <!--открыли  алко---------------------- -->
      <div class="tab-pane fade" id="alcohol" role="tabpanel" aria-labelledby="alcohol-tab">
        <br>
        </br>
        <form>
          <label>Пол:</label> <br>
          <input type="radio" name="ger" value="male" checked> Мужской
          <input type="radio" name="ger" value="female"> Женский
          <br>
          <label>Вес (кг):</label><br>
          <input type="number" id="vess" required><br>
          <br>
          <label>Количество выпитого алкоголя (в мл):</label><br>
          <input type="number" id="alc" required><br>
          <br>
          <label>Процент алкоголя в напитке:</label><br>
          <input type="number" id="alcoholPercentage" step="0.1" required><br>
          <br>

          <input type="submit" class="btn btn-primary" value="Рассчитать" onclick="calculateBloodAlcoholLevel(event)">
        </form>
        <br>
        </br>
        <p id="results"></p>
      </div>
      <!--закрыли алко ---------------------- -->



      <!--открыли qt ---------------------- -->
      <div class="tab-pane fade" id="qt" role="tabpanel" aria-labelledby="text-tab">

        <form id="qtCalcForm">
          <div class="form-group">
            <label for="hr">ЧСС:</label>
            <input type="number" name="hr" id="hr" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="qtq">Показатель QT:</label>
            <input type="number" name="qtq" id="qtq" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>
        <br>
        </br>
        <p id="result11"></p>
        <p id="result12"></p>
        <p id="result13"></p>
        <p id="result14"></p>
        <p id="result15"></p>
        <p id="result16"></p>
      </div>
      <!--закрыли qt ---------------------- -->



  </div>
  </div>
</div>
</div>


<style>
  #results {
    margin-top: 30px;
  }

  #results p {
    margin-bottom: 10px;
  }

  #results span {
    font-weight: bold;
  }
  #result {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    /* height: 100vh; */
    /* background-color: lightblue; */
    color: black;
    font-size: 24px;
    padding: 20px;
  }
  </style>


<style>


.zespform {
margin-bottom: 20px;
}

.labzesp {
font-weight: bold;
}

.selzesp {
width: 15%;
padding: 5px;
margin-bottom: 10px;
}

.butzesp {
display: block;
width: 15%;
padding: 10px;
background-color: #007bff;
color: white;
border: none;
cursor: pointer;
}

#resultzesp {
text-align: center;
font-size: 18px;
font-weight: bold;
}


#resultdepress
{
  text-align: left;
  font-size: 18px;
  font-weight: bold;
}
</style>

<style>
  .form-control{
    width:15%;
  }
  </style>


<style>
  .selectpicker {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
    font-size: 20px;
  }

  .selectpicker option {
    font-family: Arial, sans-serif;
    font-size: 20px;
  }
</style>

<style>
  .selectpicker {
    width: 300px; /* ширина в пикселях */
    /* или */
    width: 100%; /* ширина на всю доступную ширину */
  }
</style>

<script>
  function qwe(select) {
    $(select).addClass("animate__bounceIn"); // применение анимации bounceIn из библиотеки Animate.css
  }
</script>
<!--открыли clirens ---------------------- -->
<script>
  document.getElementById('clearance-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Отменяем перезагрузку страницы при отправке формы

    // Получаем значения из полей формы
    var urineCreatinine = parseFloat(document.getElementById('urine-creatinine').value);
    var serumCreatinine = parseFloat(document.getElementById('serum-creatinine').value);
    var urineVolume = parseFloat(document.getElementById('urine-volume').value);

    // Рассчитываем клиренс креатинина
    var clearance = (urineCreatinine * urineVolume) / (serumCreatinine * 1440);

    // Выводим результат на страницу
    document.getElementById('clearance-result').textContent = 'Клиренс креатинина: ' + clearance.toFixed(2) + ' mL/min';

    // // Очищаем поля формы
    // document.getElementById('urine-creatinine').value = '';
    // document.getElementById('serum-creatinine').value = '';
    // document.getElementById('urine-volume').value = '';
  });

  </script>
<!--закрыли precise ---------------------- -->



<!--считаем QT ---------------------- -->
<script>
  document.getElementById("qtCalcForm").addEventListener("submit", function(event) {
    event.preventDefault();
    let hr = document.getElementById("hr").value;
    let qtq = document.getElementById("qtq").value;

    // Расчет корректированного QT

    let rr= 60/hr;
    let rr11= (60/hr)*1000;

    let qtq1 = qtq / Math.sqrt(rr); //bazzet

    let qtq2 = qtq / (3 * Math.cbrt(rr));// friderica

    let qtq3 = qtq + (0.154 * (1 - (rr / 1000))) * 1000; //saga

    let qtq4 = qtq + 1.75 * (hr - 60);//hogi

    let qtq5 = qtq * (120 + hr) / 180; // rauthaji


    // Вывод результатов
    document.getElementById("result11").innerHTML = "Корректированный QT по  Формуле Bazett: " + qtq1.toFixed(2) + " мсек";
    document.getElementById("result16").innerHTML = "Интервал RR: " + rr11.toFixed(2) + " мсек";


  });
  </script>

<!--считаем скф ---------------------- -->
  <script>
    document.getElementById('calculate').addEventListener('click', function() {
      var age = parseFloat(document.getElementById('ageskf').value);
      var gender = document.querySelector('input[name="gender"]:checked').value;
      var serumCreatinine = parseFloat(document.getElementById('serumCreatinineskf').value);
      var race = document.getElementById('raceskf').value;

      var raceCoefficients = {
        'white': 1,
        'black': 1.159,
        'asian': 0.813,
        'other': 1.018
      };

      var multiplier = 186 * Math.pow(serumCreatinine, -1.154) * Math.pow(age, -0.203) * raceCoefficients[race];
      var result;

      if (gender === 'male') {
        result = multiplier;
      } else {
        result = multiplier * 0.742;
      }

      document.getElementById('result').innerHTML = "Скорость клубочковой фильтрации: " + result.toFixed(2) + " мл/мин/1.73 м²";
    });
  </script>


<!--считаем imt ---------------------- -->
<script>

  document.getElementById('bmiForm').addEventListener('submit', function(event) {
    event.preventDefault(); // форму не отправляем!!!

    // получаем вес и кг из формы
    var weight = parseFloat(document.getElementById('weightimt').value);
    var height = parseFloat(document.getElementById('heightimt').value);

    // считаем имт
    var bmi = weight / ((height/100) ** 2);

    // Выводим результат
    document.getElementById('bmiValue').innerHTML = bmi.toFixed(2);

    // выводим категорию ИМТ
    var bmiCategory = '';
    if (bmi < 18.5) {
      bmiCategory = 'Недостаточный вес';
    } else if (bmi >= 18.5 && bmi < 25) {
      bmiCategory = 'Нормальный вес';
    } else if (bmi >= 25 && bmi < 30) {
      bmiCategory = 'Избыточный вес';
    } else {
      bmiCategory = 'Ожирение';
    }
    document.getElementById('bmiCategory').innerHTML = "Категория: " + bmiCategory;

    // показываем результат
    document.getElementById('bmiResult').style.display = 'block';
  });


  let itemMenu = document.querySelector("[href='/index.php?calculatorimt']");
  itemMenu.style = "color: #148A8A;";

</script>

<!--считаем zesp ---------------------- -->
<script>
  function calculateREE() {
    var weight = document.getElementById('weightzesp').value;
    var height = document.getElementById('heightzesp').value;
    var age = document.getElementById('agezesp').value;
    var gender = document.getElementById('genderzesp').value;
    var activity = document.getElementById('activityzesp').value;
    var activityCoefficients = {
      'basework': 1,
      'minnagr': 1.2,
      '3razweek': 1.375,
      '5razweek': 1.4625,
      '5intensrazweek': 1.550,
      'evday': 1.6375,
      'evintday2': 1.725,
      'hardwork2day': 1.9
    };

    var REE = (10 * weight) + (6.25 * height) - (5 * age);
    if (gender === 'male') {
      REE += 5;
      REE = REE * activityCoefficients[activity];
    } else if (gender === 'female') {
      REE -= 161;
      REE = REE * activityCoefficients[activity];
    }

    document.getElementById('resultzesp').innerHTML = 'REE: ' + REE.toFixed(2) +'ккал/день';
  }
</script>


<!--считаем anion ---------------------- -->
<script>

  document.getElementById('anionrForm').addEventListener('submit', function(event) {
    event.preventDefault(); // форму не отправляем!!!

    // получаем из формы
    var natrii= parseFloat(document.getElementById('natriianionr').value);
    var clor= parseFloat(document.getElementById('cloranion').value);
    var bicarbonat = parseFloat(document.getElementById('bicarbonatanionr').value);

    if (clor < 60) {
      alert("Значение Хлора не может быть меньше 60");
    }
    else if (natrii < 80){alert("Значение Натрия не может быть меньше 80");}
    else {

      // считаем
      var anionr = natrii - (clor + bicarbonat);

      // Выводим результат
      document.getElementById('AnionrValue').innerHTML = anionr.toFixed(2);


      // показываем результат
      document.getElementById('AnionrResult').style.display = 'block';
    }
  });

</script>



<!--считаем скорость инфузии ---------------------- -->


<script>
  document.getElementById('infuzForm').addEventListener('submit', function(event) {
    event.preventDefault(); // форму не отправляем!!!

    // получаем  из формы
    var kolprinfuz = parseFloat(document.getElementById('kolprinfuz').value);
    var obeminfuz = parseFloat(document.getElementById('obeminfuz').value);
    var vespacinfuz = parseFloat(document.getElementById('vespacinfuz').value);
    var dozamininfuz = parseFloat(document.getElementById('dozamininfuz').value);

    // считаем скорость
    var infuzResult = vespacinfuz * dozamininfuz / (kolprinfuz * (1000 / obeminfuz)) * 60;

    // Выводим результат
    document.getElementById('infuzValue').innerHTML = infuzResult.toFixed(2);

    // показываем результат
    document.getElementById('infuzResult').style.display = 'block';
  });


</script>

<!--закрыли скорость инфузии ---------------------- -->


<script>
  function calculateDepression() {
    var form = document.getElementById('depression-form');
    var radios = form.querySelectorAll('input[type="radio"]:checked');
    console.log(radios);
    var totalQuestions = 15;
    if (radios.length < totalQuestions) {
      alert("Пожалуйста, выберите ответы на все вопросы");
    } else {
      var totalPoints = 0;

      for (var i = 0; i < radios.length; i++) {
        totalPoints += parseInt(radios[i].value);
      }

      var resultDiv = document.getElementById('resultdepress');
      resultDiv.innerHTML = 'Ваш результат по шкале депрессии: ' + totalPoints;
    }
  }

</script>


<script>

  function calculateBloodAlcoholLevel(event) {
    event.preventDefault();

    // Получение значений из полей формы
    var gender = document.querySelector('input[name="ger"]:checked').value;
    var weight = parseFloat(document.getElementById('vess').value);
    var alcoholConsumed = parseFloat(document.getElementById('alc').value);
    var alcoholPercentage = parseFloat(document.getElementById('alcoholPercentage').value);

    // Расчет калькулятора промилле
    var bloodAlcoholLevel = 0;
    if (gender === 'male') {
      bloodAlcoholLevel = (alcoholConsumed * alcoholPercentage/100 * 0.789) / (weight * 0.68) ;
    } else {
      bloodAlcoholLevel = (alcoholConsumed * alcoholPercentage/100 * 0.789) / (weight * 0.55) ;
    }

    // Вывод результатов
    var results = document.getElementById('results');
    if (bloodAlcoholLevel < 0) {
      results.innerHTML = "У вас отсутствует алкоголь в крови.";
    } else {
      results.innerHTML = "Концентрация алкоголя в крови: " + bloodAlcoholLevel.toFixed(2) + " промилле.";
    }

    // Расчет времени до полного выхода из крови
    var timeToSober = (bloodAlcoholLevel / 0.015) / 10;
    if (timeToSober > 0) {
      results.innerHTML += "<br>Время до полного выхода из крови: " + timeToSober.toFixed(2) + " часов.";
    }
  }
</script>



<script>
  function calculatecha2() {
    var clinicalSigns = document.getElementsByName("clinical_signs");
    var age = document.getElementsByName("hap2");
    var gender = document.getElementsByName("hap3");

    var score = 0;

    // Расчет баллов для клинических признаков
    for (var i = 0; i < clinicalSigns.length; i++) {
      if (clinicalSigns[i].checked) {
        score += parseInt(clinicalSigns[i].value);
      }
    }

    // Расчет баллов для возраста
    for (var i = 0; i < age.length; i++) {
      if (age[i].checked) {
        score += parseInt(age[i].value);
      }
    }

    // Расчет баллов для пола
    for (var i = 0; i < gender.length; i++) {
      if (gender[i].checked) {
        score += parseInt(gender[i].value);
      }
    }
      var resultDiv = document.getElementById('resultcha2');
      resultDiv.innerHTML = 'Ваш результат: ' + score + ' балла';
    }


</script>



<script>
  function calculateComaGlazgo() {
    var form = document.getElementById('comaglaz-form');
    var radios = form.querySelectorAll('input[type="radio"]:checked');
    var totalQuestions = 3;

    if (radios.length < totalQuestions) {
      alert("Пожалуйста, выберите ответы на все вопросы");
    } else {
      let totalPoints = 0;

      for (var i = 0; i < radios.length; i++) {
        totalPoints += parseInt(radios[i].value);
      }


      var GlazCat = '';
      if (totalPoints == 15)
      {
        GlazCat = 'Сознание ясное';
      }
      else if (totalPoints <= 14 && totalPoints >= 13)
      {
        GlazCat = 'Умеренное оглушение';
      }
      else if (totalPoints >= 11 && totalPoints <= 12)
      {
        GlazCat = 'Глубокое оглушение';
      }
      else if (totalPoints >= 8 && totalPoints <= 10)
      {
          GlazCat = 'Сопор';
        }
      else if (totalPoints >= 6 && totalPoints <= 7)
      {
        GlazCat = 'Умеренная кома';
      }
      else if (totalPoints >= 4 && totalPoints <= 5)
      {
        GlazCat = 'Глубокая кома';
      }
      else
      {
        GlazCat = 'Терминальная кома, смерть мозга';
      }


      var resultDiv = document.getElementById('resultGlazgo');
      resultDiv.innerHTML = 'Ваш результат: ' + totalPoints + ' ' + GlazCat;
    }
  }




  function calculateComaGlazgo1() {
    var form = document.getElementById('comaglaz1-form');
    var radios = form.querySelectorAll('input[type="radio"]:checked');
    var totalQuestions = 3;
    if (radios.length < totalQuestions) {
      alert("Пожалуйста, выберите ответы на все вопросы");
    } else {
      var totalPoints = 0;

      for (var i = 0; i < radios.length; i++) {
        totalPoints += parseInt(radios[i].value);
      }


      var GlazCat = '';
      if (totalPoints ==  15)
      {
        GlazCat = 'Сознание ясное';
      } else if (totalPoints <= 14 && totalPoints >= 13)
      {
        GlazCat = 'Умеренное оглушение';
      }
      else if (totalPoints >= 11 && totalPoints <= 12)
      {
        GlazCat = 'Глубокое оглушение';
      }
      else if (totalPoints >= 8 && totalPoints <= 10)
      {

          GlazCat = 'Сопор';
        }

      else if (totalPoints >= 6 && totalPoints <= 7)
      {
        GlazCat = 'Умеренная кома';
      }
      else if (totalPoints >= 4 && totalPoints <= 5)
      {
        GlazCat = 'Глубокая кома';
      }
      else
      {
        GlazCat = 'Терминальная кома, смерть мозга';
      }

      var resultDiv = document.getElementById('resultGlazgo1');
      resultDiv.innerHTML = 'Ваш результат: ' + totalPoints +' ' + GlazCat;
    }
  }

</script>


<script>
  document.getElementById('gepatitc-form').addEventListener('submit', function(e){
    e.preventDefault();

    var age = document.getElementById('agec').value;
    var trombocit = document.getElementById('trombocit').value;
    var alte = document.getElementById('alte').value;
    var ast = document.getElementById('ast').value;
    var verhast = document.getElementById('verhast').value;
    var mno = document.getElementById('mno').value;

    var LogOddsLok = (1.26 * ast / alte) + (5.27 * mno) - (0.0089 * trombocit) - 5.56;
    var IndexLoka = Math.exp(LogOddsLok) / (1 + Math.exp(LogOddsLok));
    var GUCI = (ast / verhast) * mno * 100 / trombocit;
    var APRI = (ast / verhast) * (100 / trombocit);
    var FIB4 = age * ast / (trombocit * Math.sqrt(alte));

    document.getElementById('gepatitc-result').innerHTML = `Индекс Лока: ` +  IndexLoka.toFixed(2);
    document.getElementById('gepatitc-result1').innerHTML = `GUCI: ` + GUCI.toFixed(2);
      document.getElementById('gepatitc-result2').innerHTML = `APRI: ` + APRI.toFixed(2);
        document.getElementById('gepatitc-result3').innerHTML = `FIB4: ` + FIB4.toFixed(2);
      });
</script>

<!-- Подключение скриптов Bootstrap Select и инициализация плагина -->
<script>

  function qwe(element) {
    let tabs = document.getElementsByClassName("tab-pane fade");
    for (let i of tabs) {
      if (i.classList.contains("active")) {
        i.classList.remove("active");
        i.classList.remove("show");
      }
    }

    let divId = element[element.selectedIndex].value;
    let divSelected = document.getElementById(divId);
    divSelected.classList.add("active");
    divSelected.classList.add("show");
  }
</script>


<script>
  // Отслеживаем отправку формы
  document.getElementById("datarodovForm").addEventListener("submit", function(event){
    event.preventDefault(); // Отменяем стандартное поведение формы

    // Получаем значения полей формы
    var lastMenstruation = new Date(document.getElementById("lastMenstruation").value);
    var cycleLength = parseInt(document.getElementById("cycleLength").value);

    // Рассчитываем предполагаемую дату родов, дату зачатия и срок беременности
    var edd = new Date(lastMenstruation.getTime() + (280 * 24 * 60 * 60 * 1000));
    var conceptionDate = new Date(edd.getTime() - (266 * 24 * 60 * 60 * 1000));
    var gestationPeriod = Math.floor((new Date() - lastMenstruation) / (7 * 24 * 60 * 60 * 1000));

    // Выводим результаты
    document.getElementById("datarodov-result").innerHTML = "Предполагаемая дата родов: " + formatDate(edd);
    document.getElementById("datarodov-result1").innerHTML = "Предполагаемая дата зачатия: " + formatDate(conceptionDate);
    document.getElementById("datarodov-result2").innerHTML = "Срок беременности: " + gestationPeriod + " недель";
  });

  // Функция для форматирования даты в формате "дд.мм.гггг"
  function formatDate(date) {
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (day < 10) {
      day = "0" + day;
    }
    if (month < 10) {
      month = "0" + month;
    }

    return day + "." + month + "." + year;
  }
</script>

<script>
  function calculatePressure() {
    var systolic = parseInt(document.getElementById('systolic').value);
    var diastolic = parseInt(document.getElementById('diastolic').value);

    var pulsePressure = systolic - diastolic;
    var meanPressure = diastolic + (pulsePressure / 3);

    document.getElementById('result').innerHTML = "Среднее артериальное давление: " + meanPressure.toFixed(2);
  }
</script>





