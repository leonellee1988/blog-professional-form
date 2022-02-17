//App to see all the countries in a list:

document.addEventListener("DOMContentLoaded", ()=>{
    let selectCountry = document.getElementById("countryList");
    
    fetch("https://restcountries.com/v3.1/all").then(res=>{
        return res.json();
    }).then(data=>{
        let outPut = "";
        let arrayCountry = [];

        data.forEach(country => {
            arrayCountry.push(country.name.common);
            arrayCountry.sort();
        })

        for(let item of arrayCountry){
            outPut += `<option value="${item}">${item}</option>`;
        }

        selectCountry.innerHTML = outPut;

    }).catch(err=>{
        console.log(err);
    })
});