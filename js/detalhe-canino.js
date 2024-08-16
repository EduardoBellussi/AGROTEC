var stars = document.querySelectorAll('.star-icon')

document.addEventListener('click',function(a){
    var classStar = a.target.classList;
    
    if (!classStar.contains('ativo')) {
        stars.forEach(function(star){
            star.classList.remove('ativo');
        });
        classStar.add('ativo');
    }
});