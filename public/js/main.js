var inputs = document.querySelectorAll("input,select");
for (var i = 0 ; i < inputs.length; i++) {
   inputs[i].addEventListener("keypress", function(e){
      if (e.which == 13) {
         e.preventDefault();
         var nextInput = document.querySelectorAll('[tabIndex="' + (this.tabIndex + 1) + '"]');
         if (nextInput.length === 0) {
            nextInput = document.querySelectorAll('[tabIndex="1"]');
         }
         nextInput[0].focus();
      }
   })
}


const showData = (result)=>{
    if (result["logradouro"] != undefined){
        console.log(result["logradouro"])
        document.querySelector("#complement").value = result["complemento"]
        document.querySelector("#city").value = result["localidade"]
        document.querySelector("#states").value = result["uf"]
        document.querySelector("#street").value = result["logradouro"]
    }
}


const cep = document.querySelector("#cep")

cep.addEventListener("blur",(e)=>{
    let search = cep.value.replace("-","")
    const options = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    }

    fetch(`https://viacep.com.br/ws/${search}/json/`, options)
    .then(response =>{response.json()
        .then( data => showData(data))
    })
    .catch(e => console.log('Deu erro: '+ e.menssage))
})
