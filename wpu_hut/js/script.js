$.getJSON("data/pizza.json", function (data) {
  let menu = data.menu;
  $.each(menu, function (i, data) {
    $("#daftar-menu").append(
      '<div class="col-md-4 col-sm-6 col-xs-12"><div class="card mb-3"><img src="img/pizza/' +
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

$(".dropdown-item").on("click", function () {
  $(".dropdown-item").removeClass("active");
  $(this).addClass("active");

  let dropdown = $(this).html();
  // console.log(dropdown);
  $(".dropdown-toggle").html(dropdown);

  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    let content = "";

    $.each(menu, function (i, data) {
      $("#ga").append(
        '<a class="dropdown-item" id="ga" href="#"></a>+data.kategori'
      );
    });

    $.each(menu, function (i, data) {
      if (typeof data.kategori == kategori);
      data.kategori == data.kategori.toLowerCase();
    });
  });
});
