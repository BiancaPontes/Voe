
const corPrincipal = getComputedStyle(document.documentElement).getPropertyValue('--cor-principal').trim();
const corHover = getComputedStyle(document.documentElement).getPropertyValue('--cor-hover').trim();
const botao = document.getElementById('botao-fale-conosco');
botao.style.cursor = 'pointer';

document.addEventListener('DOMContentLoaded', function() {
    botao.addEventListener('click', function() {
        window.location.href = 'form.html'; 
    });
});

botao.addEventListener('mouseenter', function() {
    this.style.backgroundColor = corHover; 
    botao.style.cursor = 'pointer';
});

botao.addEventListener('mouseleave', function() {
    this.style.backgroundColor = corPrincipal; 
    botao.style.cursor = 'defaut';
});


document.addEventListener('DOMContentLoaded', function() {

    const itens = document.querySelectorAll('.item-menu-01, .item-menu-02, .item-menu-03, .item-menu-04, .cta-1');

    itens.forEach(item => {
        item.style.transition = 'border-bottom 0s ease';  
        item.style.borderBottom = '2px solid transparent'; 

        item.addEventListener('mouseenter', function() {
            this.style.borderBottom = '2px solid #91D2D5';  
            item.style.transition = 'border-bottom 0.3s ease';
        });

        item.addEventListener('mouseleave', function() {
            this.style.borderBottom = '2px solid transparent'; 
        });
    });
})

document.addEventListener('DOMContentLoaded', function() {

    const itens = document.querySelectorAll('.mapa-do-site-item');

    itens.forEach(item => {
        item.style.transition = 'border-bottom 0s ease';  
        item.style.borderBottom = '2px solid transparent'; 

        item.addEventListener('mouseenter', function() {
            this.style.borderBottom = '2px solid #91D2D5';  
            item.style.transition = 'border-bottom 0.3s ease';
        });

        item.addEventListener('mouseleave', function() {
            this.style.borderBottom = '2px solid transparent'; 
        });
    });
})

document.addEventListener('DOMContentLoaded', function() {

    const itens = document.querySelectorAll('.contato-item');

    itens.forEach(item => {
        item.style.transition = 'border-bottom 0s ease';  
        item.style.borderBottom = '2px solid transparent'; 

        item.addEventListener('mouseenter', function() {
            this.style.borderBottom = '2px solid #91D2D5';  
            item.style.transition = 'border-bottom 0.3s ease';
        });

        item.addEventListener('mouseleave', function() {
            this.style.borderBottom = '2px solid transparent'; 
        });
    });
})

document.addEventListener('DOMContentLoaded', function() {

    const itens = document.querySelectorAll('.SAC-item');

    itens.forEach(item => {
        item.style.transition = 'border-bottom 0s ease';  
        item.style.borderBottom = '2px solid transparent'; 

        item.addEventListener('mouseenter', function() {
            this.style.borderBottom = '2px solid #91D2D5';  
            item.style.transition = 'border-bottom 0.3s ease';
        });

        item.addEventListener('mouseleave', function() {
            this.style.borderBottom = '2px solid transparent'; 
        });
    });
})

document.addEventListener('DOMContentLoaded', function() {

    const itens = document.querySelectorAll('.Seguranca-e-Dados-item');

    itens.forEach(item => {
        item.style.transition = 'border-bottom 0s ease';  
        item.style.borderBottom = '2px solid transparent'; 

        item.addEventListener('mouseenter', function() {
            this.style.borderBottom = '2px solid #91D2D5';  
            item.style.transition = 'border-bottom 0.3s ease';
        });

        item.addEventListener('mouseleave', function() {
            this.style.borderBottom = '2px solid transparent'; 
        });
    });
})


const cadastro = document.getElementById('botao-cadastro-dependente');
cadastro.style.cursor = 'pointer';

document.addEventListener('DOMContentLoaded', function() {
    cadastro.addEventListener('click', function() {
        window.location.href = 'cadastrar-dependente.html'; 
    });
});

cadastro.addEventListener('mouseenter', function() {
    this.style.backgroundColor = corHover; 
    cadastro.style.cursor = 'pointer';
});

cadastro.addEventListener('mouseleave', function() {
    this.style.backgroundColor = corPrincipal; 
    cadastro.style.cursor = 'defaut';
});

