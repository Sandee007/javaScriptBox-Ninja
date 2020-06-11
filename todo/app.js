const addForm = document.querySelector(".add");
const list = document.querySelector(".todos");
const search = document.querySelector(".search input");

addForm.addEventListener("submit", (e)=>{
    
    e.preventDefault();
    const todo = addForm.add.value.trim();
    
    //check for empty strings
    if(todo.length){
        generateTemplate(todo);
        addForm.reset();
    } 
//    else{
//        addForm.add.placeholder = "A todo cannot be empty";
//    }
});

function generateTemplate(todo){
    
    const html = `<li class="list-group-item d-flex justify-content-between align-items-center">
                <span>${todo}</span>
                <i class="fa fa-trash delete" aria-hidden="true"></i>
            </li>`;
    
    list.innerHTML += html;
        
}

//delete todos
list.addEventListener("click", (e)=>{
    if(e.target.classList.contains("delete")){
        e.target.parentElement.remove();
    }
});


//keyup event
search.addEventListener("keyup", ()=>{
    const term = search.value.trim().toLowerCase();
    filterTodos(term);
});

function filterTodos(term){
    console.log(term);
    Array.from(list.children)
        .filter((todo) => {
            return !todo.textContent.toLowerCase().includes(term)
        })
        .forEach((todo) => {  //DON'T FORGET !IMPORTANT IN CSS
        return todo.classList.add("filtered")
        });
    
     Array.from(list.children)
        .filter(todo => todo.textContent.toLowerCase().includes(term))
        .forEach(todo => todo.classList.remove("filtered"));
}