const getData = function(){
    fetch('geral.php')
        .then(data => data.text())
        .then(html => document.getElementById('conteudo').innerHTML = html);
}

const getProfile = function(){
    fetch('profile.php')
        .then(data => data.text())
        .then(html => document.getElementById('conteudo').innerHTML = html);
}

const getServices = function(){
    fetch('services.php')
        .then(data => data.text())
        .then(html => document.getElementById('conteudo').innerHTML = html);
}

const getDates = function(){
    fetch('dates_service.php')
        .then(data => data.text())
        .then(html => document.getElementById('conteudo').innerHTML = html);
}
const getReg = function(){
    fetch('registro.php')
        .then(data => data.text())
        .then(html => document.getElementById('conteudo').innerHTML = html);
}