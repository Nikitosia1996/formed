
let selectedYear = new Date().getFullYear();
let selectedMonth = new Date().getMonth() + 1;

function getCookie(name) {
  let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

let alltr = document.getElementsByTagName("tr");
let locationKey = getCookie("key");
switch (locationKey){
  case "Витебск":
    let tdVitebsk = [...alltr].slice(2,38);
    allTdContent(tdVitebsk);
    break;
  case "Гродно":
    let tdGrodno = [...alltr].slice(39,61);
    allTdContent(tdGrodno);
    break;
  case "Гомель":
    let tdGomel = [...alltr].slice(62,99);
    allTdContent(tdGomel);
    break;
  case "Могилев":
    let tdMogila = [...alltr].slice(100,124);
    allTdContent(tdMogila);
    break;
  case "Могилевский ОЛДЦ":
    let tdMogila1= [...alltr].slice(125,131);
    allTdContent(tdMogila1);
    break;
  case "Могилевская областная детская больница":
    let tdMogila2 = [...alltr].slice(132,158);
    allTdContent(tdMogila2);
    break;
  case "РНПЦ":
    let tdRnpc = [...alltr].slice(158,164);
    allTdContent(tdRnpc);
    break;
  case "Admin":
    let tdAdmin = [...alltr].slice(2,165);
    allTdContent(tdAdmin);
    break;
}


function allTdContent(trs)
{
  let nonEditableHeaders = [`Главное управление по здравоохранению Витебского облисполкома`, "Главное управление здравоохранения Гродненского облисполкома", "Главное управление здравоохранения Гомельского облиспокома", "Главное управление по здравоохранению Могилевского облисполкома",`УЗ "Могилевский ОЛДЦ"` , `УЗ Могилевская областная детская больница`];
  for (let tds of trs) {
    tds.classList.add('highlighted');  // добавить подсветку
    for (let i = 1; i < tds.children.length; i++) {


      tds.children[i].setAttribute("contenteditable", "");

      tds.children[i].addEventListener('input', function () {
        let id = this.getAttribute('id');
        let value = this.textContent;

        let idArray = id.split('_');
        let rowId = idArray[0];
        let colId = idArray[1];
        $.ajax({
          url: "dist/js/save_sell_ajax.php",
          type: "POST",
          data: {
            rowId: rowId,
            colId: colId,
            value: value,
            year: selectedYear,
            month: selectedMonth
          },
          success: function (response) {
            console.log(response);
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }
        });
      })



      tds.children[i].addEventListener('keydown', function (event) {
        // Check the pressed key
        let key = event.key;

        if(key === "Enter" && !event.ctrlKey){  // Checking if Enter is pressed without ctrl
          event.preventDefault();  // Preventing default behaviour such as form submission
          // logic to go to the next cell
          let nextCell = this.parentElement.nextSibling.children[i];
          if(nextCell) {
            nextCell.focus();
          }
        } else if(key === "Enter" && event.ctrlKey) {  // Check if Ctrl + Enter is pressed
          event.preventDefault();  // Preventing default behaviour such as form submission
          this.innerHTML += '<br />&nbsp;';  // Adding a new line inside cell
          setCaretToEnd(this);
        } else if(key === "Escape") {  // Check if escape is pressed
          this.blur();  // Removing focus from the cell
        }
      });




    }
  }
}

function setCaretToEnd(contentEditableElement)
{
  let range,selection;
  range = document.createRange();//Create a range (a range is a like the selection but invisible)
  range.selectNodeContents(contentEditableElement);//Select the entire contents of the element with the range
  range.collapse(false);//collapse the range to the end point. false means collapse to end rather than the start
  selection = window.getSelection();//get the selection object (allows you to change selection)
  selection.removeAllRanges();//remove any selections already made
  selection.addRange(range);//make the range you have just created the visible selection
}

onLoadExcel()

function onLoadExcel() {
  $.ajax({
    url: "dist/js/get_cells.php",
    type: "GET",
    data: {
      year: selectedYear,
      month: selectedMonth
    },
    success: function (response) {

      if (response.length === 2) {

        clearTable();
        alert("В выбранный промежуток времени данных нет");
      } else {
        let cells = JSON.parse(response);
        for(let cell of cells) {
          let id = cell.rowId + "_" + cell.colId;
          let cellElement = document.getElementById(id);
          if(cellElement) {
            cellElement.textContent = cell.value;
          }
        }
      }
    }
  });
}

function clearTable() {
  let tableCells = document.querySelectorAll('td');
  tableCells.forEach(function(cell) {
    if(cell.id.length!==0)
    cell.innerHTML = '';
  });
}




document.getElementById('yearDropdown').value = selectedYear.toString();
document.getElementById('monthDropdown').value = (selectedMonth-1).toString();

console.log(`Выбранный год: ${selectedYear}`);
console.log(`Выбранный месяц: ${selectedMonth}`);


function changeYear(year) {
  selectedYear = year;

  console.log(`Выбранный год: ${selectedYear}`);
  console.log(`Выбранный месяц: ${selectedMonth}`);
  onLoadExcel();
}

function changeMonth(monthIndex) {
  selectedMonth = parseInt(monthIndex) + 1;

  console.log(`Выбранный год: ${selectedYear}`);
  console.log(`Выбранный месяц: ${selectedMonth}`);
  onLoadExcel();
}



let tdElements = document.querySelectorAll('td');
console.log (1);
for(let td of tdElements) {
  if(td.innerText.includes('РНПЦ')) {
    td.style.display = 'block';
    td.style.width = '200px';
    td.style.fontWeight = 'bold';
    td.style.fontSize = '14px';
  } else {
    console.log(td.innerText);
  }
}
