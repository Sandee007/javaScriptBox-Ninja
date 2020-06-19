
class ChatUI{
    constructor(list){
        this.list = list;
    }

    //render chat templates to the DOM
    render(data){
        // const when = dateFns.distanceInWordsToNow(
        //     data.created_at.toDate(),
        //     {addSuffix: true}
        // );
        const html = `
            <li class="list-group-item">
            <span class="username"> ${data.username} </span>
            <span class="message"> ${data.message} </span>
            <div class="time"> ${data.created_at.toDate()} </div>
            </li>
        `;

        this.list.innerHTML += html;
    }

    clear(){
        this.list.innerHTML = '';
    }
}
