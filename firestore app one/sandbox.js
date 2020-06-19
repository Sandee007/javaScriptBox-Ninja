const list = document.querySelector("ul");
const form = document.querySelector("form");


function addRecipe(recipe, id){

    const title = recipe.title;
    const created_at = recipe.created_at.toDate();
    let html = `
        <li data-id=${id}> 
            <div>${title}</div>
            <div>${created_at}</div>
            <button class="btn btn-danger btn-sm my-2">delete</button>
        </li>
    `;

    list.innerHTML += html;
    // console.log(html);
}

function deleteRecipe(id){
    const recipies = document.querySelectorAll("li");

    recipies.forEach(recipe =>{
        if(recipe.getAttribute("data-id")=== id){
            recipe.remove();
        }
    })
    
}

// get documents
//#newer way | real time listener 
db.collection("recipes").onSnapshot(snapshot => {
    // console.log(snapshot.docChanges());
    snapshot.docChanges().forEach(change =>{
    console.log(change);
    const doc = change.doc;
    if(change.type === "added"){
        addRecipe(doc.data(), doc.id);
    } else if( change.type === "removed"){
        deleteRecipe(doc.id);
    }
   });
});

/*
#older way-without | real time lsitener
    // async and returns a romise
    db.collection("recipes").get()
        .then((snapshot)=>{
            snapshot.docs.forEach((doc) => {
                // console.log(doc.id);
                addRecipe(doc.data(), doc.id);
            }) 
        })
        .catch((err) => {
            console.log(err);
        });
*/


// add documents
form.addEventListener("submit", e =>{
    e.preventDefault();

    const now = new Date();

    // create a doucment onject
    const recipe = {
        title: form.recipe.value,
        created_at: firebase.firestore.Timestamp.fromDate(now)
    };

    db.collection("recipes").add(recipe)
        .then(()=>{
            console.log("recipe added");
        }).catch( err => {
            console.log(err);
        });
    form.reset();
        
});

//delete data
list.addEventListener("click", e =>{
    // console.log(e);
    // console.log(e.target.tagName);
    if(e.target.tagName === "BUTTON"){
        const id = e.target.parentElement.getAttribute("data-id");
        // console.log(id);
        db.collection("recipes").doc(id).delete()
            .then(()=>{
                console.log("recipe deleted");
            });
    }
});