const users = [
    {name:'mario' , premium:true},
    {name:'luigi' , premium:true},
    {name:'ryu' , premium:false},
];

const getPremUsers = users => {
    return users.filter(user => user.premium);
};

export {getPremUsers, users as default}