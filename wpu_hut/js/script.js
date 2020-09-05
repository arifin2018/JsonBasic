// memberikan function untuk data awal dan mem paketkan data tampilkanSemuaMenu agar di mudah di panggil
function tampilkanSemuaMenu() {
  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    $.each(menu, function (i, data) {
      $("#daftar-menu").append(
        '<div div class= "col-md-4 col-sm-6 col-xs-12" > <div class="card mb-3 "><img src="img/pizza/' +
        data.gambar +
        '" class="gambar"><div class="card-body"><h5 class="card-title">' +
        data.nama +
        '</h5><p class="card-text">' +
        data.deskripsi +
        '</p><h2 class="cards card-title "><strong> Rp.' +
        data.harga +
        '</strong></h2><a href="#" class="btn btn-primary">Go somewhere</a></div></div></div>'
      );
    });
  });
}
tampilkanSemuaMenu();

//untuk dropdown perpindahan active
$(".dropdown-item").on("click", function () {
  $(".dropdown-item").removeClass("active");
  $(this).addClass("active");

  //merubah nama untuk ID tuyul/H1 pada latihan2.html
  let dropdown = $(this).html();
  // console.log(dropdown);
  $("#tuyul").html(dropdown);

  //supaya di klik dropdown all menu ada isinya
  if (dropdown == 'All Menu') {
    //memberika function unique supaya tidak ada data yang dulpicate
    $.getJSON("data/pizza.json", function (data) {
      var names = data.menu;
      var uniqueNames = [];
      $.each(names, function (i, el) {
        if ($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
      });
      tampilkanSemuaMenu();
      return;
    });
  }


  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    let content = '';

    $.each(menu, function (i, data) {
      if (data.kategori == dropdown.toLowerCase()) {
        content += '<div div class= "col-md-4 col-sm-6 col-xs-12" > <div class="card mb-3 "><img src="img/pizza/' +
          data.gambar +
          '" class="gambar"><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><h2 class="cards card-title "><strong> Rp.' +
          data.harga +
          '</strong></h2><a href="#" class="btn btn-primary">Go somewhere</a></div></div></div>';
      }
    });
    $('#daftar-menu').html(content);
  });
});
