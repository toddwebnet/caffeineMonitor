var curCaff
var maxCaff
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
  document.getElementById('curCaff').value = curCaff
  document.getElementById('maxCaff').value = maxCaff
  drinks = []
  $('.injestButton').each(function () {
    id = $(this).attr('data-id')
    caff = $(this).attr('data-caff')
    drinks[id] = caff
    drinksLeft = Math.floor((maxCaff-curCaff)/caff)
    $('#numDrinks_' + id).html(drinksLeft)
    if(drinksLeft<=0){
      $('#injestButton_' + id).hide(255);
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
      injest($(this).attr('data-caff'))
    })
    updateCaffBoxes()

  })
}

function injest (caff) {

  curCaff = parseInt(curCaff) + parseInt(caff)

  updateCaffBoxes()
}
