

// adding new chat documents
class Chatroom{

    constructor(room, username){
        this.room = room;
        this.username = username;
        this.chats = db.collection('chats');
    }

    // adding new chat documents
    async addChat(message){
        // format a chat object
        const now = new Date();
        const chat = {
            message,
            username : this.username,
            room : this.room,
            created_at: firebase.firestore.Timestamp.fromDate(now)
        };
        const response = await this.chats.add(chat);
        return response;
    }

    //real-time listener
    getChats(callback){
        this.unub = this.chats
            .where('room', '==', this.room)
            .orderBy('created_at')
            .onSnapshot(snapshot =>{
                snapshot.docChanges().forEach(change => {
                    if(change.type === 'added'){
                        //update ui
                        callback(change.doc.data());
                    }
                });
            });
    }

    updateName(username){
        this.username = username;
        // store current username in local storage
        localStorage.setItem('username', username);
    }
    
    updateRoom(room){
        this.room = room;
        console.log(`room updated to ${room}`);
        if(this.unsub){
            this.unsub();
        }
    }
    

}

// const chatroom = new Chatroom('gaming', 'mario');

// // chatroom.addChat('play time')
// //     .then(()=> console.log('chat added'))
// //     .catch(err => console.log(err));

// chatroom.getChats(data => {
//     console.log(data);
// });

// setTimeout(() => {
//     chatroom.updateRoom('general');
//     chatroom.updateName("sandee");
//     chatroom.getChats(data => {
//         console.log(data);
//     });
//     chatroom.addChat("yellow !");
// }, 3000);