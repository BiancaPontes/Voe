

const corPrincipal = getComputedStyle(document.documentElement).getPropertyValue('--cor-principal').trim();
const corHover = getComputedStyle(document.documentElement).getPropertyValue('--cor-hover').trim();
const botaoHome = document.getElementById('botao-fale-conosco');
botaoHome.style.cursor = 'pointer';

document.addEventListener('DOMContentLoaded', function() {

    botaoHome.addEventListener('click', function() {
    
        window.location.href = 'form.html'; 
    });
});


botaoHome.addEventListener('mouseenter', function() {
    this.style.backgroundColor = corHover; 
    botaoHome.style.cursor = 'pointer';
});


botaoHome.addEventListener('mouseleave', function() {
    this.style.backgroundColor = corPrincipal; 
    botaoHome.style.cursor = 'defaut';
});


// menu estilização


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


// formulario

document.getElementById('botao').addEventListener('click', function(event) {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    if (nome === '') {
        alert('O campo "Nome" é obrigatório.');
        return;
    }
    if (email === '') {
        alert('O campo "Email" é obrigatório.');
        return;
    }
    if (nome === '' || email === '') {
        alert('Por favor, preencha todos os campos.');
        event.preventDefault();  
    } else {
        alert('Obrigado por entrar em contato ' + nome + ', retornaremos ao e-mail: ' + email);
        const url = `recebeDados.html?nome=${encodeURIComponent(nome)}&email=${encodeURIComponent(email)}`; 
    }
});


document.getElementById('botao').addEventListener('mouseenter', function() {
    this.style.backgroundColor = 'var(--cor-hover)';
    this.style.color = 'var(--cor-4)';
    this.style.cursor = 'pointer'; 
});

document.getElementById('botao').addEventListener('mouseleave', function() {
    this.style.backgroundColor = ''; 
    this.style.color = ''; 
    this.style.cursor = ''; 
});


const botaoApp = document.getElementById('botao-app');

// hover botão app

botaoApp.addEventListener('mouseenter', function() {
    this.style.backgroundColor = corHover; 
});

botaoApp.addEventListener('mouseleave', function() {
    this.style.backgroundColor = corPrincipal; 
});

// footer

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












