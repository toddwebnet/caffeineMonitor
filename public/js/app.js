var curCaff
var maxCaff
var numInjested = 0
var drinks = []

function loadDefaultValues () {
  $.ajax({
    url: '/caffDefaults',
    type: 'GET',
    dataType: 'json',
    cache: false,
  }).done(function (data) {
    maxCaff = data.maxCaff
    curCaff = data.startCaff
    loadDrinks()
  })
}

function updateCaffBoxes () {
  document.getElementById('curCaff').innerHTML = curCaff
  document.getElementById('maxCaff').innerHTML = maxCaff
  drinks = []
  var buttonCount = $('.injestButton').length
  var drinksOn = false
  $('.injestButton').each(function (index, element) {
    id = $(this).attr('data-id')
    caff = $(this).attr('data-caff')
    drinks[id] = caff
    drinksLeft = Math.floor((maxCaff - curCaff) / caff)
    $('#numDrinks_' + id).html(drinksLeft)
    if (drinksLeft <= 0) {
      $('#injestButton_' + id).hide(255)
    } else {
      drinksOn = true
    }
    if(index === (buttonCount-1)){
      if(!drinksOn){
        logNoMoreDrinks()
      }
    }
  })

}

function loadDrinks () {
  $('#drinkHolder').html('Loading...')
  $.ajax({
    url: '/getDrinks',
    type: 'GET',
    cache: false,
  }).done(function (data) {
    $('#drinkHolder').html(data)
    $('.injestButton').click(function () {
      injest($(this).attr('data-caff'), $(this).attr('data-id'))
    })
    updateCaffBoxes()

  })
}

function injest (caff, id) {
  curCaff = parseInt(curCaff) + parseInt(caff)
  updateLog(id, caff)
  updateCaffBoxes()

}

function updateLog (id, caff) {
  numInjested++
  log = '<div style=\'text-align:left\'>' + numInjested + '. ' + $('#drink_name_' + id).html() + ' with ' + caff + ' mgs</div>'
  $('#log').append(log)
}

function logNoMoreDrinks(){
  log = '<div style=\'text-align:left\'>No more drinks buddy, your heart can\'t take it.</div>'
  $('#log').append(log)
}
