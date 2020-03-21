function guardarContato(){
    let form = document.getElementById('storeContato')
    console.log(form.getElementsByTagName('input')[1].value)
    form.submit()
    //window.location.replace('/')
}