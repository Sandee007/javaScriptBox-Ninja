const cityForm = document.querySelector("form");
const details = document.querySelector(".details");
const card = document.querySelector(".card");
const time = document.querySelector("img.time");
const icon = document.querySelector(".icon img");

// const now =new Date();
// console.log("timestamp:", now.getTime());

// update UI
function updateUI(data){
    /*
    const cityDetails = data.cityDetails;
    const weather = data.weather;
    */
    // using destructure to do the same above
    const {cityDetails, weather} = data;

    console.log(data);

    details.innerHTML = `
        <h5 class="my-3">${cityDetails.EnglishName}</h5>
        <div class="class my-4">${weather.WeatherText}</div>
        <div class="display-4 my-4">
            <span>${weather.Temperature.Metric.Value}</span>
            <span>&deg;C</span>
        </div>
    `;

    //remove d-none class if present
    if(card.classList.contains("d-none")){
        card.classList.remove("d-none");
    }

    //update night and day images
    let timeSrc = null;
    if(weather.IsDayTime){
        timeSrc = "img/day.svg";
    } else{
        timeSrc = "img/night.svg";
    }
    time.setAttribute("src", timeSrc);

    //update icons
    const iconSrc = `img/icons/${weather.WeatherIcon}.svg`;
    icon.setAttribute("src", iconSrc);

}

async function updateCity (city){
     const cityDetails = await getCity(city);
     const weather = await getWeather(cityDetails.Key);

    /*
        return {

            cityDetails: cityDetails,
            weather: weather
        };
    */

    //can write the same using OBJECT SHORTHAND NOTATION
    return {cityDetails,weather};
}

cityForm.addEventListener("submit", (e) =>{
    e.preventDefault();

    // get city value
    const city = cityForm.city.value.trim();
    cityForm.reset();

    //update city ui
    updateCity(city)  //can use then and cath cuz this is an async function and it returns a promise
        .then(data => updateUI(data))
        .catch(err => console.log(err));

    //set local storage
    localStorage.setItem("city", city);

});

if(localStorage.getItem("city")){
    updateCity(localStorage.getItem("city")) //this returns a promise
        .then(data => updateUI(data))
        .catch(err => console.log(err));
}