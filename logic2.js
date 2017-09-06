document.getElementById('listPriced').innerHTML = JSON.parse(localStorage.getItem('listPrice'));

document.getElementById('currentPriced').innerHTML = JSON.parse(localStorage.getItem('currentPrice'));

document.getElementById('galleryDiscounted').innerHTML = JSON.parse(localStorage.getItem('galleryDiscount'));

document.getElementById('consultantDiscounted').innerHTML = JSON.parse(localStorage.getItem('consultantDiscount'));