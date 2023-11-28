const flashData = $('.flash-data').data('flashdata');
console.log(flashData);

if(flashData = true) {
    swal({
        tittle: 'Game ' + flashData,
        text: '',
        type: 'success'
        
    });
}

