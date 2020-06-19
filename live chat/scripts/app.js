
// dom queries
const chatList = document.querySelector('.chat-list'); 
const newChatForm = document.querySelector('.new-chat'); 
const newNameForm = document.querySelector('.new-name');
const updateMssg = document.querySelector('.update-mssg');
const rooms = document.querySelector('.chat-rooms');
const currRoom = document.querySelector('.curr-room');
const currName= document.querySelector('.curr-name');

// show name
currName.innerText = ``

// add a new chat
newChatForm.addEventListener("submit", e =>{
    e.preventDefault();
    const message = newChatForm.message.value.trim();
    chatroom.addChat(message)
        .then(() => newChatForm.reset())
        .catch(err => console.log(err));

});

// update username
newNameForm.addEventListener("submit", e =>{
    e.preventDefault();
    const newName = newNameForm.name.value.trim();
    chatroom.updateName(newName);
    newNameForm.reset();

    // show & hide update message
    updateMssg.innerText = `Your name was updated to ${newName}`;
    setTimeout(() => updateMssg.innerText = '', 3000);

    currName.innerHTML = `Chatting as : <span> ${newName} </span>`;

});

// update the char room
rooms.addEventListener("click", e=> {
    if(e.target.tagName === 'BUTTON'){
        chatUI.clear();
        // console.log(e.target.textContent);
        const room = e.target.getAttribute('id')
        chatroom.updateRoom(room);
        currRoom.textContent = `#${room}`;
        chatroom.getChats(chat => chatUI.render(chat));
    }
});


// check local storage for a stored name
const username = localStorage.username ? localStorage.username : 'anonymous user';

//class instances
const chatUI = new ChatUI(chatList);
const chatroom = new Chatroom("general", username);

//get chats and render
chatroom.getChats(data => chatUI.render(data));
// chatroom.getChats(data => console.log(data));