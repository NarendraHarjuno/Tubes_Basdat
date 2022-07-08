var darkMode;

if (localStorage.getItem('dark-modes')) {
    darkMode = localStorage.getItem('dark-modes');
} else {
    darkMode = 'light';
}

localStorage.setItem('dark-modes', darkMode);

if (localStorage.getItem('dark-modes') == 'dark') {
    $('body').toggleClass('dark-mode');
    $('.act-btn-dark').hide();
    $('.act-btn-light').show();
}

if (localStorage.getItem('dark-modes') == 'light') {
    $('body').removeClass('dark-mode');
    $('.act-btn-dark').show();
    $('.act-btn-light').hide();
}

$('.act-btn-dark').on('click', function() {
    $('.act-btn-dark').hide();
    $('.act-btn-light').show();
    $('body').toggleClass('dark-mode');
    localStorage.setItem('dark-modes', 'dark');
});

$('.act-btn-light').on('click', function() {
    $('.act-btn-light').hide();
    $('.act-btn-dark').show();
    $('body').removeClass('dark-mode');
    localStorage.setItem('dark-modes', 'light');
});