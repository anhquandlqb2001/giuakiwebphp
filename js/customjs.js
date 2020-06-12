function valueChange(s) {
    // var choice = document.getElementById("choice");
    var val = parseInt(document.getElementById('value').innerText);
    console.log(s);
    
    if (s == '-') {
        val = val - 1;
        if (val == 0) {
        return;
    }
        document.getElementById('value').innerHTML = val;
    } else {
        val = val + 1;
        document.getElementById('value').innerHTML = val;
    }

    var price = parseInt(document.getElementById('price').innerText);
    console.log(price);
    
    var newPrice = price*val;
    document.getElementById("total-price").innerHTML = newPrice;
}

// Slider

var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
});