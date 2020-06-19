import {styleBody, addTitle, contact} from './dom.js';
import users, {getPremUsers} from './data.js';

const premUsers = getPremUsers(users);
console.log(users, premUsers);

console.log("test ");
