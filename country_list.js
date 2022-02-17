//App to see all the countries in a list:

document.addEventListener("DOMContentLoaded", ()=>{
    let selectCountry = document.getElementById("countryList");
    
    fetch("https://restcountries.com/v3.1/all").then(res=>{
        return res.json();
    }).then(data=>{
        let outPut = "";
        let array = [];

        data.forEach(country => {
            array.push(country.name.common);
            array.sort();
        })

        for(let item of array){
            outPut += `<option value="${item}">${item}</option>`;
        }

        selectCountry.innerHTML = outPut;

    }).catch(err=>{
        console.log(err);
    })
});