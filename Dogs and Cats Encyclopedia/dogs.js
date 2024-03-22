const main = document.getElementById('main')
const form = document.getElementById('form')
const search = document.getElementById('search')

const getDetails = async (breed)=>{
    const url = `https://api.api-ninjas.com/v1/dogs?name=${breed}`
    const response = await fetch(url , {
        method: 'GET',
        headers: {
            'X-Api-Key' : "r5G9K9MJb5jC+gWV3awFMA==1MOqUWqBRN99b8DQ"
        }
    })
    const data = await response.json()
    console.log(search.value)
    console.log(data)
    return setDetails(data)
}



form.addEventListener('submit' , (event)=>{
    event.preventDefault()
    getDetails(search.value)
    

    
})

const setDetails = (data) =>{
    main.innerHTML = `<form style="margin-top: 44rem;" id="form" action="">
    <input type="search"id="search" class="search" placeholder="Search the dog Breed 🔍">
</form>

<div id="img-container">
    <img src="${data[0].image_link}" alt="">
    <h1>${data[0].name}</h1>
</div>

<div id="information">
    <h2>Size:</h2>
    <p>Males Weighing ${data[0].min_weight_male} to ${data[0].max_weight_male} pounds and females weighing ${data[0].min_weight_female} to ${data[0].max_weight_female} pounds</p>
    <h2>Height:</h2>
    <p>Males being ${data[0].min_height_male} to ${data[0].max_height_male} inches tall and females being ${data[0].min_height_female} to ${data[0].max_height_female} inches tall
    </p>
    <h2>Lifespan:</h2>
    <p>${data[0].min_life_expectancy} to ${data[0].max_life_expectancy} years</p>
    <h2>Barking:</h2>
    <p>${data[0].barking}/5</p>
    <h2>Drooling:</h2>
    <p>${data[0].drooling}/5</p>
    <h2>Shedding:</h2>
    <p>${data[0].shedding}/5</p>
    <h2>Playfulness:</h2>
    <p>${data[0].playfulness}/5</p>
    <h2>Trainability:</h2>
    <p>${data[0].trainability}/5</p>
    <h2>Energy:</h2>
    <p>${data[0].energy}/5</p>
    <h2>Grooming:</h2>
    <p>${data[0].grooming}/5</p>
    <h2>Good with kids:</h2>
    <p>${data[0].good_with_children}/5</p>
    <h2>Good with other dogs:</h2>
    <p>${data[0].good_with_other_dogs}/5</p>
    <h2>Good with Strangers:</h2>
    <p>${data[0].good_with_strangers}/5</p>
    
</div>
<div id="information-2">

</div>`
}

const zishan = ()=>{
    window.open("index.html")

 }