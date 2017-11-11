 // Personalizar Menu Ligin - Controle de Estoque Laravel

 document.getElementById('li_04').innerHTML = ('Login');
    let link = document.getElementById('li_04');
    link.setAttribute('href',"{{ url('login') }}");
    document.getElementById('li_02').style.display = 'none';