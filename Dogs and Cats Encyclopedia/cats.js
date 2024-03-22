const main = document.getElementById('main')
const form = document.getElementById('form')
const search = document.getElementById('search')

const getDetails = async (breed)=>{
    const url = `https://api.api-ninjas.com/v1/cats?name=${breed}`
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
    <input type="search"id="search" class="search" placeholder="Search the cat Breed 🔍">
</form>

<div id="img-container">
    <img src="${data[0].image_link}" alt="">
    <h1>${data[0].name}</h1>
</div>

<div id="information">
    <h2>Size:</h2>
    <p>${data[0].min_weight} to ${data[0].max_weight} pounds</p>
    <h2>Length:</h2>
    <p>${data[0].length}</p>
    <h2>Origin:</h2>
    <p>${data[0].origin}</p>
    <h2>Lifespan:</h2>
    <p>${data[0].min_life_expectancy} to ${data[0].max_life_expectancy} years</p>
    <h2>Meowing:</h2>
    <p>${data[0].meowing}/5</p>
    <h2>Intelligence:</h2>
    <p>${data[0].intelligence}/5</p>
    <h2>General Health:</h2>
    <p>${data[0].general_health}</p>
    <h2>Shedding:</h2>
    <p>${data[0].shedding}/5</p>
    <h2>Playfulness:</h2>
    <p>${data[0].playfulness}/5</p>
    <h2>Grooming:</h2>
    <p>${data[0].grooming}/5</p>
    <h2>Good with kids:</h2>
    <p>${data[0].children_friendly}/5</p>
    <h2>Good with other dogs:</h2>
    <p>${data[0].other_pets_friendly}/5</p>
    <h2>Good with Strangers:</h2>
    <p>${data[0].stranger_friendly}/5</p>
    
</div>
<div id="information-2">

</div>


`
}

const zishan = ()=>{
    window.open("index.html")

 }