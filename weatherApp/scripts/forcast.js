const key = "qVA3dIVyH8ClS4AmIWJlfidu9RFwVRAu" ;

// get city information
const getCity = async (city) => {

    const base = "http://dataservice.accuweather.com/locations/v1/cities/search" ;
    const query = `?apikey=${key}&q=${city}` ; 

    const response =  await fetch( base + query );
    const data = await response.json();

    return data[0];

};

// get weather info
async function getWeather(id){

    const base = "http://dataservice.accuweather.com/currentconditions/v1/";
    const query = `${id}?apikey=${key}`;

    const response = await fetch( base + query);
    const data = await response.json();

    return data[0];

}


// getCity("colombo").then(data => {
//     return getWeather(data.Key); 
//     }).then(data => {
//         console.log(data);
//     }).catch(err => console.log(err));

// getWeather("311399") ;